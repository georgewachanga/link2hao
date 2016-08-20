@extends('layout.master')

@section('title', $property->name)

@section('content')
    <div class="single">

        <div class="container">



            <div class="col-md-8 sing">
                <div class=" single-grid">



                    <div class="demo-2">

                        <div style="margin-top: -55px">


                            <!-- begining of slider -->

                            <header class="logo">
                                <h1><a class="cd-logo link link--takiri" href="index.html">Link2hao.com <span>Because housing matters</span></a></h1>

                            </header>

                            @can("admin")
                            <a class="cd-logo link link--takiri" href="/property/{{ $property->id }}/create-images">ADD IMAGES TO THIS PROPERTY</a>
                            @endcan

                            <div id="slider" class="sl-slider-wrapper">

                                <div class="sl-slider">

                                    @foreach($property->images as $image)

                                        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                            <div class="sl-slide-inner">
                                                <div><img class="img-responsive " src="/uploads/{{ $image->name }}" alt=""></div>

                                            </div>
                                        </div>

                                    @endforeach

                                </div><!-- /sl-slider -->

                                <nav id="nav-dots" class="nav-dots">
                                    <span class="nav-dot-current"></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </nav>

                            </div><!-- /slider-wrapper -->
                        </div>

                    </div>
                    <script type="text/javascript" src="/js/jquery.ba-cond.min.js"></script>
                    <script type="text/javascript" src="/js/jquery.slitslider.js"></script>
                    <script type="text/javascript">
                        $(function() {

                            var Page = (function() {

                                var $nav = $( '#nav-dots > span' ),
                                        slitslider = $( '#slider' ).slitslider( {
                                            onBeforeChange : function( slide, pos ) {

                                                $nav.removeClass( 'nav-dot-current' );
                                                $nav.eq( pos ).addClass( 'nav-dot-current' );

                                            }
                                        } ),

                                        init = function() {

                                            initEvents();

                                        },
                                        initEvents = function() {

                                            $nav.each( function( i ) {

                                                $( this ).on( 'click', function( event ) {

                                                    var $dot = $( this );

                                                    if( !slitslider.isActive() ) {

                                                        $nav.removeClass( 'nav-dot-current' );
                                                        $dot.addClass( 'nav-dot-current' );

                                                    }

                                                    slitslider.jump( i + 1 );
                                                    return false;

                                                } );

                                            } );

                                        };

                                return { init : init };

                            })();

                            Page.init();

                            /**
                             * Notes:
                             *
                             * example how to add items:
                             */

                            /*

                             var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');

                             // call the plugin's add method
                             ss.add($items);

                             */

                        });
                    </script>

                    <!-- end of slider -->


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