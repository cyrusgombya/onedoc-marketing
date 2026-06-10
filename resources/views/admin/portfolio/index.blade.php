@extends('layouts.app')

@section('title', 'Portfolio Management - ONEDOC Admin')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Admin Header -->
    <div class="bg-onedoc-blue text-white p-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold">Portfolio Management</h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-6">
        <!-- Navigation -->
        <div class="mb-6 flex justify-between items-center">
            <a href="{{ route('admin.dashboard') }}" class="text-onedoc-blue hover:text-onedoc-blue-dark">← Back to Dashboard</a>
            <a href="{{ route('admin.portfolio.create') }}" class="bg-onedoc-blue text-white px-6 py-2 rounded hover:bg-onedoc-blue-dark">+ Add New Portfolio Item</a>
        </div>

        <!-- Portfolio Items Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            @if($portfolio->count() > 0)
                <table class="w-full">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-6 py-3 text-left font-bold">Title</th>
                            <th class="px-6 py-3 text-left font-bold">Category</th>
                            <th class="px-6 py-3 text-left font-bold">Status</th>
                            <th class="px-6 py-3 text-left font-bold">Date</th>
                            <th class="px-6 py-3 text-left font-bold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($portfolio as $item)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-3">{{ $item->title }}</td>
                                <td class="px-6 py-3">
                                    <span class="px-3 py-1 rounded-full text-sm font-bold
                                        @if($item->category == 'marketing') bg-onedoc-pink text-white
                                        @elseif($item->category == 'medical') bg-onedoc-blue text-white
                                        @else bg-onedoc-orange text-white
                                        @endif">
                                        {{ ucfirst($item->category) }}
                                    </span>
                                </td>
                                <td class="px-6 py-3">
                                    <span class="px-3 py-1 rounded-full text-sm font-bold {{ $item->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ ucfirst($item->status) }}
                                    </span>
                                </td>
                                <td class="px-6 py-3 text-gray-600">{{ $item->created_at->format('M d, Y') }}</td>
                                <td class="px-6 py-3">
                                    <a href="{{ route('admin.portfolio.edit', $item->id) }}" class="text-onedoc-blue hover:text-onedoc-blue-dark font-bold mr-4">Edit</a>
                                    <form action="{{ route('admin.portfolio.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 font-bold">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="p-6">
                    {{ $portfolio->links() }}
                </div>
            @else
                <div class="p-6 text-center text-gray-600">
                    <p>No portfolio items yet. <a href="{{ route('admin.portfolio.create') }}" class="text-onedoc-blue hover:text-onedoc-blue-dark font-bold">Create one</a></p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
