@extends('layouts.app')

@section('title', 'Book a Consultation - ONEDOC')

@section('content')
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-4xl font-bold mb-4 text-onedoc-blue">Let's Discuss Your Goals</h1>
            <p class="text-gray-600 mb-8">Schedule a free consultation with our team to explore how we can help your business grow.</p>

            <form action="{{ route('booking.store') }}" method="POST" class="space-y-6">
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

                <!-- Company -->
                <div>
                    <label for="company" class="block text-sm font-bold text-gray-700 mb-2">Company Name *</label>
                    <input type="text" id="company" name="company" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('company') border-red-500 @enderror" value="{{ old('company') }}">
                    @error('company')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Service Type -->
                <div>
                    <label for="service_type" class="block text-sm font-bold text-gray-700 mb-2">Service Type *</label>
                    <select id="service_type" name="service_type" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('service_type') border-red-500 @enderror">
                        <option value="">Select a service...</option>
                        <optgroup label="Marketing">
                            <option value="marketing_consultancy" {{ old('service_type') == 'marketing_consultancy' ? 'selected' : '' }}>Marketing - Consultancy</option>
                            <option value="marketing_training" {{ old('service_type') == 'marketing_training' ? 'selected' : '' }}>Marketing - Training</option>
                            <option value="marketing_communication" {{ old('service_type') == 'marketing_communication' ? 'selected' : '' }}>Marketing - Communication</option>
                        </optgroup>
                        <optgroup label="Medical">
                            <option value="medical_consultancy" {{ old('service_type') == 'medical_consultancy' ? 'selected' : '' }}>Medical - Consultancy</option>
                            <option value="medical_training" {{ old('service_type') == 'medical_training' ? 'selected' : '' }}>Medical - Training</option>
                            <option value="medical_communication" {{ old('service_type') == 'medical_communication' ? 'selected' : '' }}>Medical - Communication</option>
                        </optgroup>
                    </select>
                    @error('service_type')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Preferred Date -->
                <div>
                    <label for="preferred_date" class="block text-sm font-bold text-gray-700 mb-2">Preferred Date *</label>
                    <input type="date" id="preferred_date" name="preferred_date" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('preferred_date') border-red-500 @enderror" value="{{ old('preferred_date') }}">
                    @error('preferred_date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Preferred Time -->
                <div>
                    <label for="preferred_time" class="block text-sm font-bold text-gray-700 mb-2">Preferred Time *</label>
                    <input type="time" id="preferred_time" name="preferred_time" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('preferred_time') border-red-500 @enderror" value="{{ old('preferred_time') }}">
                    @error('preferred_time')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-bold text-gray-700 mb-2">Tell us about your project / goals</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 pt-4">
                    <button type="submit" class="flex-1 bg-onedoc-blue text-white px-6 py-3 rounded-lg font-bold hover:bg-onedoc-blue-dark transition">Book My Consultation</button>
                    <a href="{{ route('home') }}" class="flex-1 bg-gray-300 text-gray-700 px-6 py-3 rounded-lg font-bold hover:bg-gray-400 transition text-center">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
