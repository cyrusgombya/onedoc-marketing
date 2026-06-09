@extends('layouts.app')

@section('title', 'Portfolio - ONEDOC')

@section('content')
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Portfolio</h1>
            <p class="text-xl text-gray-600">Showcasing our best work across marketing and medical solutions</p>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <a href="{{ route('portfolio.index') }}" class="px-6 py-2 rounded-lg font-bold {{ !request('category') || request('category') == 'all' ? 'bg-onedoc-blue text-white' : 'bg-white text-onedoc-blue border-2 border-onedoc-blue' }} hover:bg-onedoc-blue hover:text-white transition">All</a>
            <a href="{{ route('portfolio.index', ['category' => 'marketing']) }}" class="px-6 py-2 rounded-lg font-bold {{ request('category') == 'marketing' ? 'bg-onedoc-pink text-white' : 'bg-white text-onedoc-pink border-2 border-onedoc-pink' }} hover:bg-onedoc-pink hover:text-white transition">Marketing</a>
            <a href="{{ route('portfolio.index', ['category' => 'medical']) }}" class="px-6 py-2 rounded-lg font-bold {{ request('category') == 'medical' ? 'bg-onedoc-orange text-white' : 'bg-white text-onedoc-orange border-2 border-onedoc-orange' }} hover:bg-onedoc-orange hover:text-white transition">Medical</a>
            <a href="{{ route('portfolio.index', ['category' => 'branding']) }}" class="px-6 py-2 rounded-lg font-bold {{ request('category') == 'branding' ? 'bg-onedoc-blue-light text-white' : 'bg-white text-onedoc-blue-light border-2 border-onedoc-blue-light' }} hover:bg-onedoc-blue-light hover:text-white transition">Branding</a>
        </div>

        <!-- Portfolio Grid -->
        @if($portfolio->count() > 0)
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                @foreach($portfolio as $item)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition cursor-pointer" onclick="window.location.href='{{ route('portfolio.show', $item->id) }}'">
                        @if($item->image_url)
                            <img src="{{ asset('storage/' . $item->image_url) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gradient-to-br from-onedoc-blue to-onedoc-pink flex items-center justify-center">
                                <span class="text-white text-4xl">📸</span>
                            </div>
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

            <!-- Pagination -->
            <div class="flex justify-center">
                {{ $portfolio->links() }}
            </div>
        @else
            <div class="bg-white rounded-lg shadow-lg p-12 text-center">
                <p class="text-gray-600 text-lg">No portfolio items found.</p>
            </div>
        @endif
    </div>
</section>
@endsection
