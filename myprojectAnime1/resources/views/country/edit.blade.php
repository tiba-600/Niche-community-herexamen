@extends('layouts.app')

@section('content') 

<div class="createTitle">
    <h1>Update Country</h1>
</div>

<form action="{{ route('countries.update', $country->id) }}" method="POST" enctype="multipart/form-data" class="simpelform">
    @csrf
    @method('PUT')

    <div class="simpelform__flex"> 
        <label for="name">Name</label>
        <input id="name" type="text" name="name" placeholder="Name" value="{{ old('name', $country->name) }}">
        @error('name') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="description">Description</label>
        <input id="description" type="text" name="description" placeholder="description" value="{{ old('description', $country->description) }}">
        @error('description') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="intro">Intro</label>
        <input id="intro" type="text" name="intro" placeholder="Intro" value="{{ old('intro', $country->intro) }}">
        @error('intro') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="activations">Activations</label>
        <input id="activations" type="text" name="activations" placeholder="Activiteiten" value="{{ old('activations', $country->activations) }}">
        @error('activations') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="days">Days</label>
        <input id="days" type="number" name="days" placeholder="Aantal dagen" value="{{ old('days', $country->days) }}">
        @error('days') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <div class="simpelform__flex">
        <label for="img">Images</label>
        <input id="img" type="file" name="img" accept="image/*">
        @error('img') 
            <div class="error-message">{{ $message }}</div> 
        @enderror
    </div>

    <button type="submit">Save</button>
</form>
@endsection
