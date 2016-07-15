
 <div class="demo-2">

     <div style="margin-top: -55px">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index.html">Link2hao.com <span>Because housing matters</span></a></h1>
        </header>
        <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slider">

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-1"></div>
                        <h3>Real estate Agency.</h3>
                        <blockquote><p>We  are trusted agents.</p><cite>SirGeorge</cite></blockquote>
                    </div>
                </div>

                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-2"></div>
                        <h3>Advertising</h3>
                        <blockquote><p>Digital advertising is the way</p><cite>Alberto</cite></blockquote>
                    </div>
                </div>

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-3"></div>
                        <h3>Booking.</h3>
                        <blockquote><p>Everything online.</p><cite>Give a try</cite></blockquote>
                    </div>
                </div>

                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-4"></div>
                        <h3>Reservation.</h3>
                        <blockquote><p>Safe and secure reservations online no need to  worry.</p><cite>Georgie M.D.</cite></blockquote>
                    </div>
                </div>

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-5"></div>
                        <h3>Housing Consultancy.</h3>
                        <blockquote><p>We have lots of worthy information for you.</p><cite>Estate consultant</cite></blockquote>
                    </div>
                </div>
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
    <script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="js/jquery.slitslider.js"></script>
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