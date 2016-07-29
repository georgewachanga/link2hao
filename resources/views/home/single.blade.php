@extends("layout.master")
@section("title", $property->name )

@section("styles")
@include("partials._styles")
        @include("partials._slidestyles")

@endsection

@section("content")
        <!--single start here-->

<div class="inner-banner demo-2 text-center">
    <header class="logo">
        <h1><a class="cd-logo link link--takiri" href="/single/{{ $property->id }}/{{$property->name}}">{{ $property->name }}<span>{{ $property->price }}</span></a></h1>
    </header>
    <div id="breadcrumb_wrapper">
        <div class="container">
            <h2>Booking and reservation for Ksh 100/=</h2>
            <h6>Trusted</h6>
        </div>
    </div>
</div>



<div class="single">

    <div class="container">



        <div class="col-md-8 sing">
            <div class=" single-grid">
                @include("partials._slider")
                <!--img class="img-responsive" src="/imported/images/blog.jpg" alt=""  class="img-responsive"-->
                <div class="lone-line">
                    <h2>ABOUT HOUSE</h2>

                    <!--div class="cal">
                        <ul>
                            <li><span ><i class="glyphicon glyphicon-calendar"> </i>22.08.2014</span></li>
                            <li><a href="#" ><i class="glyphicon glyphicon-comment"> </i>24</a></li>
                        </ul>
                    </div-->
                    <p>{{ $property->description }}</p>

                </div>
            </div>
            <div class="single-bottom">

                <h3>Leave a Comment</h3>
                <form>
                    <div class="col-md-6 comment">
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="col-md-6 comment">
                        <input type="text" placeholder="email">
                    </div>
                    <div class="clearfix"> </div>
                    <textarea placeholder="Message" required=""> </textarea>
                    <input type="submit" value="Send">
                </form>
            </div>


        </div>
        <div class="col-md-3 categories-grid">
            <div class="grid-categories">
                <h4>We offer...</h4>
                <ul class="popular ">
                    @foreach($property->features as $feature)
                        <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>{{ $feature->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="grid-categories">
                <h4>CONTACT DEALER</h4>
                <ul class="popular popular-in">
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Call 0702452640</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Mail:info@link2hao.com</a></li>

                </ul>
            </div>
            <div >
<<<<<<< HEAD
           <a href="/info"><input type="button" class="btn btn-success" value="CLICK TO RESERVE NOW FOR ONLY KSH 100/="> </a>

<a href="/info"> click 2 book</a>

=======

           <a href="/info"><input type="button" class="btn btn-success" value="CLICK TO RESERVE NOW FOR ONLY KSH 100/="> </a>


<a href="/info"> click 2 book</a>


>>>>>>> 94275955ad84a05fbf0fae812aea78bce47d9adf
            </div>

        </div>
        <div class="clearfix"> </div>


        <div class=" single-profile">
            @if($related)
                <h4>RELATED PROPERTIES</h4>
                <div class="single-left ">

                        @foreach($related as $related_item)
                            <div class="col-md-3 post-top">
                                <img class="img-responsive " src="/imported/images/s1.jpg" alt="">
                                <h6>{{ $related_item->name }}</h6>
                                <p>{{ $related_item->description }}</p>
                            </div>
                        @endforeach
                    <div class="clearfix"> </div>
                </div>
            @else
                <h4>THERE ARE NO RELATED PROPERTIES</h4>
            @endif
        </div>

    </div>
</div>

@endsection