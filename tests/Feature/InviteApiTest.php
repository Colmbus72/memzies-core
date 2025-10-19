<?php

use App\Models\Invite;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(RefreshDatabase::class);

it('creates an invite via the API', function () {
    $response = postJson('/api/invites', [
        'journal_name' => 'Noah\'s Journal',
        'recipient_name' => 'Noah',
        'sender_name' => 'Cam',
        'metadata' => [
            'journal_id' => 'journal-123',
            'person_id' => 'person-456',
        ],
    ]);

    $response
        ->assertCreated()
        ->assertJsonPath('data.status', Invite::STATUS_PENDING)
        ->assertJsonPath('data.journal_name', "Noah's Journal")
        ->assertJsonPath('data.recipient_name', 'Noah')
        ->assertJsonPath('data.metadata.journal_id', 'journal-123')
        ->assertJsonStructure(['data' => ['token', 'invite_url']]);
});

it('shows an invite', function () {
    $invite = Invite::create([
        'token' => 'sample-token',
        'journal_name' => 'Family Moments',
        'recipient_name' => 'Noah',
    ]);

    getJson("/api/invites/{$invite->token}")
        ->assertOk()
        ->assertJsonPath('data.token', 'sample-token')
        ->assertJsonPath('data.status', Invite::STATUS_PENDING);
});

it('marks an invite as accepted', function () {
    $invite = Invite::create([
        'token' => 'ready-to-accept',
    ]);

    postJson("/api/invites/{$invite->token}/accept", [
        'accepted_by' => 'icloud-user-123',
    ])->assertOk();

    expect($invite->fresh()->status)->toBe(Invite::STATUS_ACCEPTED);
});

it('returns 404 for missing invites', function () {
    getJson('/api/invites/not-real')->assertNotFound();
    postJson('/api/invites/not-real/accept')->assertNotFound();
});

it('blocks acceptance when the recipient is already a member', function () {
    $invite = Invite::create([
        'token' => 'no-double-join',
        'metadata' => [
            'disallowed_icloud_ids' => ['existing-member-1', 'existing-member-2'],
        ],
    ]);

    postJson("/api/invites/{$invite->token}/accept", [
        'accepted_by' => 'existing-member-1',
    ])
        ->assertStatus(409)
        ->assertJsonPath('error.code', 'already_member');

    expect($invite->fresh()->status)->toBe(Invite::STATUS_PENDING);
});
