@extends('layout')
@section('title','Create User')
@section('content')
<div class="container-fluid">
 <div class="col-md-8 d-flex">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Create User</h4>
      <p class="card-category">Create your profile</p>
    </div>
    <div class="card-body">

      <form method="POST" action="{{route('users.store')}}">
        @csrf
        @error('name')
          <small style="color: red">{{$message}}</small>
          @enderror
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Username</label> 
              <input type="text" class="form-control" name="name" value="{{old('name')}}"> <br>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="">Birth Date</label> 
              <input type="date" class="form-control" name="birth_date" value="{{old('birth_date')}}">
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
              <input type="text" class="form-control" name="phone_number" value="{{old('phone_number')}}">
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
              <input type="text" class="form-control" name="email" value="{{old('email')}}">
            </div>
          </div>
        </div>
@error('password')
          <small style="color: red">{{$message}}</small>
          @enderror
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Password</label>
              <input type="password" class="form-control" name="password" value="{{old('password')}}">
            </div>
          </div>
        </div>

        @error('password_comfirm')
          <small style="color: red">{{$message}}</small>
          @enderror
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">password comfirm</label>
              <input type="password" class="form-control" name="password_comfirm" value="{{old('password')}}"> <br>
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
<!-- @error('passcf')
          <small style="color: red">{{$message}}</small>
          @enderror
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="bmd-label-floating">Password confirmation</label>
              <input type="password" class="form-control" name="password_confirmation">
            </div>
          </div>
        </div> -->

        <button type="submit" class="btn btn-primary pull-right">Save</button>
        <div class="clearfix">Please make sure you have filled out the information to become a member <br>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection