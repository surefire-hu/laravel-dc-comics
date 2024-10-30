@extends('layouts.app')

@section('title', 'DC Comics - Home')

@section('main')
<main>
    <div class="jumbotron"></div>
    <div class="current-series">
        <h2>Current Series</h2>
    
        <div class="row">
            @foreach ($comics as $element)
                <div class="col-2">
                    <img src="{{ $element['thumb'] }}" alt="{{ $element['title'] }}">
                    <h5>{{ $element['title'] }}</h5>
                    <a href="{{ route('comics.show', $element['id']) }}">View</a>
                    <a href="{{ route('comics.edit', $element['id']) }}">Edit</a>
                    <form action="{{ route('comics.destroy', $element['id']) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this comic?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red;">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    <div class="bg-blue">
        <div>
            <ul>
                @foreach ($menuItems as $item)
                <li>
                    <img src="{{Vite::asset('resources/img/' . $item['img'])}}" alt="">
                    <span>{{ $item['name'] }}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <a href="{{ route('comics.create') }}">Add New Comic</a>
</main>

@endsection
