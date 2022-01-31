@extends('layouts/main')

@section('content')

    <h3>
        <a href="{{route('create')}}">Create</a>
    </h3><br><br>

    <ul>
        @foreach ($comics as $comic)
            <li> <a href="{{route('comic', $comic -> id)}}"> {{$comic -> title}}</a></li>
        @endforeach
    </ul>
@endsection