@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center mt-16">
    <div class="bg-white border border-gray-200 rounded-xl shadow-lg p-10 w-full max-w-5xl">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-10">
            <div>
                <img src="{{ asset('storage/' . $country->img) }}" alt="{{ $country->name }}" class="w-full h-96 object-cover rounded-lg shadow-md">
            </div>

            <div class="flex flex-col justify-center">
                <h1 class="text-5xl font-bold text-gray-900 mb-4">{{ $country->name }}</h1>
                <p class="text-lg text-gray-700"><strong class="text-gray-900">Intro:</strong> {{ $country->intro }}</p>
            </div>
        </div>

        <div class="bg-gray-50 border border-gray-100 p-6 rounded-lg shadow-sm space-y-4">
            <p class="text-lg text-gray-700"><strong class="text-gray-900">Description:</strong> {{ $country->description }}</p>
            <p class="text-lg text-gray-700"><strong class="text-gray-900">Activations:</strong> {{ $country->activations }}</p>
            <p class="text-lg text-gray-700"><strong class="text-gray-900">Activation days:</strong> {{ $country->days }}</p>
        </div>

        <section class="mt-12">
            <div class="bg-gray-50 border border-gray-200 rounded-xl p-8 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Leave a comment !</h2>

                <form action="{{ route('countries.comments.store', $country->id) }}" method="POST" class="space-y-4">
                    @csrf
                    <input 
                        type="text" 
                        name="content" 
                        placeholder="Schrijf je reactie..." 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-red-400"
                    />
                    <div class="text-right">
                        <button 
                            type="submit" 
                            class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-lg font-semibold transition">
                            Submit
                        </button>
                    </div>
                </form>

                <div class="mt-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Comments</h3>
                    <ul class="space-y-4">
                        @forelse($country->posts as $post)
                            <li class="bg-white border border-gray-100 rounded-lg p-4 flex justify-between items-center shadow-sm">
                                <div class="flex items-center gap-2 text-gray-700">
                                    <i class="fas fa-comment text-gray-400"></i>
                                    <span>{{ $post->content }}</span>
                                </div>
                                <a 
                                    href="{{ route('countries.comments.edit', [$country->id, $post->id]) }}" 
                                    class="text-red-500 hover:text-red-700 transition">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </li>
                        @empty
                            <p class="text-gray-500">No comments yet.</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </section>

        <div class="mt-10 text-center">
            <a href="/" class="inline-block bg-red-500 hover:bg-red-600 text-white py-2 px-6 rounded-lg font-medium shadow-md transition">
                Back to Home
            </a>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection
