         @extends('layout-user')
         @section('title','Profile')
         @section('content')
         <section id="styles" class="s-styles">
          <div class="row">

            <div class="col-six tab-full">

              <h2 class="display-1 display-1--with-line-sep">Edit Profile</h2>

              <form method="POST" action="{{route('layout-users.users.update-profile',['id'=>$users->id])}}">
               @csrf
               @error('name')
               <small style="color: red">{{$message}}</small>
               @enderror
               <div>
                <label for="sampleInput"> Name</label>
                <input class="full-width" placeholder="Your name" type="text" value="{{$users->name}}" style="border: none;" name="name" >
              </div>
              <div>
                <label for="sampleInput"> Birth date</label>
                <input class="full-width" placeholder="Your birth date" type="date"  value="{{$users->birth_date}}" style="border: none;" name="birth_date">
              </div>
              @error('email')
              <small style="color: red">{{$message}}</small>
              @enderror
              <div>
                <label for="sampleInput"> Email</label>
                <input class="full-width" placeholder="Your email" type="text"  value="{{$users->email}}" style="border: none;" name="email" >
              </div>
              @error('phone_number')
              <small style="color: red">{{$message}}</small>
              @enderror
              <div>
                <label for="sampleInput"> Phone </label>
                <input class="full-width" placeholder="Your phone number"type="text"  value="{{$users->phone_number}}" style="border: none;" name="phone_number" >
              </div>

              <input class="btn--primary full-width" type="submit" value="Submit">

            </form>

          </div>



        </div> <!-- end row -->

      </section> <!-- end styles -->

      <script src="{{asset('assets-users/js/jquery-3.2.1.min.js')}}"></script>
      <script src="{{asset('assets-users/js/plugins.js')}}"></script>
      <script src="{{asset('assets-users/js/main.js')}}"></script>


      @endsection