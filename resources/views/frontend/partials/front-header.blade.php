<style type="text/css">
    
   /*.btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show>.btn-secondary.dropdown-toggle {
        color: #fff;
         background-color: #FFC107; 
         border-color: #FFC107; 
    }*/



/*
.btn-secondary {
    color: #fff;
     background-color: transparent; 
     border-color: transparent; 
}*/
.main-menu{
    margin-left: 36px;
}
/*
.btn-secondary:hover {
     background-color: transparent; 
     border-color: transparent; 
}*/

    .dropdown-divider{
        margin: 0px !important;
    }

    .dropdown-item.active, .dropdown-item:active {
        color: red;
        text-decoration: none;
        background-color: transparent;
        font-weight: bold;
    }

    .dropdown-item:focus, .dropdown-item:hover {
        color: red;
        text-decoration: none;
        background-color: transparent;
        font-weight: bold;
    }


</style>
<header class="header menu_fixed">
        <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
        <div id="logo">
            <a href="{{URL('/')}}">
                <img src="{{asset('frontend/img/Group101.png')}}" width="185" height="50" alt="" class="logo_normal">
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
        <nav id="menu" class="main-menu" >

            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle btn_1 rounded" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" style="padding: 7px 15px;" aria-expanded="false">
                {{\Session::get('userinfo')->name}}
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="margin-right: -50px !important;">
                
                <a href="{{ route('front_home') }}" class="dropdown-item" class="">{{ __('My Profile') }}</a>
                <div class="dropdown-divider"></div>

                <a href="{{ route('front_home') }}" class="dropdown-item" class="">{{ __('Looks For Events') }}</a>
                <div class="dropdown-divider"></div>

                <a href="{{ route('front_home') }}" class="dropdown-item" class="">{{ __('My Preferences') }}</a>
                <div class="dropdown-divider"></div>

              

                <a href="{{ route('front_home') }}" class="dropdown-item" class="">{{ __('My Messages') }}</a>
                <div class="dropdown-divider"></div>

                <a href="{{ route('front_home') }}" class="dropdown-item" class="">{{ __('My Bookings') }}</a>
                <div class="dropdown-divider"></div>

                <a href="{{ route('front_home') }}" class="dropdown-item" class="">{{ __('Contact Us') }}</a>


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



            


            <!-- <ul>
                <li class="registerHost activeCls"><span >
                 <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a></a></span></li>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul> -->
        </nav>
    </header>

