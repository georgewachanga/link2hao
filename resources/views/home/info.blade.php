@extends("layout.master")




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


@section("content")

        <!--- Book-a-test ---->
<div class="test-booking">
    <div class="container">
        <h3 class="last-updated">REGISTRATION FORM</h3>
        <div class="text-booking-form">
            <div class="col-md-6 text-booking-form-left">
                <form>
                    <label>First Name <span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>

                    <label>Last Name<span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>

                    <label>Gender <span>*</span></label>
                    <select class="">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <div class="clearfix"></div>

                    <label>Date of Birth<span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>
                    <!--label>Address <span>*</span></label>
                    <textarea class="mess" placeholder="Address"></textarea>
                    <div class="clearfix"></div-->
                    <label>Email<span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>

                    <label>Password<span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>

                    <label>Confirm Password<span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>


                    <div class="clearfix"></div>
                    <div class="c-lang">
                        <p class="update"><input type="checkbox" id="c1" name="cc">Keep me updated on the latest offers and much more	</p>							</div>
                    <div class="book-submit">
                        <input type="submit" value="Proceed to Book">
                    </div>
                </form>




            </div>
            <div class="col-md-6 text-booking-form-right">
                <img src="images/abt1.png" alt="" />
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="preventive-desc">
            <h4>What if I fail to get the house i wanted?</h4>
           <p>We have mechanisms to refund your money way  up to 95%</p>  </div>



@endsection