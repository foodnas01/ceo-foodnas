
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

            @if(\Session::get('isLoggedIn') == 1)

            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle btn_1 rounded" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{\Session::get('userinfo')->name}}
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                
                <a href="javascript:void(0)" class="dropdown-item"  onclick="myProfile('myprofile')" class="">{{ __('My Profile') }}</a>


                 <div class="dropdown-divider"></div>
               

                 <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

              </div>
            </div>
            @else


            <ul>
                
                <li class="registerHost"><span><a href="#0" >{{ __('messages.RegisterHost') }}</a></span></li>
                <li class="registerHost"><span><a href="#sign-in-dialog" id="sign-in" class="login" >{{ __('messages.Entry') }}</a></span></li>

                <li class="registerHost activeCls"><span ><a href="{{ url('/signup') }}" >{{ __('messages.Signup') }}</a></span></li>
            </ul>
            
            @endif

        </nav>
    </header>

