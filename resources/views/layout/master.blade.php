
@include("partials._head")
<body>
@include("partials._navigation")

@include("partials._error")
<!--fb-like-button-code-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!--//fb-like-button-code-->
<!--i removed include partials.header here-->

        <!--i removed include partials.navigation here-->

@yield("content")



@include("partials._newsletter")
       @include("partials._footer")