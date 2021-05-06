@extends('layout')
@section('title','WordSmith')
@section('content')

<div class="col-md-12">
      @if(session('thongbao'))
    <div class="d-flex justify-content-start"><p class="btn btn-success "><i class="fas fa-check-circle" style="color: green;"></i>  {{session('thongbao')}}</p></div>
        @endif
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">List Category</h4>
      <p class="card-category"></p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <tr><div class="d-flex justify-content-end"><a href="{{route('categories.create')}}" class="btn btn-success ">Add Category </a></div></tr>
          <thead class=" text-primary">
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>User</td>
              <td colspan="2">Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach($cates as $cate)
            <tr>
              <td>{{$cate->id}}</td>
              <td>{{$cate->name}}</td>
                 <td>{{isset($cate->user) ? $cate->user->name : ''}}</td>
          
              <td><a href="{{route('categories.edit',['id'=>$cate->id])}}" class="btn btn-primary">Update</a> </td>
               <td>
                <form action="{{route('categories.destroy',['cate'=>$cate->id])}}" method="POST">
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