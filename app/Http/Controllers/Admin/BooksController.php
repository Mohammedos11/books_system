<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{

    public function index()
    {
        // $books = Book::with(['category', 'authors', 'users'])->paginate(5);

        $books = DB::table('books')
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->select(
                'books.*',
                'categories.name as category_name',
                'authors.name as author_name',
                'users.name as user_name',
                DB::raw("DATE_FORMAT(books.created_at, '%Y-%m-%d') as Date"),
            )
            ->paginate(5);
        return view('books.index', compact('books'));
    }


    public function create()
    {
        $categories = Category::select('categories.*')->get();
        $authors = Author::select('authors.*')->get();
        return view('books.create', compact('categories', 'authors'));
    }


    public function store_book(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:books,name',
            'description' => 'required|min:3',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('book_images/'), $imageName);
        }

        Book::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'author_id' => $request->author_id,
            'image' => $imageName,
            'user_id' => 1
        ]);

        return redirect()->route('book_index')->with('message', 'Book Added Successfully "' . $request->name . '"');
    }

    function show($id)
    {
        $book = Book::with(['category', 'author'])->find($id);
        return view('books.show', compact('book'));
    }
}
