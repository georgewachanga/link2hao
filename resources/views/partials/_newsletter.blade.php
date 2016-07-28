
<!-- news letter -->
<div class="subscribe text-center">
    <div class="container">
        <h3>Subscribe to Our weekly Housing Newsletter</h3>
        <p>Stay updated with the lastest updates and designs around you by recieving our monthly journals and newsletters</p>

            {!! Form::open(array('route' => 'subscription.store', 'method' => 'POST', 'files' => true )) !!}
            <input placeholder="Email Address" name="email" class="user" type="text" required="">
            <input type="submit" value="Subscribe">
        {!! Form::close() !!}
        <p class="spam">We never share your information or use it to spam you. We keep all your details confidential.</p>
    </div>
</div>
<!-- //news letter -->