@extends('layouts/main')

@section('content')

    <h3>
        <a href="{{route('create')}}">Create</a>
    </h3><br><br>

    <ul>
        @foreach ($comics as $comic)
            <li> <a href="{{route('comic', $comic -> id)}}"> {{$comic -> title}}</a> 
                -- <a href="{{route('edit', $comic -> id)}}">Edit</a>
                -- <a href="{{route('delete', $comic -> id)}}">Delete</a></li>
        @endforeach
    </ul>
@endsection