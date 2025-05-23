<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserApiController extends Controller
{
    public function index()
    {
        $users = User::select(
            'id',
            'name',
            'image',
            'email',
            'role',
            'created_at',
            DB::raw("DATE_FORMAT(users.created_at, '%Y-%m-%d') as Date")
        )->get();


        foreach ($users as $user) {
            $user->image = $user->image
                ? asset('user_images/' . $user->image)
                : asset('user_images');
        }

        return response()->json([
            'success' => true,
            'message' => 'Users Fetch Succcessfully',
            'data' => $users
        ], 200);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role' => 'required|in:admin,user',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('user_images/'), $imageName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'image' => $imageName,
        ]);

        $imageUrl = asset('user_images/' . $imageName);
        $userData = $user->toArray();
        $userData['image_url'] = $imageUrl;

        return response()->json([
            'success' => true,
            'message' => 'Users Added successfully',
            'data' => $userData
        ], 200);
    }

    function show($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }
        $userData = $user->toArray();
        $userData['created_at'] = \Carbon\Carbon::parse($userData['created_at'])->format('Y-m-d');
        $userData['updated_at'] = \Carbon\Carbon::parse($userData['updated_at'])->format('Y-m-d');

        $user->image_url = $user->image
            ? asset('user_images/' . $user->image)
            : asset('user_images/default.png');

        return response()->json([
            'success' => true,
            'message' => 'User fetched successfully',
            'data' => $userData
        ], 200);
    }

    function delete($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'User deleted successfully',
            'data' => $user
        ], 200);
    }
}
