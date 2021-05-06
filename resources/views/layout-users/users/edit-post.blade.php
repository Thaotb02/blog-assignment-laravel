
@extends('layout-user')
@section('title','Create post')
@section('content')
<section id="styles" class="s-styles">

    <div class="row">

        <div class="col-six tab-full">

            <h3 class="add-bottom">Create your post</h3>

            <form method="POST" action="{{route('layout-users.users.update-post',['id'=>$post->id])}}">
              @csrf
               @error('title')
          <small style="color: red">{{$message}}</small>
          @enderror
              <div>
                <label for="sampleInput">Title</label>
                <input class="full-width" type="text" name="title" value="{{$post->title}}">
            </div>
            <div>
                <label for="sampleRecipientInput">Category</label>
                <div class="cl-custom-select">
                     <select name="category_id" class="full-width">
              @foreach($cates as $cate)
          
              <option
              @if ($post->category_id == $cate->id)
              {{"selected"}}
              @endif

               value="{{$cate->id}}">{{$cate->name}}</option>
              @endforeach
            </select>
                </div>
            </div>
@error('content')
          <small style="color: red">{{$message}}</small>
          @enderror
            <label for="exampleMessage">Content</label>
            <textarea name="content" id="" cols="30" rows="10" class="full-width">value="{{$post->content}}</textarea>
               <div>
                <label for="sampleInput">Image</label>
                <img src="{{$post->image}}" alt="">
                <input class="full-width" type="text" name="image" value="{{$post->image}}">
            </div>
<button type="submit" class="btn--primary  full-width">Save</button>

        </form>

    </div>


</div>
</section> <!-- end styles -->

<script src="{{asset('assets-users/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets-users/js/plugins.js')}}"></script>
<script src="{{asset('assets-users/js/main.js')}}"></script>


@endsection