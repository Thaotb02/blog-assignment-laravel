@extends('layout')
@section('title','WordSmith')
@section('content')

<div class="col-md-12">
      @if(session('thongbao'))
    <div class="d-flex justify-content-start"><p class="btn btn-success "><i class="fas fa-check-circle" style="color: green;"></i>  {{session('thongbao')}}</p></div>
        @endif
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">List Post</h4>
      <p class="card-category"></p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <tr><div class="d-flex justify-content-end"><a href="{{route('posts.create')}}" class="btn btn-success ">Add Post </a></div></tr>
          <thead class=" text-primary">
            <tr>
              <td>ID</td>
              <td>Title</td>
              <td>User</td>
              <td>Category</td>
              <td>Content</td>
 
              <td>Image</td>
           
              <td colspan="2">Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <td>{{$post->id}}</td>
              <td>{{$post->title}}</td>
              <td>{{isset($post->user) ? $post->user->name : ''}}</td>
              <td>{{isset($post->category) ? $post->category->name : ''}}</td>
              <td>{{$post->content}}</td>

              <td><img src="{{$post->image}}" alt="" width="20%"></td>
          
              <td><a href="{{route('posts.edit',['id'=>$post->id])}}" class="btn btn-primary">Update</a> </td>
               <td>
                <form action="{{route('posts.destroy',['post'=>$post->id])}}" method="POST">
                  @csrf
                  <button class="btn btn-danger">Delete</button>
                </form>
              </td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection