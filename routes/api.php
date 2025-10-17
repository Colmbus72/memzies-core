<?php

use App\Http\Controllers\Api\InviteController;
use Illuminate\Support\Facades\Route;

Route::prefix('invites')->group(function (): void {
    Route::post('/', [InviteController::class, 'store']);
    Route::get('{token}', [InviteController::class, 'show']);
    Route::post('{token}/accept', [InviteController::class, 'accept']);
});
