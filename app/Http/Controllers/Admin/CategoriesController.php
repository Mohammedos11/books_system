<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    function index()
    {
        $categories = Category::paginate(5);
        return view('categories.index', compact('categories'));
    }


    public function create()
    {
        return view('categories.create');
    }


    public function store_category(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);


        Category::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('category_index')->with('message', 'Category Added Successfully "' . $request->name . '"');
    }

    function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }


    function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category_index')->with('message', 'category deleted successfully');
    }

    function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);

        $category = Category::Find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category_index')->with('message', 'category Updated successfully');
    }

    function show($id)
    {
        $category = category::find($id);
        return view('categories.show', compact('category'));
    }
}
