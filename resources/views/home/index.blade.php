@extends("layout.master")
@section("title", "Home")
@section("styles")
    @include("partials._styles")
    @include("partials._slidestyles")
    @endsection

@section("content")

    @include("partials._slide")


<!--partials.search was here-->
<div class="container-fluid">

    <div class="row">

        <div class="col-md-3 timing">
            <p>advertising section here</p>

                        <!--div class="social-widget">
                            <h2>Connect with us</h2>
                            <ul class="courses_social">
                                <li class="facebook-icon">
                                    <div>
                                        <a href="#" class="fa fa-facebook"></a>
                                        <p>2154</p>
                                    </div>
                                </li>
                                <li class="twitter-icon">
                                    <div>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <p>1425</p>
                                    </div>
                                </li>
                                <li class="gplus-icon">
                                    <div>
                                        <a href="#" class="fa fa-google-plus"></a>
                                        <p>2150</p>
                                    </div>
                                </li>
                                <div class="clearfix"> </div>
                            </ul>
                        </div-->
                        <!--section class="slider">
                            <h3>Testimonial</h3>
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <div class="banner-info1">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat quis nostrud.</p>
                                            <h5><a href="#">Laoreet ,</a>Dateratr since 2015</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="banner-info1">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, content of a page.</p>
                                            <h5><a href="#">Distracted ,</a>Dateratr since 2015</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="banner-info1">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of usin but the majority.</p>
                                            <h5><a href="#">Suffered ,</a>Dateratr since 2015</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section--->

        </div>





        <div><h1 style="text-align: center">{{ strtoupper($message) }}</h1></div>
        <div class="col-md-9">

            <div class="living_middle">
                <div class="container">
                   @foreach($properties->chunk(3) as $propertyChunk)


                    <div class="col-md-9 wow fadeInRight" data-wow-delay="0.4s">

                        <div class="educate_grid">
                            @foreach($propertyChunk as $property)
                            <div class="col-md-4 room-grid">
                                <div class="living_box">
                                    <a href="/single/{{ $property->id }}/{{ $property->name }}">
                                    <a href="single/{{ $property->id }}/{{ $property->name }}">
                                        @if($property->images()->first())
                                            <img src="/uploads/{{ $property->images()->first()->name }}" class="img-responsive" alt=""/>
                                        @else
                                            <img src="/uploads/{{ $property->images }}" class="img-responsive" alt=""/>
                                        @endif
                                            <span class="sale-box">
				                             <span class="sale-label">
                                                 @if($property->category)
                                                    {{$property->category->name}}
                                                 @endif
                                             </span>
                                        </span>
                                    </a>

                                    <div class="living_desc">
                                        <h3><a href="/single/{{ $property->id }}/{{ $property->name }}">{{$property->name}}</a></h3>
                                        <p>{{ $property->description }} </p>
                                        <h3><a href="/single/{{ $property->id }}/{{ $property->name }}">
                                            @if($property->location)
                                                {{$property->location->name}}
                                            @endif
                                            </a></h3>

                                        <p>property description </p>

                                        <a href="/single/{{ $property->id }}/{{ $property->name }}" class="btn3">View</a>
                                        <p class="price">Ksh{{$property->price}}/=</p>
                                    </div>
                                        {{-- */ $features = $property->features->lists('name')->take(3)->flatten()->all() /* --}}
                                    <table border="1" class="propertyDetails">
                                        <tbody><tr>
                                            <td><img src="/imported/images/area.png" alt="" style="margin-right:7px;">{{$features ? $features[0] : ""}}</td>
                                            <td><img src="/imported/images/bed.png" alt="" style="margin-right:7px;">{{ $features ? $features[1] : ""}}</td>
                                            <td><img src="/imported/images/drop.png" alt="" style="margin-right:7px;">{{$features ?  $features[2] : ""}}</td>
                                        </tr>
                                        </tbody></table>




                                </div>
                            </div>
                            @endforeach










                            <div class="clearfix"></div>
                        </div>
                    </div>
                        @endforeach




                </div>


            </div>


        </div>

    </div>

</div>


<!-- quick links -->
<div class="news-section" id="news">
    <div class="container">
        <div class="news-section-head text-center">
            <h3>RECCOMMENDED HOUSES</h3>
            <p>Here, there and everywhere... what we've been doing</p>
        </div>
        <div class="news-section-grids">
            <div class="col-md-4 news-section-grid">
                <img src="/images/1.jpg" alt="" />
                <div class="info">
                    <a class="news-title" href="single">RIAM HOSTELS</a>
                    <label>August18</label>
                    <p>Meet hundreds of house owners just like you and exchange ideas.</p>
                    <a class="more" href="single">Read more</a>
                </div>
            </div>
            <div class="col-md-4 news-section-grid">
                <img src="/images/2.jpg" alt="" />
                <div class="info">
                    <a class="news-title" href="single">IJAB HOSTELS</a>
                    <label>August 28</label>
                    <p>Aimed at improving our customer experience end educate them more.</p>
                    <a class="more" href="single">Read more</a>
                </div>
            </div>
            <div class="col-md-4 news-section-grid">
                <img src="/images/3.jpg" alt="" />
                <div class="info">
                    <a class="news-title" href="single">PALMLEAF HOSTELS</a>
                    <label>September 12</label>
                    <p>Launching our monthly housing magazine to summarize our daily website updatess</p>
                    <a class="more" href="single">Read more</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- //quick links -->



<!--div class="living_bottom">
        <div class="container">
            <h2 class="title block-title">LATEST HOUSES</h2>
            <div class="col-md-6 post_left wow fadeInLeft" data-wow-delay="0.4s">
                <div class="mask1"><img src="/imported/images/pic4.jpg" alt="image" class="img-responsive zoom-img" /></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="single">More</a></p>
                <div class="divider"></div>
                <p class="field-content">30 Sep 2015</span></p>
            </div>
            <div class="col-md-6 post_left wow fadeInRight" data-wow-delay="0.4s">
                <div class="mask1"><img src="/imported/images/pic5.jpg" alt="image" class="img-responsive zoom-img" /></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="single">More</a></p>
                <div class="divider"></div>
                <p class="field-content">30 Sep 2015</span></p>
            </div>
        </div>
    </div-->























    <!-- Stats -->
    <div class="stats">
        <div class="container">
            <p class="slideanim">Link2hao has impacted greately to make people's work easier. We have done it, and we are still working even harder to satisfy all your Housing needs.</p>
            <div class="stats-info">
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-smile-o"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='100' data-delay='.5' data-increment="10">18000</div>
                    <p class="stats-info">Happy Smiles</p>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-facebook"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='179' data-delay='.5' data-increment="1">17000</div>
                    <p class="stats-info">Facebook Likes</p>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-twitter"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='27' data-delay='.5' data-increment="1">21500</div>
                    <p class="stats-info">Twitter Followers</p>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-flask"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='51' data-delay='.5' data-increment="1">20500</div>
                    <p class="stats-info">Subscriptions</p>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!-- //Stats -->
    <script type="text/javascript" src="/js/numscroller-1.0.js"></script>







@endsection