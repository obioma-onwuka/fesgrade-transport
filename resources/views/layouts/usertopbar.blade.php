<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
        <a href="#" class="b-brand">
            <img src="/custom/backend/assets/images/logo.png" alt="petReunite" class="logo images" style = "height: 70px; width: 190px">
            <img src="/custom/backend/assets/images/logo.png" alt="petReunite" class="logo-thumb images" height = "30">
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="#!">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <a href="#!" class="mob-toggler"></a>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="#" alt="" style = "border-radius: 50%; height: 20px">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="#" class="img-radius" alt="User-Profile-Image">
                            <span class = "text-capitalize">{{ $userCheck->name }}</span>
                            <a href="#" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li>
                                <a href="#" class="dropdown-item">
                                    <i class="feather icon-settings"></i> 
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">
                                    <i class="feather icon-user"></i> 
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">
                                    <i class="feather icon-mail"></i> 
                                    My Pets
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item">
                                    <i class="feather icon-lock"></i> 
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>