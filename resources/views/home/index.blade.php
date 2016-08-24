@extends("layout.master")
@section("title", "Home")
@section("styles")
    @include("partials._styles")
    @include("partials._slidestyles")
    @endsection

@section("content")

    @include("partials._slide")

<div class="container-fluid">

    <div class="row">

        <div class="col-md-3 timing">
            <p>advertising section here</p>

        </div>

        <div><h1 style="text-align: center">{{ strtoupper($message) }}</h1></div>
        <div class="col-md-9">

            <div class="living_middle">
                <div class="container">
                   @foreach($properties->chunk(3) as $propertyChunk)


                    <div class="col-md-9 " data-wow-delay="0.4s" id="transist">

                        <div class="educate_grid">
                            @foreach($propertyChunk as $property)
                            <div class="col-md-4 room-grid">
                                <div class="living_box">
                                    <a href="/single/{{ $property->id }}/{{ $property->name }}">
                                        @if($property->images()->first())
                                            <img src="/uploads/{{ $property->images()->first()->name }}" class="img-responsive" alt=""/>
                                        @else
                                            <img src="/images/no_house.jpg" class="img-responsive" alt=""/>
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
                                        <p class="price">{{ $property->units }} Units Available</p>
                                    </div>
                                        {{-- */ $features = $property->features->lists('name')->take(3)->flatten()->all() /* --}}
                                    <table border="1" class="propertyDetails">
                                        <tbody><tr>
                                            <td><img src="/imported/images/area.png" alt="" style="margin-right:7px;">{{$features ? $features[0] : ""}}</td>
                                            <td><img src="/imported/images/bed.png" alt="" style="margin-right:7px;">{{ isset($features[1]) ? $features[1] : ""}}</td>
                                            <td><img src="/imported/images/drop.png" alt="" style="margin-right:7px;">{{isset($features[2]) ?  $features[2] : ""}}</td>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </div>
                            @endforeach

                            <div class="clearfix"></div>
                        </div>

                        <script type="text/javascript">
                            if(Modernizr.csstransitions){
                                document.getElementById('transist').className = "col-md-9 wow fadeInRight";
                            }
                            else
                            {

                            }
                        </script>
                    </div>
                        @endforeach
                </div>
            </div>

            <div class="clearfix"> </div>
            <ul class="start">
                @if($properties->currentPage() !== 1)
                    <li><a href="{{ $properties->previousPageUrl() }}"><span class="prev">Prev</span></a></li>
                    <li><a href="{{ $properties->url(1) }}"> <span>firstPage</span></a></li>
                @else
                    <li><a href="#"><span class="prev">First</span></a> </li>
                @endif
                    <li><span>.....</span></li>
                @if($properties->currentPage() !== $properties->lastPage())
                        <li><a href="{{ $properties->url($properties->lastPage()) }}"> <span>lastPage</span></a></li>
                    <li><a href="{{ $properties->nextPageUrl() }}" class="next">Next</a></li>
                @else
                    <li><a href="#" class="next">Last</a> </li>
                @endif

            </ul>


        </div>

    </div>

</div>


<!-- quick links -->
<div class="news-section" id="news">
    <div class="container">
        <div class="news-section-head text-center">
            <h3>RECOMMENDED HOUSES</h3>
            <p>Here, there and everywhere... what we've been doing</p>
        </div>

    </div>
</div>

<!-- //quick links -->

    <!-- Stats -->
    <div class="stats">
        <div class="container">
            <p class="slideanim">Link2hao has impacted greately to make people's work easier. We have done it, and we are still working even harder to satisfy all your Housing needs.</p>
            <div class="stats-info">
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-smile-o"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='0' data-delay='.5' data-increment="10">0</div>
                    <p class="stats-info">Happy Smiles</p>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-facebook"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='0' data-delay='.5' data-increment="1">0</div>
                    <p class="stats-info">Facebook Likes</p>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-twitter"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='0' data-delay='.5' data-increment="1">0</div>
                    <p class="stats-info">Twitter Followers</p>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-flask"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='0' data-delay='.5' data-increment="1">0</div>
                    <p class="stats-info">Subscriptions</p>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!-- //Stats -->
    <script type="text/javascript" src="/js/numscroller-1.0.js"></script>
@endsection