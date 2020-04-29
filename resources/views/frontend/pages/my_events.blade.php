<div class="col-md-12" style="margin-bottom: 20px;">
  <div class="col-md-3" style="float: right;">
    <div id="countryDiv">
      <select class="form-control" id="country" onchange="countryChange(this.value)">
        <option>Select Country</option>

        @foreach($country as $eachCountry)
          <option @if(isset($fcountry) && $fcountry == $eachCountry->id) selected='selected'  @endif value="{{$eachCountry->id}}">{{$eachCountry->name}}</option>  
        @endforeach

      </select>
    </div>
  </div>

  <div class="col-md-3"  style="float: right;">

    <div id="stateDiv">
      <select name="state_id" id="selectState"  onchange="stateChange(this.value)" class="form-control">
        <option>Select State</option>
        
    </select>
    </div>
  </div>

  <div class="col-md-3"  style="float: right;">

    <div id="cityDiv">
      <select name="city_id" id="selectCity"   class="form-control">
          <option>Select City</option>
      </select>
    </div>
  </div>

  <div class="col-md-2"  style="float: right;">

    <div id="priceDiv">
      <input type="text" placeholder="Price" id="price" name="price" class="form-control" />
    </div>

  </div>
  <div class="col-md-1"  style="float: right;">
    <input type="button"  class="btn btn-primary" onclick="myfunction()" id="btnSubmit" name="btnSubmit" value="Filter" />
  </div>


</div>
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



</script>
