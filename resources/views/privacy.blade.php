@extends('layouts.app')

@section('title', 'Privacy Policy - Memzies')
@section('meta_description', 'Memzies is privacy-first. All your data lives in your iCloud - we never collect or access your family memories.')

@section('body')
    <div class="relative min-h-screen overflow-hidden">
        <div aria-hidden="true" class="pointer-events-none absolute -top-32 right-[-8rem] h-[28rem] w-[28rem] rounded-full bg-gradient-to-br from-[#de7df5]/70 via-[#75a8fc]/50 to-[#5fd9c7]/40 blur-3xl md:h-[32rem] md:w-[32rem]"></div>
        <div aria-hidden="true" class="pointer-events-none absolute -bottom-40 left-[-12rem] h-[26rem] w-[26rem] rounded-full bg-gradient-to-tr from-[#ffa772]/60 via-[#f86b84]/40 to-[#fcde5c]/30 blur-3xl md:h-[30rem] md:w-[30rem]"></div>

        <div class="relative mx-auto max-w-4xl px-6 py-16 lg:px-10">
            <div class="rounded-[32px] border border-white/10 bg-slate-900/60 p-8 shadow-[0_40px_100px_rgba(5,8,20,0.55)] backdrop-blur md:p-12">
                <h1 class="mb-8 text-4xl font-semibold text-white">Privacy Policy</h1>

                <div class="prose prose-invert max-w-none">
                    <p class="text-slate-200/90">Memzies ("we", "our", or "us") is built with privacy as our core principle. This Privacy Policy explains what we DON'T collect, how your data stays private in your iCloud, and the minimal processing we do for invitation links.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">What We DON'T Collect</h2>

                    <p class="text-slate-200/90">Unlike most apps, Memzies does NOT collect, store, or have access to:</p>

                    <ul class="space-y-2 text-slate-200/90">
                        <li><strong class="text-white">Your Journal Content:</strong> Photos, videos, quotes, notes, and other memories you create</li>
                        <li><strong class="text-white">People Profiles:</strong> Names, details, or information about people in your journals</li>
                        <li><strong class="text-white">Account Information:</strong> No email addresses, passwords, or authentication details stored on our servers</li>
                        <li><strong class="text-white">Usage Data:</strong> No analytics, tracking, or monitoring of how you use the app</li>
                        <li><strong class="text-white">Device Information:</strong> No device types, operating systems, or identifiers</li>
                        <li><strong class="text-white">Location Data:</strong> We never access or store your location</li>
                    </ul>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Your Data Lives in Your iCloud</h2>

                    <p class="text-slate-200/90">All of your journal content is stored exclusively in your personal iCloud account. This means:</p>

                    <ul class="space-y-2 text-slate-200/90">
                        <li><strong class="text-white">Complete Privacy:</strong> Memzies servers never see your photos, videos, or journal entries</li>
                        <li><strong class="text-white">Apple's Protection:</strong> Your data benefits from Apple's industry-leading encryption and security</li>
                        <li><strong class="text-white">You're in Control:</strong> You own your data completely - it's in your iCloud, not ours</li>
                        <li><strong class="text-white">End-to-End Encryption:</strong> iCloud encrypts your data in transit and at rest</li>
                        <li><strong class="text-white">No Vendor Lock-In:</strong> Your memories are in your iCloud, accessible to you always</li>
                    </ul>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Invitation System: The Only Server Contact</h2>

                    <p class="text-slate-200/90">The ONLY time Memzies communicates with our servers is when generating and validating journal invitation links. This minimal processing includes:</p>

                    <ul class="space-y-2 text-slate-200/90">
                        <li><strong class="text-white">Invite Token:</strong> A random string to identify the invitation</li>
                        <li><strong class="text-white">Display Names:</strong> Optional sender and recipient names (only for displaying who invited whom)</li>
                        <li><strong class="text-white">Journal Name:</strong> Optional journal name for display purposes</li>
                        <li><strong class="text-white">iCloud ID Check:</strong> A hashed identifier to prevent duplicate journal joins (no personal info)</li>
                        <li><strong class="text-white">Status Tracking:</strong> Whether the invite is pending, accepted, or expired</li>
                    </ul>

                    <p class="text-slate-200/90 mt-4"><strong class="text-white">Important:</strong> No journal content, photos, videos, or personal memories ever touch our servers during the invitation process. The invite system only handles the invitation metadata.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Data Retention</h2>

                    <p class="text-slate-200/90">Since we don't store your journal content, there's nothing to retain. For invitation links:</p>

                    <ul class="space-y-2 text-slate-200/90">
                        <li>Invitation data is temporary and minimal</li>
                        <li>Expired invitations are automatically cleaned up</li>
                        <li>After an invitation is accepted, we only retain the acceptance status to prevent duplicate joins</li>
                        <li>No personal journal content is ever retained on our servers</li>
                    </ul>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Third-Party Services</h2>

                    <p class="text-slate-200/90">We use Apple's iCloud infrastructure for data storage and synchronization. iCloud has its own privacy policies and data handling practices. We encourage you to review Apple's privacy policy.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Privacy by Default</h2>

                    <p class="text-slate-200/90">Memzies is designed to be private by default. Your journals are only shared with people you explicitly invite. There are no social algorithms, public feeds, or data mining. You control who has access to your family's memories.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Children's Privacy</h2>

                    <p class="text-slate-200/90">While our app is designed for families to document memories including children, we do not knowingly collect personal information directly from children under 13. All accounts and journals should be created and managed by parents or legal guardians.</p>

                    <h2 class="mt-8 text-2xl font-semibold text-white">Your Rights & Control</h2>

                    <p class="text-slate-200/90">Because your data lives in your iCloud, you have complete control:</p>

                    <ul class="space-y-2 text-slate-200/90">
                        <li><strong class="text-white">Complete Ownership:</strong> All your journal data is in your iCloud - you own it, not us</li>
                        <li><strong class="text-white">Access Anytime:</strong> Your content is always accessible through your iCloud account</li>
                        <li><strong class="text-white">Edit Freely:</strong> Modify, correct, or update any content directly in the app</li>
                        <li><strong class="text-white">Delete Without Asking:</strong> Remove any content instantly - no "requests" needed since it's your iCloud</li>
                        <li><strong class="text-white">Export Your Media:</strong> Download photos and videos from your iCloud at any time</li>
                        <li><strong class="text-white">Revoke Sharing:</strong> Remove journal access from invited members anytime through the app</li>
                        <li><strong class="text-white">Stop Using Anytime:</strong> Simply delete the app - your memories remain safely in your iCloud</li>
                    </ul>

                    <p class="text-slate-200/90 mt-4">You don't need to contact us to exercise these rights - you already have full control through your iCloud account and the app itself.</p>

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
