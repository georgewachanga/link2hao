@extends("layout.master")
@section("title", "view-blog")

@section("content")

        <!-- blog-section -->
<section class="blog-single-post">
    <div class="inner-banner demo-2 text-center">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index.html">knowledge <span>is power</span></a></h1>
        </header>
        <div id="breadcrumb_wrapper">
            <div class="container">
                <h2>{{ $title }}</h2>
                <h6>a blog by {{ $post['author'] }}</h6>
            </div>
        </div>
    </div>
    <!--- blog ---->
    <div class="blog">
        <div class="container">
            <div class="single">
                <div class="single-top">
                    <img  src="images/single-post-img.jpg" alt=""/>
                </div>
                <div class="top-single">
                    <h3>{{ $title }}</h3>
                    <div class="grid-single">
                        <div class="single-one"><span><i class="fa fa-calendar"></i>{{ $post->created_at->diffForHumans() }}</span></div></li>
                        <div class="single-one"><span><a href="#"><i class="fa fa-comment"></i></a></span></div>
                        <div class="single-one"><span><i class="fa fa-heart"></i>400</span></div>
                        <div class="clearfix"> </div>
                    </div>

                    <p class="eget">{{ strip_tags($post->content) }}</p>

                    <ul class="share">
                        <li>share :</li>
                        <li>
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></li>
                        <li><a href="https://twitter.com/w3layouts" class="twitter-share-button" data-dnt="true">Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
                    </ul>
                    <div class="top-comments">
                        <h3>{{count($post->comments)}} Comments</h3>
                        {{-- */$index = 1/* --}}
                        @foreach($post->comments as $comment)
                            @if($index%2 === 1)
                                <div class="met">
                            @else
                                <div class="met met-in">
                            @endif
                                <div class="code-in">
                                    <p class="smith"><a href="#">{{ $comment->name }}</a> <span>{{ $comment->created_at->diffForHumans() }}</span></p>
                                    <p class="reply"><a href="#"><i class="fa fa-reply"></i>REPLY</a></p>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="comments-top-top">
                                    <div class="men" >
                                        <img   src="images/men.png" alt="">
                                    </div>
                                    <p class="men-it">{{ $comment->comment }} </p>
                                    <div class="clearfix"> </div>
                                </div>
                                    </div>
                            {{--*/$index ++/*--}}
                        @endforeach

                    <div class="leave">
                        <h3>Leave a comment</h3>
                        {!! Form::open( array( 'route' => 'comment.store', 'class' => 'form')) !!}
                            <input type="hidden" value="{{ $post->id }}" name="blog_id">
                            <div class="single-grid">
                                <div class="col-md-6 single-us">
                                    <input name="name" type="text" placeholder="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="single-grid">
                                <div class="col-md-6 single-us">
                                    <input type="text" name="email" placeholder="E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'E-mail';}" required="">
                                </div>
                            <div class="clearfix"> </div>
                            </div>
                            <div class="single-grid">
                                <div class="col-md-6 single-us">
                                    <input type="text" placeholder="Job" name="job" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Job';}" required="">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="text-top">
                                <div class="col-md-8 text-in">
                                    <textarea  placeholder="Comment" name="comment" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Comment';}" required="">Comment</textarea>
                                </div>
                                <div class="col-md-4 text-in">
                                    <input type="submit" value="SEND" >
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        {!! Form::close() !!}

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis semper nisl, vitae malesuada massa egestas a. Vestibulum vestibulum urna sapien, eu bibendum magna ornare non.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--- /blog ---->
</section>
<!-- //blog-section -->

@endsection