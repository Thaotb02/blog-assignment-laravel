      @extends('layout-user')
      @section('title','Profile')
      @section('content')

      <section id="styles" class="s-styles">

        <div class="row narrow section-intro add-bottom text-center">

            <div class="col-twelve tab-full">
                <h1 class="display-1 display-1--with-line-sep">Profile</h1>
                
            </div>

        </div>


        <div class="row narrow section-intro add-bottom text-center">


            <div class="col-twelve tab-full">
             
                    <h3 class="display-3 display-3--with-line-sep">{{$users->name}}</h3>
                    <p>Birth date: {{$users->birth_date}}</p>
                    <p>Email: {{$users->email}}</p>
                    <p>Phone: {{$users->phone_number}}</p>
                   <a href="{{route('layout-users.users.edit-profile',['id'=>$users->id])}}" class="btn btn-primary">Edit</a>
               
            </div>

        </div> <!-- end row -->


    </section> <!-- end styles -->



    <script src="{{asset('assets-users/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets-users/js/plugins.js')}}"></script>
    <script src="{{asset('assets-users/js/main.js')}}"></script>


    @endsection