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
}
