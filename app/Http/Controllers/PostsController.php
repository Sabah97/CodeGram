<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view ('posts.create');
    }
    public function store(){
        $data = request()->validate([
            'caption'=> 'required',
            'image' =>['required', 'image'],
        ]);

        //auth()->user()->posts()->create($data);
        
            $imagePath = (request('image')->store('uploads','public'));

            auth()->user()->posts()->create([
                'caption' => $data['caption'],
                'image' =>$imagePath,
            ]);
        // $user = Auth::user();
        // $user->posts()->create();

       
        // $post=new Post;
        // $post->title=$request->input('title');
        // $post->body=$request->input('body');
        // $post->user_id=auth()->user()->id;
        // // $post->cover_image=$fileNameToStore;
        // $post->save();
        return redirect('/profile/'.auth()->user()->id);
        //return redirect('/posts')->with('success', 'Post created');
       
        // dd(request()->all()); 

    }
}
