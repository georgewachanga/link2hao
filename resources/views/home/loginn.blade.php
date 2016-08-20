
<!DOCTYPE html>
<html>



<!-- Head -->
<head>

    <title>Login</title>

    <!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Multi Login & Signup Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For-Mobile-Apps -->

    <!-- Style.CSS --> <link rel="stylesheet" href="/loginn/css/style.css" type="text/css" media="all" />

    <!-- Web-Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <!-- //Web-Fonts -->

    <!-- Horizontal-Tabs-JavaScript -->
    <script src="/loginn/js/jquery-1.11.1.min.js"></script>
    <script src="/loginn/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
            });
        });
    </script>
    <!-- Horizontal-Tabs-JavaScript -->

</head>
<!-- Head -->



<!-- Body -->
<body>

<!-- Heading -->
<h1>WELCOME TO LINK2HAO</h1>
<!-- //Headng -->


<!-- Container -->
<div class="container">

    <div class="tabs">

        <div class="sap_tabs">

            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">

                <ul class="resp-tabs-list">
                    <li id="#1" class="resp-tab-item" aria-controls="tab_item-1" role="tab"><h2><span>LOGIN</span></h2></li>
                    <li id="#2" class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>SIGNUP</span></li>
                    <li id="#3" class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>RESET PASSWORD</span></li>
                    <li id="#4" class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>LOGIN OPTIONS</span></li>
                    <div class="clear"> </div>
                </ul>

                <div class="resp-tabs-container">

                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <!-- Form -->
                        <form action="{{ url('/login') }}" method="POST">
                            {!! csrf_field() !!}

                            <div class="{{ $errors->has('email') ? 'has-error' : '' }}">
                                <input class="form-control" type="text" name="email" placeholder="email" value="{{ old('email') }}" required="">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="{{ $errors->has('password') ? 'has-error' : '' }}">
                                <input class="form-control" type="password" name="password" placeholder="Password" required="">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <ul>
                                <li>
                                    <input type="checkbox" id="brand1" value="" name="remember">
                                    <label for="brand1"><span></span>Remember Me</label>
                                </li>
                            </ul>
                            <input type="submit" value="LOGIN">
                        </form>
                        <!-- //Form -->
                    </div>

                    <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-2">
                        <div class="register">
                            <form action="{{ url('/register') }}" method="POST">
                                {!! csrf_field() !!}

                                <div class="{{ $errors->has('fname') ? 'has-error' : '' }}">
                                    <input type="text" name="fname" placeholder="First Name" required="" value="{{ old('fname') }}">
                                    @if($errors->has('fname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fname') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="{{ $errors->has('lname') ? 'has-error' : '' }}">
                                    <input type="text" name="lname" placeholder="Last Name" required="" value="{{ old('lname') }}">
                                    @if($errors->has('lname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lname') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="{{ $errors->has('email') ? 'has-error' : "" }}">
                                    <input type="text" name="email" placeholder="Email" required="" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="{{ $errors->has('password') ? 'has-error' : "" }}">
                                    <input type="password" name="password" placeholder="Password" required="">
                                    <input type="password" name="password_confirmation" class="lessgap" placeholder="Confirm Password" required="">
                                    @if($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="{{ $errors->has('password_confirmation') ? 'has-error' : "" }}">
                                    @if($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="{{ $errors->has('phone') ? 'has-error' : "" }}">
                                    <input type="text" name="phone" placeholder="Mobile Number" required="" value="{{ old('phone') }}">
                                    @if($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="{{ $errors->has('idno') ? 'has-error' : "" }}">
                                    <input type="text" name="idno" placeholder="Identification Number" required="" value="{{ old('idno') }}">
                                    @if($errors->has('idno'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('idno') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="send-button">
                                    <input type="submit" value="REGISTER">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-3">
                        <div class="reset">
                            <form action="{{ url('/password/reset') }}" method="post">
                                {!! csrf_field() !!}
                                <input type="text" Name="Email" placeholder="Email" required="">
                                <input type="submit" value="RESET MY PASSWORD">
                            </form>
                        </div>
                    </div>

                    <div class="tab-4 resp-tab-content" aria-labelledby="tab_item-4">

                        <div class="main">
                            <ul class="cbp-ig-grid">
                                <li>
                                    <a href="#">
                                        <img src="/loginn/images/facebook.png" class="cbp-ig-icon cbp-ig-icon-facebook" alt="Fashion">
                                        <h3 class="cbp-ig-title">Facebook</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/loginn/images/twitter.png" class="cbp-ig-icon cbp-ig-icon-twitter" alt="Fashion">
                                        <h3 class="cbp-ig-title">Twitter</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/loginn/images/gplus.png" class="cbp-ig-icon cbp-ig-icon-gplus" alt="Fashion">
                                        <h3 class="cbp-ig-title">Google +</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/loginn/images/pinterest.png" class="cbp-ig-icon cbp-ig-icon-pinterest" alt="Fashion">
                                        <h3 class="cbp-ig-title">Pinterest</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/loginn/images/tumblr.png" class="cbp-ig-icon cbp-ig-icon-tumblr" alt="Fashion">
                                        <h3 class="cbp-ig-title">Tumblr</h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/loginn/images/linkedin.png" class="cbp-ig-icon cbp-ig-icon-linkedin" alt="Fashion">
                                        <h3 class="cbp-ig-title">Linkedin</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- //Container -->



<!-- Footer -->
<div class="footer">

    <!-- Copyright -->
    <div class="copyright">
        <p>  Because housing matters</p>
    </div>
    <!-- //Copyright -->

</div>
<!-- //Footer -->

<!-- //some javascript  by otwani -->
<script type="text/javascript">

    //after alot of fiddling and failing to understand how easyResponsiveTabs.js works
    //I decided to do stuff the oldschool way, click 'em up and let things roll.

    $(document).ready(function(){

                //get the current pathname of object
                var page_name = window.location.pathname;

                if(page_name == '/login')
                {
                    document.getElementById("#1").click();
                }
                else if( page_name == '/register')
                {
                    document.getElementById("#2").click();
                }
                else if( page_name == '/reset')
                {
                    document.getElementById("#3").click();
                }
            }

    );



</script>


</body>
<!-- //Body -->



</html>