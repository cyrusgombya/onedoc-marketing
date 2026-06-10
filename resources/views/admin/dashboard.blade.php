@extends('layouts.app')

@section('title', 'Admin Dashboard - ONEDOC')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Admin Header -->
    <div class="bg-onedoc-blue text-white p-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">ONEDOC Admin Dashboard</h1>
            <div class="flex items-center gap-4">
                <span>Welcome, Admin</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-onedoc-pink px-4 py-2 rounded hover:bg-opacity-90">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-6">
        <!-- Stats Cards -->
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-gray-600 text-sm font-bold mb-2">TOTAL PROJECTS</h3>
                <p class="text-4xl font-bold text-onedoc-blue">{{ $totalProjects }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-gray-600 text-sm font-bold mb-2">PENDING BOOKINGS</h3>
                <p class="text-4xl font-bold text-onedoc-pink">{{ $pendingBookings }}</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-gray-600 text-sm font-bold mb-2">UNREAD MESSAGES</h3>
                <p class="text-4xl font-bold text-onedoc-orange">{{ $unreadMessages }}</p>
            </div>
        </div>

        <!-- Admin Navigation -->
        <div class="mb-8">
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('admin.dashboard') }}" class="bg-onedoc-blue text-white px-4 py-2 rounded hover:bg-onedoc-blue-dark">Dashboard</a>
                <a href="{{ route('admin.portfolio.index') }}" class="bg-white text-onedoc-blue px-4 py-2 rounded border-2 border-onedoc-blue hover:bg-gray-50">Portfolio</a>
                <a href="{{ route('admin.bookings') }}" class="bg-white text-onedoc-pink px-4 py-2 rounded border-2 border-onedoc-pink hover:bg-gray-50">Bookings</a>
                <a href="{{ route('admin.messages') }}" class="bg-white text-onedoc-orange px-4 py-2 rounded border-2 border-onedoc-orange hover:bg-gray-50">Messages</a>
            </div>
        </div>

        <!-- Recent Bookings -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-2xl font-bold mb-4">Recent Bookings</h2>
            @if($recentBookings->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-gray-50 border-b">
                            <tr>
                                <th class="px-4 py-2 font-bold">Name</th>
                                <th class="px-4 py-2 font-bold">Email</th>
                                <th class="px-4 py-2 font-bold">Service</th>
                                <th class="px-4 py-2 font-bold">Date</th>
                                <th class="px-4 py-2 font-bold">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentBookings as $booking)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-4 py-2">{{ $booking->full_name }}</td>
                                    <td class="px-4 py-2">{{ $booking->email }}</td>
                                    <td class="px-4 py-2 text-sm">{{ ucfirst(str_replace('_', ' ', $booking->service_type)) }}</td>
                                    <td class="px-4 py-2">{{ $booking->preferred_date->format('M d, Y') }}</td>
                                    <td class="px-4 py-2">
                                        <span class="px-3 py-1 rounded-full text-sm font-bold
                                            @if($booking->status == 'pending') bg-yellow-100 text-yellow-800
                                            @elseif($booking->status == 'confirmed') bg-green-100 text-green-800
                                            @elseif($booking->status == 'completed') bg-blue-100 text-blue-800
                                            @else bg-red-100 text-red-800
                                            @endif">
                                            {{ ucfirst($booking->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-gray-600">No bookings yet.</p>
            @endif
        </div>

        <!-- Recent Messages -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold mb-4">Recent Messages</h2>
            @if($recentMessages->count() > 0)
                <div class="space-y-4">
                    @foreach($recentMessages as $message)
                        <div class="border-l-4 border-onedoc-blue pl-4 py-2 {{ $message->is_read ? 'bg-gray-50' : 'bg-blue-50' }}">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-bold">{{ $message->full_name }}</h4>
                                    <p class="text-gray-600 text-sm">{{ $message->email }}</p>
                                    <p class="text-gray-700 mt-1">{{ Str::limit($message->message, 100) }}</p>
                                </div>
                                <span class="text-gray-500 text-sm">{{ $message->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-600">No messages yet.</p>
            @endif
        </div>
    </div>
</div>
@endsection
