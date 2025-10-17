<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invites', function (Blueprint $table): void {
            $table->id();
            $table->string('token')->unique();
            $table->string('journal_name')->nullable();
            $table->string('recipient_name')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('status')->default('pending');
            $table->json('metadata')->nullable();
            $table->timestamp('accepted_at')->nullable();
            $table->string('accepted_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invites');
    }
};
