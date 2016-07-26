@extends("layout.master")
@section("title", $property->name )

@section("styles")
@include("partials._styles")
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
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Contrary to popular belief</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>There are many variation</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Lorem Ipsum is simply</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Sed ut perspiciatis unde</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Nemo enim ipsam volume</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>At vero eos et accusamus</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>Contrary to popular belief</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>There are many variation</a></li>
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
           <a href="info"><input type="button" class="btn btn-success" value="CLICK TO RESERVE NOW FOR ONLY KSH 100/="> </a>

            </div>

        </div>
        <div class="clearfix"> </div>


        <div class=" single-profile">
            <h4>RELATED PROPERTIES</h4>
            <div class="single-left ">
                <div class="col-md-3 post-top">
                    <img class="img-responsive " src="/imported/images/s1.jpg" alt="">
                    <h6>NAME</h6>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-3 post-top">
                    <img class="img-responsive " src="/imported/images/s2.jpg" alt="">
                    <h6>NAME</h6>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-3 post-top">
                    <img class="img-responsive " src="/imported/images/s3.jpg" alt="">
                    <h6>NAME</h6>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-3 post-top">
                    <img class="img-responsive " src="/imported/images/s4.jpg" alt="">
                    <h6>NAME</h6>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

    </div>
</div>

@endsection