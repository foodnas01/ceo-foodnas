@extends('layouts.main')
@section('style')
<style type="text/css">
        video#bgvid {
            position: relative;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            background-size: cover;
            -webkit-transition: 1s opacity;
            transition: 1s opacity;
        }
</style>
@stop

@section('content')
    <main id="main">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                    </div>
                </div>
                <div class="row">

                    <div align="center"><h1>Confirm Your Account</h1></div>
                    <div align="center" style="color: #c81825;margin: -30px 0px 50px;">
                        <h4>Complete you registration by creating new password!</h4></div>

                    <div class="col-sm-6 col-sm-offset-3 form-box">

<!--                        <p align="center">Please enter 8 digit password.</p>-->
 <div id="regMGS"> </div>
                        <div class="error-message "></div>
                        <div class="form-bottom form_holder signup_form">
                          <form method="post" id="loginfrom" accept-charset="utf-8" action="{{ url('authentication/confirm_password') }}" onsubmit="return registervalidation();" autocomplete="off">
                            {{ csrf_field() }}
                              <div class="field_wrap">
<!--                                    <label class="sr-only" for="username">New password</label>-->
                                   <input type="password" name="password" placeholder="Password"
                                           class="form-username form-control" autocomplete="off" id="form-password">
                                    <br>
<!--                                    <label class="sr-only" for="username">Retype Password</label>-->
                                    
                                    <input type="password" name="confirm_password" placeholder="Confirm Password"
                                           class="form-username form-control" autocomplete="off"  id="confirm_password">

                                    <span class="help-block"></span>
                                   
                                </div>

                                <input type="hidden" name="email" value="{{ $email }}" class="form-username form-control" id="form-username" >
                                <input type="hidden" value="LOGIN" name="submit-type"/>
                                <input type="submit" value="Submit" name="submit" class="btn"/>
                                <br>
                                <br>
                              
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@stop
@section('script')
@include('frontend.js.botlogin_js')
@stop