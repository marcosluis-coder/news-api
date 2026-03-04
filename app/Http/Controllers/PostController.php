<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 🔓 Públic
    public function index()
    {
        return Post::all();
    }

    // 🔓 Públic
    public function show($id)
    {
        return Post::findOrFail($id);
    }

    // 🔐 Privat
    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    // 🔐 Privat
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return response()->json(['message' => 'Post deleted']);
    }
}
