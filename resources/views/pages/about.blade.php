@extends('layouts.app')

@section('title', 'About Us - ONEDOC')

@section('content')
<section class="py-16 px-4 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About ONEDOC</h1>
            <p class="text-xl text-gray-600">Your trusted partner for growth and excellence</p>
        </div>

        <!-- Our Story -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <h2 class="text-3xl font-bold mb-6 text-onedoc-blue">We Are ONEDOC</h2>
            <p class="text-gray-700 mb-4 text-lg">Founded on the belief that exceptional branding and healthcare go hand in hand, ONEDOC brings together marketing expertise and medical knowledge to create transformative solutions for our clients.</p>
            <p class="text-gray-700 text-lg">We believe that success comes from understanding your unique challenges and delivering tailored strategies that make a real impact. Whether you're looking to grow your brand or enhance your healthcare delivery, we're here to help you succeed.</p>
        </div>

        <!-- Mission, Vision, Values -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-2xl font-bold mb-4 text-onedoc-blue">Our Mission</h3>
                <p class="text-gray-700">To empower brands through strategic marketing and enhance healthcare delivery through innovative communication and solutions that drive real results.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-2xl font-bold mb-4 text-onedoc-pink">Our Vision</h3>
                <p class="text-gray-700">To be the trusted partner for organizations seeking growth, credibility, and impact in their respective industries.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-2xl font-bold mb-4 text-onedoc-orange">Our Values</h3>
                <ul class="text-gray-700 space-y-2">
                    <li>✓ Integrity & Trust</li>
                    <li>✓ Quality & Excellence</li>
                    <li>✓ Innovation & Creativity</li>
                    <li>✓ Client-Focused</li>
                </ul>
            </div>
        </div>

        <!-- Why Choose ONEDOC -->
        <div class="bg-onedoc-blue text-white rounded-lg p-8 mb-12">
            <h2 class="text-3xl font-bold mb-8 text-center">Why Choose ONEDOC?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="font-bold mb-2">Integrated Solutions</h3>
                    <p class="text-gray-100">Seamless combination of marketing and medical expertise</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">👥</div>
                    <h3 class="font-bold mb-2">Expert Team</h3>
                    <p class="text-gray-100">Experienced professionals dedicated to your success</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="font-bold mb-2">Proven Results</h3>
                    <p class="text-gray-100">Data-driven strategies that deliver measurable outcomes</p>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-white rounded-lg shadow-lg p-8 text-center">
            <div>
                <div class="text-4xl font-bold text-onedoc-blue">120+</div>
                <p class="text-gray-600 mt-2">Happy Clients</p>
            </div>
            <div>
                <div class="text-4xl font-bold text-onedoc-pink">250+</div>
                <p class="text-gray-600 mt-2">Projects Completed</p>
            </div>
            <div>
                <div class="text-4xl font-bold text-onedoc-orange">5+</div>
                <p class="text-gray-600 mt-2">Years Experience</p>
            </div>
            <div>
                <div class="text-4xl font-bold text-onedoc-blue">100%</div>
                <p class="text-gray-600 mt-2">Satisfaction Rate</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-onedoc-pink text-white py-16 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-4">Let's Work Together</h2>
        <p class="text-xl mb-8">Ready to achieve your goals? We're here to help.</p>
        <a href="{{ route('booking.create') }}" class="bg-white text-onedoc-pink px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition inline-block">📅 Book a Consultation</a>
    </div>
</section>
@endsection
