@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center mt-16">
    <div class="bg-white border border-gray-200 rounded-xl shadow-lg p-10 w-full max-w-5xl">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-10">
            <div>
                @if ($event->img)
                    <img src="{{ asset('storage/' . $event->img) }}" alt="{{ $event->name }}" class="w-full h-96 object-cover rounded-lg shadow-md">
                @else
                    <div class="w-full h-96 bg-gray-100 flex items-center justify-center text-gray-400 rounded-lg">
                        No image description
                    </div>
                @endif
            </div>

            <div class="flex flex-col justify-center">
                <h1 class="text-4xl font-bold text-gray-900 mb-2">{{ $event->name }}</h1>
                <p class="text-lg text-gray-700 mb-1"><strong>Location:</strong> {{ $event->location }}</p>
                <p class="text-lg text-gray-700"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->date)->format('d-m-Y') }}</p>
            </div>
        </div>

        <div class="bg-gray-50 border border-gray-100 p-6 rounded-lg shadow-sm space-y-4">
            <p class="text-lg text-gray-700"><strong>Description:</strong> {{ $event->description }}</p>
        </div>

        <div class="mt-10 text-center">
            <a href="/" class="inline-block bg-red-500 hover:bg-red-600 text-white py-2 px-6 rounded-lg font-medium shadow-md transition">
                Back to Home
            </a>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection
