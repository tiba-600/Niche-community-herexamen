@extends('layouts.app')

@section('content') 

<div class="createTitle">
    <h1>New Event create</h1>
</div>

<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="simpelform">
    @csrf

    <div class="simpelform__flex">
        <label for="name">Name <span class="required">*</span></label>
        <input 
            id="name" 
            type="text" 
            name="name" 
            value="{{ old('name') }}" 
            placeholder="Bijv. Zomerfestival"
            required
        >
        @error('name')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="description">Description <span class="required">*</span></label>
        <textarea 
            id="description" 
            name="description" 
            rows="3" 
            placeholder="Beschrijf het event"
            required
        >{{ old('description') }}</textarea>
        @error('description')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="date">Date <span class="required">*</span></label>
        <input 
            id="date" 
            type="date" 
            name="date" 
            value="{{ old('date') }}" 
            required
        >
        @error('date')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="location">Location <span class="required">*</span></label>
        <input 
            id="location" 
            type="text" 
            name="location" 
            value="{{ old('location') }}" 
            placeholder="Bv. London"
            required
        >
        @error('location')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="img">Image (option)</label>
        <input 
            id="img" 
            type="file" 
            name="img" 
            accept="image/*"
        >
        @error('img')
            <div class="error-message">{{ $message }}</div>
        @enderror
    </div>

    {{-- Submit --}}
    <div class="simpelform__flex">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

@endsection
