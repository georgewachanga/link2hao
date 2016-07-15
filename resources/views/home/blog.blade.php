@extends("layout.master")
@section("title", "blog")
@section("content")

        <!-- blog-section -->
<section class="error">
    <div class="inner-banner demo-2 text-center">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index">What we share <span>and success follow up</span></a></h1>
        </header>
        <div id="breadcrumb_wrapper">
            <div class="container">
                <h2>This is our official housing Blog Page</h2>
                <h6>We write articles when we feel like sharing something new, our articles are always technological, innovative,educative and informative.</h6>
            </div>
        </div>
    </div>
    < blog>
    <div class="blog">
        <div class="container">
            <div class="bolg-posts">
                <h2 style="text-align: center; padding-bottom: 2%">MOST RECOMMENDED</h2>

                <div class="col-md-12 blog-top">
                    <div class="blog-in">
                        <a href="{{$mostRecommended->getUrl()}}" class="blog-post"><img src="/uploads/{{$mostRecommended['image']}}" alt="{{$mostRecommended['title']}}"></a>
                        <div class="blog-grid">
                            <div class="date">
                                <span class="date-in"><i class="fa fa-calendar"></i>{{$mostRecommended['created_at']->diffForHumans()}}</span>
                                <a href="{{$mostRecommended->getUrl()}}" class="comments"><i class="fa fa-comment"></i></a>
                                <div class="clearfix"> </div>
                            </div>
                            <h3><a href="{{$mostRecommended->getUrl()}}">{{$mostRecommended['title']}}</a></h3>
                            <p>{{ str_limit(strip_tags($mostRecommended['content']),150) }}</p>
                            <a href="{{$mostRecommended->getUrl()}}" class="smore">READ MORE</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <i class="black"> </i>
                </div>

                <h2 style="text-align: center; padding-bottom: 2%">LATEST</h2>
                {{-- */$index = 1/* --}}
                @foreach($last as $post)
                <div class="col-md-12 blog-top">
                    @if(($index%2) === 1)
                            <div class="blog-in blog-in1">
                                <a href="{{ $post->getUrl() }}" class="blog-post1"><img src="uploads/{{ $post['image'] }}" alt="{{ $post->title }}"></a>
                    @else
                            <div class="blog-in">
                                <a href="{{$post->getUrl()}}" class="blog-post"><img src="uploads/{{$post['image']}}" alt="{{$post['title']}}"></a>
                                @endif
                                <div class="blog-grid">
                            <div class="date">
                                <span class="date-in"><i class="fa fa-calendar"></i>{{ $post->created_at->diffForHumans() }}</span>
                                <a href="{{ $post->getUrl() }}" class="comments"><i class="fa fa-comment"></i></a>
                                <div class="clearfix"> </div>
                            </div>
                            <h3><a href="{{ $post->getUrl() }}">{{ $post->title }}</a></h3>
                            <p>{{ str_limit(strip_tags($post['content']),300) }}</p>
                            <a href="{{ $post->getUrl() }}" class="smore">READ MORE</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <i class="black"> </i>
                </div>

                @endforeach

                <div class="clearfix"> </div>
                <ul class="start">
                    <li><a href="#"><span class="prev">Prev</span></a></li>
                    <li><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><span>.....</span></li>
                    <li><a href="#">12</a></li>
                    <li><a href="#" class="next">Next</a></li>
                </ul>
                        {{ $last->render() }}
            </div>
        </div>
    </div>
    <!--- /404 ---->
</section>
<!-- //404-section -->


@endsection