@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4 text-center">Edit Comment</h1>

    <form 
        action="{{ route('countries.comments.update', [$country->id, $post->id]) }}" 
        method="POST" 
        class="bg-white shadow-lg rounded-lg p-6"
    >
        @csrf
        @method('PATCH')

        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-bold mb-2">Comment</label>
            <textarea 
                name="content" 
                id="content" 
                rows="4" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300"
                required
            >{{ $post->content }}</textarea>
        </div>

        <div class="flex justify-end">
            <button 
                type="submit" 
                class="bg-red-400 text-white px-4 py-2 rounded-lg hover:bg-red-300 focus:ring-2 focus:ring-red-200 focus:outline-none">
                Save
            </button>
        </div>
    </form>
</div>

@include('layouts.footer')

@endsection
