@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center">
        <h1>Welcome to CodeGram!</h1>
        <p>Here you can post pictures</p>
        {{-- <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
           <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p> --}}
    </div>
   @foreach($posts as $post)
   <div class="row ">
    <div class="col-6 offset-3">
        <a href="/profile/{{$post->user->id}}">
        <img src="/storage/{{$post->image}}" alt="" class="w-100">
    </a>
    </div>
   </div>
   <div class="row pt-2 pb-4">
    <div class="col-6 offset-3">
        <div >
            {{-- <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 50px">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark">{{$post->user->username}}</span></a>  |
                            <a href="#" class="pl-3">Follow</a>
                            </div>
                </div>
            </div>
            <hr> --}}
         
           
            <p><span class="font-weight-bold">
                <a href="/profile/{{$post->user->id}}"> 
                    <span class="text-dark">{{$post->user->username}}</span>
                 </a></span>
                 {{$post->caption}}</p>
            
        </div>
    </div>
</div>
@endforeach
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{$posts->links()}}
    </div>
</div>
    
</div>
@endsection
