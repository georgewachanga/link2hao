<!--/banner-section-->
<div id="demo-1" data-zs-src='["/images/2.jpg", "/images/1.jpg", "/images/3.jpg"]' data-zs-overlay="dots">
    <div class="demo-inner-content">



        <div class="header-top">
            <!-- /header-left --
            <div class="header-left">

                <div class="tag"><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-tag"></span> Advertise your Houses >></a></div>
                <div class="tag"><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></div>
            </div>
            <!-- //header-left --
            <div class="search-box">
                <div id="sb-search" class="sb-search">
                    <form action="#" method="post">
                        <input name="name" class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
                <!-- search-scripts --
                <script src="/slider/js/classie.js"></script>
                <script src="/slider/js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!-- //search-scripts --
                <ul>

                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal4"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Select Your Location</a></li>

                    <li><button id="showRight" class="navig">Login </button>
                        <!-- <div class="cbp-spmenu-push">
                            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                                <h3>Login</h3>
                                <div class="login-inner">
                                    <div class="login-top">
                                        <form action="#" method="post">
                                            <input type="text" name="email" class="email" placeholder="Email" required=""/>
                                            <input type="password" name="password" class="password" placeholder="Password" required=""/>
                                            <input type="checkbox" id="brand" value="">
                                            <label for="brand"><span></span> Remember me</label>
                                        </form>
                                        <div class="login-bottom">
                                            <ul>
                                                <li>
                                                    <a href="#">Forgot password?</a>
                                                </li>
                                                <li>
                                                    <form action="#" method="post">
                                                        <input type="submit" value="LOGIN"/>
                                                    </form>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>

                                    </div>
                                    <div class="social-icons">
                                        <ul>
                                            <li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
                                            <li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
                                            <li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <script src="/slider/js/classie2.js"></script>
                        <script>
                            var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
                                    showRight = document.getElementById( 'showRight' ),
                                    body = document.body;

                            showRight.onclick = function() {
                                classie.toggle( this, 'active' );
                                classie.toggle( menuRight, 'cbp-spmenu-open' );
                                disableOther( 'showRight' );
                            };

                            function disableOther( button ) {
                                if( button !== 'showRight' ) {
                                    classie.toggle( showRight, 'disabled' );
                                }
                            }
                        </script>
                        <!--Navigation from Right To Left--
                    </li>
                </ul>

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
<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog about" role="document">
        <div class="modal-content about">
            <div class="modal-header">
                <button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="discount">
                    <h3>Advertise your property and let it be seen</h3>
                    <p>Create an account to advertise</p>
                    <!--form action="#" method="post">
                        <select id="country5" onchange="change_country(this.value)" class="frm-field required">
                            <option selected="selected" value="-1">-Buying Time Period-</option>
                            <option value="0">Just Researching</option>
                            <option value="7">1 Week</option>
                            <option value="14">2 Weeks</option>
                            <option value="30">1 Month</option>
                            <option value="60">2 Months</option>
                        </select>
                        <input type="text" name="pin code" class="Pin code" placeholder="Pin code" required="">
                    </form-->
                </div>
            </div>
            <div class="modal-body about">

                <div class="dis-contact">
                    <h4>Personal Information</h4>
                    <form action="#" method="post">
                        <input type="text" name="name" class="name active" placeholder="Property Name" required="">
                        <input type="text" name="category" class="name active" placeholder="Category" required="">
                        <input type="text" name="price" class="phone" placeholder="Price" required="">
                        <input type="text" name="location" class="name active" placeholder="Location" required="">
                        <input type="text" name="description" class="name active" placeholder="Property Description" required="">
                        <input type="text" name="imagepath" class="name active" placeholder="Profile Image" required="">
                        <div class="d-c">
														<span class="checkbox1">
															<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>I agree to Terms and Conditions.</label>
														</span>

                        </div>
                        <input type="submit" value="Submit">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //discounts-->
<!-- //sign-up-->
@include("partials._signup")

<!-- /location-->
<div class="modal ab fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog sign" role="document">
        <div class="modal-content about">
            <div class="modal-header one">
                <button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="discount one">
                    <h3>Where do you stay</h3>

                </div>
            </div>
            <div class="modal-body about">
                <div class="login-top sign-top location">
                    <form action="#" method="post">
                        {{Form::select('mylocation', $locations, null, array('class'=>'frm-field required', 'id' => 'country12', 'onchange' => 'change_country(this.value)'))}}

                    </form>
                </div>


            </div>


        </div>
    </div>
</div>
<!-- //location-->
<!--//banner-section-->


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