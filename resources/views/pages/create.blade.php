@extends('layouts.main')

@section('content')
   <h1>Add new comic</h1>
   <form>
       <label for="title">Title:</label>
       <input type="text" name="title" placeholder="add title">
       <label for="author">Author:</label>
       <input type="text" name="author" placeholder="add author">
       <label for="release_date">Date of released:</label>
       <input type="date" name="release_date">
       <label for="pages">Number of pages:</label>
       <input type="number" name="pages" placeholder="add pages">
       <input type="submit" value="Create">

   </form>
@endsection