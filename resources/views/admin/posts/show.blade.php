@extends('layouts.admin')
@section('content')



<div class="container">
    <div>
        <h1>
            {{$post->title}}
        </h1>
        <p>{{$post->content}}</p>
    </div>
    <button type="button" class="btn btn-primary"><a href="{{route('admin.posts.index')}}" class="text-white">Go back</a></button>
    
    
</div>


@endsection

@section('title')
 | {{$post->title}}
@endsection