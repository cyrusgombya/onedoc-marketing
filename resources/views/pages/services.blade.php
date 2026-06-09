@extends('layouts.app')

@section('title', 'Services - ONEDOC')

@section('content')
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Services</h1>
            <p class="text-xl text-gray-600">Comprehensive solutions for your business and healthcare needs</p>
        </div>

        <!-- Service Tabs -->
        <div class="flex justify-center gap-4 mb-12">
            <a href="{{ route('services.marketing') }}" class="bg-onedoc-blue text-white px-6 py-3 rounded-lg font-bold hover:bg-onedoc-blue-dark transition">🔵 Marketing Services</a>
            <a href="{{ route('services.medical') }}" class="bg-onedoc-pink text-white px-6 py-3 rounded-lg font-bold hover:bg-opacity-90 transition">❤️ Medical Services</a>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8 text-center">
            <p class="text-gray-600 text-lg">Click on one of the buttons above to explore our specialized services in marketing or medical solutions.</p>
        </div>
    </div>
</section>
@endsection
