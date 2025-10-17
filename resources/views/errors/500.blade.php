@extends('layouts.app')

@section('title', 'Something went wrong')

@section('body')
    <div class="relative flex min-h-screen items-center justify-center overflow-hidden bg-slate-950 px-6 py-16 text-slate-100">
        <div aria-hidden="true" class="pointer-events-none absolute -top-36 right-[-10rem] h-[26rem] w-[26rem] rounded-full bg-gradient-to-br from-[#f86b84]/45 via-[#de7df5]/35 to-[#75a8fc]/30 blur-3xl sm:h-[30rem] sm:w-[30rem]"></div>
        <div aria-hidden="true" class="pointer-events-none absolute bottom-[-12rem] left-[-8rem] h-[22rem] w-[22rem] rounded-full bg-gradient-to-tr from-[#5fd9c7]/45 via-[#fcde5c]/35 to-[#ffa772]/25 blur-3xl sm:h-[26rem] sm:w-[26rem]"></div>

        <div class="relative z-10 w-full max-w-xl space-y-6 rounded-[32px] border border-white/10 bg-slate-900/60 p-10 text-center shadow-[0_38px_90px_rgba(5,10,26,0.55)] backdrop-blur">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-[#de7df5]/20 text-[#f5b5ff]">
                <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01m9.24-4a9.24 9.24 0 1 1-18.48 0 9.24 9.24 0 0 1 18.48 0Z" />
                </svg>
            </div>
            <div class="space-y-3">
                <h1 class="text-3xl font-semibold text-white">We hit a snag</h1>
                <p class="text-sm text-slate-200/80">Something unexpected happened while loading this page. Try again in a moment, or let us know so we can help.</p>
            </div>
            <div class="space-y-3 text-sm text-slate-200/80">
                <a href="mailto:hello@memzies.app" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/10 px-6 py-3 font-semibold text-white transition hover:-translate-y-0.5 hover:border-[#75a8fc]/60 hover:text-[#75a8fc]">Contact support</a>
                <p>Return to <a href="{{ route('landing') }}" class="text-[#75a8fc] underline decoration-[#75a8fc]/40 underline-offset-4 transition hover:text-[#de7df5]">memzies.app</a>.</p>
            </div>
        </div>
    </div>
@endsection
