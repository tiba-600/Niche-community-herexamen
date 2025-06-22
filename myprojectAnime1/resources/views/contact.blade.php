@extends('layouts.app')

@section('content')

    <main class="max-w-4xl mx-auto px-6 py-12">
        {{-- Logo --}}
        <div class="flex justify-center mb-8">
            <img src="{{ asset('images/icon.jpg') }}" alt="Logo" class="w-32 h-32 rounded-full shadow-md">
        </div>

        {{-- Titel & Intro --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900">Contact Us</h1>
            <p class="mt-4 text-lg text-gray-600">Have questions? We're here to help.</p>
        </div>

        {{-- Contact Info --}}
        <section class="bg-white p-8 rounded-xl shadow-xl space-y-4">
            <h2 class="text-2xl font-semibold text-gray-800">Let's Talk</h2>
            <p class="text-gray-700">
                Send us an email at 
                <a href="mailto:info@example.com" class="text-blue-600 hover:underline">info@example.com</a>
            </p>
            <p class="text-gray-700">
                Call us at 
                <span class="font-bold text-gray-900">+1 234 567 890</span>
            </p>
            <p class="text-gray-700">Need support? We're happy to assist you!</p>
        </section>
    </main>

    @include('layouts.footer')

@endsection
