@extends("layout.master")
@section("title", "job view")
@section("content")

        <!-- Careers-section -->
<section class="career-page">
    <div class="inner-banner demo-2 text-center">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index.html">Persistence <span>brings success</span></a></h1>
        </header>
        <div id="breadcrumb_wrapper">
            <div class="container">
                <h2>Career</h2>
                <h6>The dream is free, the hustle is sold separately</h6>
            </div>
        </div>
    </div>
    <!--- Careers ---->
    <div class="careers">
        <div class="container">
            <h3 class="last-updated">Current Opening</h3>
            <div class="job-lists">
                <div class="col-md-9 single_right">
                    <div class="job-detailed">
                        <div class="jobs-item with-thumb">
                            <div class="jobs_right">
                                <div class="date_desc"><h6 class="job-title">{{ $career->name }}</h6>
                                    <span class="meta">{{ $career->location }} Vacancies: 5, Views: 130</span>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="job-desc">{{ $career->description }}</p>
                                <div class="job-summary">
                                    <h6>Job Summary</h6>
                                    <ol start="1">
                                        @foreach(explode('</p>', $career->summary) as $item)
                                            @if(trim($item != ""))
                                            <li>{{ strip_tags($item) }}</li>
                                            @endif
                                        @endforeach
                                    </ol>
                                </div>
                                <div class="skill-req">
                                    <h6>Skills Required</h6>
                                    <ul>
                                        @foreach(explode('</p>', $career->skills) as $item)
                                            @if(trim($item != ""))
                                            <li><i class="fa fa-long-arrow-right"></i>{{ strip_tags($item) }}</li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="qualification">
                                    <h6>Qualification</h6>
                                    <p>{{ $career->requirements }}</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="job-contact">
                        <h5 class="widget-title">Contact</h5>
                        <p>Email: <a href="mailto:{{ $career->email }}">{{ $career->email }}</a></p>
                        <p>Ph: {{ $career->phone }}</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--Horizontal Tab-->
    <!--- /Careers ---->
</section>
<!-- //Careers-section -->

@endsection