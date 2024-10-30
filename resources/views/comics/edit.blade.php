@extends('layouts.app')

@section('page-title', 'Edit Comic')

@section('main-content')
<h1>Edit Comic</h1>

<form action="{{ route('comics.update', $comic) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required>{{ $comic->description }}</textarea>
    </div>
    <div>
        <label for="thumb">Thumbnail URL</label>
        <input type="url" name="thumb" id="thumb" value="{{ $comic->thumb }}" required>
    </div>
    <div>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" step="0.01" value="{{ $comic->price }}" required>
    </div>
    <div>
        <label for="series">Series</label>
        <input type="text" name="series" id="series" value="{{ $comic->series }}" required>
    </div>
    <div>
        <label for="sale_date">Sale Date</label>
        <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}" required>
    </div>
    <div>
        <label for="type">Type</label>
        <input type="text" name="type" id="type" value="{{ $comic->type }}" required>
    </div>
    <button type="submit">Update Comic</button>
</form>

<a href="{{ route('comics.index') }}">Back to List</a>
@endsection
