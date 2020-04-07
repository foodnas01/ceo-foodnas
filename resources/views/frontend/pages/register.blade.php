<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
     <title>فودناس</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('img/favico.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="{{asset('frontend/css/bootstrap-rtl.min.css')}}" rel="stylesheet">

    <link href="{{asset('frontend/css/mystyle.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style-rtl.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
	
</head>

<body id="register_bg" class="rtl">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="{{asset('frontend/img/Group101.png')}}" width="155" height="36" data-retina="true" alt="" class="logo_sticky"></a>
			</figure>

			@if(session()->has('success'))
			    <div class="alert alert-success">
			        {{ session()->get('success') }}
			    </div>
			@endif


				{!! Form::open(array('route' => 'front_register', 'method' => 'post')) !!}
				@csrf

				<div class="form-group">
					
					{{ Form::label(trans('messages.signup_page.FirstName'), null, ['class' => 'signupLabel']) }}

					
					{!! Form::text('first_name', old('first_name', null), ['class' => "form-control inputField $errors->has('first_name') ? 'has-error' : ''"]) !!}


					<i class="ti-user signUpIcon"></i>

					<span class="text-danger">{!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}</span>



				</div>
				<div class="form-group">
					
					
					{{ Form::label(trans('messages.signup_page.LastName'), null, ['class' => 'signupLabel']) }}

					

					{!! Form::text('last_name', old('last_name', null), ['class' => "form-control inputField $errors->has('last_name') ? 'has-error' : ''"]) !!}


					<i class="ti-user signUpIcon"></i>

					<span class="text-danger">{!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}</span>

				</div>
				<div class="form-group">
				
					{{ Form::label(trans('messages.signup_page.YourEmail'), null, ['class' => 'signupLabel']) }}

					{!! Form::email('email', old('email', null), ['class' => "form-control inputField $errors->has('email') ? 'has-error' : ''"]) !!}

					<i class="icon_mail_alt signUpIcon"></i>

					<span class="text-danger">{!! $errors->first('email', '<p class="help-block">:message</p>') !!}</span>

				</div>


				<div class="form-group">
					

					{{ Form::label(trans('messages.signup_page.YourPassword'), null, ['class' => 'signupLabel']) }}
					{!! Form::password('password', ['class' => "form-control inputField $errors->has('password') ? 'has-error' : ''"]) !!}
					<i class="icon_lock_alt signUpIcon"></i>
					<span class="text-danger">{!! $errors->first('password', '<p class="help-block">:message</p>') !!}</span>
				</div>
				<div class="form-group">
				
					{{ Form::label(trans('messages.signup_page.CnfmPassword'), null, ['class' => 'signupLabel']) }}


					{!! Form::password('password_confirmation', ['class' => "form-control inputField $errors->has('password_confirmation') ? 'has-error' : ''"]) !!}


					<i class="icon_lock_alt signUpIcon"></i>
					<span class="text-danger">{!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}</span>
				</div>
		

			{!!  Form::submit(trans('messages.signup_page.FirstName'),['class'=>'btn_1 rounded full-width add_top_30 registerNow']) !!}

				<div class="text-center add_top_10 signUpReg">@lang('messages.signup_page.AlreadyAccount') <strong><a href="login.html">@lang('messages.signup_page.SignIn')</a></strong></div>
			{{ Form::close() }}
			<div class="copy signupLabel">© {{date('Y')}} @lang('messages.signup_page.Foodnas')</div>
		</aside>
	</div>
	<!-- /login -->
	
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('frontend/js/common_scripts.js')}}"></script>
    <script src="{{asset('frontend/js/main_rtl.js')}}"></script>
    <script src="{{asset('frontend/js/validate.js')}}"></script>

	
	

	<!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('frontend/js/pw_strenght.js')}}"></script>
	
	
  
</body>
</html>