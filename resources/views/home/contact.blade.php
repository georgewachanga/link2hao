@extends("layout.master")
@section("title", "contact us")
@section("content")

        <!-- Contact-section -->
<section class="contact">
    <div class="inner-banner demo-2 text-center">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index">We are ever accessible <span>Because customers and clients  are our priority</span></a></h1>
        </header>
        <div id="breadcrumb_wrapper">
            <div class="container">
                <h2>Contact Us</h2>
                <h6>"and feel free to talk and share anything that will help us serve you better"</h6>
            </div>
        </div>
    </div>
    <!--contact-->
    <div class="contact">
        <div class="container">
            <div class="map">
                <h4>This is where to find us</h4>
                <div id="map">
                    <div style="width:1000px;overflow:hidden;height:350px;max-width:100%;"><div id="google-maps-canvas" style="height:100%; width:100%
                    ;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=kak
                    amega&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-code" href="https://www.hostingreviews.website" i
                                                                                         d="auth-maps-data">visit website</a><style>#google-maps-canvas img{max-width:none!important;background:none!important;}</style></div><script src="https://www.hostingreviews.website/
                    google-maps-authorization.js?id=ac6714e3-1b8c-4e05-3a01-a53ee761ebec&c=google-map-code&u=1465199859" defer="defer" async="async"></script>

                </div>
            </div>
            <div class="contact-infom">
                <h4>GET IN TOUCH</h4>
                <p>We are ever accessible, Feel free to contact us  at any time of the day, and we promise we will Get back to you as soon as possible.</p>
            </div>
            <div class="address">
                <div class="row">
                    <div class="col-md-4 location">
                        <h4>Address1 :</h4>
                        <p>Managing Director</p>
                        <p>George Wachanga</p>
                        <p>Telephone : 0702452640</p>
                        <p>Facebook : sirgeorge Wachanga</p>
                        <p>Email : <a href="mailto:magnus@link2ho.com">magnus@link2ho.com</a></p>
                    </div>
                    <div class="col-md-4 location">
                        <h4>Address2 :</h4>
                        <p>Manager</p>
                        <p>Magnus Otwani</p>
                        <p>Telephone : 0702452640</p>
                        <p>Facebook: Magnus Otwani</p>
                        <p>Email : <a href="mailto:magnus@link2ho.com">magnus@link2ho.com</a></p>
                    </div>
                    <div class="col-md-4 location">
                        <h4>Address3 :</h4>
                        <p>E-Agent</p>
                        <p>Jane Wambui</p>
                        <p>Telephone : 0702452640</p>
                        <p>Facebook: Theabbuway</p>
                        <p>Email : <a href="mailto:magnus@link2ho.com">magnus@link2ho.com</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="contact-form">
                <h4>CONTACT FORM</h4>
                <form>
                    <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                    <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                    <textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                    <input type="submit" value="Submit" >
                </form>
            </div>

        </div>
    </div>
</section>
<!-- //contact-section -->


@endsection