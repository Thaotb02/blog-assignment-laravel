@extends('layout')
@section('title','Info User')
@section('content')
<div class="col-md-8">
  <div class="card card-profile">
    <div class="card-avatar">
      <a href="#pablo">
        <img class="img" src="{{asset('assets/img/faces/marc.jpg')}}" />
      </a>
    </div>
    <div class="card-body">

      <h2 class="card-title">{{$users->name}}</h2>
      <p class="card-description">Birth Date: {{$users->birth_date}}</p>
      <p class="card-description">Email: {{$users->email}}</p>
      <p class="card-description">Phone: {{$users->phone_number}}</p>
        @if($users->role===1)
        <p class="card-description">Role: User</p>
        @else
         <p class="card-description">Role: Admin</p>
        @endif
        <p class="card-description">Post: {{count($users->posts)}}</p>

        <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
      </div>
    </div>
  </div>
  @endsection