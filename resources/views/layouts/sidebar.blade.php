<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('assets/img/sidebar-2.jpg')}}">
<div class="logo"><a href="{{route('users.index')}}" class="simple-text logo-normal">
          WordSmith
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="{{route('users.index')}}" >
              <i class="material-icons">person</i>
              <p>User</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="{{route('posts.index')}}" >
              <i class="material-icons">library_books</i>
              <p>Post</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('categories.index')}}" >
              <i class="material-icons">content_paste</i>
              <p>Category</p>
            </a>
          </li>
         
          <li class="nav-item ">
            <a class="nav-link" href="{{route('comments.index')}}" >
              <i class="material-icons">bubble_chart</i>
              <p>Comment</p>
            </a>
          </li>
             </ul>
      </div>
    </div>