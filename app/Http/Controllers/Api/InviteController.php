<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Invite;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InviteController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'token' => ['nullable', 'string', 'min:6', 'max:120'],
            'journal_name' => ['nullable', 'string', 'max:255'],
            'recipient_name' => ['nullable', 'string', 'max:255'],
            'sender_name' => ['nullable', 'string', 'max:255'],
            'metadata' => ['nullable', 'array'],
        ]);

        $token = $validated['token'] ?? $this->uniqueToken();

        $invite = Invite::create([
            'token' => $token,
            'journal_name' => $validated['journal_name'] ?? null,
            'recipient_name' => $validated['recipient_name'] ?? null,
            'sender_name' => $validated['sender_name'] ?? null,
            'metadata' => $validated['metadata'] ?? [],
        ]);

        return response()->json([
            'data' => $this->formatInvite($invite),
        ], 201);
    }

    public function show(string $token): JsonResponse
    {
        $invite = Invite::where('token', $token)->first();

        if ($invite === null) {
            return response()->json([
                'error' => [
                    'message' => 'Invite not found.',
                ],
            ], 404);
        }

        return response()->json([
            'data' => $this->formatInvite($invite),
        ]);
    }

    public function indexForUser(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'icloud_id' => ['required', 'string', 'max:255'],
        ]);

        $icloudId = $validated['icloud_id'];

        // Find all pending invites where the invitee_icloud_user_record_name matches
        $invites = Invite::where('status', Invite::STATUS_PENDING)
            ->get()
            ->filter(function ($invite) use ($icloudId) {
                $metadata = $invite->metadata ?? [];
                if (!is_array($metadata)) {
                    return false;
                }

                $inviteeIcloudId = $metadata['invitee_icloud_user_record_name'] ?? null;
                return $inviteeIcloudId === $icloudId;
            })
            ->values();

        return response()->json([
            'data' => $invites->map(fn($invite) => $this->formatInvite($invite)),
        ]);
    }

    public function accept(Request $request, string $token): JsonResponse
    {
        $invite = Invite::where('token', $token)->first();

        if ($invite === null) {
            return response()->json([
                'error' => [
                    'message' => 'Invite not found.',
                ],
            ], 404);
        }

        if ($invite->status === Invite::STATUS_ACCEPTED) {
            return response()->json([
                'data' => $this->formatInvite($invite),
                'meta' => [
                    'message' => 'Invite was already accepted.',
                ],
            ]);
        }

        $validated = $request->validate([
            'accepted_by' => ['nullable', 'string', 'max:255'],
        ]);

        $acceptedBy = $validated['accepted_by'] ?? null;

        if ($this->acceptanceShouldBeBlocked($invite, $acceptedBy)) {
            return response()->json([
                'error' => [
                    'code' => 'already_member',
                    'message' => 'You are already a member of this journal.',
                ],
            ], 409);
        }

        \Log::info('🟢 [ACCEPT DEBUG] Before markAccepted:', [
            'token' => $invite->token,
            'metadata' => $invite->metadata,
            'metadata_type' => gettype($invite->metadata),
        ]);

        $invite->markAccepted($acceptedBy);

        \Log::info('🟢 [ACCEPT DEBUG] After markAccepted:', [
            'token' => $invite->token,
            'metadata' => $invite->metadata,
            'metadata_type' => gettype($invite->metadata),
        ]);

        $formatted = $this->formatInvite($invite);
        \Log::info('🔵 [INVITE ACCEPT DEBUG] Formatted invite response:', [
            'formatted' => $formatted,
            'metadata' => $formatted['metadata'] ?? 'NO METADATA KEY',
            'metadata_type' => gettype($formatted['metadata'] ?? null),
        ]);

        return response()->json([
            'data' => $formatted,
        ]);
    }

    private function formatInvite(Invite $invite): array
    {
        \Log::info('🟡 [FORMAT DEBUG] formatInvite called:', [
            'token' => $invite->token,
            'metadata_raw' => $invite->getAttributes()['metadata'] ?? 'NOT SET',
            'metadata_casted' => $invite->metadata,
            'metadata_type' => gettype($invite->metadata),
            'metadata_is_array' => is_array($invite->metadata),
        ]);

        return [
            'token' => $invite->token,
            'status' => $invite->status,
            'journal_name' => $invite->journal_name,
            'recipient_name' => $invite->recipient_name,
            'sender_name' => $invite->sender_name,
            'metadata' => $invite->metadata,
            'accepted_at' => optional($invite->accepted_at)->toIso8601String(),
            'accepted_by' => $invite->accepted_by,
            'invite_url' => url("/invite/{$invite->token}"),
        ];
    }

    private function uniqueToken(): string
    {
        do {
            $token = Str::lower(Str::random(10));
        } while (Invite::where('token', $token)->exists());

        return $token;
    }

    private function acceptanceShouldBeBlocked(Invite $invite, ?string $acceptedBy): bool
    {
        if ($acceptedBy === null) {
            return false;
        }

        $metadata = $invite->metadata ?? [];

        if (!is_array($metadata)) {
            return false;
        }

        $disallowed = $metadata['disallowed_icloud_ids'] ?? [];

        if (!is_array($disallowed)) {
            return false;
        }

        return in_array($acceptedBy, $disallowed, true);
    }
}
