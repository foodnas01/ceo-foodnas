<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>فودناس</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('frontend/img/favico.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('frontend/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('frontend/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('frontend/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('frontend/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fronticons.css')}}">

    <!-- BASE CSS -->
    <link href="{{asset('frontend/css/bootstrap-rtl.min.css')}}" rel="stylesheet">


    <script src="{{asset('frontend/js/input_qty.js')}}"></script>
    <script src="{{asset('frontend/js/cropper.js')}}"></script>


    <link href="{{asset('frontend/css/mystyle.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style-rtl.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/vendors.css')}}" rel="stylesheet">


    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/cropper.css')}}" rel="stylesheet">

    @yield('style')

    <style type="text/css">
        p{
            font-weight:bold;
        }
        #forgot_pw {

            min-height: 314px !important;
        }
    </style>

</head>

@php
$directionStyle = 'ltr';
if(App::getLocale() == "ar"){  $directionStyle = 'rtl'; }

@endphp
<body style="direction: {{$directionStyle}}">

    <div id="page">


    @include('frontend.partials.front-header')

    

    <!-- /header -->

    @yield('content')


    <!-- /main -->

   @include('frontend.partials.footer')
    <!--/footer-->
    </div>
    <!-- page -->

    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>{{ @trans('messages.signup_page.SignIn') }}</h3>
        </div>

        <form method="POST" action="{{ route('front_login') }}">

            <?php
            if(Session::has('invalidDetails')){  ?>

            <div class="alert alert-warning">
              <strong>{{ __('Warning!') }}</strong> <?php echo Session::get('invalidDetails'); ?>
            </div>
              
            <?php  }?>
            @csrf
            <div class="sign-in-wrapper">
                <!-- <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" class="social_bt google">Login with Google</a>
                <div class="divider"><span>Or</span></div> -->
                <div class="form-group">
                    <label for="email">{{ @trans('messages.dashboard.email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                 <div class="form-group">
                    <label for="password">{{ @trans('messages.dashboard.password') }} </label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <label class="container_check">{{ @trans('messages.dashboard.RememberMe') }} 
                           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right mt-1">
                        <a id="forgot" href="javascript:void(0);">{{ @trans('messages.dashboard.ForgotPassword') }}?</a>
                    </div>
                </div>
                <div class="text-center"><input type="submit" value="{{ @trans('messages.dashboard.Login') }}" class="btn_1 full-width"></div>
                <div class="text-center">
                    {{ @trans('messages.dashboard.dontAccount') }}? <a href="{{URL('signup')}}">{{ @trans('messages.Signup') }}</a>
                </div>
                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Popup -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="{{asset('frontend/js/common_scripts.js')}}"></script>
    <script src="{{asset('frontend/js/main_rtl.js')}}"></script>
    <script src="{{asset('frontend/js/validate.js')}}"></script>

    <!-- DATEPICKER  -->
    <script>
    $(function() {
      'use strict';
      $('input[name="dates"]').daterangepicker({
           autoUpdateInput: false,

          locale: {
              cancelLabel: 'Clear'
          }
      });
      $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
      });
      $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
      });
    });


    $(function() {
      $('input[name="dob"]').daterangepicker({
      autoUpdateInput: false,
      singleDatePicker:true,
          locale: {
              cancelLabel: 'Clear',
              format: "YYYY-MM-DD"
          }
      });

      $('input[name="dob"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('YYYY-MM-DD'));
      });

      $('input[name="dob"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
      });
    });

    


    </script>

    
    <script type="text/javascript">

        

     
            <?php if(Session::has('invalidDetails')){?>
                $('#sign-in').click();
            <?php  Session::forget('invalidDetails'); } ?>

    
    </script>












<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Crop Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="img-container">
            <div class="row">
                <div class="col-md-8">
                    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                </div>
                <div class="col-md-4">
                    <div class="preview"></div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="crop">Crop</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>



<script>

var $modal = $('#modal');
var image = document.getElementById('image');
var cropper;
  
$("body").on("change", ".image", function(e){
    var files = e.target.files;
    var done = function (url) {
      image.src = url;
      $modal.modal('show');
    };
    var reader;
    var file;
    var url;

    if (files && files.length > 0) {
      file = files[0];

      if (URL) {
        done(URL.createObjectURL(file));
      } else if (FileReader) {
        reader = new FileReader();
        reader.onload = function (e) {
          done(reader.result);
        };
        reader.readAsDataURL(file);
      }
    }
});

$modal.on('shown.bs.modal', function () {
    cropper = new Cropper(image, {
      aspectRatio: 1,
      viewMode: 3,
      preview: '.preview'
    });
}).on('hidden.bs.modal', function () {
   cropper.destroy();
   cropper = null;
});

$("#crop").click(function(){
    canvas = cropper.getCroppedCanvas({
        width: 160,
        height: 160,
      });

    canvas.toBlob(function(blob) {
        url = URL.createObjectURL(blob);
        var reader = new FileReader();
         reader.readAsDataURL(blob); 
         reader.onloadend = function() {
            var base64data = reader.result; 


            $.ajax({
                type: "POST",
                dataType: "json",
                url: "image-cropper/upload",
                data: {"_token": "{{ csrf_token() }}", 'image': base64data},
                success: function(data){
                    $modal.modal('hide');
                }
              });
         }
    });
})

</script>

</body>
</html>
