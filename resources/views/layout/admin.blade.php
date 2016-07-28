@include("partials.admin._head")

<body class="sticky-header left-side-collapsed"  onload="initMap()">
<section>

@include("partials.admin._sidemenu")
@include("partials.admin._header")
    @yield("content")



            <!--footer section start-->
    <footer>
        <p>&copy 2016 All Rights Reserved | Digitalink Solutions</p>
    </footer>
    <!--footer section end-->
</section>

<script src="/admin/js/jquery.nicescroll.js"></script>
<script src="/admin/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/admin/js/bootstrap.min.js"></script>
</body>
</html>



