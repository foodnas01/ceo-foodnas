@extends('layouts.dashboard-template') 
@section('style')
<style type="text/css">
    #headerText {
        padding-top: 120px;
    }
</style>
@stop 
@section('content')

 
    <style type="text/css">
        img {
          display: block;
          max-width: 100%;
        }
        .preview {
          overflow: hidden;
          width: 160px; 
          height: 160px;
          margin: 10px;
          border: 1px solid red;
        }
        .modal-lg{
          max-width: 1000px !important;
        }
</style>

<body class="rtl">
    <main>

      

      

        <div class="bg_color_1" style="transform: none; position: relative;">
            @include('layouts/navbar')
            <div class="container margin_80_55">
                <div class="row">
                    @include('layouts/leftmenus')
                    <div class="col-lg-9" style="margin-top: 15px;">
                        <section id="description">
                            <!-- <h2 id="page">{{ __('My Profile') }}</h2> -->
                            <div class="col-lg-12">

                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>{{ __('Success') }}!</strong> {{ $message }}
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    @endif


                                @if (count($errors) > 0)
                                  <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                       @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                       @endforeach
                                    </ul>
                                  </div>
                                @endif


                                <div id="message-contact"></div>

                                @if($user->verified == 0)
                               <div class="alert alert-danger alert-dismissible fade show">
                                    <strong>{{ __('Information') }}</strong>{{ __('Please activate your account.') }}
                                   
                                </div>
                                @endif
                             

                                    {!! Form::model($user, ['method' => 'PATCH','enctype'=>'multipart/form-data','route' => ['update_profile', $user->id]]) !!}
                                        @csrf

                                <div id="dynamicContent">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Name') }}</label>
                                                <input class="form-control" value="{{$user->name}}" type="text" id="name" name="name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Email') }}</label>
                                                <input class="form-control"  readonly value="{{$user->email}}" type="text" id="email" name="email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Password') }}</label>
                                                <input class="form-control" type="password" id="password" name="password">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Confirm Password') }}</label>
                                                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">{{ __('Image') }}</label>

                                       
                                                <input type="file" name="image" class="image">


                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label> {{ __('Gender') }} </label>
                                                </div>
                                                <div class="col-md-6" style="display: inline-flex;padding-right: 20px;padding-top: 20px;">

                                                    <input type="radio"  {{ ($user->gender  == 'male') ? 'checked' : '' }}  id="male" name="gender" value="male" style="margin-top: 5px;
">
                                                    <label for="male" style="
    padding-right: 20px;
    padding-left: 20px;
">{{ __('Male') }}</label>
                                                    <br>
                                                    <input type="radio" id="female" {{ ($user->gender  == 'female') ? 'checked' : '' }} name="gender" value="female" style="
    margin-top: 5px;
">
                                                    <label for="female" style="
    padding-right: 20px;
    padding-left: 20px;
">{{ __('Female') }}</label>
                                                    <br>
                                                    <input type="radio" {{ ($user->gender  == 'other') ? 'checked' : '' }} id="other" name="gender" value="other" style="
    margin-top: 5px;
">
                                                    <label for="other" style="
    padding-right: 20px;
">{{ __('Other') }}</label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Phone') }}</label>
                                                <input class="form-control" value="{{$user->phone_no}}" type="text" id="phone_contact" name="phone_contact">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>{{ __('Date of Birth') }}</label>
                                                <input class="form-control" value="{{$user->dob}}" name="dob" type="text" id="dob" data-date-inline-picker="false" data-date-popover='{"inline": true}' />
                                            </div>
                                        </div>

                                    </div>

                                    <p class="add_top_30">
                                        <input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact">
                                    </p>


                                </div>
                                    
                                </form>
                            </div>
                        </section>

                    </div>
                    <!-- /col -->

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    </main>

  



       




</body>


<script type="text/javascript">


    myProfile = (thisValue) => {
        $.ajax({
            url: "{{ url('/my_profile/') }}" + "/" + thisValue,
            method: 'get',
            success: function(result) {
                $("#dynamicContent").html(result);
            }
        });
    }

    myEvents = (thisValue) => {

        $.ajax({

            type:'POST',
            url:"{{ route('my_events') }}",
            data: {
            "_token": "{{ csrf_token() }}"
              },
            success: function(result) {
                $("#dynamicContent").html(result);

            }
        });
    }

    navbarLink = (thisValue) => {
        $.ajax({
            url: "{{ url('/pages/') }}" + "/" + thisValue,
            method: 'get',
            success: function(result) {
                $("#dynamicContent").html(result);
            }
        });
    }

    function myfunction(){

       let country =  $("#country option:selected").val();
       if(!$.isNumeric(country)){
            country = '';
       }

       if(country == ''){
        alert('Please choose at least country.')
        return false;
       }
       let state    = $("#selectState option:selected").val();
       if(!$.isNumeric(state)){
            state = '';
       }
       let city     = $("#selectCity option:selected").val();
       if(!$.isNumeric(city)){
            city = '';
       }

       let startDate = $("#start_date").val();
       let endDate   =  $("#end_date").val(); 

       let price = $("#price").val();
       $.ajax({
            type:'POST',
            url:"{{ route('fitler_events') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                country: country,
                state:state,
                city:city,
                price:price,
                start_date : startDate,
                end_date : endDate
              },
            success: function(result) {
                $("#event-grid").html(result);

            }
        });


    }
   



</script>






<!-- Conent Section end -->
@endsection