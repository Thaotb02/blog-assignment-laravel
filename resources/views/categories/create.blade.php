@extends('layout')
@section('title','Create Category')
@section('content')
<div class="container-fluid">
 <div class="col-md-8 d-flex">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Create Category</h4>
      <p class="card-category">Create your Category</p>
    </div>
    <div class="card-body">
      <form method="POST" action="{{route('categories.store')}}">
        @csrf
        @error('name')
          <small style="color: red">{{$message}}</small>
          @enderror
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Name</label> 
              <input type="text" class="form-control" name="name" value="{{old('cate_name')}}" > <br>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class=""> User</label><br>
              <select name="user_id" class="form-control" style="color: #7b1fa2">
               @foreach($users as $user)
               <option  
               value="{{$user->id}}">{{$user->name}}</option>
               @endforeach
             </select>
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