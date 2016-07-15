@extends("layout.master")

@section("content")

        <!--- Book-a-test ---->
<div class="test-booking">
    <div class="container">
        <h3 class="last-updated">Book Your House</h3>
        <div class="text-booking-form">
            <div class="col-md-6 text-booking-form-left">
                <form>
                    <label>Name <span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>
                    <label>Mobile Number<span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>
                    <label>Gender <span>*</span></label>
                    <select class="">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <div class="clearfix"></div>
                    <label>Age<span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>
                    <label>Address <span>*</span></label>
                    <textarea class="mess" placeholder="Address"></textarea>
                    <div class="clearfix"></div>
                    <label>Pin<span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>
                    <label>Email<span>*</span></label>
                    <input type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>
                    <label>Select Package <span>*</span></label>
                    <select class="">
                        <option>Select Package</option>
                        <option>MASTER HEALTH CHECK</option>
                        <option>WHOLE BODY CHECKUP</option>
                        <option>HEALTH CHECK 1 AND 2</option>
                    </select>
                    <div class="clearfix"></div>
                    <div class="c-lang">
                        <p class="update"><input type="checkbox" id="c1" name="cc">Keep me updated on the latest offers and much more	</p>							</div>
                    <div class="book-submit">
                        <input type="submit" value="Book Now">
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-booking-form-right">
                <img src="images/bookshow.jpg" alt="" />
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="preventive-desc">
            <h4>What if I fail to get the house i wanted?</h4>
           <p>We have mechanisms to refund your money way  up to 95%</p>  </div>



@endsection