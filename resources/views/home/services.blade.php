@extends("layout.master")
@section("title", "services")
@section("content")

        <!-- tabs -->
<div class="vertical-tabs">
    <div class="container">
        <h3 class="title text-center">What We Do at Link2hao</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-8 col-xs-9 bhoechie-tab-container">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                    <div class="list-group">
                        <a href="#" class="list-group-item active text-center">
                            ADVERTISING
                        </a>
                        <a href="#" class="list-group-item text-center">
                            ONLINE BOOKING
                        </a>
                        <a href="#" class="list-group-item text-center">
                            RESERVATION
                        </a>
                        <a href="#" class="list-group-item text-center">
                            HOUSING CONSULTANCY
                        </a>
                        <a href="#" class="list-group-item text-center">
                            OTHER
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                    <!-- flight section -->
                    <div class="bhoechie-tab-content active">
                        <div class="services">
                            <div class="ser-img">
                                <img src="images/1.jpg" title="service" alt="" />
                            </div>
                            <div class="ser-info">
                                <h3>want to advertise</h3>
                                <p><h4>Advertise all your products at Link2hao Free of charge!!!
                                    This offer runs until December 2016 after which charger will start to apply</h4>
                                </p>

                                <!--a href="#">Read More</a-->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- train section -->
                    <div class="bhoechie-tab-content">
                        <div class="services">
                            <div class="ser-img">
                                <img src="images/2.jpg" title="service" alt="" />
                            </div>
                            <div class="ser-info">
                                <h3>Want to book</h3>
                                <p> booking is free of charge yees!!
                                </p>
                                <p> To book online, Contact 0702452640 for more details
                                </p>

                                <!--a href="#">Read More</a-->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <!-- hotel search -->
                    <div class="bhoechie-tab-content">
                        <div class="services">
                            <div class="ser-img">
                                <img src="images/3.jpg" title="service" alt="" />
                            </div>
                            <div class="ser-info">
                                <h3>want to reserve?</h3>
                                <p>then go ahead!! Do it
                                </p>
                                <!--a href="#">Read More</a-->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="bhoechie-tab-content">
                        <div class="services">
                            <div class="ser-img">
                                <img src="images/4.jpg" title="service" alt="" />
                            </div>
                            <div class="ser-info">
                                <h3>want to  consult</h3>
                                <p>The platform is open for you...simply amazing give us  a call!!
                                </p>
                                <a href="/consultancy">Read More</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="bhoechie-tab-content">
                        <div class="services">
                            <div class="ser-img">
                                <img src="images/5.jpg" title="service" alt="" />
                            </div>
                            <div class="ser-info">
                                <h3>Something more</h3>
                                <p>yes...some thing else to be put here
                                </p>
                                <a href="single">Read More</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/tabs.js"></script>
<!-- //tabs -->

@endsection