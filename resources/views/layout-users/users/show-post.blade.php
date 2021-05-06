       @extends('layout-user')
       @section('title','My Post')
       @section('content')

       <section id="styles" class="s-styles">

         <div class="row add-bottom">

            <div class="col-twelve">

                <h3>My Post</h3>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" style="font-size: 14px;">
                
                      <thead class=" text-primary">
                        <tr>
                          <td>ID</td>
                          <td>Title</td>
                          <td colspan="2">Action</td>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($post as $post)
                      <tr>
                          <td>{{$post->id}}</td>
                          <td>{{$post->title}}</td>
                           <td><div class="btn btn-stroke"><a href="{{route('layout-users.users.edit-post',['id'=>$post->id])}}" style="color: black;">Update</a></div> </td>
                          <td style="padding-top: 48px">
                            <form action="{{route('layout-users.users.post.destroy',['post'=>$post->id])}}" method="POST">
                              @csrf
                              <button class="btn btn-stroke">Delete</button>
                          </form>
                      </td
                          

                      </td>

                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>


  </div>

</div> 
</section> <!-- end styles -->



<script src="{{asset('assets-users/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets-users/js/plugins.js')}}"></script>
<script src="{{asset('assets-users/js/main.js')}}"></script>


@endsection