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

            <div class="contact-infom">
                <h4>GET IN TOUCH</h4>
                <p>We are ever accessible, Feel free to contact us  at any time of the day, and we promise we will Get back to you as soon as possible.</p>
            </div>
            <div class="address">
                <div class="row">
                    <div class="col-md-3 location">
                        <h4>Address1 :</h4>
                        <p>Managing Director</p>
                        <p>George Wachanga</p>
                        <p>Telephone : 0702452640</p>
                        <p>Facebook : sirgeorge Wachanga</p>
                        <p>Email : <a href="mailto:george@link2ho.com">@link2ho.com</a></p>
                    </div>
                    <div class="col-md-3 location">
                        <h4>Address2 :</h4>
                        <p>Manager</p>
                        <p>Bonface Otieno</p>
                        <p>Telephone : 0716594278</p>
                        <p>Email : <a href="mailto:boniface@link2ho.com">boniface@link2ho.com</a></p>
                    </div>
                    <div class="col-md-3 location">
                        <h4>Address3 :</h4>
                        <p>IT Guy</p>
                        <p>Magnus Otwani</p>
                        <p>Telephone : 0711545789</p>
                        <p>Facebook: Magnus Otwani</p>
                        <p>Email : <a href="mailto:magnus@link2ho.com">magnus@link2ho.com</a></p>
                    </div>
                    <div class="col-md-3 location">
                        <h4>Address4 :</h4>
                        <p>Secretary</p>
                        <p>Tabitha Soo</p>
                        <p>Telephone : 0710727030</p>
                        <p>Facebook: tabby</p>
                        <p>Email : <a href="mailto:tabby@link2ho.com">tabby@link2ho.com</a></p>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                <!--div class="row">
                    <div class="col-md-3 location">
                        <h4>Address4 :</h4>
                        <p>Secretary</p>
                        <p>Tabitha Soo</p>
                        <p>Telephone : 0710727030</p>
                        <p>Facebook: tabby</p>
                        <p>Email : <a href="mailto:tabby@link2ho.com">tabby@link2ho.com</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div-->
            </div>
            <div class="contact-form">
                <h4>CONTACT FORM</h4>

                {!! Form::open(array('route' => 'contact.store', 'method' => 'POST', 'files' => true )) !!}
                    <!--input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                    <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                    <textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                    <input type="submit" value="Submit"-->

                     <input placeholder="Your name" name="name" class="user" type="text" required="">
                <input placeholder="Your Email" name="email" class="user" type="text" required="">
                <input placeholder="Mobile No." name="telephone" class="user" type="text" required="">
                <textarea type="text"  placeholder="your message here" name="message" class="user"  required=""></textarea>
            <input type="submit" value="Subscribe">
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</section>
<!-- //contact-section -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<div class="modal ab fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog about" role="document">
        <div class="modal-content about">
            <div class="modal-header">
                <button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="discount">
                    <h3>OUR CONTACT INFORMATION</h3>
                    <p>If you are not contacted in the next 20 minutes, Contact ..</p>
                </div>
            </div>
            <div class="modal-body about">

                <div class="dis-contact" style="text-align: center">
                    <div class="row">
                        <div class="col-md-5 location">
                            <h4>Address1 :</h4>
                            <p>Managing Director</p>
                            <p>George Wachanga</p>
                            <p>Telephone : 0702452640</p>
                            <p>Facebook : sirgeorge Wachanga</p>
                            <p>Email : <a href="mailto:george@link2ho.com">@link2ho.com</a></p>
                        </div>

                        <div class="col-md-2 location">

                        </div>

                        <div class="col-md-5 location">
                            <h4>Address4 :</h4>
                            <p>Secretary</p>
                            <p>Tabitha Soo</p>
                            <p>Telephone : 0710727030</p>
                            <p>Facebook: tabby</p>
                            <p>Email : <a href="mailto:tabby@link2ho.com">tabby@link2ho.com</a></p>
                        </div>

                        <div class="hide" id="book">
                            {{ isset($booked) ? "<div id='booked'> </div>" : "" }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').modal('show');
    });
</script>

@endsection