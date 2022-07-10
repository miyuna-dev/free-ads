<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use App\Rules\Uppercase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request; // super object/instance

class PostController extends Controller
{
    public function showPosts() 
    {

        $posts = Post::all();
        
        // $posts->update([
        //     'title' => substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',15)),0,15)
        // ]);

        
        return view('articles', [
            'posts' => $posts
        ]);
        
        //! Examples below
        // $lists = [
        //     'Jujutsu Kaisen',
        //     'Sakura Hanabi'
        // ];
        // return view('articles', [
            // 'lists' => $lists;
        // ]);
        // $title = 'Jujutsu Kaisen';
        // $title2 = 'Sakura';
        // return view('articles')->with('title', 'title2');
        // return view('articles', compact('posts'));
        // return view('articles', [
        //     'title' => $title,
        //     'title2' => $title2
        // ]);
    }

    public function showArticles($id) 
    {

        $post = Post::findOrFail($id); // find id and if not found return 404 error

        // $decimals = 2;
        // $pow = pow(100, $decimals);

        // $price = mt_rand (10*$pow, 100*$pow) / $pow;
        
        return view('article', [
            'post' => $post
        ]);

        //! Examples below
        // $post = Post::where('title', 'Voluptatem rerum voluptatem et fuga in.')->firstOrFail();
    
        // $posts = [
        //     1 => 'Title One',
        //     2 => 'Title Two',
        // ];
        
        // $post = $posts[$id] ?? 'No Title';
    }

    public function createArticles()
    {
        return view('create');
    }


    public function storeArticles(Request $request)
    {
        // $request->validate([
        //     'title' => ['required', 'min:5', 'max:40', 'unique:posts'],
        //     'description' => 'required|min:10|max:222',
        //     'price' => 'required|min:2|max:1000'
        // ]);

        $filename = time() . '.' . $request->image->extension();

        $path = $request->file('image')->storeAs(
            'images',
            $filename,
            'public'
        );
        
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        
        $image = new Image();
        $image->path = $path;

        $post->image()->save($image); // register id post linked to img in bdd
        
        dd('Post created !');

        //! Example below
        // $img = Storage::disk('local')->put('images', $request->image); STOCK IMG IN STORAGE
        // return Storage::download($img); // make user download img
        // dd($request->image->store('images'));
        // dd($request->file('image'));
        // dd($request->fullUrlWithQuery(['name' => 'new']));
    }

    public function showContact()
    {
        return view('register');
    }
}
