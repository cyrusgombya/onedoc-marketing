@extends('layouts.app')

@section('title', 'Contact Us - ONEDOC')

@section('content')
<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Get In Touch</h1>
            <p class="text-xl text-gray-600">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Send us a Message</h2>
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Full Name -->
                    <div>
                        <label for="full_name" class="block text-sm font-bold text-gray-700 mb-2">Full Name *</label>
                        <input type="text" id="full_name" name="full_name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('full_name') border-red-500 @enderror" value="{{ old('full_name') }}">
                        @error('full_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-bold text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('phone') border-red-500 @enderror" value="{{ old('phone') }}">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Service Type -->
                    <div>
                        <label for="service_type" class="block text-sm font-bold text-gray-700 mb-2">Service Type</label>
                        <select id="service_type" name="service_type" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue">
                            <option value="">Select a service...</option>
                            <option value="marketing" {{ old('service_type') == 'marketing' ? 'selected' : '' }}>Marketing</option>
                            <option value="medical" {{ old('service_type') == 'medical' ? 'selected' : '' }}>Medical</option>
                            <option value="general" {{ old('service_type') == 'general' ? 'selected' : '' }}>General Inquiry</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-bold text-gray-700 mb-2">Message *</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-onedoc-blue text-white px-6 py-3 rounded-lg font-bold hover:bg-onedoc-blue-dark transition">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <div class="bg-white rounded-lg shadow-lg p-8 mb-6">
                    <h2 class="text-2xl font-bold mb-6">Contact Information</h2>
                    <div class="space-y-6">
                        <div>
                            <h3 class="font-bold text-onedoc-blue mb-2">📞 Phone</h3>
                            <p class="text-gray-700">+1 (555) 123-4567</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-onedoc-pink mb-2">📧 Email</h3>
                            <p class="text-gray-700">info@onedoc.com</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-onedoc-orange mb-2">📍 Location</h3>
                            <p class="text-gray-700">City, Country</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-onedoc-blue-light mb-2">🕐 Business Hours</h3>
                            <p class="text-gray-700">Monday - Friday: 9:00 AM - 6:00 PM</p>
                            <p class="text-gray-700">Saturday & Sunday: Closed</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold mb-6">Follow Us</h2>
                    <div class="flex space-x-4">
                        <a href="#" class="text-onedoc-blue font-bold hover:text-onedoc-blue-dark">Facebook</a>
                        <a href="#" class="text-onedoc-pink font-bold hover:text-opacity-80">Twitter</a>
                        <a href="#" class="text-onedoc-orange font-bold hover:text-opacity-80">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
