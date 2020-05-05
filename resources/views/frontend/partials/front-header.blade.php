<style type="text/css">
    
   .btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show>.btn-secondary.dropdown-toggle {
    color: #fff;
     background-color: #FFC107; 
     border-color: #FFC107; 
}

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


</style>
<header class="header menu_fixed">
        <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
        <div id="logo">
            <a href="index.html">
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
        <nav id="menu" class="main-menu">

            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle btn_1 rounded" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{\Session::get('userinfo')->name}}
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button">Action</button>
                 <div class="dropdown-divider"></div>
                <button class="dropdown-item" type="button">Another action</button>
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

