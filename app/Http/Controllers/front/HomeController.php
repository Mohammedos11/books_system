<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $latestBooks = Book::latest()->take(10)->get();
        $bannerBooks = $latestBooks->shuffle();

        return view('fronts.home')->with([
            'bannerBooks' => $bannerBooks
        ]);
    }
}
