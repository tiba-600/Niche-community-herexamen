@extends('layouts.app')

@section('content') 

<div class="createTitle">
    <h1>Create Country</h1>
</div>

<form action="{{ route('countries.store') }}" enctype="multipart/form-data" method="post" class="simpelform">
    @csrf

    <div class="simpelform__flex"> 
        <label for="name">Name</label>
        <input id="name" type="text" name="name" placeholder="Naam" value="{{ old('name') }}">
        @error('name') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="description">Description</label>
        <input id="description" type="text" name="description" placeholder="Beschrijving" value="{{ old('description') }}">
        @error('description') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="intro">Intro</label>
        <input id="intro" type="text" name="intro" placeholder="Intro" value="{{ old('intro') }}">
        @error('intro') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="activations">Activations</label>
        <input id="activations" type="text" name="activations" placeholder="Activiteiten" value="{{ old('activations') }}">
        @error('activations') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="days">Days</label>
        <input id="days" type="number" name="days" placeholder="Days" value="{{ old('days') }}">
        @error('days') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="img">Image</label>
        <input id="img" type="file" name="img" accept="image/*">
        @error('img') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <button type="submit">Save</button>
</form>
@endsection
