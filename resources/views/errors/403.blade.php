@extends("layout.master")

@section('title','403')
@section("content")

        <!-- 404-section -->
<section class="error">
    <div class="inner-banner demo-2 text-center">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index.html">Link2hao <span>housing people</span></a></h1>
        </header>
        <div id="breadcrumb_wrapper">
            <div class="container">
                <h1>403</h1>
                <h6>Poses yee not the required permission to access this resource</h6>
            </div>
        </div>
    </div>
    <!--- 404 ---->
    <div class="hd-content">
        <div class="container">
            <div class="page_404 text-center">
                <h3>403</h3>
                <p>Oops! Access Denied</p>

                <input type="text" placeholder="type and hit enter">
            </div>
        </div>
    </div>
    <!--- /404 ---->
</section>
<!-- //404-section -->

@endsection