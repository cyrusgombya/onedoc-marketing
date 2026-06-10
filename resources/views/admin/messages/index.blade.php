@extends('layouts.app')

@section('title', 'Messages Management - ONEDOC Admin')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Admin Header -->
    <div class="bg-onedoc-blue text-white p-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold">Contact Messages</h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-6">
        <!-- Navigation -->
        <a href="{{ route('admin.dashboard') }}" class="text-onedoc-blue hover:text-onedoc-blue-dark mb-6 inline-block">← Back to Dashboard</a>

        <!-- Messages Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            @if($messages->count() > 0)
                <table class="w-full">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-6 py-3 text-left font-bold">From</th>
                            <th class="px-6 py-3 text-left font-bold">Email</th>
                            <th class="px-6 py-3 text-left font-bold">Message</th>
                            <th class="px-6 py-3 text-left font-bold">Status</th>
                            <th class="px-6 py-3 text-left font-bold">Date</th>
                            <th class="px-6 py-3 text-left font-bold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message)
                            <tr class="border-b hover:bg-gray-50 {{ !$message->is_read ? 'bg-blue-50' : '' }}">
                                <td class="px-6 py-3 font-bold">{{ $message->full_name }}</td>
                                <td class="px-6 py-3 text-sm">{{ $message->email }}</td>
                                <td class="px-6 py-3 text-sm">{{ Str::limit($message->message, 50) }}</td>
                                <td class="px-6 py-3">
                                    <span class="px-3 py-1 rounded-full text-sm font-bold {{ $message->is_read ? 'bg-gray-100 text-gray-800' : 'bg-blue-100 text-blue-800' }}">
                                        {{ $message->is_read ? 'Read' : 'Unread' }}
                                    </span>
                                </td>
                                <td class="px-6 py-3 text-gray-600 text-sm">{{ $message->created_at->format('M d, Y') }}</td>
                                <td class="px-6 py-3">
                                    <div class="flex gap-2">
                                        @if(!$message->is_read)
                                            <form action="{{ route('admin.messages.update', $message->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-onedoc-blue hover:text-onedoc-blue-dark font-bold text-sm">Mark Read</button>
                                            </form>
                                        @endif
                                        <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800 font-bold text-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="p-6">
                    {{ $messages->links() }}
                </div>
            @else
                <div class="p-6 text-center text-gray-600">
                    <p>No messages yet.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
