@extends("layout.master")

@section("content")

        <!-- 404-section -->
<section class="error">
    <div class="inner-banner demo-2 text-center">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index.html">Link2hao<span>housing people</span></a></h1>
        </header>
        <div id="breadcrumb_wrapper">
            <div class="container">
                <h1>404</h1>
                <h6>Page not found</h6>
            </div>
        </div>
    </div>
    <!--- 404 ---->
    <div class="hd-content">
        <div class="container">
            <div class="page_404 text-center">
                <h3>404</h3>
                <p>Oops! It seems like the page you were looking for has not been found. Please go back or use the search form below.</p>

                <input type="text" placeholder="type and hit enter">
            </div>
        </div>
    </div>
    <!--- /404 ---->
</section>
<!-- //404-section -->

@endsection