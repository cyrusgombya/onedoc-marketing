@extends('layouts.app')

@section('title', 'Marketing Services - ONEDOC')

@section('content')
<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Marketing Services</h1>
            <p class="text-xl text-gray-600">Results-driven marketing solutions that build your brand and grow your business</p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <!-- Consultancy -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition">
                <div class="text-5xl mb-4">💼</div>
                <h3 class="text-2xl font-bold mb-4 text-onedoc-blue">CONSULTANCY</h3>
                <p class="text-gray-700 mb-6">We offer strategic advice in the field of branding and corporate identity. We analyze business processes and adjust them where necessary, ensuring your marketing efforts result in a demonstrably higher return and a stronger market position.</p>
                <a href="{{ route('booking.create') }}" class="text-onedoc-blue font-bold hover:text-onedoc-blue-dark">Learn More →</a>
            </div>

            <!-- Training -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition">
                <div class="text-5xl mb-4">📚</div>
                <h3 class="text-2xl font-bold mb-4 text-onedoc-pink">TRAINING</h3>
                <p class="text-gray-700 mb-6">We train teams and individuals to fully utilize their potential and break through limiting beliefs. Our training helps develop a growth mindset that is essential for success in the modern business world.</p>
                <a href="{{ route('booking.create') }}" class="text-onedoc-pink font-bold hover:text-opacity-80">Learn More →</a>
            </div>

            <!-- Communication -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition">
                <div class="text-5xl mb-4">💬</div>
                <h3 class="text-2xl font-bold mb-4 text-onedoc-orange">COMMUNICATION</h3>
                <p class="text-gray-700 mb-6">We manage your entire media presence, from social media management to targeted public relations. We maintain your brand image and create impactful content campaigns that directly appeal to and engage your target audience.</p>
                <a href="{{ route('booking.create') }}" class="text-onedoc-orange font-bold hover:text-opacity-80">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-gradient-to-r from-onedoc-pink to-onedoc-orange text-white py-16 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-4">🔵 Ready to Grow Your Brand?</h2>
        <p class="text-xl mb-8">Let's discuss your goals and create a strategy that works for you.</p>
        <a href="{{ route('booking.create') }}" class="bg-white text-onedoc-pink px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition inline-block">📅 Book a Marketing Consultation</a>
    </div>
</section>
@endsection
