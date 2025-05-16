<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Offer;
use Illuminate\Http\Request;

class offersController extends Controller
{
    public function index()
    {
        $offers = Offer::paginate(5);
        return view('offers.index', compact('offers'));
    }

    public function create()
    {
        $books = Book::get();
        return view('offers.create', compact('books'));
    }

    function store_offer(Request $request)
    {
        $request->validate([
            'offer_price' => 'required|numeric',
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'book_id' => 'required',
        ]);
        Offer::create([
            'offer_price' => $request->offer_price,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'book_id' => $request->book_id,
        ]);

        return redirect()->route('offer_index')->with('message', 'Offer Added successfully');
    }
}
