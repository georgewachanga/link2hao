@extends('layout.master')

@section('content')


        <!-- news-section -->
<section class="news-page">
    <div class="inner-banner demo-2 text-center">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index.html">Link2hao.com<span>Because Housing maters.</span></a></h1>
        </header>
        <div id="breadcrumb_wrapper">
            <div class="container">
                <h2>Get to know whats up on Link2hao.com</h2>
                <h6>Stay updated</h6>
            </div>
        </div>
    </div>
    <!--- news ---->
    <div class="news">
        <div class="container">
            <h3 class="last-updated">you  are here </h3>
            <div class="public-relations">
                <img src="images/public.jpg" class="img-responsive" alt="" />
                <h3 class="p-c-text text-center">our updates</h3>
                <div class="news-grids">
                    <div class="col-md-6 news-left">
                        <h3>Keeping you updated all the time</h3>
                        <ol>
                            <li>Keep checking to see whats new on Link2hao.com.</li>
                        </ol>
                    </div>
                    <div class="col-md-6 news-left news-right">
                        <h3>Upcoming</h3>
                        <ol>
                            <li><a href="#">We have No Upcoming news Yet</a></li>

                        </ol>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--- /news ---->
</section>
<!-- //news-section -->

    @endsection