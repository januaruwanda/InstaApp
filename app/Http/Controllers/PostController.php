<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::select('posts.*', 'users.name')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->get();
        // dd($posts);

        // $posts = Post::paginate(8);
        return view('index', compact('posts'));
    }

    public function createPost(Request $request)
    {

        $posting = new Post;
        $posting->user_id = auth()->user()->id;
        $posting->caption = $request['caption'];
        $posting->gambar = $request['gambar'];

        $posting->save();

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $posting->gambar = $request->file('gambar')->getClientOriginalName();
            $posting->save();
        }

        return redirect('/')->with('success', 'Berhasil Posting');
    }
}
