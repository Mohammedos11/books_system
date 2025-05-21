<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    function index()
    {
        $authors = Author::paginate(5);
        return view('authors.index', compact('authors'));
    }


    public function create()
    {
        return view('authors.create');
    }


    public function store_author(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);


        Author::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('author_index')->with('message', 'author Added Successfully "' . $request->name . '"');
    }

    function edit($id)
    {
        $author = Author::find($id);
        return view('authors.edit', compact('author'));
    }


    function delete($id)
    {
        $author = Author::find($id);
        $author->delete();
        return redirect()->route('author_index')->with('message', 'author deleted successfully');
    }

    function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|unique:authors,name,' . $id,
        ]);

        $author = Author::Find($id);
        $author->name = $request->name;
        $author->save();
        return redirect()->route('author_index')->with('message', 'author Updated successfully');
    }

    function show($id)
    {
        $author = Author::find($id);
        return view('authors.show', compact('author'));
    }
}
