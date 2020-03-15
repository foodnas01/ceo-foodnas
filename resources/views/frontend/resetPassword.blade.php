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

                    <div align="center"><h1>Reset Password</h1></div>

                    <div class="col-sm-6 col-sm-offset-3 form-box">

<!--                        <p align="center">Please enter 8 digit password.</p>-->

                        <div class="error-message "></div>
                        <div class="form-bottom form_holder signup_form">
                            {{ csrf_field() }}
                            <form class="login-form" method="post" onsubmit="return false;" autocomplete="off">

                                <div class="field_wrap">
<!--                                    <label class="sr-only" for="username">New password</label>-->
                                    <input type="password" name="password" placeholder="New password"
                                           class="form-username form-control"  autocomplete="off" id="form-username">
                                    <br>
<!--                                    <label class="sr-only" for="username">Retype Password</label>-->
                                    <input type="password" name="retypepassword"  autocomplete="off" placeholder="Retype Password"
                                           class="form-username form-control" >

                                    <span class="help-block"></span>
                                    <input type="hidden" name="token" class="token" value="{{$data}}">
                                </div>

                                <button type="submit" class="btn submitbtn"
                                        data-loading-text="<i class='fa fa-spinner fa-spin'></i> updating ...">Reset

                                </button>
                                <br>
                                <br>
                                <p align="center"><a href="{{ url('login') }}">Return to login</a></p>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@stop

@section('script')
@include('frontend.js.resetPassword_js')
@stop