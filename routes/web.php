<?php

use App\Http\Controllers\InvitePageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('landing');

Route::get('/invite/{token}', InvitePageController::class)->name('invite.show');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
