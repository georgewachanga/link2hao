@extends("layout.master")
@section("title", "careers")

@section("content")
        <!-- Careers-section -->
<section class="career-page">
    <div class="inner-banner demo-2 text-center">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index.html">Are you looking for a job? <span>see who has an opening for you</span></a></h1>
        </header>
        <div id="breadcrumb_wrapper">
            <div class="container">
                <h2>Jobs/ Internships/ Attachment Placement</h2>
                <h6>lets help you find one</h6>
            </div>
        </div>
    </div>
    <!--- Careers ---->
    <div class="careers">
        <div class="container">
            <h3 class="last-updated">Careers</h3>
            <div class="job-lists">
                <div class="col-md-9 single_right">
                    <div class="lab-instruments">
                        <div id="parentHorizontalTab">
                            <ul class="resp-tabs-list hor_1">
                                <li>Available jobs</li>
                                <li>Recent Openings</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget_search">
                        <h5 class="widget-title">Search</h5>
                        <div class="widget-content">
                            <span>I'm looking for a ...</span>
                            <select class="form-control jb_1">
                                <option value="0">Job</option>
                                <option value="">Category</option>
                                <option value="">Category</option>
                                <option value="">Category</option>
                                <option value="">Category</option>
                            </select>
                            <span>in</span>
                            <input type="text" class="form-control jb_2" placeholder="Location">
                            <input type="text" class="form-control jb_2" placeholder="Industry / Role">
                            <input type="submit" class="btn btn-default" value="Search">
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--Horizontal Tab-->
    <!--- /Careers ---->
    @include("partials._postjob")
</section>
<!-- //Careers-section -->
@endsection