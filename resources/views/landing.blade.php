@extends('layouts.app')

@section('title', 'Memzies — Shared memories, beautifully kept')
@section('og_title', 'Memzies — Shared memories, beautifully kept')
@section('meta_description', 'Memzies keeps your family memories alive with collaborative journals, rich media, and a gentle invitation flow.')
@section('og_description', 'Memzies keeps your family memories alive with collaborative journals, rich media, and a gentle invitation flow.')

@section('body')
    <div class="relative min-h-screen overflow-hidden">
        <div aria-hidden="true" class="pointer-events-none absolute -top-32 right-[-8rem] h-[28rem] w-[28rem] rounded-full bg-gradient-to-br from-[#de7df5]/70 via-[#75a8fc]/50 to-[#5fd9c7]/40 blur-3xl md:h-[32rem] md:w-[32rem]"></div>
        <div aria-hidden="true" class="pointer-events-none absolute -bottom-40 left-[-12rem] h-[26rem] w-[26rem] rounded-full bg-gradient-to-tr from-[#ffa772]/60 via-[#f86b84]/40 to-[#fcde5c]/30 blur-3xl md:h-[30rem] md:w-[30rem]"></div>

        <header class="relative">
            <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 pt-10 lg:px-10">
                <div class="flex items-center gap-3 text-sm font-semibold uppercase tracking-[0.22em] text-slate-200/80">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-gradient-to-br from-[#de7df5] via-[#75a8fc] to-[#5fd9c7] shadow-[0_0_20px_rgba(117,168,252,0.45)]"></span>
                    <span class="text-slate-100">Memzies</span>
                </div>
                <a href="#invite" class="inline-flex items-center gap-2 rounded-full border border-slate-500/40 bg-slate-900/40 px-4 py-2 text-sm font-medium text-slate-100 transition hover:-translate-y-0.5 hover:border-[#de7df5]/60 hover:text-white">
                    Request invite
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 12h16m0 0-6-6m6 6-6 6" />
                    </svg>
                </a>
            </nav>

            <div class="relative mx-auto grid max-w-6xl grid-cols-1 gap-12 px-6 pb-20 pt-14 lg:grid-cols-[1.05fr_0.95fr] lg:px-10">
                <div class="flex flex-col space-y-6">
                    <p class="inline-flex max-w-max items-center rounded-full border border-slate-500/30 bg-white/5 px-3 py-1 text-[0.75rem] font-semibold uppercase tracking-[0.2em] text-slate-200/80 backdrop-blur">
                        Shared family journal
                    </p>
                    <h1 class="text-4xl font-semibold leading-tight text-white sm:text-5xl">
                        Hold the little moments in living color.
                    </h1>
                    <p class="max-w-xl text-lg text-slate-200/90">
                        Memzies lets your family build a shared timeline of photos, quotes, videos, and everyday notes—wrapped in a calm, tactile experience inspired by physical keepsakes.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <a href="#invite" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-[#de7df5] via-[#75a8fc] to-[#5fd9c7] px-6 py-3 text-sm font-semibold text-slate-950 shadow-[0_24px_48px_rgba(117,168,252,0.35)] transition hover:-translate-y-0.5">
                            Request an invite
                        </a>
                        <a href="#preview" class="inline-flex items-center justify-center rounded-full border border-slate-500/50 bg-slate-900/40 px-6 py-3 text-sm font-semibold text-slate-100 transition hover:-translate-y-0.5 hover:border-[#f86b84]/60">
                            See what makes Memzies different
                        </a>
                    </div>
                    <div class="flex flex-wrap gap-2 text-sm text-slate-300/80">
                        <span class="rounded-full border border-slate-500/40 bg-slate-900/40 px-3 py-1">Pastel heatmaps</span>
                        <span class="rounded-full border border-slate-500/40 bg-slate-900/40 px-3 py-1">Polaroid stories</span>
                        <span class="rounded-full border border-slate-500/40 bg-slate-900/40 px-3 py-1">People-first invites</span>
                    </div>
                </div>

                <div aria-hidden="true" class="flex justify-center lg:justify-end">
                    <div class="w-full max-w-[420px] rounded-[30px] border border-white/10 bg-slate-900/60 p-6 shadow-[0_40px_80px_rgba(5,10,26,0.55)] backdrop-blur">
                        <div class="flex items-center justify-between text-sm text-slate-200/80">
                            <span class="font-semibold text-white">Noah’s Journal</span>
                            <span class="inline-flex items-center gap-2 rounded-full border border-[#5fd9c7]/40 bg-[#5fd9c7]/10 px-3 py-1 text-xs font-medium text-[#aff3e8]">
                                <span class="h-2 w-2 rounded-full bg-[#5fd9c7] shadow-[0_0_10px_rgba(95,217,199,0.8)]"></span>
                                Live
                            </span>
                        </div>
                        <div class="mt-6 grid grid-cols-4 gap-3">
                            @php
                                $palette = ['from-[#de7df5] to-[#f86b84]', 'from-[#75a8fc] to-[#de7df5]', 'from-[#5fd9c7] to-[#fcde5c]', 'from-[#fcde5c] to-[#ffa772]', 'from-[#ffa772] to-[#f86b84]', 'from-[#f86b84] to-[#de7df5]'];
                            @endphp
                            @foreach(range(1, 12) as $index)
                                @php $colorIndex = ($index - 1) % count($palette); @endphp
                                <span class="aspect-square rounded-2xl border border-white/5 bg-gradient-to-br {{ $palette[$colorIndex] }}"></span>
                            @endforeach
                        </div>
                        <div class="mt-6 space-y-4 rounded-3xl border border-white/10 bg-white/5 p-4 shadow-inner">
                            <div class="flex gap-3">
                                <div class="flex-1 rounded-2xl border border-white/10 bg-gradient-to-br from-[#75a8fc]/70 to-[#de7df5]/70 p-3 text-xs text-slate-900">
                                    Swimming at Nana’s
                                </div>
                                <div class="flex-1 rounded-2xl border border-white/10 bg-gradient-to-br from-[#de7df5]/70 to-[#f86b84]/70 p-3 text-xs text-slate-900">
                                    Bedtime giggles
                                </div>
                            </div>
                            <p class="text-sm italic text-slate-200/90">“Noah asked for pancakes shaped like rockets today. We made liftoff noises.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="relative mx-auto max-w-6xl px-6 pb-20 lg:px-10">
            <section class="grid gap-6 rounded-[28px] border border-white/10 bg-white/5 p-6 shadow-[0_30px_80px_rgba(6,10,24,0.45)] backdrop-blur md:grid-cols-3" id="preview">
                <article class="space-y-3">
                    <h2 class="text-xl font-semibold text-white">Designed for warmth</h2>
                    <p class="text-sm text-slate-200/90">Memzies borrows from scrapbooks and Polaroids—soft gradients, rounded edges, and breathing space that stays calm even when the day is full.</p>
                </article>
                <article class="space-y-3">
                    <h2 class="text-xl font-semibold text-white">Stories, not feeds</h2>
                    <p class="text-sm text-slate-200/90">Drop in a photo, scribble a quote, or upload a video. Everything keeps its original quality, grouped by the day it happened.</p>
                </article>
                <article class="space-y-3">
                    <h2 class="text-xl font-semibold text-white">Private by default</h2>
                    <p class="text-sm text-slate-200/90">Memzies is built on iCloud with zero social algorithms. You choose who joins, and invites travel through a secure token you control.</p>
                </article>
            </section>

            <section class="mt-14 rounded-[32px] border border-white/10 bg-slate-900/60 p-8 shadow-[0_40px_100px_rgba(5,8,20,0.55)] backdrop-blur" id="invite">
                <h2 class="text-3xl font-semibold text-white md:text-[2.3rem]">Inviting someone is easy</h2>
                <p class="mt-4 max-w-2xl text-base text-slate-200/90">Send them a secure link from the app. They open it, Memzies guides them into the right journal, and you both keep adding memories.</p>
                <ol class="mt-8 space-y-6">
                    <li class="flex gap-4">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-[#ffa772] to-[#f86b84] text-base font-semibold text-slate-950 shadow-[0_14px_28px_rgba(248,107,132,0.4)]">1</span>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Create a person in your journal</h3>
                            <p class="text-sm text-slate-200/80">Name them, pick an emoji avatar, and Memzies prepares the invite.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-[#de7df5] to-[#75a8fc] text-base font-semibold text-slate-950 shadow-[0_14px_28px_rgba(117,168,252,0.4)]">2</span>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Share the invite link</h3>
                            <p class="text-sm text-slate-200/80">A unique <code class="rounded bg-slate-900/70 px-2 py-0.5 text-xs text-slate-200">memzies.app/invite/&lt;token&gt;</code> link keeps the details secure.</p>
                        </div>
                    </li>
                    <li class="flex gap-4">
                        <span class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-[#5fd9c7] to-[#fcde5c] text-base font-semibold text-slate-950 shadow-[0_14px_28px_rgba(95,217,199,0.4)]">3</span>
                        <div>
                            <h3 class="text-lg font-semibold text-white">They accept inside the app</h3>
                            <p class="text-sm text-slate-200/80">The link opens Memzies, verifies the invite, and brings them straight into your shared space.</p>
                        </div>
                    </li>
                </ol>
                <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <a href="mailto:hello@memzies.app" class="inline-flex w-full items-center justify-center rounded-full bg-gradient-to-r from-[#de7df5] via-[#75a8fc] to-[#5fd9c7] px-6 py-3 text-sm font-semibold text-slate-950 shadow-[0_20px_46px_rgba(117,168,252,0.4)] transition hover:-translate-y-0.5 sm:w-auto">
                        Ask for early access
                    </a>
                    <span class="text-sm text-slate-300/80">Already have the app? Share invites from Journal Settings.</span>
                </div>
            </section>
        </main>

        <footer class="relative mx-auto max-w-6xl px-6 pb-16 pt-12 text-sm text-slate-400/80 lg:px-10">
            <p>&copy; {{ date('Y') }} Memzies.</p>
        </footer>
    </div>
@endsection
