@extends('layouts.app')

@section('title', 'Privacy Policy - Memzies')
@section('meta_description', 'Learn how Memzies collects, uses, and protects your information.')

@section('body')
    <div class="relative min-h-screen overflow-hidden">
        <div aria-hidden="true" class="pointer-events-none absolute -top-32 right-[-8rem] h-[28rem] w-[28rem] rounded-full bg-gradient-to-br from-[#de7df5]/70 via-[#75a8fc]/50 to-[#5fd9c7]/40 blur-3xl md:h-[32rem] md:w-[32rem]"></div>
        <div aria-hidden="true" class="pointer-events-none absolute -bottom-40 left-[-12rem] h-[26rem] w-[26rem] rounded-full bg-gradient-to-tr from-[#ffa772]/60 via-[#f86b84]/40 to-[#fcde5c]/30 blur-3xl md:h-[30rem] md:w-[30rem]"></div>

        <div class="relative mx-auto max-w-4xl px-6 py-16 lg:px-10">
            <div class="rounded-[32px] border border-white/10 bg-slate-900/60 p-8 shadow-[0_40px_100px_rgba(5,8,20,0.55)] backdrop-blur md:p-12">
                <h1 class="mb-8 text-4xl font-semibold text-white">Privacy Policy</h1>

                <div class="prose prose-invert max-w-none">
                    <p class="text-slate-200/90">This Privacy Policy describes how Memzies ("we", "our", or "us") collects, uses, and protects your information when you use our mobile application ("the App").</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Information We Collect</h2>

                    <p class="text-slate-200/90">We collect the following types of information:</p>

                    <ul class="space-y-2 text-slate-200/90">
                        <li><strong class="text-white">Account Information:</strong> Email address and authentication details when you create an account</li>
                        <li><strong class="text-white">Journal Content:</strong> Photos, videos, quotes, notes, and other content you add to your shared journals</li>
                        <li><strong class="text-white">People Profiles:</strong> Names and details of people you add to your journals</li>
                        <li><strong class="text-white">Usage Data:</strong> Journal activity, entries created, and app interactions</li>
                        <li><strong class="text-white">Device Information:</strong> Device type, operating system version, and app version</li>
                    </ul>

                    <h2 class="mt-8 text-2xl font-semibold text-white">How We Use Your Information</h2>

                    <p class="text-slate-200/90">We use the collected information to:</p>

                    <ul class="space-y-2 text-slate-200/90">
                        <li>Create and manage your account</li>
                        <li>Store and sync your journal content across devices</li>
                        <li>Enable collaboration with invited family members</li>
                        <li>Process and deliver secure invitation links</li>
                        <li>Maintain media quality and storage</li>
                        <li>Improve our services and user experience</li>
                        <li>Send important updates about the App</li>
                    </ul>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Data Storage & Security</h2>

                    <p class="text-slate-200/90">Memzies is built on iCloud to provide secure, private storage for your family memories. We implement appropriate security measures to protect your information from unauthorized access, alteration, disclosure, or destruction. Your data is encrypted in transit and at rest.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Third-Party Services</h2>

                    <p class="text-slate-200/90">We use Apple's iCloud infrastructure for data storage and synchronization. iCloud has its own privacy policies and data handling practices. We encourage you to review Apple's privacy policy.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Privacy by Default</h2>

                    <p class="text-slate-200/90">Memzies is designed to be private by default. Your journals are only shared with people you explicitly invite. There are no social algorithms, public feeds, or data mining. You control who has access to your family's memories.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Children's Privacy</h2>

                    <p class="text-slate-200/90">While our app is designed for families to document memories including children, we do not knowingly collect personal information directly from children under 13. All accounts and journals should be created and managed by parents or legal guardians.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Your Rights</h2>

                    <p class="text-slate-200/90">You have the right to:</p>

                    <ul class="space-y-2 text-slate-200/90">
                        <li>Access your personal information</li>
                        <li>Correct inaccurate information</li>
                        <li>Request deletion of your information</li>
                        <li>Export your data and media</li>
                        <li>Revoke journal invitations at any time</li>
                        <li>Delete your account and all associated data</li>
                    </ul>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Data Retention</h2>

                    <p class="text-slate-200/90">We retain your information for as long as your account is active or as needed to provide services. You can request deletion of your account and associated data at any time through the app settings.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Changes to This Policy</h2>

                    <p class="text-slate-200/90">We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Contact Us</h2>

                    <p class="text-slate-200/90">If you have questions about this Privacy Policy or your data, please contact us at:</p>
                    <p class="text-slate-200/90">Email: <a href="mailto:privacy@memzies.app" class="text-[#75a8fc] hover:text-[#de7df5] transition">privacy@memzies.app</a></p>

                    <div class="mt-12 border-t border-white/10 pt-6">
                        <p class="text-sm italic text-slate-400">Last Updated: {{ date('F j, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
