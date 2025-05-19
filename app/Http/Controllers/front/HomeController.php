<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $latestBooks = Book::latest()->take(10)->get();
        $bannerBooks = $latestBooks->shuffle()->take(5);
        $featuredBooks = Book::inRandomOrder()->take(6)->get();
        $bestOfBooks = Book::orderByDesc('price')->take(1)->get();
        $categories = Category::get();
        $books = Book::get();

        $booksWithOffer = Book::has('offer')->with('offer')->get();


        return view('fronts.home')->with([
            'bannerBooks' => $bannerBooks,
            'featuredBooks' => $featuredBooks,
            'bestOfBooks' => $bestOfBooks,
            'categories' => $categories,
            'books' => $books,
            'booksWithOffer' => $booksWithOffer
        ]);
    }

    function view_all_books()
    {
        $Allbooks = Book::paginate(8);
        return view('fronts.all_books', compact('Allbooks'));
    }
}
