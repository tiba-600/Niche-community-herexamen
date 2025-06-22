@extends('layouts.app')

@section('content') 

<div class="createTitle">
    <h1>Update Event</h1>
</div>

<form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data" class="simpelform">
    @csrf
    @method('PUT')

    <div class="simpelform__flex"> 
        <label for="name">Name</label>
        <input id="name" type="text" name="name" placeholder="Name" value="{{ old('name', $event->name) }}">
        @error('name') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Description">{{ old('description', $event->description) }}</textarea>
        @error('description') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="location">Location</label>
        <input id="location" type="text" name="location" placeholder="Location" value="{{ old('location', $event->location) }}">
        @error('location') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="date">Date</label>
        <input id="date" type="date" name="date" value="{{ old('date', \Carbon\Carbon::parse($event->date)->format('Y-m-d')) }}">
        @error('date') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="img">Image (option)</label>
        <input id="img" type="file" name="img" accept="image/*">
        @error('img') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    @if ($event->img)
        <div class="simpelform__flex">
            <p>Current image:</p>
            <img src="{{ asset('storage/' . $event->img) }}" alt="Huidige afbeelding" class="w-48 h-auto mt-2 rounded shadow">
        </div>
    @endif

    <button type="submit">Save</button>
</form>
@endsection
