<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(5);

        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store_user(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'required|in:admin,user',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('user_images/'), $imageName);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'image' => $imageName,
        ]);

        return redirect()->route('user_index')->with('message', 'User Added Successfully "' . $request->name . '"');
    }

    function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }


    function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user_index')->with('message', 'User deleted successfully');
    }

    function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|unique:users,name,' . $id,
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'role' => 'required|in:admin,user',
            'password' => 'nullable|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::Find($id);

        $array = [];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . Str::random(12) . '.' . $file->getClientOriginalExtension();

            if ($user->image && File::exists(public_path('/user_images/' . $user->image))) {
                File::delete(public_path('/user_images/' . $user->image));
            }

            $file->move(public_path('/user_images/'), $fileName);
            $user->image = $fileName;
        }


        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->save();
        return redirect()->route('user_index')->with('message', 'User Updated successfully');
    }

    function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }
}
