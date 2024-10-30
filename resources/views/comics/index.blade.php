@extends('layouts.app')

@section('page-title', 'Comics List')

@section('main-content')
<h1>Comics List</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>
                    <a href="{{ route('comics.show', $comic) }}">View</a>
                    <a href="{{ route('comics.edit', $comic) }}">Edit</a>
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this comic?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red;">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('comics.create') }}">Add New Comic</a>
@endsection
