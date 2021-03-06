          @extends('layout-user')
      @section('title','WordSmith')
      @section('content')
    <section class="s-content s-content--top-padding s-content--narrow">

        <article class="row entry format-standard">

            <div class="entry__media col-full">
                <div class="entry__post-thumb">
                    <img src="{{asset('assets-users/images/thumbs/single/standard/standard-1000.jpg')}}" 
                         srcset="{{asset('assets-users/images/thumbs/single/standard/standard-2000.jpg 2000w, 
                                 images/thumbs/single/standard/standard-1000.jpg 1000w, 
                                 images/thumbs/single/standard/standard-500.jpg 500w')}}" 
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </div>
            </div>

            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                    {{$post->title}}
                </h1>
                <ul class="entry__header-meta">
                    <li class="date">{{$post->created_at}}</li>
                    <li class="byline">
                        By
                        <a href="#0">{{isset($post->user) ? $post->user->name : ''}}</a>
                    </li>
                </ul>
            </div>

            <div class="col-full entry__main">

                <p class="lead drop-cap">{{$post->content}}</p>
                
                <p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                </p>

                <p>
                <img src="{{asset('assets-users/images/wheel-1000.jpg')}}" srcset="{{asset('assets-users/images/wheel-2000.jpg 2000w, images/wheel-1000.jpg 1000w, images/wheel-500.jpg 500w')}}" sizes="(max-width: 2000px) 100vw, 2000px" alt="">
                </p>

                <h2>Large Heading</h2>

                <p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus <a href="http://#">omnis voluptas assumenda est</a> id quod maxime placeat facere possimus, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et.</p>

                <blockquote><p>This is a simple example of a styled blockquote. A blockquote tag typically specifies a section that is quoted from another source of some sort, or highlighting text in your post.</p></blockquote>

                <p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>

                <h3>Smaller Heading</h3>

                <p>Dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
       

                <p>Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>

                <div class="entry__taxonomies">
                    <div class="entry__cat">
                        <h5>Posted In: </h5>
                        <span class="entry__tax-list">
                            <a href="#0">{{isset($post->category) ? $post->category->name : ''}}</a>
                           
                        </span>
                    </div> <!-- end entry__cat -->

                    <div class="entry__tags">
                        <h5>Tags: </h5>
                        <span class="entry__tax-list entry__tax-list--pill">
                            <a href="#0">orci</a>
                            <a href="#0">lectus</a>
                            <a href="#0">varius</a>
                            <a href="#0">turpis</a>
                        </span>
                    </div> <!-- end entry__tags -->
                </div> <!-- end s-content__taxonomies -->

                <div class="entry__author">
                    <img src="{{asset('assets-users/images/avatars/user-03.jpg')}}" alt="">

                    <div class="entry__author-about">
                        <h5 class="entry__author-name">
                            <span>Posted by</span>
                            <a href="#0">{{isset($post->user) ? $post->user->name : ''}}</a>
                        </h5>

                        <div class="entry__author-desc">
                            <p>
                            Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat 
                            impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas 
                            voluptatum. Lorem ipsum dolor sit.
                            </p>
                        </div>
                    </div>
                </div>

            </div> <!-- s-entry__main -->

        </article> <!-- end entry/article -->


        <div class="s-content__entry-nav">
            <div class="row s-content__nav">
                <div class="col-six s-content__prev">
                    <a href="#0" rel="prev">
                        <span>Previous Post</span>
                        The Pomodoro Technique Really Works. 
                    </a>
                </div>
                <div class="col-six s-content__next">
                    <a href="#0" rel="next">
                        <span>Next Post</span>
                        3 Benefits of Minimalism In Interior Design.
                    </a>
                </div>
            </div>
        </div> <!-- end s-content__pagenav -->

        <div class="comments-wrap">

            <div id="comments" class="row">
                <div class="col-full">

                    <h3 class="h2">{{count($post->comments)}} Comments</h3>
  @foreach($comment as $comment)
                    <!-- START commentlist -->
                    <ol class="commentlist">

                        <li class="depth-1 comment">

                            <div class="comment__avatar">
                                <img class="avatar" src="{{asset('assets-users/images/avatars/user-01.jpg')}}" alt="" width="50" height="50">
                            </div>

                            <div class="comment__content">

                                <div class="comment__info">

                                    <div class="comment__author">{{$comment->user->name}}</div>

                                    <div class="comment__meta">
                                        <div class="comment__time">{{$comment->created_at}}</div>
                                        <div class="comment__reply">
                                            <a class="comment-reply-link" href="#0">Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment__text">
                                <p>{{$comment->content}}</p>
                                </div>

                            </div>

                        </li> <!-- end comment level 1 -->
      

                    </ol>
 @endforeach
                    <!-- END commentlist -->           

                </div> <!-- end col-full -->
            </div> <!-- end comments -->

            <div class="row comment-respond">

                <!-- START respond -->
                <div id="respond" class="col-full">

                    <h3 class="h2">Add Comment <span>Your email address will not be published</span></h3>

                    <form name="contactForm" id="contactForm"   method="POST" action="{{route('layout-users.users.comment',['id'=>$post->id])}}">
                          @csrf
                        <fieldset>
@guest
                            <div class="form-field">
                                <input  id="cName" class="full-width" placeholder="Your Name*" value="" type="text">
                            </div>

                            <div class="form-field">
                                <input  id="cEmail" class="full-width" placeholder="Your Email*" value="" type="text">
                            </div>

                            <div class="form-field">
                                <input  id="cWebsite" class="full-width" placeholder="Website" value="" type="text">
                            </div>
                            @endguest
                            <div class="message form-field">
                                <textarea class="full-width" placeholder="Your content" name="content"></textarea>
                            </div>
          <button class="btn btn--primary btn-wide btn--large full-width" type="submit"> Send</button>
                          

                        </fieldset>
                    </form> <!-- end form -->

                </div>
                <!-- END respond-->

            </div> <!-- end comment-respond -->

        </div> <!-- end comments-wrap -->

    </section> <!-- end s-content -->
    @endsection