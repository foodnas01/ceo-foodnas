<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- jquery (required) -->
      <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 -->


     <title>فودناس</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('frontend/img/favico.png')}}" type="image/x-icon">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- grid class -->

    <!-- font awesome (required) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Editor Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />


    <!-- progress bar (not required, but cool) -->
    <link rel="stylesheet" href="{{ asset('frontend/css/nprogress.css') }}" />
    <!-- bootstrap (required) -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <!-- date picker (required if you need date picker & date range filters) -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/daterangepicker.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/headercss.css') }}"/>

   <!--  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.dataTables.min.css') }}"> -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

   <!--  <link href="{{ asset('frontend/css/wysiwyg.css') }}" rel="stylesheet" /> -->



    

    @yield('datatable_custom')

    


</head>
<body style="direction: rtl">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                     <img src="{{asset('frontend/img/Group101.png')}}" width="185" height="50" alt="" class="logo_normal">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                     
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('users.index') }}">{{ __('Manage Users') }}</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">{{ __('Manage Role') }}</a></li>
                            <li><a class="nav-link" href="{{ route('products.index') }}">{{ __('Manage Product') }}</a></li>

                            <li><a class="nav-link" href="{{ route('events.index') }}">{{ __('Manage Events') }}</a></li>

                            <li><a class="nav-link" href="{{ route('guests.index') }}">{{ __('Guest Users') }}</a></li>
                            <li><a class="nav-link" href="{{ route('about.index') }}">{{ __('About Us') }}</a></li>

                            <li class="mycls nav-item dropdown" id="mycls">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>


        <!-- progress bar js (not required, but cool) -->
		<script src="{{ asset('frontend/js/nprogress.min.js') }}"></script>
		<!-- moment js (required by datepicker library) -->
		<script src="{{ asset('frontend/js/moment.min.js') }}"></script>
		
		<!-- popper js (required by bootstrap) -->
		<script src="{{ asset('frontend/js/popper.min.js') }}"></script>

		<!-- bootstrap js (required) -->
		<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
		
        <!-- pjax js (required) -->
		<script src="{{ asset('frontend/js/jquery.pjax.min.js') }}"></script>
		<!-- datepicker js (required for datepickers) -->
		<script type="text/javascript" src="{{ asset('frontend/js/daterangepicker.min.js') }}"></script>

        
        <!-- datatable js (required for datatable) -->
        <script src = "{{ asset('frontend/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('frontend/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('frontend/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jszip.min.js') }}"></script>
        <script src="{{ asset('frontend/js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('frontend/js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('frontend/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('frontend/js/buttons.print.min.js') }}"></script>
  <!--       <script src="{{ asset('frontend/js/wysiwyg.js') }}"></script> -->

        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
		<script src="{{ asset('frontend/js/ckfinder.js') }}"></script>
        <script>



		    // send csrf token (see https://laravel.com/docs/5.6/csrf#csrf-x-csrf-token) - this is required
		    $.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });

		    // for the progress bar (required for progress bar functionality)
		    $(document).on('pjax:start', function () {
		        NProgress.start();
		    });
		    $(document).on('pjax:end', function () {
		        NProgress.done();
		    });

            


		</script>
	

    </div>
</body>
</html>