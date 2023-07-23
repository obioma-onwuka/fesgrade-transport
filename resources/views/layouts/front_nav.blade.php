<header id="ft-header" class="ft-header-section header-style-one">
    <div class="ft-header-content-wrapper position-relative">
        <div class="container">
            <div class="ft-header-content position-relative">
                <div class="ft-brand-logo">
                    <a href="{{ route('guest.welcome') }}">
                        <img src="{{ asset('/front/assets/img/logo/logo-white.png') }}" alt="">
                    </a>
                </div>
                <div class="ft-header-menu-top-cta position-relative">
                    <div class="ft-header-top ul-li">
                        <ul>
                            <li><i class="fal fa-envelope"></i>fastrans@support.com</li>
                            <li><i class="fal fa-map-marker-alt"></i>121 WallStreet Street, NY York, USA</li>
                        </ul>
                    </div>
                    <div class="ft-header-main-menu d-flex justify-content-end align-items-center">
                        <nav class="ft-main-navigation clearfix ul-li">
                            <ul id="ft-main-nav" class="nav navbar-nav clearfix">
                                <li>
                                    <a href="{{ route('guest.welcome') }}">Home</a>
                                </li>
                                <li><a href="{{ route('guest.booking.show') }}">Booking</a></li>
                                <li>
                                    <a href="!#">Terminals</a>
                                </li>
                                <li>
                                    <a href="{{ route('guest.services') }}">Services</a>
                                </li>
                                <li class="dropdown">
                                    <a href="!#">Resources</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="team.html">About Us </a></li>
                                        <li><a href="{{route('guest.faq') }}">Faq </a></li>
                                        <li><a href="{{ route('guest.contact.show') }}">Contact Us </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('auth.login.show') }}">Login</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="ft-header-cta-btn">
                            <a class="d-flex justify-content-center align-items-center" href="{{ route('auth.register.show') }}">Register</a>
                        </div>
                    </div>
                </div>
                <div class="mobile_menu position-relative">
                    <div class="mobile_menu_button open_mobile_menu">
                        <i class="fal fa-bars"></i>
                    </div>
                    <div class="mobile_menu_wrap">
                        <div class="mobile_menu_overlay open_mobile_menu"></div>
                        <div class="mobile_menu_content">
                            <div class="mobile_menu_close open_mobile_menu">
                                <i class="fal fa-times"></i>
                            </div>
                            <div class="m-brand-logo">
                                <a href="{{ route('guest.welcome') }}"><img src="assets/img/logo/logo4.png" alt=""></a>
                            </div>
                            <nav class="mobile-main-navigation  clearfix ul-li">
                                <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                    <li>
                                        <a href="{{ route('guest.welcome') }}">Home</a>
                                    </li>
                                    <li><a href="{{ route('guest.booking.show') }}">Booking</a></li>
                                    <li>
                                        <a href="!#">Terminals</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('guest.services') }}">Services</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="!#">Resources</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="team.html">About Us </a></li>
                                            <li><a href="{{route('guest.faq') }}">Faq </a></li>
                                            <li><a href="{{ route('guest.contact.show') }}">Contact Us </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('auth.login.show') }}">Login</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /Mobile-Menu -->
                </div>
            </div>
        </div>
        <div class="ft-header-cta-info d-flex">
            <div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
                <i class="fa fa-phone"></i>
            </div>
            <div class="ft-header-cta-text headline pera-content">
                <p>Get In Touch</p>
                <h3>+90 154 456 784</h3>
            </div>
        </div>
    </div>
</header>