@extends('layout')
@section('title','Edit User')
@section('content')
<div class="container-fluid">
 <div class="col-md-8 d-flex">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Edit User</h4>
      <p class="card-category">Edit your profile</p>
    </div>
    <div class="card-body">
      <form method="POST" action="{{route('users.update',['id'=>$user->id])}}">
        @csrf
         @error('name')
          <small style="color: red">{{$message}}</small>
          @enderror
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Username</label> 
              <input type="text" class="form-control" name="name" value="{{$user->name}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Birth Date</label>
              <input type="date" class="form-control" name="birth_date" value="{{$user->birth_date}}">
            </div>
          </div>
        </div>

        @error('phone_number')
          <small style="color: red">{{$message}}</small>
          @enderror
<div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Phone Number</label>
              <input type="text" class="form-control" name="phone_number" value="{{$user->phone_number}}">
            </div>
          </div>
        </div>
        @error('email')
          <small style="color: red">{{$message}}</small>
          @enderror

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Email</label>
              <input type="text" class="form-control" name="email" value="{{$user->email}}">
            </div>
          </div>
        </div>

          <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Role</label>
              <select name="role" id="" class="form-control" style="color: #7b1fa2">
                <option value="1">User</option>
                   <option value="2">Admin</option>
              </select>
            </div>
          </div>
        </div>


        <button type="submit" class="btn btn-primary pull-right">Update</button>
        <div class="clearfix">Please make sure you have filled out the information</div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection