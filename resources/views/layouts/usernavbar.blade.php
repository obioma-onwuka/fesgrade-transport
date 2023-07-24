<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
    <div class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="{{ route('logged.check.role') }}" class="b-brand" style = "color: #FFF">
                <img src="{{ asset('/front/assets/img/logo/ficon.png') }}" alt="petReunite" class="logo images" style = "height: 20px;">
                <img src="{{ asset('/front/assets/img/logo/ficon.png') }}" alt="petReunite" class="logo-thumb images" height = "20">
                &nbsp; FesGrade
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item">
                    <a href="{{ route('logged.check.role') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('guest.booking.show') }}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fa fa-plus-circle"></i>
                        </span>
                        <span class="pcoded-mtext">
                            Booking
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fa fa-signal"></i>
                        </span>
                        <span class="pcoded-mtext">
                            My Bookings
                        </span>
                    </a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fa fa-user-circle"></i>
                        </span>
                        <span class="pcoded-mtext">My Account</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="#" class="">
                                Profile
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="">
                                Settings
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile.logout') }}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fa fa-power-off"></i>
                        </span>
                        <span class="pcoded-mtext">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
            <div class="card text-center">
                <div class="card-block">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <i class="feather icon-sunset f-40"></i>
                    <h6 class="mt-3">Hire Me</h6>
                    <p>I am open to offers for backend developer. Hire me!</p>
                    <a href="https://wa.me/9157013731" target="_blank" class="btn btn-gradient-primary btn-sm text-white m-0 mt-2">Whatsapp</a>
                </div>
            </div>
        </div>
    </div>
</nav>