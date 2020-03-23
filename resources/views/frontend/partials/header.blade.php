

<header class="header menu_fixed">
        <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
        <div id="logo">
            <a href="index.html">
                <img src="{{asset('frontend/img/Group130.png')}}" width="185" height="50" alt="" class="logo_normal">
                <img src="{{asset('frontend/img/Group101.png')}}" width="185" height="50" alt="" class="logo_sticky">
            </a>
        </div>
        
        <a href="#menu" class="btn_mobile">
            <div class="hamburger hamburger--spin" id="hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </a>
        <nav id="menu" class="main-menu">
            <ul>
                
                <li class="registerHost"><span><a href="#0" >{{ __('messages.RegisterHost') }}</a></span></li>
                <li class="registerHost"><span><a href="#sign-in-dialog" id="sign-in" class="login" >{{ __('messages.Entry') }}</a></span></li>

                <li class="registerHost activeCls"><span ><a href="#0" >{{ __('messages.Signup') }}</a></span></li>
            </ul>
        </nav>
    </header>
