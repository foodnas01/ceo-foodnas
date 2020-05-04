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
	
	<!-- <div id="preloader">
		<div data-loader="circle-side"></div>
	</div> -->
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


				{!! Form::open(array('route' => 'front_register', 'method' => 'post','enctype'=>'multipart/form-data')) !!}
				@csrf

				<div class="form-group">
					
					{{ Form::label(trans('messages.signup_page.Name'), null, ['class' => 'signupLabel' ]) }}
					<span class="required">*</span>

					
					{!! Form::text('name', old('name', null), ['placeholder' => trans('messages.signup_page.Name'),'class' => "form-control inputField $errors->has('name') ? 'has-error' : ''"]) !!}


					<!-- <i class="ti-user signUpIcon"></i> -->

					<span class="text-danger">{!! $errors->first('name', '<span class="help-block">:message</span>') !!}</span>



				</div>
				
				
				<div class="form-group">
				
					{{ Form::label(trans('messages.signup_page.YourPhone'), null, ['class' => 'signupLabel']) }}
					<span class="required">*</span>

					{!! Form::text('phone_no', old('phone_no', null), ['placeholder' => trans('messages.signup_page.YourPhone'),'class' => "form-control inputField $errors->has('phone_no') ? 'has-error' : ''"]) !!}

					<!-- <i class="icon_mail_alt signUpIcon"></i> -->

					<span class="text-danger">{!! $errors->first('phone_no', '<span class="help-block">:message</span>') !!}</span>

				</div>


				<div class="form-group">
				
					{{ Form::label(trans('messages.signup_page.YourEmail'), null, ['class' => 'signupLabel']) }}
					<span class="required">*</span>

					{!! Form::text('email', old('email', null), ['placeholder' => trans('messages.signup_page.YourEmail'),'class' => "form-control inputField $errors->has('email') ? 'has-error' : ''"]) !!}

					<!-- <i class="icon_mail_alt signUpIcon"></i> -->

					<span class="text-danger">{!! $errors->first('email', '<span class="help-block">:message</span>') !!}</span>

				</div>


				<div class="form-group">
					

					{{ Form::label(trans('messages.signup_page.YourPassword'), null, ['class' => 'signupLabel']) }}
					<span class="required">*</span>
					{!! Form::password('password', ['placeholder' => trans('messages.signup_page.YourPassword'),'class' => "form-control inputField $errors->has('password') ? 'has-error' : ''"]) !!}
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


				<div class="form-group">
				
					{{ Form::label(__('Date of Birth') , null, ['class' => 'signupLabel']) }}
					<span class="required">*</span>


					 <input class="form-control" placeholder="{{__('Date of Birth')}}" value="{{ old('dob') }}" style="padding-right:10px;padding-left:10px;" name="dob" type="date" data-date-inline-picker="false" data-date-popover='{"inline": true}' />

					<span class="text-danger">{!! $errors->first('dob', '<span class="help-block">:message</span>') !!}</span>
				</div>


				<div class="form-group">
				
					{{ Form::label(__('Image')  , null, ['class' => 'signupLabel']) }}
					<span class="required">*</span>
					 <input type="file" name="user_image"  onchange="readURL(this);"  id="user_image" placeholder="{{__('Image')}}" style="padding-right:0px;padding-left:0px;"  class="form-control-file" id="exampleFormControlFile1">



					<span class="text-danger">{!! $errors->first('user_image', '<span class="help-block">:message</span>') !!}</span>
				</div>

				<div class="imageDiv" style="height: 75px;width: 75px;float: left;margin-top: -70px;">

					<img id="signupImage" src="{{asset('frontend/img/avatar.jpg')}}" style="border-radius: 50%;width: 75px;height: 75px;" data-retina="true" alt="" class="logo_sticky">
				</div>

					<div class="form-group">
					
					{{ Form::label(  __('Gender')  , null, ['class' => 'signupLabel']) }}
					<span class="required">*</span>

					<div style="display: flex;">
						<input type="radio" @if (old('gender') == 'male') checked="checked" @endif  id="male" name="gender" value="male" style="margin-top: 5px;">
	                    <label for="male" style="padding-right: 20px;padding-left: 20px;">{{ __('Male') }}</label>
	                    <br>
	                    <input type="radio" id="female"  @if (old('gender') == 'female') checked="checked" @endif  name="gender" value="female" style="margin-top: 5px;">
	                    <label for="female" style="padding-right: 20px;padding-left: 20px;">{{ __('Female') }}</label>
	                    <br>
	                    <input type="radio"  id="other"  @if (old('gender') == 'other') checked="checked" @endif name="gender" value="other" style="margin-top: 5px;">
	                    <label for="other" style="padding-right: 20px;">{{ __('Other') }}</label>
	                </div>

					<!-- <i class="ti-user signUpIcon"></i> -->

					<span class="text-danger">{!! $errors->first('gender', '<span class="help-block">:message</span>') !!}</span>



				</div>
		

			{!!  Form::submit(trans('messages.signup_page.RegisterNow'),['class'=>'btn_1 rounded full-width add_top_30 registerNow']) !!}

				<div class="text-center add_top_10 signUpReg">@lang('messages.signup_page.AlreadyAccount') <strong><a href="javascript:void(0)">@lang('messages.signup_page.SignIn')</a></strong></div>
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

    <script type="text/javascript">

    	

		     function readURL(input) {
	            if (input.files && input.files[0]) {
	                var reader = new FileReader();

	                reader.onload = function (e) {
	                	//console.log(e.target.result)
	                    $('#signupImage')
	                        .attr('src', e.target.result);
	                };

	                reader.readAsDataURL(input.files[0]);
	            }
	        }
    	


    </script>
	
	
  
</body>
</html>