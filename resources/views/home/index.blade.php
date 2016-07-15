@extends("layout.master")
@section("title", "Home")
@section("styles")
    @include("partials._styles")
    @endsection

@section("content")

    @include("partials._slider")



   @include("partials._search")
<div class="container-fluid">

    <div class="row">

        <div class="col-md-3 timing">

          SEARCH HERE
            <table class="table-responsive">

                <tr>
                    <td>CATEGORY</td>
                    <td>
                        <select class="form-control">
                            <option>CATEGORY</option>
                            <option>Hostels</option>
                            <option>Rentals</option>
                            <option>Apartments</option>

                        </select>
                    </td>


                </tr>
                <tr>
                    <td>LOCATION</td>
                    <td>
                        <select class="form-control">

                            <option>LOCATION</option>
                            <option>Lurambi</option>
                            <option>Makuti</option>
                            <option>Sichirai</option>
                            <option>Juakali</option>
                        </select>
                    </td>


                </tr>
                <tr>
                    <td>PRICE RANGE</td>

                    <td><select class="form-control">
                        <option>SELECT</option>
                        <option>1000-2000</option>
                        <option>2000-3000</option>
                        </select>
                    </td>


                </tr>
                <tr>
                    <td>  <button type="button" class="btn btn primary btn-lg btn-block">CANCEL</button></td>
                    <td>
                        <button type="button" class="btn btn primary btn-lg btn-block">SEARCH</button>

                    </td>

                </tr>


            </table>

<div>

    more adverts here

</div>


        </div>


        <div><h1>ALL HOUSES</h1></div>
        <div class="col-md-9">

            <div class="living_middle">
                <div class="container">

                    <div class="col-md-9 wow fadeInRight" data-wow-delay="0.4s">

                        <div class="educate_grid">
                            <div class="col-md-4 room-grid">
                                <div class="living_box">
                                    <a href="single">
                                        <img src="imported/images/e1.jpg" class="img-responsive" alt=""/>
                                        <span class="sale-box">
				                             <span class="sale-label">Balcony</span>
                                        </span>
                                    </a>




                                    <div class="living_desc">
                                        <h3><a href="#">aliquam volutp</a></h3>
                                        <p>Lorem ipsum consectetuer adipiscing </p>
                                        <a href="single" class="btn3">Rent</a>
                                        <p class="price">$100.00</p>
                                    </div>
                                    <table border="1" class="propertyDetails">
                                        <tbody><tr>
                                            <td><img src="imported/images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                                            <td><img src="imported/images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                                            <td><img src="imported/images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                                        </tr>
                                        </tbody></table>




                                </div>
                            </div>





















































                            <div class="col-md-4 room-grid">
                                <div class="living_box">
                                    <a href="single">
                                        <img src="imported/images/e2.jpg" class="img-responsive" alt=""/>
				                        <span class="sale-box">
				                            <span class="sale-label">Pool</span>
			                            </span>
                                    </a>

                                    <div class="living_desc">
                                        <h3><a href="#">aliquam volutp</a></h3>
                                        <p>Lorem ipsum consectetuer adipiscing </p>
                                        <a href="single" class="btn3">Rent</a>
                                        <p class="price">$100.00</p>
                                    </div>
                                    <table border="1" class="propertyDetails">
                                        <tbody><tr>
                                            <td><img src="imported/images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                                            <td><img src="imported/images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                                            <td><img src="imported/images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                                        </tr>
                                        </tbody></table>

                                </div>
                            </div>

                            <div class="col-md-4 room-grid">
                                <div class="living_box">
                                    <a href="single">
                                        <img src="imported/images/e2.jpg" class="img-responsive" alt=""/>
				                        <span class="sale-box">
				                            <span class="sale-label">Pool</span>
			                            </span>
                                    </a>

                                    <div class="living_desc">
                                        <h3><a href="#">aliquam volutp</a></h3>
                                        <p>Lorem ipsum consectetuer adipiscing </p>
                                        <a href="single" class="btn3">Rent</a>
                                        <p class="price">$100.00</p>
                                    </div>
                                    <table border="1" class="propertyDetails">
                                        <tbody><tr>
                                            <td><img src="imported/images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                                            <td><img src="imported/images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                                            <td><img src="imported/images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                                        </tr>
                                        </tbody></table>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>



                    <div class="col-md-9 wow fadeInRight" data-wow-delay="0.4s">

                        <div class="educate_grid">
                            <div class="col-md-4 room-grid">
                                <div class="living_box">
                                    <a href="single">
                                        <img src="imported/images/e1.jpg" class="img-responsive" alt=""/>
                                        <span class="sale-box">
				                             <span class="sale-label">Balcony</span>
                                        </span>
                                    </a>

                                    <div class="living_desc">
                                        <h3><a href="#">aliquam volutp</a></h3>
                                        <p>Lorem ipsum consectetuer adipiscing </p>
                                        <a href="single" class="btn3">Rent</a>
                                        <p class="price">$100.00</p>
                                    </div>
                                    <table border="1" class="propertyDetails">
                                        <tbody><tr>
                                            <td><img src="imported/images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                                            <td><img src="imported/images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                                            <td><img src="imported/images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                                        </tr>
                                        </tbody></table>

                                </div>
                            </div>
                            <div class="col-md-4 room-grid">
                                <div class="living_box">
                                    <a href="single">
                                        <img src="imported/images/e2.jpg" class="img-responsive" alt=""/>
				                        <span class="sale-box">
				                            <span class="sale-label">Pool</span>
			                            </span>
                                    </a>

                                    <div class="living_desc">
                                        <h3><a href="#">aliquam volutp</a></h3>
                                        <p>Lorem ipsum consectetuer adipiscing </p>
                                        <a href="single" class="btn3">Rent</a>
                                        <p class="price">$100.00</p>
                                    </div>
                                    <table border="1" class="propertyDetails">
                                        <tbody><tr>
                                            <td><img src="imported/images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                                            <td><img src="imported/images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                                            <td><img src="imported/images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                                        </tr>
                                        </tbody></table>

                                </div>
                            </div>

                            <div class="col-md-4 room-grid">
                                <div class="living_box">
                                    <a href="single">
                                        <img src="imported/images/e2.jpg" class="img-responsive" alt=""/>
				                        <span class="sale-box">
				                            <span class="sale-label">Pool</span>
			                            </span>
                                    </a>

                                    <div class="living_desc">
                                        <h3><a href="#">aliquam volutp</a></h3>
                                        <p>Lorem ipsum consectetuer adipiscing </p>
                                        <a href="single" class="btn3">Rent</a>
                                        <p class="price">$100.00</p>
                                    </div>
                                    <table border="1" class="propertyDetails">
                                        <tbody><tr>
                                            <td><img src="imported/images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                                            <td><img src="imported/images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                                            <td><img src="imported/images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                                        </tr>
                                        </tbody></table>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>



    <div class="living_bottom">
        <div class="container">
            <h2 class="title block-title">Latest Houses</h2>
            <div class="col-md-6 post_left wow fadeInLeft" data-wow-delay="0.4s">
                <div class="mask1"><img src="imported/images/pic4.jpg" alt="image" class="img-responsive zoom-img" /></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="single">More</a></p>
                <div class="divider"></div>
                <p class="field-content">30 Sep 2015</span></p>
            </div>
            <div class="col-md-6 post_left wow fadeInRight" data-wow-delay="0.4s">
                <div class="mask1"><img src="imported/images/pic5.jpg" alt="image" class="img-responsive zoom-img" /></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus, sem eget sagittis sagittis, nisl magna sodales eros, ut feugiat velit velit non turpis. Cras eu nibh dapibus justo fringilla   <a href="single">More</a></p>
                <div class="divider"></div>
                <p class="field-content">30 Sep 2015</span></p>
            </div>
        </div>
    </div>












    <!-- quick links -->
    <div class="news-section" id="news">
        <div class="container">
            <div class="news-section-head text-center">
                <h3>RECCOMENDED HOUSES</h3>
                <p>Here, there and everywhere... what we've been doing</p>
            </div>
            <div class="news-section-grids">
                <div class="col-md-4 news-section-grid">
                    <img src="images/1.jpg" alt="" />
                    <div class="info">
                        <a class="news-title" href="single">RIAM HOSTELS</a>
                        <label>August18</label>
                        <p>Meet hundreds of house owners just like you and exchange ideas.</p>
                        <a class="more" href="single">Read more</a>
                    </div>
                </div>
                <div class="col-md-4 news-section-grid">
                    <img src="images/2.jpg" alt="" />
                    <div class="info">
                        <a class="news-title" href="single">IJAB HOSTELS</a>
                        <label>August 28</label>
                        <p>Aimed at improving our customer experience end educate them more.</p>
                        <a class="more" href="single">Read more</a>
                    </div>
                </div>
                <div class="col-md-4 news-section-grid">
                    <img src="images/3.jpg" alt="" />
                    <div class="info">
                        <a class="news-title" href="single">PALMLEAF HOSTELS</a>
                        <label>September 12</label>
                        <p>Launching our monthly housing magazine to summarize our daily website updatess</p>
                        <a class="more" href="single">Read more</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- //quick links -->













    <!-- Stats -->
    <div class="stats">
        <div class="container">
            <p class="slideanim">Link2hao has impacted greately to make people's work easier. We have done it, and we are still working even harder to satisfy all your technology needs.</p>
            <div class="stats-info">
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-smile-o"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='18000' data-delay='.5' data-increment="10">18000</div>
                    <p class="stats-info">Happy Smiles</p>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-facebook"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1700' data-delay='.5' data-increment="1">17000</div>
                    <p class="stats-info">Facebook Likes</p>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-twitter"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='21500' data-delay='.5' data-increment="1">21500</div>
                    <p class="stats-info">Twitter Followers</p>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <i class="fa fa-flask"></i>
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='28551' data-delay='.5' data-increment="1">20500</div>
                    <p class="stats-info">Subscriptions</p>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!-- //Stats -->
    <script type="text/javascript" src="js/numscroller-1.0.js"></script>







@endsection