@extends("layout.master")
@section("title", "Property name here")

@section("styles")
@include("partials._styles")
@endsection

@section("content")
        <!--single start here-->

@include("partials._search")
<div class="single">

    <div class="container">


        <h1>PROPERTY NAME</h1>

        <div class="col-md-8 sing">
            <div class=" single-grid">
                <img class="img-responsive" src="imported/images/blog.jpg" alt=""  class="img-responsive">
                <div class="lone-line">
                    <h2>PROPERTY DESCRIPTION</h2>

                    <div class="cal">
                        <ul>
                            <li><span ><i class="glyphicon glyphicon-calendar"> </i>22.08.2014</span></li>
                            <li><a href="#" ><i class="glyphicon glyphicon-comment"> </i>24</a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.</p>

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
            <div class=" single-profile">
                <h4> Related Properties</h4>
                <div class="single-left ">
                    <div class="col-md-3 post-top">
                        <img class="img-responsive " src="imported/images/s1.jpg" alt="">
                        <h6>Duis autem</h6>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-md-3 post-top">
                        <img class="img-responsive " src="imported/images/s2.jpg" alt="">
                        <h6>Duis autem</h6>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-md-3 post-top">
                        <img class="img-responsive " src="imported/images/s3.jpg" alt="">
                        <h6>Duis autem</h6>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col-md-3 post-top">
                        <img class="img-responsive " src="imported/images/s4.jpg" alt="">
                        <h6>Duis autem</h6>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

        </div>
        <div class="col-md-3 categories-grid">
            <div class="grid-categories">
                <h4>FEATURES</h4>
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
                <h4>CONTACTS</h4>
                <ul class="popular popular-in">
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>MAY 2014</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>SEP 2012</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>JANUARY 2011</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>FEB 2010</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-ok"> </i>NOV 2009</a></li>
                </ul>
            </div>
            <div >
           <a href="book"><input type="button" class="btn btn-success" value="BOOK AND RESERVE NOW FOR ONLY KSH 100/="> </a>

            </div>

        </div>
        <div class="clearfix"> </div>

    </div>
</div>

@endsection