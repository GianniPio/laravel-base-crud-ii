@extends('layouts.main')

@section('content')
   <h1>Edit comic</h1>
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
       
   @endif


   <form action="{{route ('update', $comic -> id)}} "  method="POST">

        @method("POST")
        @csrf

       <label for="title">Title:</label>
       <input type="text" name="title" placeholder="add title" value="{{$comic ->title}}">
       <label for="author">Author:</label>
       <input type="text" name="author" placeholder="add author" value="{{$comic -> author}}">
       <label for="release_date">Date of released:</label>
       <input type="date" name="release_date" value="{{$comic -> release_date}}">
       <label for="pages">Number of pages:</label>
       <input type="number" name="pages" placeholder="add pages" value="{{$comic -> pages}}">
       <input type="submit" value="Update">

   </form>
@endsection