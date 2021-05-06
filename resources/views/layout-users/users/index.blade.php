      @extends('layout-user')
      @section('title','WordSmith')
      @section('content')
      
       <section class="s-featured">
        <div class="row">
            <div class="col-full">

                <div class="featured-slider featured" data-aos="zoom-in">

                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background" style="background-image:url('{{asset('assets-users/images/thumbs/featured/featured-guitarman.jpg')}}');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Music</a></span>

                                <h1><a href="#0" title="">What Your Music Preference Says About You and Your Personality.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="{{asset('assets-users/images/avatars/user-05.jpg')}}" alt="">
                                    </a>
                                    <ul class="entry__meta">
                                        <li><a href="#0">Jonathan Smith</a></li>
                                        <li>June 02, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('{{asset('assets-users/images/thumbs/featured/featured-watch.jpg')}}');"></div>
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Management</a></span>

                                <h1><a href="#0" title="">The Pomodoro Technique Really Works.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="{{asset('assets-users/images/avatars/user-03.jpg')}}" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>June 13, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->

                    <div class="featured__slide">

                        <div class="entry">

                            <div class="entry__background" style="background-image:url('{{asset('assets-users/images/thumbs/featured/featured-beetle.jpg')}}');"></div>

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">LifeStyle</a></span>

                                <h1><a href="#0" title="">The difference between Classics, Vintage & Antique Cars.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="{{asset('assets-users/images/avatars/user-03.jpg')}}" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>June 12, 2018</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__slide -->
                    
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div>
    </section>
        <section class="s-content">
      <div class="row entries-wrap wide">
        <div class="entries">
 @foreach($posts as $post)
            <article class="col-block">

               <div class="item-entry" data-aos="zoom-in">
                <div class="item-entry__thumb">
                    <a href="" class="item-entry__thumb-link">
                        <img src="{{$post->image}}"
                        srcset="{{asset('assets-users/images/thumbs/post/tulips-400.jpg')}}" alt="">
                    </a>
                </div>

                <div class="item-entry__text">    
                    <div class="item-entry__cat">
                        <a href="category.html">{{isset($post->category) ? $post->category->name : ''}}</a> 
                    </div>

                    <h1 class="item-entry__title"><a href="{{route('layout-users.users.single-post',['id'=>$post->id])}}">{{$post->title}}</a></h1>
                     
                    <div class="item-entry__date">
                        <a href="single-standard.html">{{$post->created_at}}</a>
                    </div>
                </div>
            </div> <!-- item-entry -->

        </article> <!-- end article -->
  @endforeach


    </div> <!-- end entries -->
</div> <!-- end entries-wrap -->

<div class="row pagination-wrap">
    <div class="col-full">
        <nav class="pgn" data-aos="fade-up">
            <ul>
                <li><a class="pgn__prev" href="#0">Prev</a></li>
                <li><a class="pgn__num" href="#0">1</a></li>
                <li><span class="pgn__num current">2</span></li>
                <li><a class="pgn__num" href="#0">3</a></li>
                <li><a class="pgn__num" href="#0">4</a></li>
                <li><a class="pgn__num" href="#0">5</a></li>
                <li><span class="pgn__num dots">…</span></li>
                <li><a class="pgn__num" href="#0">8</a></li>
                <li><a class="pgn__next" href="#0">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

    </section>
@endsection