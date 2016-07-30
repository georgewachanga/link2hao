
 <div class="demo-2">

     <div style="margin-top: -55px">


          <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index.html">Link2hao.com <span>Because housing matters</span></a></h1>

        </header>



         <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slider">

                @foreach($property->images as $image)
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div><img class="img-responsive " src="/uploads/{{ $image->name }}" alt=""></div>

                    </div>
                </div>
                @endforeach

                <!--
                    <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <div><img class="img-responsive " src="/imported/images/1.jpg" alt=""></div>
                         </div>
                </div>

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div><img class="img-responsive " src="/imported/images/5.jpg" alt=""></div>
                        </div>
                </div>

                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div><img class="img-responsive " src="/imported/images/4.jpg" alt=""></div>
                       </div>
                </div>

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div><img class="img-responsive " src="/imported/images/3.jpg" alt=""></div>
                        </div>
                </div>-->
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