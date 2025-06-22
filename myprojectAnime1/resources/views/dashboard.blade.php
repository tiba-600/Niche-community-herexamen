<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-red-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">

                {{-- Welkomstbericht --}}
                <div class="p-6 text-center text-gray-900">
                    <h3 class="text-xl font-bold mb-4">{{ __("Welcome Back!") }}</h3>
                    <p class="text-gray-600">{{ __("You're logged in!") }}</p>
                </div>

                {{-- Navigatie --}}
                <div class="p-6 bg-gray-50 border-t">
                    <nav class="flex gap-6 justify-center">
                        <a href="{{ route('countries.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">Add Country</a>
                        <a href="{{ route('events.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded shadow">Add Event</a>
                    </nav>
                </div>

                {{-- COUNTRIES --}}
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-6">Countries:</h4>

                    <div class="flex flex-wrap gap-6">
                        @forelse ($countries as $country)
                            <div class="bg-gray-100 rounded-lg shadow-sm p-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">

                                {{-- Actieknoppen --}}
                                <div class="flex flex-col gap-2 mb-3">
                                    {{-- Delete --}}
                                    <form action="{{ route('dashboard.destroy', $country->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit land wil verwijderen?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded w-full flex items-center justify-center gap-2">
                                            Delete
                                        </button>
                                    </form>

                                    {{-- Edit --}}
                                    <a href="{{ route('countries.edit', $country->id) }}"
                                       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded w-full flex items-center justify-center gap-2">
                                        Edit
                                    </a>
                                </div>

                                {{-- Afbeelding --}}
                                <img src="{{ asset('storage/' . $country->img) }}"
                                     alt="{{ $country->name }}"
                                     class="w-full h-40 object-cover rounded-lg shadow mb-3">

                                {{-- Informatie --}}
                                <h5 class="text-md font-semibold text-gray-700 mb-1">
                                    <a href="{{ url('/countries/' . $country->id . '/detail') }}" class="hover:underline">
                                        {{ $country->name }}
                                    </a>
                                </h5>
                                <p class="text-gray-600 text-sm mb-3"><strong>Activation days:</strong> {{ $country->days }}</p>

                                {{-- Meer --}}
                                <a href="{{ url('/countries/' . $country->id . '/detail') }}"
                                   class="block bg-red-400 hover:bg-red-500 text-white text-center py-2 px-4 rounded">
                                    More
                                </a>
                            </div>
                        @empty
                            <p class="text-gray-500">No countries found.</p>
                        @endforelse
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-6">
                        {{ $countries->links() }}
                    </div>
                </div>

                {{-- EVENTS --}}
                <div class="p-6">
                    <h4 class="text-lg font-bold mb-6">Events:</h4>

                    <div class="flex flex-wrap gap-6">
                        @forelse ($events as $event)
                            <div class="bg-gray-100 rounded-lg shadow-sm p-4 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">

                                {{-- Actieknoppen --}}
                                <div class="flex flex-col gap-2 mb-3">
                                    {{-- Delete --}}
                                    <form action="{{ route('dashboard.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit event wil verwijderen?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded w-full flex items-center justify-center gap-2">
                                            Delete
                                        </button>
                                    </form>

                                    {{-- Edit --}}
                                    <a href="{{ route('events.edit', $event->id) }}"
                                       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded w-full flex items-center justify-center gap-2">
                                        Edit
                                    </a>
                                </div>

                                {{-- Afbeelding --}}
                                @if ($event->img)
                                    <img src="{{ asset('storage/' . $event->img) }}"
                                         alt="{{ $event->name }}"
                                         class="w-full h-40 object-cover rounded-lg shadow mb-3">
                                @endif

                                {{-- Informatie --}}
                                <h5 class="text-md font-semibold text-gray-700 mb-1">
                                    <a href="{{ route('events.show', $event->id) }}" class="hover:underline">
                                        {{ $event->name }}
                                    </a>
                                </h5>
                                <p class="text-gray-600 text-sm mb-1"><strong>Datum:</strong> {{ \Carbon\Carbon::parse($event->date)->format('d-m-Y') }}</p>
                                <p class="text-gray-600 text-sm mb-3"><strong>Locatie:</strong> {{ $event->location }}</p>
                                <p class="text-gray-500 text-sm">{{ \Illuminate\Support\Str::limit($event->description, 80) }}</p>

                                {{-- Meer --}}
                                <a href="{{ route('events.show', $event->id) }}"
                                   class="block mt-3 bg-red-400 hover:bg-red-500 text-white text-center py-2 px-4 rounded">
                                    Meer info
                                </a>
                            </div>
                        @empty
                            <p class="text-gray-500">No events find.</p>
                        @endforelse
                    </div>

                    {{-- Pagination --}}
                    <div class="mt-6">
                        {{ $events->links() }}
                    </div>
                </div>

                {{-- Footer --}}
                <div class="border-t border-gray-200 p-4 text-right">
                    <a href="/" class="bg-red-300 hover:bg-red-400 text-white px-4 py-2 rounded-md">
                        {{ __('Back to Home') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
