@extends('layouts.dashboard-template') @section('style')
<style type="text/css">
    #headerText {
        padding-top: 120px;
    }
</style>
@stop @section('content')

<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>                       
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
 -->

<body class="rtl">
    <main>

        <section class="hero_in general">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>
                    Dashboard Page
                    </h1>
                </div>
            </div>
        </section>

        <div class="bg_color_1" style="transform: none; position: relative;">
            @include('layouts/navbar')
            <div class="container margin_60_35">
                <div class="row">
                    @include('layouts/leftmenus')
                    <div class="col-lg-9" >
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
                             

                                    {!! Form::model($user, ['method' => 'PATCH','enctype'=>'multipart/form-data','route' => ['update_profile', $user->id]]) !!}
                                        @csrf

                                <div id="dynamicContent">

                                     <table id="datatable1" style="direction: rtl;" class="table table-bordered table-hover">
                                      <thead>
                                          <tr>
                                              <th>{{ __('No') }}</th>
                                              <th>{{ __('Name') }}</th>
                                              <th>{{ __('Email') }}</th>
                                              <th>{{ __('Country') }}</th>
                                              <th>{{ __('City') }}</th>
                                              <th>{{ __('Phone') }}</th>
                                              <th>{{ __('Skills') }}</th>
                                              <th>{{ __('Level') }}</th> 
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($users as $key => $eachUser)
                                          <tr>
                                          
                                              <td>{{ ++$key }}</td>
                                              <td>{{ $eachUser->first_name }}</td>
                                              <td>{{ $eachUser->email }}</td>
                                              <td>{{ $eachUser->country }}</td>
                                              <td>{{ $eachUser->city }}</td>
                                              <td>{{ $eachUser->phone }}</td>
                                              <td>{{ $eachUser->skills }}</td>
                                              <td>{{ $eachUser->level }}</td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                </table>



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

    UsersList = (thisValue) => {

        $.ajax({
            url: "{{ url('/userslist/') }}",
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