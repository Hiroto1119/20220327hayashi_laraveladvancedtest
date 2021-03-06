<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->save();

        return redirect('/thanks');
    }
    public function thanks()
    {
        return view('thanks');
    }
}
