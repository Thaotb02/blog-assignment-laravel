@extends('layout')
@section('title','WordSmith')
@section('content')

<div class="col-md-12">
    @if(session('thongbao'))
    <div class="d-flex justify-content-start"><p class="btn btn-success "><i class="fas fa-check-circle" style="color: green;"></i>  {{session('thongbao')}}</p></div>
        @endif
  <div class="card">
    
    <div class="card-header card-header-primary">

      <h4 class="card-title ">List User</h4>
      <p class="card-category"></p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <tr><div class="d-flex justify-content-end"><a href="{{route('users.create')}}" class="btn btn-success ">Add User </a></div></tr>
          <thead class=" text-primary">
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Birth Date</td>
              <td>Email</td>
              <td>Phone</td>
              <td>Role</td>
              <td>Active</td>
              <td colspan="3">Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->birth_date}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->phone_number}}</td>
              <td>
                {{$user->role}} 
  </td>
              <td>{{$user->is_active}}</td>
              <td><a href="{{route('users.show',['id'=>$user->id])}}" class="btn btn-info">Info</a> </td>
              <td><a href="{{route('users.edit',['id'=>$user->id])}}" class="btn btn-primary">Update</a> </td>
              <td>
                <form action="{{route('users.destroy',['user'=>$user->id])}}" method="POST">
                  @csrf
                  <button class="btn btn-danger">Delete</button>
                </form>
              </td>

            </tr>
            @endforeach
          </tbody>
    

        </table>
                <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <input type="file" name="file" accept=".xlsx"><br>
       <input type="submit" value="Import CSV" name="import_csv" class="btn btn-warning">
        </form>
       <form action="{{url('export-csv')}}" method="POST">
          @csrf
       <input type="submit" value="Export CSV" name="export_csv" class="btn btn-success">
      </form>
      </div>
    </div>
  </div>
</div>
@endsection