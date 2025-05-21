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

    public function edit($id)
    {
        $books = Book::get();
        $offer = Offer::where('id', '=', $id)->first();
        return view('offers.edit', compact('books', 'offer'));
    }


    public function update(Request $request, $id)
    {

        $validatedValue = $request->validate([
            'offer_price' => 'required|numeric',
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'book_id' => 'required',
        ]);

        $offer = Offer::Where('id', '=', $id)->first();

        $offer->update([
            'offer_price' => $validatedValue['offer_price'],
            'start_date' => $validatedValue['start_date'],
            'end_date' => $validatedValue['end_date'],
            'book_id' => $validatedValue['book_id']
        ]);

        return redirect()->route('offer_index')->with('message', 'Offer updated successfully.');
    }

    public function delete($id)
    {
        $offer = Offer::where('id', $id)->first();
        $offer->delete();
        return redirect()->route('offer_index')->with('message', 'Offer Deleted successfully.');
    }

    function show($id)
    {
        $offer = Offer::find($id);
        return view('offers.show', compact('offer'));
    }
}
