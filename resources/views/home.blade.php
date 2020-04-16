@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-4">
            <img src="data:image/png;base64,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" alt="" width="70%" class="rounded-circle">
        </div>
        <div class="col-9 pt-4 ">
            <div class="d-flex justify-content-between allign-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
            <div class="pr-5"><strong>153</strong> posts</div>
            <div class="pr-5"><strong>123</strong> followers</div>
            <div class="pr-5"><strong>153</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
            <div class="row pt-5">
                <div class="col-4 pr-4 ">
                    <img src="https://images.unsplash.com/photo-1560769680-ba2f3767c785?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80"  height ="80%" alt="" class="w-100">
                </div>
                <div class="col-4 pr-4 ">
                    <img src="https://images.unsplash.com/photo-1574782218268-1e7aa082b2e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80"  height ="80%" alt="" class="w-100">
                </div>
                <div class="col-4 pr-4 ">
                    <img src="https://images.unsplash.com/photo-1586336316545-e56c5cc6a7b6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"  height ="80%" alt="" class="w-100">
                </div>
            </div>
            
        </div>
</div>
@endsection
