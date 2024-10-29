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
</main>

@endsection
