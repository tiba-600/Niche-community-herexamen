@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reactie toevoegen aan {{ $country->name }}</h1>

    <form action="{{ route('countries.comments.store', $country->id) }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="content" class="block text-lg font-medium">Reactie</label>
            <textarea 
                id="content" 
                name="content" 
                rows="3" 
                placeholder="Schrijf je reactie hier..." 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300"
                required
            ></textarea>
        </div>
        <button 
            type="submit" 
            class="bg-red-400 text-white px-4 py-2 rounded-lg hover:bg-red-300 focus:ring-2 focus:ring-red-200 focus:outline-none"
        >
            Verzenden
        </button>
    </form>
</div>
@endsection
