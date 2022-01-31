<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicController extends Controller
{
    public function home() {
        $comics = Comic::all();

        return view('pages.home', compact('comics'));
    }

    public function comic($id) {
        $comic = Comic::findOrFail($id); 

        return view('pages.singlecomic', compact('comic'));
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        // dd($request -> all()); per vedere cosa contiene la request

      $data = $request -> validate([
          'title' => 'required|string|max:255',
          'author' => 'required|string|max:255',
          'release_date' => 'required|date',
          'pages' => 'required|numeric|max:130|min:20'
      ]); 

    //   dd($data);

      $comic = Comic::create($data); //aggiunge i dat nel database

    //   return redirect() -> route('home'); porta direttamente nella home
      return redirect() -> route('comic', $comic -> id); //porta nella comic del nuovo data creato
    }

    public function edit($id) {
        
        $comic = Comic::findOrFail($id); 

        return view('pages.edit', compact('comic'));
    }
    
    public function update(Request $request, $id) {

        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'release_date' => 'required|date',
            'pages' => 'required|numeric|max:130|min:20'
        ]); 

        $comic = Comic::findOrFail($id);

        $comic -> update($data);

        return redirect() -> route('comic', $comic -> id);
    }

    public function delete($id) {

        $comic = Comic::findOrFail($id);

        $comic -> delete();

        return redirect() -> route('home');
    }

    
}
