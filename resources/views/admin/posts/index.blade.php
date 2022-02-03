@extends('layouts.admin')
@section('content')

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col" colspan="2">Title</th>
            
            
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>
              <button type="button" class="btn btn-primary mx-2"><a href="{{route('admin.posts.show',$post)}}" class="text-white">Show</a></button>
              <button type="button" class="btn btn-success mx-2"><a href="{{route('admin.posts.edit',$post)}}" class="text-white">Edit</a></button>
              <button type="button" class="btn btn-dangermx-2">Delete</button>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
</div>


@endsection

@section('title')
 | Posts
@endsection