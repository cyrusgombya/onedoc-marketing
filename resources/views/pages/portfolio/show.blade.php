@extends('layouts.app')

@section('title', '{{ $item->title }} - ONEDOC Portfolio')

@section('content')
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-4xl mx-auto">
        <!-- Back Button -->
        <a href="{{ route('portfolio.index') }}" class="text-onedoc-blue font-bold mb-8 inline-block hover:text-onedoc-blue-dark">← Back to Portfolio</a>

        <!-- Project Image -->
        @if($item->image_url)
            <img src="{{ asset('storage/' . $item->image_url) }}" alt="{{ $item->title }}" class="w-full h-96 object-cover rounded-lg shadow-lg mb-8">
        @else
            <div class="w-full h-96 bg-gradient-to-br from-onedoc-blue to-onedoc-pink rounded-lg shadow-lg mb-8 flex items-center justify-center">
                <span class="text-white text-6xl">📸</span>
            </div>
        @endif

        <!-- Project Details -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-4xl font-bold">{{ $item->title }}</h1>
                <span class="bg-onedoc-pink text-white px-4 py-2 rounded-lg font-bold uppercase text-sm">{{ ucfirst($item->category) }}</span>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="font-bold text-onedoc-blue mb-2">THE CHALLENGE</h3>
                    <p class="text-gray-700">{{ $item->challenge }}</p>
                </div>
                <div>
                    <h3 class="font-bold text-onedoc-pink mb-2">OUR SOLUTION</h3>
                    <p class="text-gray-700">{{ $item->solution }}</p>
                </div>
                <div>
                    <h3 class="font-bold text-onedoc-orange mb-2">THE RESULTS</h3>
                    <p class="text-gray-700">{{ $item->results }}</p>
                </div>
            </div>

            <hr class="my-8">

            <h3 class="text-2xl font-bold mb-4">Project Overview</h3>
            <p class="text-gray-700 text-lg">{{ $item->description }}</p>
        </div>

        <!-- Related Projects -->
        @if($relatedItems->count() > 0)
            <div class="mb-8">
                <h3 class="text-2xl font-bold mb-6">Related Projects</h3>
                <div class="grid md:grid-cols-2 gap-8">
                    @foreach($relatedItems as $related)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition cursor-pointer" onclick="window.location.href='{{ route('portfolio.show', $related->id) }}'">
                            @if($related->image_url)
                                <img src="{{ asset('storage/' . $related->image_url) }}" alt="{{ $related->title }}" class="w-full h-40 object-cover">
                            @else
                                <div class="w-full h-40 bg-gradient-to-br from-onedoc-blue to-onedoc-pink"></div>
                            @endif
                            <div class="p-6">
                                <span class="text-onedoc-pink text-sm font-bold uppercase">{{ ucfirst($related->category) }}</span>
                                <h4 class="text-lg font-bold mt-2">{{ $related->title }}</h4>
                                <a href="{{ route('portfolio.show', $related->id) }}" class="text-onedoc-blue font-bold mt-4 inline-block hover:text-onedoc-blue-dark">View Project →</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- CTA Section -->
        <div class="bg-onedoc-blue text-white rounded-lg p-8 text-center">
            <h3 class="text-2xl font-bold mb-4">Impressed by our work?</h3>
            <p class="mb-6 text-gray-100">Let's create something amazing for your business too.</p>
            <a href="{{ route('booking.create') }}" class="bg-onedoc-pink text-white px-8 py-3 rounded-lg font-bold hover:bg-opacity-90 transition inline-block">📅 Book a Consultation</a>
        </div>
    </div>
</section>
@endsection
