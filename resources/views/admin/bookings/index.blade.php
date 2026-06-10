@extends('layouts.app')

@section('title', 'Bookings Management - ONEDOC Admin')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Admin Header -->
    <div class="bg-onedoc-blue text-white p-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold">Consultation Bookings</h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-6">
        <!-- Navigation -->
        <a href="{{ route('admin.dashboard') }}" class="text-onedoc-blue hover:text-onedoc-blue-dark mb-6 inline-block">← Back to Dashboard</a>

        <!-- Bookings Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            @if($bookings->count() > 0)
                <table class="w-full">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-6 py-3 text-left font-bold">Name</th>
                            <th class="px-6 py-3 text-left font-bold">Email</th>
                            <th class="px-6 py-3 text-left font-bold">Service</th>
                            <th class="px-6 py-3 text-left font-bold">Date</th>
                            <th class="px-6 py-3 text-left font-bold">Status</th>
                            <th class="px-6 py-3 text-left font-bold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-3">{{ $booking->full_name }}</td>
                                <td class="px-6 py-3 text-sm">{{ $booking->email }}</td>
                                <td class="px-6 py-3 text-sm">{{ ucfirst(str_replace('_', ' ', $booking->service_type)) }}</td>
                                <td class="px-6 py-3">{{ $booking->preferred_date->format('M d, Y') }} @ {{ $booking->preferred_time }}</td>
                                <td class="px-6 py-3">
                                    <form action="{{ route('admin.bookings.update', $booking->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" onchange="this.form.submit()" class="px-3 py-1 rounded-full text-sm font-bold
                                            @if($booking->status == 'pending') bg-yellow-100 text-yellow-800
                                            @elseif($booking->status == 'confirmed') bg-green-100 text-green-800
                                            @elseif($booking->status == 'completed') bg-blue-100 text-blue-800
                                            @else bg-red-100 text-red-800
                                            @endif">
                                            <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                            <option value="completed" {{ $booking->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="px-6 py-3">
                                    <a href="mailto:{{ $booking->email }}" class="text-onedoc-blue hover:text-onedoc-blue-dark font-bold">Email</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="p-6">
                    {{ $bookings->links() }}
                </div>
            @else
                <div class="p-6 text-center text-gray-600">
                    <p>No bookings yet.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
