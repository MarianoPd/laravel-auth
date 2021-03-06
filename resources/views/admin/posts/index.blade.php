@extends('layouts.admin')
@section('content')

@if (session('deleted'))
  <div class="alert alert-warning" role="alert">
    <p>{{session('deleted')}}</p>
  </div>
@endif

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col" colspan="4">Title</th>
            
            
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>
              <button type="button" class="btn btn-primary mx-2"><a href="{{route('admin.posts.show',$post)}}" class="text-white">Show</a></button>
            </td>
            <td>
              <button type="button" class="btn btn-success mx-2"><a href="{{route('admin.posts.edit',$post)}}" class="text-white">Edit</a></button>
            </td>
            <td>
              <form onsubmit="return confirm('This action will eliminate this post. Confirm?')"
              action="{{route('admin.posts.destroy',$post)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger mx-2">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
      <div class="container d-flex justify-content-center">
        {{$posts->links()}}
      </div>
</div>


@endsection

@section('title')
 | Posts
@endsection