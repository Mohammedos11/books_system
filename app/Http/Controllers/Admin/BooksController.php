<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;



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
            )->orderBy('books.created_at', 'desc')->paginate(5);
        return view('books.index', compact('books'));
    }


    public function create()
    {
        $categories = Category::select('categories.*')->get();
        $tags = Tag::select('tags.*')->get();
        $authors = Author::select('authors.*')->get();
        return view('books.create', compact('categories', 'authors', 'tags'));
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

        $book =   Book::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'author_id' => $request->author_id,
            'image' => $imageName,
            'user_id' => 1
        ]);

        $book->tags()->sync($request->tags);



        return redirect()->route('book_index')->with('message', 'Book Added Successfully "' . $request->name . '"');
    }

    function show($id)
    {
        $book = Book::with(['category', 'author', 'tags'])->find($id);
        return view('books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::with(['category', 'author', 'tags'])->find($id);
        $categories = Category::select('categories.*')->get();
        $tags = Tag::select('tags.*')->get();
        $authors = Author::select('authors.*')->get();
        return view('books.edit')->with(['book' => $book, 'categories' => $categories, 'authors' => $authors, 'tags' => $authors]);
    }


    function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|unique:books,name,' . $id,
            'description' => 'required|min:3',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $book = Book::Find($id);

        $array = [];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . Str::random(12) . '.' . $file->getClientOriginalExtension();

            if ($book->image && File::exists(public_path('/book_images/' . $book->image))) {
                File::delete(public_path('/book_images/' . $book->image));
            }

            $file->move(public_path('/book_images/'), $fileName);
            $book->image = $fileName;
        }

        $book->name = $request->name;
        $book->price = $request->price;
        $book->category_id = $request->category_id;
        $book->author_id = $request->author_id;
        $book->description = $request->description;
        $book->save();

        if ($request->has('tags')) {
            $book->tags()->sync($request->tags);
        } else {
            $book->tags()->sync([]);
        }

        return redirect()->route('book_index')->with('message', 'Book Updated successfully');
    }

    function delete($id)
    {
        $book = Book::find($id);
        if ($book->offer()->exists()) {
            return redirect()->back()->with('error', 'You cannot delete this book because it is linked to an offer, delete the offer first');
        }
        $book->delete();
        return redirect()->route('book_index')->with('message', 'book deleted successfully');
    }
}
