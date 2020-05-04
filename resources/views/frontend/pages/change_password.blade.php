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
    <link rel="shortcut icon" href="{{asset('frontend/img/favico.png')}}" type="image/x-icon">


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
    <style type="text/css">
    	
    	.registerNow{
	    	font-size: 18px !important;
		}

		.required {
 
		    color: red;
		    padding-right: 5px;
		   
		}

    </style>
	
</head>

<body id="register_bg" class="rtl">
	
	<nav id="menu" class="fake_menu"></nav>	
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


				{!! Form::open(array('route' => 'change_user_password', 'method' => 'post','enctype'=>'multipart/form-data')) !!}
				@csrf

				<div class="form-group">

					{{ Form::label(trans('messages.signup_page.YourEmail'), null, ['class' => 'signupLabel']) }}
					<span class="required">*</span>

					{!! Form::text('email', $user->email, ['readonly'=>'readonly','placeholder' => trans('messages.signup_page.YourEmail'),'class' => "form-control inputField $errors->has('email') ? 'has-error' : ''"]) !!}
					<span class="text-danger">{!! $errors->first('email', '<span class="help-block">:message</span>') !!}</span>

				</div>


				<div class="form-group">
					{{ Form::label(trans('messages.signup_page.NewPassword'), null, ['class' => 'signupLabel']) }}
					<span class="required">*</span>
					{!! Form::password('password', ['placeholder' => trans('messages.signup_page.NewPassword'),'class' => "form-control inputField $errors->has('password') ? 'has-error' : ''"]) !!}
					<!-- <i class="icon_lock_alt signUpIcon"></i> -->
					<span class="text-danger">{!! $errors->first('password', '<span class="help-block">:message</span>') !!}</span>
				</div>
				<div class="form-group">
				
					{{ Form::label(trans('messages.signup_page.CnfmPassword'), null, ['class' => 'signupLabel']) }}
					<span class="required">*</span>


					{!! Form::password('password_confirmation', ['placeholder' => trans('messages.signup_page.CnfmPassword'),'class' => "form-control inputField $errors->has('password_confirmation') ? 'has-error' : ''"]) !!}


					<!-- <i class="icon_lock_alt signUpIcon"></i> -->
					<span class="text-danger">{!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}</span>
				</div>

				{!!  Form::submit(trans('messages.signup_page.ChangePassword'),['class'=>'btn_1 rounded full-width add_top_30 registerNow']) !!}

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