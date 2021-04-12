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
          <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about.us') }}">About Us</a></li>
          <li><a href="{{ route('servicesf') }}">Services</a></li>
          <li><a href="{{ route('beauticianf') }}">Beautician</a></li>
          <li><a href="{{ route('appointmentf') }}">Appointment</a></li>
         <!-- <li class="menu-has-children"><a href="">Dropdown</a>
            <ul>
              <li><a href="#">Link Item 1</a></li>
              <li><a href="#">Link Item 3</a></li>
              <li><a href="#">Link Item 4</a></li>
              <li><a href="#">Link Item 5</a></li>
            </ul>
          </li> -->
		  <li><a href="{{ route('contactf') }}">Contact</a></li>
          <li><a href="{{ route('adminf') }}">Admin</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
