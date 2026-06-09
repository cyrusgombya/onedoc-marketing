@extends('layouts.app')

@section('title', 'Medical Services - ONEDOC')

@section('content')
<section class="py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Medical Services</h1>
            <p class="text-xl text-gray-600">Quality healthcare solutions focused on patient care and institutional excellence</p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <!-- Consultancy -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition">
                <div class="text-5xl mb-4">🏥</div>
                <h3 class="text-2xl font-bold mb-4 text-onedoc-blue">CONSULTANCY</h3>
                <p class="text-gray-700 mb-6">We advise healthcare institutions and medical organizations on optimizing care processes and strengthening internal and external structures. Our goal is to increase efficiency and ensure the quality of healthcare services.</p>
                <a href="{{ route('booking.create') }}" class="text-onedoc-blue font-bold hover:text-onedoc-blue-dark">Learn More →</a>
            </div>

            <!-- Training -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition">
                <div class="text-5xl mb-4">🩺</div>
                <h3 class="text-2xl font-bold mb-4 text-onedoc-pink">TRAINING</h3>
                <p class="text-gray-700 mb-6">Our training courses are practice-oriented and focused on skills essential in the medical sector. Examples include specialized programs such as First Aid and other medical intervention skills, where safety and decisiveness take center stage.</p>
                <a href="{{ route('booking.create') }}" class="text-onedoc-pink font-bold hover:text-opacity-80">Learn More →</a>
            </div>

            <!-- Communication -->
            <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition">
                <div class="text-5xl mb-4">💬</div>
                <h3 class="text-2xl font-bold mb-4 text-onedoc-orange">COMMUNICATION</h3>
                <p class="text-gray-700 mb-6">We act as the necessary bridge between medical jargon and the patient's perspective. We ensure that complex medical information is made accessible and understandable, which benefits patient care and treatment adherence.</p>
                <a href="{{ route('booking.create') }}" class="text-onedoc-orange font-bold hover:text-opacity-80">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-onedoc-blue text-white py-16 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-4">❤️ Need Medical Marketing Help?</h2>
        <p class="text-xl mb-8">Let's discuss how we can improve your healthcare delivery and patient engagement.</p>
        <a href="{{ route('booking.create') }}" class="bg-onedoc-pink text-white px-8 py-3 rounded-lg font-bold hover:bg-opacity-90 transition inline-block">📅 Book a Medical Consultation</a>
    </div>
</section>
@endsection
