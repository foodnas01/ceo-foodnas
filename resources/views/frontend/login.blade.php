@extends('layouts.main')
@section('content')
<!-- Conent Section -->
     <!-- Conent Section -->

            <main id="main">
                <div class="signin_holder">
                    <h1>Sign in or Register</h1>
                    <div class="form_wrap">
                        <div class="column">
                            <h2>Sign In</h2>
                            <div class="social_btns_wrap hide">
                                <div class="row social_btns">
                                    <div class="col-xs-6">
                                        <a href="#" class="sc_btn facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                            <span class="title">Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="#" class="sc_btn linkedin">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            <span class="title">LinkedIn</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row social_btns">
                                    <div class="col-xs-6">
                                        <a href="#" class="sc_btn twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                            <span class="title">Twitter</span>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="#" class="sc_btn google">
                                            <i class="fa fa-google" aria-hidden="true"></i>
                                            <span class="title">Google</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Seprator -->

                            <div class="seprator"></div>

                            <div class="form_holder signin_form">
                                <form class="form-horizontal" method="POST" action="{{ url('/login') }}" onsubmit="return loginvalidation();">
                                  {{ csrf_field() }}
                                    <div class="field_wrap {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    
                                    </div>
                                    <div class="field_wrap {{ $errors->has('password') ? ' has-error' : '' }}">
                                         <input id="password" type="password" class="form-control" name="password">
                                         @if ($errors->has('password'))
                                           <span class="help-block">
                                             <strong>{{ $errors->first('password') }}</strong>
                                           </span>
                                          @endif
                                    </div>
                                    <div class="field_info">
                                        <div class="checkLabel">
                                             <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="checkbox"></span>
                                            <span class="title">Remember Me</span>
                                        </div>
                                        <a data-toggle="modal" data-target="#forgot" class="link">Forgot Password?</a>
                                    </div>
                                    <input type="submit" class="btn" value="Login">
                                </form>
                            </div>
                        </div>
                        <div class="column">
                            <h2>Not Registered? Join Now!</h2>

                            <div class="form_holder signup_form">
                                <form class="form-horizontal" name='userReg' id='userReg' role="form" method="POST" action="{{ url('/register') }}" onsubmit="return registervalidation();" >
                                    {{ csrf_field() }}
                                    
<?php if ($errors->all()) { ?>
 <div class="alert alert-warning">
     <strong>{{ __('Warning!') }}</strong>
    <?php foreach ($errors->all() as $message) { ?>
      <p><?php echo $message; ?></p>
     <?php 
} ?>
 </div>
<?php

}
?>
                                    <div id="regMGS"> </div>
                                    <div class="fields_frame">

                                     <div class="field_wrap {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                      <label   class="sr-only"  for="firstname" class="label">First Name</label>
                                      <input id="firstname" name="firstname" type="text" value="{{ old('email') }}" class="form-control"  placeholder="First Name">
                                     </div>

                                    <div class="field_wrap {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                     <label   class="sr-only"  for="lastname" class="label">Last Name</label>
                                     <input id="lastname" name="lastname" type="text" value="{{ old('email') }}" class="form-control" placeholder="Last Name" >
                                    </div>

                                     
                                    <div class="field_wrap {{ $errors->has('r_email') ? ' has-error' : '' }}">
                                    <label class="sr-only" for="email" class="label">Email</label>
                                    <input id="r_email" name="r_email" type="email" value="{{ old('email') }}" class="form-control" placeholder="Email" >
                                    </div>


                                <div class="field_wrap hide ">
                                    <label class="sr-only" for="username" class="label">Username</label>
                                    <input id="username" name="r_username" type="text" class="form-control" placeholder="Username" >
                                </div>

                                <div class="field_wrap {{ $errors->has('r_password') ? ' has-error' : '' }}">
                                    <label class="sr-only" for="password" class="label">Password</label>
                                    <input id="r_password" name="r_password" type="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="field_wrap {{ $errors->has('cpassword') ? ' has-error' : '' }}">
                                    <label class="sr-only" for="cpassword" class="label">Confirm Password</label>
                                    <input id="cpassword" name="cpassword" type="password" class="form-control"  placeholder="Confirm Password">
                                </div>
                                <div class="field_wrap">
                                    <label class="sr-only" for="promo" class="label">Promo Code &nbsp;(<span style="color:#60c5e6;">Optional</span>)</label>
                                    <input id="promocode" name="promocode" type="text" class="form-control" maxlength="9" size="9" placeholder="Promo Code (Optional)"   >
                                </div>

                                 <div class="field_wrap hide">
                                    <p style="text-align: center;">OR</p>
                                 </div>
                                
                                <div class="field_wrap hide">
                                    <label class="sr-only" for="referalcode" class="label">Referral Code &nbsp;(<span style="color:#60c5e6;">Optional</span>)</label>
                                    <input id="referalcode" name="referalcode" type="text" class="form-control" maxlength="9" size="9" placeholder="Referral Code (Optional)"  >
                                </div>
                                
                                <style> 
                                    .g-recaptcha {g-retransform:scale(0.70);-webkit-transform:scale(0.70);transform-origin:0 0;-webkit-transform-origin:0 0;float:left; width: 200px !important; height: 78px;}
                                    .g-recaptcha div { width: 200px !important;; height: 78px; }
                                </style> 

                                <div class="field_wrap">
									<span class="msg-error error"></span>
									<div id="recaptcha_register" class="g-recaptcha" data-sitekey="6LexvU0UAAAAAIxgv0C80HchQXqA3SAnIklTZ12P"></div>
		               	       	</div>


                                    </div>


                                    <input type="submit" class="btn blue" value="Register">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
<!-- Conent Section end -->

            <!-- Forgot Password Modal -->

            <div class="modal fade" id="forgot" role="dialog">

                <div class="modal_table">
                    <div class="modal_tableCell">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title">Forgot Password</h2>
                                    <div class="form_holder">
                                        <form>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <p>Enter your email address. You will receive an email with a link to reset your password.</p>
                                                    <div class="field_wrap">
                                                        <input type="email" placeholder="Enter your email address" class="form-control">
                                                    </div>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Reset Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            
                        <!-- Reset Password Modal -->

            <div class="modal fade" id="reset_password" role="dialog">

                <div class="modal_table">
                    <div class="modal_tableCell">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="modal-title">Reset Password</h2>
                                    <div class="form_holder">
                                        <form>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                                    <div class="field_wrap single_wrap">
                                                        <input type="email" placeholder="New password" class="form-control">
                                                        <input type="email" placeholder="Retype password" class="form-control">
                                                    </div>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
@include('frontend.js.login_js')
@stop
