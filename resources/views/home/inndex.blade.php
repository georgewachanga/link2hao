@extends("layout.master")
@section("title", "Home")
@section("stylesheets")
    @include("partials._style")


@endsection
@section("content")
    @include("partials._navigation")

    @include("partials._slider")
@include("partials._permalinks")
    <div class="living_middle">
        <div class="container">
            <h2 class="title block-title">LISTING OF ALL HOUSES</h2>



            @foreach($properties->chunk(4) as $propertyChunk)
                <div class="row">
                    @foreach($propertyChunk as $property)
            <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="living_box"><a href="#">
                        <img src="images/l1.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">{{$property->category}}</span>
			    </span>
                    </a>
                    <div class="living_desc">
                        <h3><a href="#">{{$property->name}}</a></h3>
                        <div class="location">Location: <span> {{$property->location}}</span> </div>
                        <a href="single" class="btn3">View</a>
                        GGGGGGGGGGGGGGGGGGGGGGG
                        <p class="price">Ksh:{{$property->price}}</p>
                    </div>
                    <table border="1" class="propertyDetails">
                        <tbody><tr>
                            <td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                            <td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                            <td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
                    @endforeach
                    </div>
                @endforeach



        </div>
    </div>


@endsection