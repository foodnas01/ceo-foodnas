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

    <title>{{ config('app.name', 'Laravel 5.8 User Roles and Permissions Tutorial') }}</title>
    <!-- Scripts -->
<!--     <script src="{{ asset('js/app.js') }}" ></script> -->
    <!-- Fonts -->
  <!--   <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->
    <!-- Styles -->
   <!--  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- grid class -->

    <!-- font awesome (required) -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" /> -->
    <!-- progress bar (not required, but cool) -->
   <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.css" /> -->
    <!-- bootstrap (required) -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" /> -->
    <!-- date picker (required if you need date picker & date range filters) -->
<!--     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/> -->
    <!-- grid's css (required) -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/leantony/grid/css/grid.css') }}" /> -->
    


</head>
<body>
    <div id="app">
   

        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>

        @include('leantony::modal.container')

        <!-- progress bar js (not required, but cool) -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script> -->
		<!-- moment js (required by datepicker library) -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script> -->
		
		<!-- popper js (required by bootstrap) -->
		<!-- <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script> -->

		<!-- bootstrap js (required) -->
		<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
		
        <!-- pjax js (required) -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script> -->
		<!-- datepicker js (required for datepickers) -->
		<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> -->
		<!-- required to supply js functionality for the grid -->
		<!-- <script src="{{ asset('vendor/leantony/grid/js/grid.js') }}"></script> -->

		<script>


		
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

            $(document).ready(function() {
            
         $("#mycls").click(function(e){
            console.log('sdfsfsfs')
            $(".dropdown-menu").addClass("show");
                let RandomN = Math.random();
                console.log('HERERE'+RandomN)
              // $(".dropdown-toggle").dropdown();

            })

            
});



		</script>
		<!-- entry point for all scripts injected by the generated grids (required) -->
		@stack('grid_js')

     


    </div>
</body>
</html>