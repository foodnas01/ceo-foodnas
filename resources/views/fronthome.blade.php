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
        .gDBcqv {
            
            min-width: 80px;
            max-width: 80px;
            min-height: 80px;
            max-height: 80px;
            background-color: rgb(246, 246, 246);
            background-image: url("{{ asset('frontend/img/avatar.jpg') }}");
            background-size: cover;
            object-fit: cover;
            border-radius: 50%;
        }

        .select2-selection {
            height: 40px !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 38px;
            position: absolute;
            top: 1px;
            right: 1px;
            width: 20px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 35px;
        }
        .pd-10{
            padding-top: 10px;
            padding-bottom: 10px;
            font-weight: bold;
        }
        h5{
            font-weight: bold;
        }
        .clsTop{
            padding-top: 10px;
        }
        #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }


</style>

<body class="rtl" >
    <main>
        <div class="bg_color_1" style="transform: none; position: relative;">
            @include('layouts/navbar')
            <div class="container margin_80_55">
                <div class="row">
                    @include('layouts/leftmenus')
                    <div class="col-lg-9" style="margin-top: 15px;">
                        <section >
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


                                <div class="row">
                                  <div class="col-sm-12">
                                    <div class="card" style="background-color: #f6f6f6 !important;">
                                      <div class="card-body">
                                        <h5 class="card-title">Profile Picture</h5>
                                        <p class="card-text">Don't forget a smile is the best way to introduce yourself to others.</p>
                                         <div class="row">
                                            <div class="col-sm-6" style="text-align: -webkit-center;">
                                                <img src="" alt="" class="Avatar-rgm3xj-0 gDBcqv" >
                                            </div>
                                            <div class="col-sm-6" style="text-align: center;align-self: center;">
                                                <a href="#" style="background: rgb(253, 120, 84);border-color:rgb(253, 120, 84)" class="btn btn-primary">Change Profile Picture</a>
                                            </div>
                                            
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-12 clsTop">
                                    <div class="card" style="background-color: #f6f6f6 !important;">
                                      <div class="card-body">
                                        <h5 class="card-title">Personal information</h5>
                                        <p class="card-text">Eatwith is all about people! Help future guests get to know you. Tell them about the things you like: your food preferences, favorite travel destination, etc..</p>
                                        <div class="row">
                                            <div class="col-lg-12 pd-10">Your Name</div>
                                          <div class="col-lg-4">
                                                <select id="gender" name="gender">

                                                    <option value="other">Other</option>
                                                    <option value="mr">Mr</option>
                                                    <option value="mrs">Mrs</option>
                                                </select>
                                              
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="sr-only" for="inputfirstName">First Name</label>
                                                <input type="text" class="form-control" id="inputfirstName" placeholder="First Name">
                                            </div>
                                            <div class="col-lg-4">        
                                                <label class="sr-only" for="inputlastName">Last Name</label>
                                                <input type="text" class="form-control" id="inputlastName" placeholder="Last Name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 pd-10">Your birth date</div>
                                            <div class="col-lg-4">
                                                <label class="sr-only" for="inputDay">Day</label>
                                                 <select id="day" name="day">

                                                    <option value="" selected disabled="disabled">Day</option>
                                                    @for($i=1; $i <= 31; $i++)
                                                        <option value={{$i}}>{{$i}}</option>
                                                    @endfor  
                                                </select>
                                                
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="sr-only" for="inputMonth">Month</label>
                                                <select id="month" name="month">

                                                    <option value="" selected disabled="disabled">Month</option>
                                                    @for($i=1; $i <= 12; $i++)
                                                        <option value={{$i}}>{{$i}}</option>
                                                    @endfor  
                                                </select>
                                            </div>
                                            <div class="col-lg-4">        
                                                <label class="sr-only" for="inputPassword">Year</label>
                                                <select id="year" name="year">
                                                    <option value="" selected disabled="disabled">Year</option>
                                                    @for($i=2020; $i >= 1901; $i--)
                                                        <option value={{$i}}>{{$i}}</option>
                                                    @endfor  
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 pd-10">Email</div>
                                            <div class="col-lg-12">
                                                <label class="sr-only" for="inputEmail">Day</label>
                                                <input type="email" name="eamil" class="form-control" id="eamil" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 pd-10">Phone number</div>
                                            <div class="col-lg-12">
                                                Providing a phone number allows hosts and guests to communicate before an experience. Don't worry, it will only be shared after your booking is confirmed.
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="sr-only" for="inputEmail">Phone number</label>
                                                 <input type="text"  maxLength="10"  required="" class="form-control clsTextfield1"  name="phoneNumber" id="phone">
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="col-sm-12 clsTop">
                                    <div class="card" style="background-color: #f6f6f6 !important;">
                                      <div class="card-body">
                                        <h5 class="card-title">Address</h5>
                                        <p class="card-text">Be sure to fill in your complete address so that your experiences show up in search results. It won't be displayed and will only be shared with your future guests.</p>
                                        <div class="row">
                                         <div class="col-lg-12 pd-10">Full address</div>
                                          <div class="col-lg-12">
                                                <label class="sr-only" for="inputAddress">Full Address</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Full Address">
                                            </div>
                                        </div>

                                        <div class="row">
                                            
                                          <div class="col-lg-6">
                                            <div class="pd-10">Number</div>
                                            <div>
                                                <input type="text" class="form-control" id="inputNumber" placeholder="Number">
                                            </div>   
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="pd-10">Street</div>
                                                <div>
                                                    <input type="text" class="form-control" id="inputStreet" placeholder="Street">
                                                </div>   
                                            </div>
                                        </div>

                                        <div class="row">
                                            
                                          <div class="col-lg-6">
                                            <div class="pd-10">City</div>
                                            <div>
                                                <input type="text" class="form-control" id="inputCity" placeholder="City">
                                            </div>   
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="pd-10">Department</div>
                                                <div>
                                                    <input type="text" class="form-control" id="inputDepartment" placeholder="text">
                                                </div>   
                                            </div>
                                        </div>

                                        <div class="row">
                                            
                                          <div class="col-lg-6">
                                            <div class="pd-10">State/Province/Region</div>
                                            <div>
                                                <input type="text" class="form-control" id="inputState" placeholder="State/Province/Region">
                                            </div>   
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="pd-10">ZIP/Postal Code</div>
                                                <div>
                                                    <input type="text" class="form-control" id="inputPostal" placeholder="ZIP/Postal Code">
                                                </div>   
                                            </div>
                                        </div>

                                         <div class="row">
                                            
                                          <div class="col-lg-6">
                                            <div class="pd-10">Country</div>
                                            <div>
                                                <input type="text" class="form-control" id="inputCountry" placeholder="Country">
                                            </div>   
                                            </div>
                                            
                                        </div>
                                        <div class="row">

                                        <div class="col-lg-12 pd-10">Additional information</div>
                                          <div class="col-lg-12">
                                                <label class="sr-only" for="inputEmail">Digicode, floor, public transport directions, etc.</label>

                                                <textarea cols="101" rows="2"></textarea>
                                                
                                            </div>

                                            <!-- <div class="col-lg-12">
                                                <div id="map"></div>
                                            </div> -->
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-sm-12 clsTop">
                                    <div class="card" style="background-color: #f6f6f6 !important;">
                                      <div class="card-body">
                                        <h5 class="card-title">About you</h5>
                                        <p class="card-text">Future guests would love to know more about you! Do you ... practice yoga every morning? Love cooking with fresh market produce? Always host to the sound of Jazz? Let them know who you are and what you love here!</p>
                                        <div class="row">
                                            <div class="col-lg-12 pd-10">Profession</div>
                                              <div class="col-lg-12">
                                                    <input type="text" class="form-control" id="inputProfession" placeholder="Profession">
                                              </div>

                                            <div class="col-lg-12 pd-10">Languages</div>
                                              <div class="col-lg-12">
                                                    <input type="text" class="form-control" id="inputLanguage" placeholder="Languages">
                                              </div>

                                              <div class="col-lg-12 pd-10">Tell us about yourself</div>
                                              <div class="col-lg-12" style="color: #f04747;" id="totalwords">0/150 min</div>

                                              <div class="col-lg-12">
                                                    <textarea cols="101" maxlength="150" id="tellabout" onkeyup="tellabout()" rows="4"></textarea>
                                              </div>
                                              
                                               
                                        </div>

                                       </div>
                                      </div>
                                  </div>

                                  <div class="col-sm-12 clsTop">
                                    <div class="card" style="background-color: #f6f6f6 !important;">
                                      <div class="card-body">
                                        <h5 class="card-title">Food and travel preferences</h5>
                                        <p class="card-text ">Tell us about your favorite travel destinations, cuisines and cooking styles so that future guests can get a taste what you will share with them.</p>
                                        <div class="row">
                                            <div class="col-lg-12 pd-10">Guilty pleasures</div>
                                              <div class="col-lg-12">
                                                    <input type="text" class="form-control" id="inputGuilty" placeholder="Guilty">
                                              </div>

                                            <div class="col-lg-12 pd-10">My favourite cuisines</div>
                                              <div class="col-lg-12">

                                                <select id="cuisines" name="cuisines">

                                                    <option value="african">African</option>
                                                    <option value="american">American</option>
                                                    <option value="asian">Asian</option>
                                                    <option value="french">French</option>

                                                </select>
                                                    
                                              </div>

                                              <div class="col-lg-12 pd-10">The cuisines you like to cook</div>

                                              <div class="col-lg-12">
                                                    <select id="cuisinesCook" name="cuisinesCook">

                                                        <option value="african">African</option>
                                                        <option value="american">American</option>
                                                        <option value="asian">Asian</option>
                                                        <option value="french">French</option>
                                                        
                                                    </select>
                                              </div>
                                              
                                               
                                        </div>

                                       </div>
                                      </div>
                                  </div>

                                  <div class="col-sm-12 clsTop">
                                    <div class="card" style="background-color: #f6f6f6 !important;">
                                      <div class="card-body">
                                        <h5 class="card-title pd-10">Food preferences</h5>
                                       
                                        <div class="row">
                                            <div class="col-lg-12 pd-10">Special diets</div>
                                              <div class="col-lg-12">
                                                     <select id="specialDiets" name="specialDiets">

                                                        <option value="african_board_beans">Alergic to Broad Beans</option>
                                                        <option value="alergic_to_eggs">Alergic to Eggs</option>
                                                        <option value="alergic_to_fish">Alergic to Fish</option>
                                                        <option value="alergic_to_gluten">Alergic to Gluten</option>
                                                        <option value="alergic_to_nuts">Alergic to Nuts</option>
                                                        <option value="alergic_to_sesame">Alergic to Sesame</option>
                                                        <option value="alergic_to_shellfish">Alergic to Shellfish</option>
                                                        <option value="alergic_to_beans">Alergic to Soy beans</option>
                                                        <option value="diabetes">Diabetes</option>
                                                        <option value="halal">Halal</option>
                                                        <option value="kosher">Kosher</option>
                                                        <option value="lactose_intolenance">Lactose intolenance</option>
                                                        <option value="no_alcohol">No Alcohol</option>
                                                        <option value="no_gluten">No Gluten</option>
                                                        <option value="organic">Organic</option>
                                                        <option value="pescatarian">Pescatarian</option>
                                                        <option value="vegan">Vegan</option>
                                                        <option value="vegetarian">Vegetarian</option>
                                                        
                                                    </select>
                                              </div>  
                                        </div>

                                       </div>
                                      </div>
                                  </div>

                                  <div class="col-sm-12 clsTop" >
                                      <input type="button" style="background: rgb(253, 120, 84);width: 100%;border-color:rgb(253, 120, 84)" class="btn btn-primary" id="btnSave" name="btnSave" value="Save" />
                                  </div>
                                  </div>
                                </div>     
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
   

    tellabout = () => {
         
        var maxlen = $("#tellabout").attr('maxlength');

          var length = $("#tellabout").val().length;
          if(length <= maxlen){
            let remaing = maxlen - length;
            $string = `0/${remaing} min`;
            $("#totalwords").html($string)
            
          }else
            {
              $('#tellabout').text('');
            }
    }

    
    

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