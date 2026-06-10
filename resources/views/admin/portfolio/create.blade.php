@extends('layouts.app')

@section('title', 'Add Portfolio Item - ONEDOC Admin')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Admin Header -->
    <div class="bg-onedoc-blue text-white p-6">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold">Add New Portfolio Item</h1>
        </div>
    </div>

    <div class="max-w-4xl mx-auto p-6">
        <a href="{{ route('admin.portfolio.index') }}" class="text-onedoc-blue hover:text-onedoc-blue-dark mb-6 inline-block">← Back to Portfolio</a>

        <div class="bg-white rounded-lg shadow p-8">
            <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-bold text-gray-700 mb-2">Project Title *</label>
                    <input type="text" id="title" name="title" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('title') border-red-500 @enderror" value="{{ old('title') }}">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-bold text-gray-700 mb-2">Category *</label>
                    <select id="category" name="category" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('category') border-red-500 @enderror">
                        <option value="">Select a category...</option>
                        <option value="marketing" {{ old('category') == 'marketing' ? 'selected' : '' }}>Marketing</option>
                        <option value="medical" {{ old('category') == 'medical' ? 'selected' : '' }}>Medical</option>
                        <option value="branding" {{ old('category') == 'branding' ? 'selected' : '' }}>Branding</option>
                    </select>
                    @error('category')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-bold text-gray-700 mb-2">Description *</label>
                    <textarea id="description" name="description" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Challenge -->
                <div>
                    <label for="challenge" class="block text-sm font-bold text-gray-700 mb-2">Challenge *</label>
                    <textarea id="challenge" name="challenge" rows="3" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('challenge') border-red-500 @enderror">{{ old('challenge') }}</textarea>
                    @error('challenge')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Solution -->
                <div>
                    <label for="solution" class="block text-sm font-bold text-gray-700 mb-2">Solution *</label>
                    <textarea id="solution" name="solution" rows="3" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('solution') border-red-500 @enderror">{{ old('solution') }}</textarea>
                    @error('solution')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Results -->
                <div>
                    <label for="results" class="block text-sm font-bold text-gray-700 mb-2">Results *</label>
                    <textarea id="results" name="results" rows="3" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('results') border-red-500 @enderror">{{ old('results') }}</textarea>
                    @error('results')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image -->
                <div>
                    <label for="image" class="block text-sm font-bold text-gray-700 mb-2">Project Image</label>
                    <input type="file" id="image" name="image" accept="image/*" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('image') border-red-500 @enderror">
                    <p class="text-gray-600 text-sm mt-1">Max file size: 2MB. Accepted formats: JPEG, PNG, JPG, GIF</p>
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-bold text-gray-700 mb-2">Status *</label>
                    <select id="status" name="status" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-onedoc-blue @error('status') border-red-500 @enderror">
                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 pt-4">
                    <button type="submit" class="bg-onedoc-blue text-white px-6 py-3 rounded-lg font-bold hover:bg-onedoc-blue-dark">Save Portfolio Item</button>
                    <a href="{{ route('admin.portfolio.index') }}" class="bg-gray-300 text-gray-700 px-6 py-3 rounded-lg font-bold hover:bg-gray-400">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
