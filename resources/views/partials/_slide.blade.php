<!--/banner-section-->
<div id="demo-1" data-zs-src='["/images/2.jpg", "/images/1.jpg", "/images/3.jpg"]' data-zs-overlay="dots">
    <div class="demo-inner-content">



        <div class="header-top">

            <div class="search-box">
                <div id="sb-search" class="sb-search">
                    <form action="#" method="post">
                        <input name="name" class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                        <label class="sb-search-label">I am looking for a house in ...</label>
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
                <!-- search-scripts -->
                <script src="/slider/js/classie.js"></script>
                <script src="/slider/js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!-- //search-scripts -->

            </div>

            <div class="clearfix"></div>-->
        </div>
        <div class="clearfix"></div>
        <!--banner-info-->
        <div class="banner-info">
            <h1><a href="/"><span class="logo-sub">www.</span> Link2hao <span class="logo-sub">.com</span> </a></h1>
            <h2><span>FIND AVAILABLE</span> <span>HOUSES FOR RENTING NEAR YOU AND BOOK ONLINE</span></h2>
            <p>Type category and Location to search for a house.</p>
            {!! Form::open(array('url' => '/search', 'method' => 'POST' )) !!}
                <div class="search-two">
                    <!--search image icons on line 239 in zoomslider-->
                    {{Form::select('category', $categories, null, array('class'=>'frm-field required', 'id' => 'country', 'onchange' => 'change_country(this.value)'))}}
                </div>
                <div class="section_room">
                    {{Form::select('location', $locations, null, array('class'=>'frm-field required', 'id' => 'country', 'onchange' => 'change_country(this.value)'))}}
                </div>

                <input type="submit" value="Find House">
                <div class="clearfix"></div>

            {{ Form::close() }}
            <p>Because Housing matters</p>
        </div>
        <!--//banner-info-->
    </div>
</div>
<!-- discounts-->


<script src="/slider/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/slider/js/jquery.zoomslider.min.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo").flexisel({
            visibleItems:1,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed:1000,
            pauseOnHover:true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 1
                }
            }
        });
    });
</script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover:true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
    });
</script>
<script type="text/javascript" src="/slider/js/jquery.flexisel.js"></script>
<script src="/slider/js/bootstrap.js"></script>