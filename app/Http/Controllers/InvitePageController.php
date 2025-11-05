<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use Illuminate\Http\Request;

class InvitePageController extends Controller
{
    public function __invoke(Request $request, string $token)
    {
        $invite = Invite::where('token', $token)->first();

        if ($invite === null) {
            return response()
                ->view('invites.expired', ['token' => $token], 404);
        }

        return view('invites.show', [
            'invite' => $invite,
            'deepLink' => $this->buildDeepLink($token, $request->query('journal')),
        ]);
    }

    private function buildDeepLink(string $token, ?string $journalId = null): string
    {
        // Use Universal Links instead of custom URL scheme
        $base = url("/invite/{$token}");

        if ($journalId !== null) {
            $base .= '?journal=' . urlencode($journalId);
        }

        return $base;
    }
}
