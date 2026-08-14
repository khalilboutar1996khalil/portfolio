@extends('welcome')

@section('title', 'Contact')
@section('description', 'Get in touch with Mohamed Khalil Boutar for freelance projects, collaborations, or job opportunities in web development.')

@section('content')
    <section class="py-20 section-tint">
        <div class="container-app">
            <x-section-heading title="Contact" subtitle="Feel free to contact me for any questions or projects." />

            <div class="grid lg:grid-cols-5 gap-12">

                <x-reveal class="lg:col-span-2 space-y-6">
                    <div class="flex gap-4">
                        <i class="bi bi-geo-alt text-xl text-accent-600"></i>
                        <div>
                            <h3 class="font-semibold text-neutral-900 dark:text-white">Address</h3>
                            <p class="text-sm text-neutral-500 dark:text-neutral-400">Ariana, Tunisia</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <i class="bi bi-telephone text-xl text-accent-600"></i>
                        <div>
                            <h3 class="font-semibold text-neutral-900 dark:text-white">Call Us</h3>
                            <p class="text-sm text-neutral-500 dark:text-neutral-400">+216 53117158</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <i class="bi bi-envelope text-xl text-accent-600"></i>
                        <div>
                            <h3 class="font-semibold text-neutral-900 dark:text-white">Email Us</h3>
                            <p class="text-sm text-neutral-500 dark:text-neutral-400">khalilboutar@gmail.com</p>
                        </div>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d10.095!3d36.866!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd336e6d3e7e01%3A0x0!2sAriana%2C%20Tunisia!5e0!3m2!1sen!2s!4v1695972000000!5m2!1sen!2s"
                        class="w-full h-56 rounded-2xl border border-neutral-200 dark:border-surface-700" style="border:0" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </x-reveal>

                <x-reveal :delay="100" class="lg:col-span-3">
                    <div x-data="{
                            sending: false,
                            toast: null,
                            toastType: null,
                            async submit(e) {
                                this.sending = true;
                                try {
                                    const res = await fetch('{{ route('contact.store') }}', {
                                        method: 'POST',
                                        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Accept': 'application/json' },
                                        body: new FormData(e.target),
                                    });
                                    const data = await res.json();
                                    this.toastType = data.success ? 'success' : 'error';
                                    this.toast = data.message ?? 'Please check the form and try again.';
                                    if (data.success) e.target.reset();
                                } catch (err) {
                                    this.toastType = 'error';
                                    this.toast = 'Network error. Please try again.';
                                } finally {
                                    this.sending = false;
                                    setTimeout(() => this.toast = null, 4000);
                                }
                            }
                        }">
                    <form @submit.prevent="submit" class="card space-y-5">
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name-field" class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-1">Name</label>
                                <input type="text" name="name" id="name-field" required
                                    class="w-full rounded-lg border-neutral-300 bg-white text-neutral-900 focus:border-accent-600 focus:ring-accent-600 dark:border-surface-700 dark:bg-surface-900 dark:text-neutral-100 dark:placeholder-neutral-500">
                            </div>
                            <div>
                                <label for="email-field" class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-1">Email</label>
                                <input type="email" name="email" id="email-field" required
                                    class="w-full rounded-lg border-neutral-300 bg-white text-neutral-900 focus:border-accent-600 focus:ring-accent-600 dark:border-surface-700 dark:bg-surface-900 dark:text-neutral-100 dark:placeholder-neutral-500">
                            </div>
                        </div>
                        <div>
                            <label for="subject-field" class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-1">Subject</label>
                            <input type="text" name="subject" id="subject-field" required
                                class="w-full rounded-lg border-neutral-300 bg-white text-neutral-900 focus:border-accent-600 focus:ring-accent-600 dark:border-surface-700 dark:bg-surface-900 dark:text-neutral-100 dark:placeholder-neutral-500">
                        </div>
                        <div>
                            <label for="message-field" class="block text-sm font-medium text-neutral-700 dark:text-neutral-300 mb-1">Message</label>
                            <textarea name="message" id="message-field" rows="6" required
                                class="w-full rounded-lg border-neutral-300 bg-white text-neutral-900 focus:border-accent-600 focus:ring-accent-600 dark:border-surface-700 dark:bg-surface-900 dark:text-neutral-100 dark:placeholder-neutral-500"></textarea>
                        </div>
                        <button type="submit" :disabled="sending" class="btn-primary w-full sm:w-auto disabled:opacity-60">
                            <span x-show="!sending">Send</span>
                            <span x-show="sending" x-cloak>Sending&hellip;</span>
                        </button>
                    </form>

                    <div x-show="toast" x-cloak x-transition
                        :class="toastType === 'success' ? 'bg-neutral-900 dark:bg-surface-800' : 'bg-red-600'"
                        class="fixed bottom-6 right-6 z-50 max-w-sm rounded-lg px-4 py-3 text-sm text-white shadow-lg"
                        x-text="toast"></div>
                    </div>
                </x-reveal>

            </div>
        </div>
    </section>
@endsection
