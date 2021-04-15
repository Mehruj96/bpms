<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Beauty Parlour
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p class="font-weight-bold">dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('customer')}}">
                    <i class="material-icons">person</i>
                    <p>Customer</p>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">book_online</i>
                    <p>Appointment
                    </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('all')}}">All Appointment</a>
                    <a class="dropdown-item" href="{{route('new')}}">New Appointment</a>
                    {{-- <a class="dropdown-item" href="{{route('accepted')}}">Accepted Appointment</a>
                    <a class="dropdown-item" href="{{route('rejected')}}">Rejected Appointment </a> --}}
                </div>
            </li>


            <li class="nav-item ">
                <a class="nav-link" href="{{route('services')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Services</p>
                </a>

            </li>

            <li class="nav-item ">
                <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="material-icons">library_books</i>
                    <p>Reports</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('expanse')}}">Expanses</a>
                    <a class="dropdown-item" href="{{route('sales')}}">All Sales</a>

                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="material-icons">pageview</i>
                    <p>Pages</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('about')}}">About Us</a>
                    <a class="dropdown-item" href="{{route('contact')}}">Contact Us</a>

                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('beautician')}}">
                    <i class="material-icons">person</i>
                    <p>Beautician</p>
                </a>
            </li>
        </ul>
    </div>
</div>
