@extends("layout.master")
@section("content")
        <!-- login-section -->
<section class="login-page">
    <div class="inner-banner demo-2 text-center">
        <header class="logo">
            <h1><a class="cd-logo link link--takiri" href="index.html">Link2hao <span>Because housign matters.</span></a></h1>
        </header>
        <div id="breadcrumb_wrapper">
            <div class="container">
                <h2>Register</h2>
                <h6>add a short description here</h6>
            </div>
        </div>
    </div>
    <!--- login ---->
    <!-- login -->
    <div class="login">
        <div class="container">
            <h3>Register Here</h3>
            <p class="est">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <div class="login-form-grids">
                <h5>profile information</h5>
                <form>
                    <input type="text" placeholder="First Name..." required=" " >
                    <input type="text" placeholder="Last Name..." required=" " >
                </form>
                <div class="register-check-box animated wow slideInUp" data-wow-delay=".5s">
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
                    </div>
                </div>
                <h6>Login information</h6>
                <form>
                    <input type="email" placeholder="Email Address" required=" " >
                    <input type="password" placeholder="Password" required=" " >
                    <input type="password" placeholder="Password Confirmation" required=" " >
                    <div class="register-check-box">
                        <div class="check">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
                        </div>
                    </div>
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- //login -->
    <!--- /login ---->
</section>
<!-- //login-section -->
    @endsection