    <!-- Subscription Message -->
    <!-- <div class="subscripton_popup">
        <div class="table">
            <div class="table_cell">
                        <div class="block" style="max-width:500px;padding-top:40px;padding-bottom:10px;"> -->
                            <!--<span class="popup_Close"><img src="assets/images/close_icon.png" alt="close" class="img-responsive"></span>-->
                            <!-- <span class="response_title">Please wait...</span>
                            <div class="email_message" style="margin-bottom:30px;"><img src="{{ url('/') }}" alt="loading..." ></div>

                            <div class="center_btn"><a href="javascript:void(0)" class="popup_Close btn">Close</a></div>

                        </div>
            </div>
        </div>
    </div> -->
         
<div class="screen_menu">
                <span class="menuBtn"><span></span></span>

                <div class="main_nav">
                    <div class="table">
                        <div class="table_cell main_menu">
                            <ul class="nav list-unstyled">
                                <li><a href="{{ url('/') }}/#whitepaper" key="menu-whitepaper" class="smooth_scroll tr">Whitepaper</a></li>
                                <li><a href="{{ url('/') }}/#about" key="menu-VISION" class="tr smooth_scroll">Vision</a></li>
                                <li><a href="{{ url('/') }}/#team" key="menu-TEAM" class="tr smooth_scroll">Team</a></li>
                                <li><a href="{{ url('/') }}/#world" key="menu-WORLD" class="tr smooth_scroll">World</a></li>
                                <li><a href="{{ url('/') }}/#roadmap" key="menu-ROADMAP" class="tr smooth_scroll">RoadMap</a></li>
                                <li><a href="{{ url('/') }}/#partners" key="menu-PARTNERS" class="tr smooth_scroll">Partners</a></li>
                                <li><a href="{{ url('/') }}/#faq" key="menu-FAQ" class="tr smooth_scroll">faq</a></li>
                                <li><a href="{{ url('press') }}" key="menu-PRESS" class="tr">Press</a></li>
                                @if (Auth::guest())
                                <li><a href="{{ url('/login') }}" key="menu-SIGN IN/REGISTER" class="tr">Sign In/Register</a></li>
                                @else
                                <li><a href="{{ url('/dashboard') }}"  class="tr">Dashboard</a></li>
                                @endif
                                <li class="menu_coun_sel_outer">
                                    <span class="count_selected"> <img src="{{ url('assets/images/flags/en_flag.png') }}" alt="EN"><span>EN</span></span>
                                    <ul class="count_list">
                                        <li> <a href="#" id="en"> <img src="{{ url('assets/images/flags/en_flag.png') }}" alt="EN"> EN</a> </li>
                                        <li> <a href="#" id="ko"> <img src="{{ url('assets/images/flags/ko_flag.png') }}" alt="KR"> KR</a> </li>
                                        <li> <a href="#" id="ja"> <img src="{{ url('assets/images/flags/ja_flag.png') }}" alt="JP"> JP</a> </li>
                                        <li> <a href="#" id="tw"> <img src="{{ url('assets/images/flags/tw_flag.png') }}" alt="TW"> TW</a> </li>
                                        <li> <a href="#" id="ch"> <img src="{{ url('assets/images/flags/ch_flag.png') }}" alt="CN"> CN</a> </li>
                                        <li> <a href="#" id="ru"> <img src="{{ url('assets/images/flags/ru_flag.png') }}" alt="RU"> RU</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
</div>
<header id="header">
                <div class="holder">
                    <a href="{{ url('/') }}" class="logo smooth_scroll">
                        <img src="{{ url('assets/images/terra_virtua_logo.png') }}" alt="Terra Virtua Logo" class="img-responsive">
                    </a>

                    <nav class="navbar navbar-default main_menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ url('/') }}/#whitepaper" class="smooth_scroll"><span key="menu-whitepaper" class="trn tr">Whitepaper</span></a></li>
                                <li><a href="{{ url('/') }}/#about" key="menu-VISION" class="tr smooth_scroll">Vision</a></li>
                                <li><a href="{{ url('/') }}/#team" key="menu-TEAM" class="tr smooth_scroll">Team</a></li>
                                <li><a href="{{ url('/') }}/#world" key="menu-WORLD" class="tr smooth_scroll">World</a></li>
                                <li><a href="{{ url('/') }}/#roadmap" key="menu-ROADMAP" class="tr smooth_scroll">RoadMap</a></li>
                                <li><a href="{{ url('/') }}/#partners" key="menu-PARTNERS" class="tr smooth_scroll">Partners</a></li>
                                <li><a href="{{ url('/') }}/#faq" key="menu-FAQ" class="tr smooth_scroll">faq</a></li>
                                <li><a href="{{ url('press') }}" key="menu-PRESS" class="tr">Press</a></li>
                                @if (Auth::guest())
                                <li><a href="{{ url('/login') }}" key="menu-SIGN IN/REGISTER" class="tr">Sign In/Register</a></li>
                                @else
                                <li><a href="{{ url('/dashboard') }}"  class="tr">Dashboard</a></li>
                                @endif
                            
                                <li class="menu_coun_sel_outer">
                                    <span class="count_selected"> <img src="{{ url('assets/images/flags/en_flag.png') }}" alt="EN"><span>EN</span></span>
                                    <ul class="count_list">
                                        <li> <a href="#" id="en"> <img src="{{ url('assets/images/flags/en_flag.png') }}" alt="EN"> EN</a> </li>
                                        <li> <a href="#" id="ko"> <img src="{{ url('assets/images/flags/ko_flag.png') }}" alt="KR"> KR</a> </li>
                                        <li> <a href="#" id="ja"> <img src="{{ url('assets/images/flags/ja_flag.png') }}" alt="JP"> JP</a> </li>
                                        <li> <a href="#" id="tw"> <img src="{{ url('assets/images/flags/tw_flag.png') }}" alt="TW"> TW</a> </li>
                                        <li> <a href="#" id="ch"> <img src="{{ url('assets/images/flags/ch_flag.png') }}" alt="CN"> CN</a> </li>
                                        <li> <a href="#" id="ru"> <img src="{{ url('assets/images/flags/ru_flag.png') }}" alt="RU"> RU</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>