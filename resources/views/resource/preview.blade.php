@extends('layouts.layout')

@section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="max-w-3xl w-full bg-white rounded-lg shadow-md p-6">
        @if (Str::endsWith($resource->preview_file, ['.jpg', '.jpeg', '.png', '.gif', '.bmp']))
        <!-- Image Preview -->
        <div class="flex justify-center mb-8">
            @dd(asset($resource->preview_file))
            <div class="border border-gray-200 rounded-md p-4 shadow-md">
                <img src="{{ asset($resource->preview_file) }}" alt="Preview Image" class="w-full">
            </div>
        </div>
        @elseif (Str::endsWith($resource->preview_file, ['.pdf']))
        <!-- PDF Preview -->
        <div class="flex justify-center mb-8">
            <div class="border border-gray-200 rounded-md p-4 shadow-md">
                <iframe src="{{ asset($resource->preview_file) }}" class="w-full h-96"></iframe>
            </div>
        </div>
        @else
        <!-- Unsupported File Type -->
        <p class="text-red-500">This file type: {{ $resource->preview_file }} is not supported for preview.</p>
        @endif


        <!-- Rating and Review Section -->
        <form method="POST" class="mb-8">
            @csrf
            <!-- Review Rating -->
            <div class="mb-4">
                <label for="rating" class="block text-gray-700 font-bold">Rating:</label>
                <input type="number" id="rating" name="rating" min="1" max="5"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>
            <!-- Review Text -->
            <div class="mb-4">
                <label for="review" class="block text-gray-700 font-bold">Review:</label>
                <textarea id="review" name="review" rows="3"
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
            </div>
            <!-- Submit Button -->
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit
                Review</button>
        </form>

        <!-- Back Button -->
        <a href="{{ url()->previous() }}" class="text-sm text-gray-600 hover:text-blue-500">Back to Previous Page</a>
    </div>
</div>
@endsection