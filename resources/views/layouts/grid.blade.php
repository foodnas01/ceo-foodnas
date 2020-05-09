<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- font awesome (required) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  
    <title>{{ config('app.name', 'Add User') }}</title>
</head>
<body>
    <div id="app">
   

        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>





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
		</script>

    </div>
</body>
</html>