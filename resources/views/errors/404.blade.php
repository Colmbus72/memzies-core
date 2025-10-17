@extends('layouts.app')

@section('title', 'Page not found')

@section('body')
    <div class="relative flex min-h-screen items-center justify-center overflow-hidden bg-slate-950 px-6 py-16 text-slate-100">
        <div aria-hidden="true" class="pointer-events-none absolute -top-40 left-[-10rem] h-[24rem] w-[24rem] rounded-full bg-gradient-to-br from-[#de7df5]/50 via-[#75a8fc]/40 to-[#5fd9c7]/30 blur-3xl sm:h-[28rem] sm:w-[28rem]"></div>
        <div aria-hidden="true" class="pointer-events-none absolute bottom-[-12rem] right-[-8rem] h-[20rem] w-[20rem] rounded-full bg-gradient-to-tr from-[#ffa772]/50 via-[#f86b84]/40 to-[#fcde5c]/30 blur-3xl sm:h-[24rem] sm:w-[24rem]"></div>

        <div class="relative z-10 w-full max-w-xl space-y-6 rounded-[32px] border border-white/10 bg-slate-900/60 p-10 text-center shadow-[0_38px_90px_rgba(5,10,26,0.55)] backdrop-blur">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-[#75a8fc]/15 text-[#a5c9ff]">
                <span class="text-2xl font-semibold">404</span>
            </div>
            <div class="space-y-3">
                <h1 class="text-3xl font-semibold text-white">We couldn’t find that page</h1>
                <p class="text-sm text-slate-200/80">The link may be out of date or the page was removed. Head back home to keep exploring Memzies.</p>
            </div>
            <a href="{{ route('landing') }}" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-[#de7df5] via-[#75a8fc] to-[#5fd9c7] px-6 py-3 text-sm font-semibold text-slate-950 shadow-[0_20px_46px_rgba(117,168,252,0.35)] transition hover:-translate-y-0.5">Return home</a>
        </div>
    </div>
@endsection
