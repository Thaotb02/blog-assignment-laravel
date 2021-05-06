@extends('layout')
@section('title','WordSmith')
@section('content')

<div class="col-md-12">
      @if(session('thongbao'))
    <div class="d-flex justify-content-start"><p class="btn btn-success "><i class="fas fa-check-circle" style="color: green;"></i>  {{session('thongbao')}}</p></div>
        @endif
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">List Comment</h4>
      <p class="card-category"></p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <tr>
              <td>ID</td>
              <td>Content</td>
              <td>Post</td>
              <td>User</td>
              <td>Active</td>
           
              <td colspan="1">Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach($comments as $comment)
            <tr>
              <td>{{$comment->id}}</td>
              <td>{{$comment->content}}</td>
              <td>{{isset($comment->post) ? $comment->post->title : ''}}</td>
              <td>{{isset($comment->user) ? $comment->user->name : ''}}</td>
              <td>{{$comment->is_active}}</td>
               <td>
               <form action="{{route('comments.destroy',['comment'=>$comment->id])}}" method="POST">
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