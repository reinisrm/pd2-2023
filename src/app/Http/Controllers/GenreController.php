<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;

class GenreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // display all genres
    public function list()
    {
        $items = Genre::orderBy('name', 'asc')->get();

        return view(
            'genre.list',
            [
                'title' => 'Žanri',
                'items' => $items,
            ]
        );
    }

    //display new genre form
    public function create() 
    {
        return view(
            'genre.form',
            [
                'title' => 'Pievienot jaunu žanru',
                'genre' => new Genre(),
            ]
        );
    }

    //save new genre
    public function put(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $genre = new Genre();
        $genre->name = $validatedData['name'];
        $genre->save();

        return redirect('/genres');
    }

    //display genre update form
    public function update(Genre $genre) 
    {
        return view(
            'genre.form',
            [
                'title' => 'Rediget žanru', 
                'genre' => $genre, 
            ]
        );
    }
    //update existing objects
    public function patch(Genre $genre, Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $genre->name = $validatedData['name'];
        $genre->save();

        return redirect('/genres');
    }
    public function delete(Genre $genre)
    {
        $genre->delete();
        return redirect('/genres');
    }
}
