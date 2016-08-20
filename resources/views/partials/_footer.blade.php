 <!-- footer -->
<footer>
    <div class="footer-grids">
        <div class="container">
            <div class="col-md-3 footer one">
                <h3>About Company</h3>
                <p> Getting a roof over your head has never been easy as we have made it now.You can now find and reserve a houseat the comfort of wherever you are and at
                    the convenience of your time. No more worry, No more fear, no more unwanted expenses. Thanks to Link2hao!!"
                </p>
                <p class="adam">- George Wachanga, CEO</p>
                <div class="clear"></div>
            </div>
            <div class="col-md-3 footer one tweet">
                <h3>Tweets</h3>
                <ul>
                    <a class="twitter-timeline"
                       href="https://twitter.com/"
                       data-widget-id="724734140185227264"
                       data-tweet-limit="2"
                       data-chrome="nofooter noborders transparent">
                        Tweets by @link2hao</a>
                    <script>
                        !function(d,s,id)
                        {var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </ul>
            </div>
            <div class="col-md-3 footer two">
                <h3>Keep Connected</h3>
                <ul>
                    <div class="fb-like" data-href="http://www.link2hao.co.ke" data-width="80" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                    <li><a class="fb1" data-show-count="false" href="https://twitter.com/intent/follow?screen_name=OtwaniMagnus"><i class="fa fa-twitter"></i>Follow us on Twitter</a></li>
                    <li><a class="fb2" href="#"><i class="fa fa-google-plus"></i>Add us on Google Plus</a></li>
                    <li><a class="fb3" href="#"><i class="fa fa-dribbble"></i>Follow us on Dribbble</a></li>
                    <li><a class="fb4" href="#"><i class="fa fa-pinterest-p"></i>Follow us on Pinterest</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer three">
                <h3>Contact Information</h3>
                <ul>
                    <li><p>Link2hao</p><div class="clearfix"></div> </li>
                    <li><i class="fa fa-map-marker"></i><p>Kakamega- Kenya </p><div class="clearfix"></div> </li>
                    <li><i class="fa fa-phone"></i><p>0702452640</p> <div class="clearfix"></div> </li>
                    <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com">contact@link2hao.com</a> <div class="clearfix"></div></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- maps>
    <div id="map">
        <iframe src="/"></iframe>
    </div -->
    <div class="copy-right-grids">
        <div class="container">

            <div  class="footer-links">
               <ul>
                    <li><a href="sitemap">Sitemap</a></li>
                    <li><a href="privacy_policy">Privacy Policy</a></li>
                    <li><a href="terms">Terms of Use</a></li>
                    <li><a href="sitemap">Sitemap</a></li>
                    <li><a href="privacy_policy">Privacy Policy</a></li>
                    <li><a href="terms">Terms and conditions</a></li>
                   <li><a href="faq">FAQ</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<!-- //footer -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

        $(function() {
            if ((location.pathname.split("/")[1]) !== ""){
                $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').parent().addClass('current_page');
            }
            else {
                $('nav li.home-link a').parent().addClass('current_page');
            }
        });


    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>