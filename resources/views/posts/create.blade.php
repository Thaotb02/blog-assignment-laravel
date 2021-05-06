@extends('layout')
@section('title','Create Post')
@section('content')
<div class="container-fluid">
 <div class="col-md-8 d-flex">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Create Post</h4>
      <p class="card-category">Create your Post</p>
    </div>
    <div class="card-body">
      <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data" >
        @csrf
        @error('title')
        <small style="color: red">{{$message}}</small>
        @enderror
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Title</label> 
              <input type="text" class="form-control" name="title" value="{{old('title')}}"> <br>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6">
            <div class="form-group">
              <label class="">User</label><br>
              <select name="user_id" class="form-control" style="color: #7b1fa2">
               @foreach($users as $user)
               <option value="{{$user->id}}">{{$user->name}}</option>
               @endforeach
             </select>
           </div>
         </div>
       </div>

       <div class="row">
         <div class="col-md-6">
          <div class="form-group">
            <label class="">Category</label><br>
            <select name="category_id" class="form-control" style="color: #7b1fa2">
              @foreach($cates as $cate)
              <option value="{{$cate->id}}">{{$cate->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      @error('content')
      <small style="color: red">{{$message}}</small>
      @enderror
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Content</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control" >{{old('content')}}</textarea>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Image</label>
            <input type="text" class="form-control" name="image" value="{{old('image')}}"> <br>
          </div>
        </div>
      </div>


      <button type="submit" class="btn btn-primary pull-right">Save</button>
      <div class="clearfix">Please make sure you have filled out the information to become a member <br>
      </div>
    </form>
  </div>
</div>
</div>
</div>
@endsection