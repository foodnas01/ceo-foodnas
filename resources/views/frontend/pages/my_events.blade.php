<!-- <div class="col-md-12" style="margin-bottom: 20px;"> -->
  <div class="col-md-2" style="float: right;width: 15.666667%">
    <div id="countryDiv">
      <select class="form-control" id="country" onchange="countryChange(this.value)">
        <option>Country</option>

        @foreach($country as $eachCountry)
          <option @if(isset($fcountry) && $fcountry == $eachCountry->id) selected='selected'  @endif value="{{$eachCountry->id}}">{{$eachCountry->name}}</option>  
        @endforeach

      </select>
    </div>
  </div>

  <div class="col-md-2"  style="float: right;width: 15.666667%">

    <div id="stateDiv">
      <select name="state_id" id="selectState"  onchange="stateChange(this.value)" class="form-control">
        <option>State</option>
        
    </select>
    </div>
  </div>

  <div class="col-md-2"  style="float: right;width: 15.666667%">

    <div id="cityDiv">
      <select name="city_id" id="selectCity"   class="form-control">
          <option>City</option>
      </select>
    </div>
  </div>

  <!-- <div class="col-md-1"  style="float: right;">

    <div id="priceDiv">
      <input type="text" style="width: 49px;" placeholder="Price" id="price" name="price" class="form-control" />
    </div>

  </div> -->

  <div class="col-md-1" style="float: right;">
    <div id="priceDiv" style="margin-right: -14px;">
      <input type="text" style="width: 64px;" placeholder="Price" id="price" name="price" class="form-control">
    </div>
  </div>

  <div class="col-md-2"  style="float: right;width: 15.666667%">
    <!--  <input class="form-control" value="" id="start_date" name="start_date" type="date" data-date-inline-picker="false" data-date-popover='{"inline": true}' /> -->

      <input class="form-control" type="text" name="date1" placeholder="Start Date">
            


  </div>

 



  <div class="col-md-2"  style="float: right;width: 15.666667%">
    <!--  <input class="form-control" value="" id="end_date" name="end_date" type="date" data-date-inline-picker="false" data-date-popover='{"inline": true}' /> -->

      <input class="form-control" type="text" name="date2" placeholder="End Date">


  </div>

  <div class="col-md-1"  style="float: right;">
    <input type="button"  class="btn_1 full-width purchase" style="width: auto !important;" onclick="myfunction()" id="btnSubmit" name="btnSubmit" value="{{ __('Filter') }}" />
  </div>

  


<!-- </div> -->
<div  style="height: 70px;"></div>



<div class="row laravel-grid" id="event-grid">
    <div class="col-md-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <h4 class="grid-title">{{ __('Event Management') }}</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive grid-wrapper">
                    <table id="datatable1" style="direction: rtl;" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                             
                              <th>{{ __('Title') }}</th>
                              <th>{{ __('Start Date') }}</th>
                              <th>{{ __('End Date') }}</th>
                              <th>{{ __('Seats') }}</th>
                              <th>{{ __('Price') }}</th>
                              <th>{{ __('Rating') }}</th>
                              <th>{{ __('Host Name') }}</th>
                              <th>{{ __('Country') }}</th>
                              <th>{{ __('State') }}</th>
                              <th>{{ __('City') }}</th>
                              <th>{{ __('image') }}</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $key => $event)
                          <tr>
                          
                       
                              <td>{{ $event->title }}</td>
                              <td>{{ $event->start_date }}</td>
                              <td>{{ $event->end_date }}</td>
                              <td>{{ $event->total_seates }}</td>
                              <td>{{ $event->price }}</td>
                              <td>{{ $event->rating }}</td>
                              <td>{{ $event->host_name }}</td>
                              <td>{{ $event->countries->name }}</td>
                              <td>{{ $event->states->name }}</td>
                              <td>{{ $event->cities->name }}</td>
                              <td><img src={{url('/uploads/events_images/'.$event->image)}} alt="No Image" width="60" height="60" alt=""/></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>


                </div>
            </div>
            
        </div>
    </div>
</div>

<script type="text/javascript">
  
   countryChange = (thisValue) => {
        $.ajax({
           type:'POST',
           url:"{{ route('get_states') }}",
           data: {
            "_token": "{{ csrf_token() }}",
                     countryid: thisValue
                  },
           success:function(data){
            if($("#selectCity option:selected").html() !='Select City'){
              $("#selectCity option:selected").remove();
            }
            $("#selectState").html(data);
             
           }
        });
    }

    stateChange = (thisValue) => {
        $.ajax({
           type:'POST',
           url:"{{ route('get_cities') }}",
           data: {
            "_token": "{{ csrf_token() }}",
                     stateid: thisValue
                  },
           success:function(data){
            console.log(data);
            $("#selectCity").html(data);
             
           }
        });

    }


    $(function() {
      'use strict';
      $('input[name="date1"]').daterangepicker({
          autoUpdateInput: false,
          singleDatePicker: true,
          locale: {
              cancelLabel: 'Clear'
          }
      });
      $('input[name="date1"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('DD/MM/YYYY'));
      });
      $('input[name="date1"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
      });
    });

     $(function() {
      'use strict';
      $('input[name="date2"]').daterangepicker({
          singleDatePicker: true,
          autoUpdateInput: false,
          locale: {
              cancelLabel: 'Clear'
          }
      });
      $('input[name="date2"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('DD/MM/YYYY'));
      });
      $('input[name="date2"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
      });
    });



</script>
