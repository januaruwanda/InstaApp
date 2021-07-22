<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Like;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::select('posts.*', 'users.name')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->get();
        // dd($posts);

        // $posts = Post::paginate(8);
        // $hitung = count(Katalogbonsai::where('status','!=',0)->get());
        return view('index', compact('posts'));
    }

    public function createPost(Request $request)
    {

        $posting = new Post;
        $posting->user_id = auth()->user()->id;
        $posting->caption = $request['caption'];
        $posting->gambar = $request['gambar'];
        // dd($posting);

        $posting->save();

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $posting->gambar = $request->file('gambar')->getClientOriginalName();
            $posting->save();
        }

        return redirect('/')->with('success', 'Berhasil Posting');
    }

    public function likePost($id)
    {
        $likes = new Like;
        $likes->user_id = auth()->user()->id;
        $likes->post_id = $id;
        $likes->likes = 1;
        // dd($likes);
        $likes->save();

        Post::where('id', $id)
                ->update([
                    'flag'=> DB::raw('flag+1'), 
                  ]);
    }

    public function unlikePost($id)
    {
        Post::where('id', $id)
                ->update([
                    'flag'=> DB::raw('flag-1'), 
                  ]);
    }

    public function commentPost($id)
    {

    }
}
