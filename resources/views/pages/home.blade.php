@extends('layouts/main')

@section('content')
    <ul>
        @foreach ($comics as $comic)
            <li> <a href="{{route('comic', $comic -> id)}}"> {{$comic -> title}}</a></li>
        @endforeach
    </ul>
@endsection