
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
                <li class="registerHost activeCls"><span >
                 <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a></a></span></li>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </nav>
    </header>

