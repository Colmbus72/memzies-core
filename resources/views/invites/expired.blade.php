@extends('layouts.app')

@section('title', 'Invite not found')
@section('meta_description', 'This Memzies invite is no longer available.')

@section('body')
    <div class="relative flex min-h-screen items-center justify-center overflow-hidden bg-slate-950 px-6 py-16 text-slate-100">
        <div aria-hidden="true" class="pointer-events-none absolute -top-32 right-[-6rem] h-[24rem] w-[24rem] rounded-full bg-gradient-to-br from-[#de7df5]/50 via-[#75a8fc]/40 to-[#5fd9c7]/30 blur-3xl sm:h-[28rem] sm:w-[28rem]"></div>
        <div aria-hidden="true" class="pointer-events-none absolute bottom-[-10rem] left-[-10rem] h-[24rem] w-[24rem] rounded-full bg-gradient-to-tr from-[#ffa772]/45 via-[#f86b84]/35 to-[#fcde5c]/25 blur-3xl sm:h-[28rem] sm:w-[28rem]"></div>

        <div class="relative z-10 w-full max-w-xl space-y-8 rounded-[32px] border border-white/10 bg-slate-900/60 p-10 text-center shadow-[0_40px_100px_rgba(5,10,26,0.55)] backdrop-blur">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-[#f86b84]/20 text-[#fda4af]">
                <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0 3.75h.01M3.25 21h17.5a1.25 1.25 0 0 0 1.1-1.82l-8.75-17.5a1.25 1.25 0 0 0-2.2 0L2.15 19.18A1.25 1.25 0 0 0 3.25 21Z" />
                </svg>
            </div>
            <div class="space-y-3">
                <h1 class="text-3xl font-semibold text-white">This invite is no longer active</h1>
                <p class="text-sm text-slate-200/80">
                    The link you tried (<code class="rounded bg-slate-900/70 px-2 py-0.5 text-xs text-slate-200">{{ $token }}</code>) has already been used or was revoked.
                </p>
                <p class="text-sm text-slate-200/70">Ask the person who invited you to send a fresh link from Memzies.</p>
            </div>
            <div class="rounded-[24px] border border-white/10 bg-white/5 p-6 text-left text-sm text-slate-200/80">
                <p class="font-semibold text-white">Need a hand?</p>
                <p class="mt-2">Reach out at <a class="text-[#75a8fc] underline decoration-[#75a8fc]/40 underline-offset-4 transition hover:text-[#de7df5]" href="mailto:hello@memzies.app">hello@memzies.app</a> and we’ll help you get set up.</p>
            </div>
        </div>
    </div>
@endsection
