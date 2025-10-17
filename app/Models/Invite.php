<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Invite extends Model
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_ACCEPTED = 'accepted';
    public const STATUS_EXPIRED = 'expired';

    protected $fillable = [
        'token',
        'journal_name',
        'recipient_name',
        'sender_name',
        'status',
        'metadata',
        'accepted_at',
        'accepted_by',
    ];

    protected $casts = [
        'metadata' => 'array',
        'accepted_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::creating(function (Invite $invite): void {
            if (blank($invite->token)) {
                $invite->token = static::generateToken();
            }

            if (blank($invite->status)) {
                $invite->status = self::STATUS_PENDING;
            }
        });
    }

    public static function generateToken(): string
    {
        return Str::lower(Str::random(10));
    }

    public function markAccepted(?string $acceptedBy = null): void
    {
        $this->forceFill([
            'status' => self::STATUS_ACCEPTED,
            'accepted_at' => now(),
            'accepted_by' => $acceptedBy,
        ])->save();
    }
}
