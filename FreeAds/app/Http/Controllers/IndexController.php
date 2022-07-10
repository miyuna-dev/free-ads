<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Articles;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function showIndex()
    {

        // $posts = Post::all();
        $posts = Post::orderByRaw("RAND()")->get();

        return view('index', [
            'posts' => $posts
        ]);
    }
}
