<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     
    public function index()
    {
        Post::withTrashed()->find(3)->restore();
        $posts = Post::all();
        // $posts->delete();
        dd($posts);
        // return view('main')->with('posts', $posts); 

        return "success";       

        /* 
        * Table ga content yaratish 
        * 1 usul 
        */

        // $newPost = new Post;
        // $newPost->title = 'new post';
        // $newPost->short_content = 'new post short content';
        // $newPost->content = 'new post content';
        // $newPost->photo = '/storage/new_post.png';

        // $newPost->save();


        /* 
        * Table ga content yaratish 
        * 2 usul 
        */

        // $newPost = Post::create([
        //     'title' => 'ali',
        //     'short_content' => 'vali content',
        //     'content' => 'content',
        //     'photo' => '/rasm.jpg', 
        // ]);  
        
        // #bazadagi malumotni hammasini ochirish
        // // Post::truncate();
        
        // return 'yes';


        /* 
        * Table contentni update qilish
        * 1 usul 
        */
        // $post = Post::find(4);
        // $post->title = 'O\'zgartirilgan';

        // $post->save();
        // return 'yes';

        // return view('posts.index');             


           /* 
        * Table contentni update qilish
        *2 usul 
        */

        // $post = Post::find(4)->update(['title' => "Ozgartirildi"]);
        // return 'yest';
        /*
        * o'chirish
        */

        // $post = Post::find(1);

        // $post->delete();
        // return 'yess';

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
