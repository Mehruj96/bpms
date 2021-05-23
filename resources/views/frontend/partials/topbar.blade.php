<!--==========================
    Top Bar
  ============================-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">name@websitename.com</a>
            <i class="fa fa-phone"></i> +1 2345 67855 22
        </div>
        <div class="social-links float-right">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</section>

<!--==========================
    Header
  ============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h4><a href="#body" class="scrollto"><span>B</span>eauty Parlour Management System</a></h4>
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="@yield('home')"><a href="{{ route('home') }}">Home</a></li>
                <li class="@yield('cart')"><a href="{{ route('cart') }}">My service({{ Cart::count() }})</a></li>
                <li class="@yield('about')"><a href="{{ route('about.us') }}">About Us</a></li>
                <li class="@yield('service')"><a href="{{ route('servicesf') }}">Services</a></li>
                <li class="@yield('beautician')"><a href="{{ route('beauticianf') }}">Beautician</a></li>
                <li class="@yield('contact')"><a href="{{ route('contactf') }}">Contact</a></li>
                @guest()
                <li class="@yield('login')"><a href="{{ route('user.login') }}">User Login</a></li>
                @endguest

                @isset (Auth::user()->name)
                <li class="menu-has-children @yield('contact')">{{ Auth::user()->name }}
                    <ul>
                        <li><a href="{{ route('userprofile') }}">Profile</a></li>
                        <li><a href="{{route('user.logout') }}">Logout</a></li>
                    </ul>
                </li>
                @endisset
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
