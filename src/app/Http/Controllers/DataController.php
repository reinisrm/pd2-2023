<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class DataController extends Controller
{
    //Atgriez 3 nejausi izveletas gramatas
    public function getTopBooks() 
    {
        return Book::where('display', true)
            ->inRandomOrder()
            ->take(3)
            ->get();
    }
    //Atgriez izveletas gramatas datus
    public function getBook(Book $book) 
    {
        return Book::where([
            'id' => $book->id,
            'display' => true,
        ])
        ->firstOrFail();
    }
    //Atgriez lidzigus ierakstus
    public function getRelatedBooks(Book $book) 
    {
        return Book::where('display', true)
            ->where('id', '<>', $book->id)
            //->where('author_id', $book->author_id)
            ->inRandomOrder()
            ->take(3)
            ->get();
    }
}
