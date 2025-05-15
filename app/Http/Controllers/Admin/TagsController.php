<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    function index()
    {
        $tags = Tag::paginate(5);
        return view('tags.index', compact('tags'));
    }


    public function create()
    {
        return view('tags.create');
    }


    public function store_tag(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);


        Tag::create([
            'name' => $request->name,
            'user_id' => 1,
        ]);

        return redirect()->route('tag_index')->with('message', 'Tag Added Successfully "' . $request->name . '"');
    }

    function edit($id)
    {
        $tag = Tag::find($id);
        return view('tags.edit', compact('tag'));
    }


    function delete($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect()->route('tag_index')->with('message', 'tag deleted successfully');
    }

    function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|unique:tags,name,' . $id,
        ]);

        $tag = Tag::Find($id);
        $tag->name = $request->name;
        $tag->save();
        return redirect()->route('tag_index')->with('message', 'tag Updated successfully');
    }

    function show($id)
    {
        $tag = Tag::find($id);
        return view('tags.show', compact('tag'));
    }
}
