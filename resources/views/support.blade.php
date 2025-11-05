@extends('layouts.app')

@section('title', 'Support - Memzies')
@section('meta_description', 'Get help with Memzies - our support team is here to assist you.')

@section('body')
    <div class="relative min-h-screen overflow-hidden">
        <div aria-hidden="true" class="pointer-events-none absolute -top-32 right-[-8rem] h-[28rem] w-[28rem] rounded-full bg-gradient-to-br from-[#de7df5]/70 via-[#75a8fc]/50 to-[#5fd9c7]/40 blur-3xl md:h-[32rem] md:w-[32rem]"></div>
        <div aria-hidden="true" class="pointer-events-none absolute -bottom-40 left-[-12rem] h-[26rem] w-[26rem] rounded-full bg-gradient-to-tr from-[#ffa772]/60 via-[#f86b84]/40 to-[#fcde5c]/30 blur-3xl md:h-[30rem] md:w-[30rem]"></div>

        <div class="relative mx-auto max-w-4xl px-6 py-16 lg:px-10">
            <div class="rounded-[32px] border border-white/10 bg-slate-900/60 p-8 shadow-[0_40px_100px_rgba(5,8,20,0.55)] backdrop-blur md:p-12">
                <h1 class="mb-6 text-4xl font-semibold text-white">How Can We Help?</h1>

                <p class="mb-12 text-lg text-slate-200/90">
                    We're here to help make your experience with Memzies smooth and enjoyable. Have a question or running into an issue? Our support team is ready to assist you.
                </p>

                <!-- Email Support -->
                <div class="rounded-[28px] border border-white/10 bg-white/5 p-8 shadow-inner">
                    <h2 class="mb-4 text-2xl font-semibold text-white">Contact Support</h2>
                    <p class="mb-6 text-slate-200/90">
                        Send us an email and we'll get back to you within 24 hours. Whether you're having trouble with invitations, syncing, or have questions about your family journals, we're here to help.
                    </p>
                    <a href="mailto:hello@memzies.app" class="inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-[#de7df5] via-[#75a8fc] to-[#5fd9c7] px-6 py-3 text-sm font-semibold text-slate-950 shadow-[0_20px_46px_rgba(117,168,252,0.4)] transition hover:-translate-y-0.5">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Email Support
                    </a>
                </div>

                <!-- Common Topics -->
                <div class="mt-8 space-y-4">
                    <h3 class="text-xl font-semibold text-white">Common Topics</h3>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <h4 class="font-semibold text-white">Invitations</h4>
                            <p class="mt-1 text-sm text-slate-200/80">Creating and managing journal invites for family members</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <h4 class="font-semibold text-white">Syncing</h4>
                            <p class="mt-1 text-sm text-slate-200/80">iCloud sync issues and cross-device access</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <h4 class="font-semibold text-white">Media Upload</h4>
                            <p class="mt-1 text-sm text-slate-200/80">Photos, videos, and maintaining quality</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                            <h4 class="font-semibold text-white">Account & Privacy</h4>
                            <p class="mt-1 text-sm text-slate-200/80">Account settings, privacy, and data management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
