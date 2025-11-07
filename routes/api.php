<?php

use App\Http\Controllers\Api\InviteController;
use Illuminate\Support\Facades\Route;

Route::prefix('invites')->group(function (): void {
    Route::post('/', [InviteController::class, 'store']);
    Route::get('/', [InviteController::class, 'indexForUser']); // Query param: icloud_id
    Route::get('{token}', [InviteController::class, 'show']);
    Route::post('{token}/accept', [InviteController::class, 'accept']);
});
