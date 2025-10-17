@extends('layouts.app')

@section('title', 'Open your Memzies invite')
@section('meta_description', 'Join your family on Memzies with a secure invite link.')

@section('body')
    @php
        $journalName = $invite->journal_name ?: 'a shared journal';
        $recipientName = $invite->recipient_name ?: 'You';
        $senderName = $invite->sender_name ?: 'Someone you care about';
    @endphp

    <div class="relative flex min-h-screen items-center justify-center overflow-hidden bg-slate-950 px-6 py-16 text-slate-100">
        <div aria-hidden="true" class="pointer-events-none absolute -top-40 left-1/2 h-[26rem] w-[26rem] -translate-x-1/2 rounded-full bg-gradient-to-br from-[#de7df5]/60 via-[#75a8fc]/50 to-[#5fd9c7]/40 blur-3xl sm:h-[30rem] sm:w-[30rem]"></div>
        <div aria-hidden="true" class="pointer-events-none absolute bottom-[-12rem] right-[-8rem] h-[24rem] w-[24rem] rounded-full bg-gradient-to-tr from-[#ffa772]/50 via-[#f86b84]/40 to-[#fcde5c]/30 blur-3xl sm:h-[28rem] sm:w-[28rem]"></div>

        <div class="relative z-10 w-full max-w-2xl space-y-8 rounded-[32px] border border-white/10 bg-slate-900/60 p-8 shadow-[0_40px_100px_rgba(5,10,26,0.55)] backdrop-blur">
            <header class="space-y-4">
                <div class="inline-flex items-center rounded-full border border-slate-500/30 bg-white/5 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-slate-200/80">
                    Memzies invite
                </div>
                <h1 class="text-3xl font-semibold text-white sm:text-[2.5rem]">
                    {{ $senderName }} wants you to join {{ $journalName }}.
                </h1>
                <p class="text-base text-slate-200/90">
                    Open the link below on your iPhone or iPad with the Memzies app installed to accept the invite and start sharing memories together.
                </p>
            </header>

            <div class="space-y-4 rounded-[28px] border border-white/10 bg-white/5 p-6 shadow-inner">
                <div class="flex items-center justify-between text-sm text-slate-200/80">
                    <span class="font-medium text-white">{{ $recipientName }}</span>
                    <span class="rounded-full border border-[#5fd9c7]/40 bg-[#5fd9c7]/10 px-3 py-1 text-xs font-semibold text-[#aff3e8]">Invite ready</span>
                </div>
                <div class="space-y-2 text-sm text-slate-200/80">
                    @if($invite->journal_name)
                        <p><span class="text-slate-200/60">Journal:</span> {{ $invite->journal_name }}</p>
                    @endif
                    @if($invite->sender_name)
                        <p><span class="text-slate-200/60">From:</span> {{ $invite->sender_name }}</p>
                    @endif
                    <p><span class="text-slate-200/60">Invite code:</span> <code class="rounded bg-slate-900/70 px-2 py-0.5 text-xs text-slate-200">{{ $invite->token }}</code></p>
                </div>
            </div>

            <div class="space-y-4">
                <a href="{{ $deepLink }}" class="flex items-center justify-center rounded-full bg-gradient-to-r from-[#de7df5] via-[#75a8fc] to-[#5fd9c7] px-6 py-3 text-sm font-semibold text-slate-950 shadow-[0_24px_48px_rgba(117,168,252,0.35)] transition hover:-translate-y-0.5">
                    Open in Memzies
                </a>
                <p class="text-xs text-slate-300/80">
                    Tip: On iOS, the link should open automatically in the Memzies app. If it doesn’t, copy the invite code above and paste it inside the app under “Journal Settings → Invitations”.
                </p>
            </div>

            <div class="rounded-[24px] border border-white/10 bg-slate-900/70 p-6">
                <h2 class="text-lg font-semibold text-white">Need the app?</h2>
                <p class="mt-2 text-sm text-slate-200/80">Memzies is currently in limited release. If you need access, reach out at <a class="text-[#75a8fc] underline decoration-[#75a8fc]/40 underline-offset-4 transition hover:text-[#de7df5]" href="mailto:hello@memzies.app">hello@memzies.app</a>.</p>
            </div>
        </div>
    </div>
@endsection
