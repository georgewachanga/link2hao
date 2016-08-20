@extends("layout.master")
@section("content")
        <!-- Terms of use-section -->
<section class="terms-of-use">
    <div class="inner-banner demo-2 text-center">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index.html">Prevention <span>is better than cure.</span></a></h1>
        </header>
        <div id="breadcrumb_wrapper">
            <div class="container">
                <h2>Terms of our service</h2>
                <h6>add a short description here</h6>
            </div>
        </div>
    </div>
    <!--- terms ---->
    <div class="terms">
        <div class="container">
            <h3>Please take your time to understand our terms and conditions</h3>
            <h6>Important Points</h6>
            <ol start="1">
                <li>A fee of Ksh.300 is charged to book a house.</li>
                <li>We will provide complete house details, and one of our agents will get in touch to help you book the house</li>
                <li> If necessary, one of our agents will be available to take you to the house</li>
                <li>We will ensure you are fully settled, failure to which you will be refunded 200/=</li>
            </ol>
            <h6>Take note</h6>
            <p>Our service is to help tenants get the houses of their choice with ease, we provide the missing link between clients and landlords</p>
            <p>We are therefore not responsible for the welfare of our clients as soon as they have reached an agreement with their new landlords, we therefore caution the clients that to be wary of the rules and regulations set by the Landlords</p>
            <p>The stay of the client is an agreement between them and their landlord. we cannot be blamed for anything happening afterwards</p>
            <p>Ensure that payment is made to the number given to you, any payment outside that number cannot be accounted for.</p>
            <p>We operate only within Kakamega town</p>
            <h6>Payment</h6>
            <p>our agent will communicate the payment details as soon as they have confirmed that the house of your interest is available</p>
            <h6>Cancellation Policy</h6>
            <p>A fee of 100 /= is chargeble on cancellation</p>
            <p>communicate with our agent or the number given below to request for a cancellation</p>
            <h6>Refund Terms</h6>
            <p>If we are unsuccessful in getting you a house, we will refund you 200/= of the amount you paid to us.</p>
            <h6>Availability</h6>
            <p>We only operate in Kakamega town</p>
            <h6>Copyright Notice</h6>
            <p> Dont copy!!</p>

            <div class="subscribe">
                <div class="container">
                    {!! Form::open(array('url' => 'booking/accept-terms', 'method' => 'POST' )) !!}
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="accept"> I Accept
                        </label>
                        {{ Form::hidden('guest_id', $guest->id) }}
                        {{ Form::hidden('property_id', $property->id) }}
                    </div>

                    <input type="submit" value="Submit">
                    {!! Form::close() !!}
                </div>
            </div>


        </div>
    </div>
    <!--- /terms ---->

</section>
<!-- //Terms of use-section -->
    @endsection