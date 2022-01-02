<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function show(\App\Models\Post $post) 
    {
        return view('posts.show', compact('post'));
    }

    public function create() 
    {
        return view('posts.create');
    }

    public function store() 
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);
        //\App\Models\Post::create($data);

        $imgPath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/".$imgPath))->fit(300, 300);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imgPath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }
}
