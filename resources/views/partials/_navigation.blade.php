<!--styles on styles.css      down there added later-->
<div class="navi">

    <ul>
        <li><a class="active" href="/">Home</a></li>
        <li><a href="/about">About us</a></li>
        <li><a href="/services">Services</a></li>
        <!--li><a href="/advert">Advertising</a></li-->
        <li><a href="/consultancy">Consultancy</a></li>
        <li><a href="/career">Jobs</a></li>
        <li><a href="/news">News</a></li>
        <!--<li><a href="/faq">FAQ</a></li>
        <li><a href="/market">E-Market</a></li>-->
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/terms">Terms</a></li>
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @else
            <li>
                    @can("admin")
                        <a href="/property">Admin {{ Auth::user()->fname }}</a>
                    @else
                        <a href="#">{{ Auth::user()->fname }}</a>
                    @endcan</li>
            <li><a href="{{ url('/logout') }}">Logout</a></li>
            @endif



        <!--li class="dropdown">
            <a href="#" class="dropbtn">Dropdown</a>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </li-->
    </ul>
</div>