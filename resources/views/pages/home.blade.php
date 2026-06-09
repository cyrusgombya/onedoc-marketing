@extends('layouts.app')

@section('title', 'Home - ONEDOC')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-onedoc-blue to-onedoc-blue-light text-white py-20 px-4">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">We Grow Brands.</h1>
        <h1 class="text-5xl md:text-6xl font-bold mb-6">We Improve Lives.</h1>
        <p class="text-xl md:text-2xl mb-8 text-gray-100">Marketing solutions that build your brand. Medical solutions that care for your well-being.</p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="{{ route('services.marketing') }}" class="bg-white text-onedoc-blue px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">Our Services →</a>
            <a href="{{ route('booking.create') }}" class="bg-onedoc-pink text-white px-8 py-3 rounded-lg font-bold hover:bg-opacity-90 transition">📅 Book a Consultation</a>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12 text-center">
            <div>
                <div class="text-3xl md:text-4xl font-bold">120+</div>
                <p class="text-gray-200">Happy Clients</p>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">250+</div>
                <p class="text-gray-200">Projects Completed</p>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">5+</div>
                <p class="text-gray-200">Years Experience</p>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold">100%</div>
                <p class="text-gray-200">Client Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Section -->
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <p class="text-onedoc-blue font-bold uppercase mb-2">WHAT WE DO</p>
            <h2 class="text-4xl font-bold mb-4">Our Core Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">We provide comprehensive solutions tailored to your unique business needs</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Marketing Services Card -->
            <div class="bg-gradient-to-br from-onedoc-pink to-onedoc-orange text-white p-8 rounded-2xl">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="text-2xl font-bold mb-4">Marketing Solutions</h3>
                <p class="mb-6 text-gray-100">We help businesses grow, connect, and succeed. From digital marketing to branding, we craft strategies that stand out.</p>
                <a href="{{ route('services.marketing') }}" class="inline-block bg-white text-onedoc-pink px-6 py-2 rounded-lg font-bold hover:bg-gray-100 transition">Learn More →</a>
            </div>

            <!-- Medical Services Card -->
            <div class="bg-gradient-to-br from-onedoc-blue to-onedoc-blue-light text-white p-8 rounded-2xl">
                <div class="text-4xl mb-4">❤️</div>
                <h3 class="text-2xl font-bold mb-4">Medical Services</h3>
                <p class="mb-6 text-gray-100">Quality care backed by experience. We optimize healthcare processes and communicate complex medical information accessibly.</p>
                <a href="{{ route('services.medical') }}" class="inline-block bg-white text-onedoc-blue px-6 py-2 rounded-lg font-bold hover:bg-gray-100 transition">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Work -->
<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Featured Work</h2>
            <p class="text-gray-600">Showcase of our best projects</p>
        </div>

        @if($featuredPortfolio->count() > 0)
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                @foreach($featuredPortfolio as $item)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        @if($item->image_url)
                            <img src="{{ asset('storage/' . $item->image_url) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gradient-to-br from-onedoc-blue to-onedoc-pink"></div>
                        @endif
                        <div class="p-6">
                            <span class="text-onedoc-pink text-sm font-bold uppercase">{{ ucfirst($item->category) }}</span>
                            <h3 class="text-xl font-bold mt-2">{{ $item->title }}</h3>
                            <p class="text-gray-600 text-sm mt-2">{{ Str::limit($item->description, 80) }}</p>
                            <a href="{{ route('portfolio.show', $item->id) }}" class="text-onedoc-blue font-bold mt-4 inline-block hover:text-onedoc-blue-dark">View Project →</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ route('portfolio.index') }}" class="bg-onedoc-blue text-white px-8 py-3 rounded-lg font-bold hover:bg-onedoc-blue-dark transition">View Full Portfolio</a>
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="bg-onedoc-blue text-white py-16 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-4">Ready to Grow Your Brand?</h2>
        <p class="text-xl mb-8 text-gray-100">Let's discuss your goals and create a strategy that works for you.</p>
        <a href="{{ route('booking.create') }}" class="bg-onedoc-pink text-white px-8 py-3 rounded-lg font-bold hover:bg-opacity-90 transition inline-block">📅 Book a Free Consultation</a>
    </div>
</section>
@endsection
