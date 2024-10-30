@extends('layouts.app')

@section('page-title', 'Add New Comic')

@section('main-content')
<h1>Add New Comic</h1>

<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <div>
        <label for="thumb">Thumbnail URL</label>
        <input type="url" name="thumb" id="thumb" required>
    </div>
    <div>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" step="0.01" required>
    </div>
    <div>
        <label for="series">Series</label>
        <input type="text" name="series" id="series" required>
    </div>
    <div>
        <label for="sale_date">Sale Date</label>
        <input type="date" name="sale_date" id="sale_date" required>
    </div>
    <div>
        <label for="type">Type</label>
        <input type="text" name="type" id="type" required>
    </div>
    <button type="submit">Add Comic</button>
</form>

<a href="{{ route('comics.index') }}">Back to List</a>
@endsection
