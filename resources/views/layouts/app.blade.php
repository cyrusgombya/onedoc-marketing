<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ONEDOC - Marketing & Medical Solutions')</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans text-gray-900">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-onedoc-blue">ONEDOC</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-onedoc-blue transition">Home</a>
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-onedoc-blue transition flex items-center">Services <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg></button>
                        <div class="absolute left-0 mt-0 w-48 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">
                            <a href="{{ route('services.marketing') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Marketing Services</a>
                            <a href="{{ route('services.medical') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Medical Services</a>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-onedoc-blue transition">About Us</a>
                    <a href="{{ route('contact.create') }}" class="text-gray-700 hover:text-onedoc-blue transition">Contact</a>
                    <a href="{{ route('booking.create') }}" class="bg-onedoc-blue text-white px-4 py-2 rounded-lg hover:bg-onedoc-blue-dark transition">📅 Book Consultation</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-onedoc-blue">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-2">
                <a href="{{ route('home') }}" class="block text-gray-700 hover:text-onedoc-blue py-2">Home</a>
                <a href="{{ route('services.marketing') }}" class="block text-gray-700 hover:text-onedoc-blue py-2">Marketing Services</a>
                <a href="{{ route('services.medical') }}" class="block text-gray-700 hover:text-onedoc-blue py-2">Medical Services</a>
                <a href="{{ route('about') }}" class="block text-gray-700 hover:text-onedoc-blue py-2">About Us</a>
                <a href="{{ route('contact.create') }}" class="block text-gray-700 hover:text-onedoc-blue py-2">Contact</a>
                <a href="{{ route('booking.create') }}" class="block bg-onedoc-blue text-white px-4 py-2 rounded-lg hover:bg-onedoc-blue-dark">📅 Book Consultation</a>
            </div>
        </div>
    </nav>

    <!-- Flash Messages -->
    @if ($message = Session::get('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            {{ $message }}
        </div>
    @endif

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-onedoc-blue-dark text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">ONEDOC</h3>
                    <p class="text-gray-300 text-sm">Marketing solutions that build your brand. Medical solutions that care for your well-being.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Quick Links</h4>
                    <ul class="text-gray-300 text-sm space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                        <li><a href="{{ route('services.marketing') }}" class="hover:text-white">Services</a></li>
                        <li><a href="{{ route('portfolio.index') }}" class="hover:text-white">Portfolio</a></li>
                        <li><a href="{{ route('contact.create') }}" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Contact Info</h4>
                    <p class="text-gray-300 text-sm">📞 +1 (555) 123-4567</p>
                    <p class="text-gray-300 text-sm">📧 info@onedoc.com</p>
                    <p class="text-gray-300 text-sm">📍 City, Country</p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">Facebook</a>
                        <a href="#" class="text-gray-300 hover:text-white">Twitter</a>
                        <a href="#" class="text-gray-300 hover:text-white">LinkedIn</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; 2024 ONEDOC. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
