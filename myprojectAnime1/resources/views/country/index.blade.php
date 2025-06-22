@extends('layouts.app')

@section('content')
<main class="min-h-screen bg-gray-100 py-12">
    <section class="w-full max-w-3xl mx-auto px-4">
        
        {{-- Title --}}
        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-2">Find your favorite country</h1>
            <p class="text-gray-500">Use the search bar and filters to find countries</p>
        </div>

        {{-- Search Form --}}
        <form 
            action="{{ route('countries.search') }}"
            method="GET" 
            class="bg-white shadow-lg rounded-xl p-6 space-y-4"
        >
            <div class="flex flex-col sm:flex-row gap-4">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Bijv. Italië, Japan, Peru..." 
                    value="{{ request('search') }}" 
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300"
                />

                <select name="days" class="px-4 py-2 border border-gray-300 rounded-lg">
                    <option value="">Filter on days</option>
                    @foreach([1, 5, 10, 15, 20, 25] as $day)
                        <option value="{{ $day }}" {{ request('days') == $day ? 'selected' : '' }}>
                            {{ $day }} day{{ $day > 1 ? 's' : '' }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="text-right">
                <button 
                    type="submit" 
                    class="bg-red-500 hover:bg-red-600 text-white font-semibold px-6 py-2 rounded-lg transition"
                >
                    🔍 Search
                </button>
            </div>
        </form>

        {{-- Search Results --}}
        @if (!empty($search) && $countries->count() > 0)
            <ul class="mt-10 space-y-8">
                @foreach ($countries as $country)
                    <li class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img 
                            src="{{ asset('storage/' . $country->img) }}" 
                            alt="{{ $country->name }}" 
                            class="w-full h-64 object-cover"
                        >

                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-1">{{ $country->name }}</h3>
                            <p class="text-sm text-gray-600 mb-1">📅 Activation days: <strong>{{ $country->days }}</strong></p>
                            <p class="text-sm text-gray-600 mb-2">🔥 Number of activations: <strong>{{ $country->activations }}</strong></p>

                            <a href="{{ url('/countries/' . $country->id . '/detail') }}"
                               class="inline-block mt-4 bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded transition">
                                More info →
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>

            {{-- Pagination --}}
            <div class="mt-10 text-center">
                {{ $countries->appends(request()->query())->links() }}
            </div>

        @elseif (!empty($search))
            <div class="mt-10 text-center text-gray-500">
                <p>😕 No results: <strong>"{{ $search }}"</strong></p>
            </div>
        @else
            @include('components.country-found')
        @endif
    </section>
</main>

@include('layouts.footer')
@endsection
