<?php

namespace App\Http\Controllers;
use App\Post;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class PostsController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }
    // public function home(){
    //     $people=['Charizard', 'Mewtwo', 'Blastoise'];
    //     // dd($users);
    //     return view('pages.index', compact('people'));
    // }

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts=Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);
       
        return view('posts.index', compact('posts'));
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
            $image =  Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
            $image->save();

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


    public function show(\App\Post $post){
        //dd($post);
      
        return view('posts.show', compact('post'));
    }

    
}
