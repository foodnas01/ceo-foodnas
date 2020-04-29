@extends('layouts.grid')


@section('content')
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


{!! Form::model($event, ['method' => 'PATCH','enctype'=>'multipart/form-data','route' => ['events.update', $event->id]]) !!}
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Title') }}:</strong>
            {!! Form::text('title', null, array('required'=> 'required','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Start Date') }}:</strong>
            <input class="form-control" value="{{ $event->start_date }}" style="padding-right:10px;padding-left:10px;" name="start_date" type="date" data-date-inline-picker="false" data-date-popover='{"inline": true}' />

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('End Date') }}:</strong>
            <input class="form-control" value="{{ $event->end_date }}" style="padding-right:10px;padding-left:10px;" name="end_date" type="date" data-date-inline-picker="false" data-date-popover='{"inline": true}' />
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Seats') }}:</strong>
            {!! Form::text('total_seates', null, array('required'=> 'required','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Price') }}:</strong>
            {!! Form::text('price', null, array('required'=> 'required','class' => 'form-control ')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Rating') }}:</strong>
            {!! Form::text('rating', null, array('required'=> 'required','class' => 'form-control ')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Host Name') }}:</strong>
            {!! Form::text('host_name', null, array('required'=> 'required','class' => 'form-control ')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Gender') }}:</strong>
            <div style="display: flex;">
                <input type="radio" @if ($event->gender == 'male') checked="checked" @endif  id="male" name="gender" value="male" style="margin-top: 5px;">
                <label for="male" style="padding-right: 20px;padding-left: 20px;">{{ __('Male') }}</label>
                <br>
                <input type="radio" id="female"  @if ($event->gender == 'female') checked="checked" @endif  name="gender" value="female" style="margin-top: 5px;">
                <label for="female" style="padding-right: 20px;padding-left: 20px;">{{ __('Female') }}</label>
                <br>
                <input type="radio"  id="other"  @if ($event->gender == 'other') checked="checked" @endif name="gender" value="other" style="margin-top: 5px;">
                <label for="other" style="padding-right: 20px;">{{ __('Other') }}</label>
            </div>
        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Country') }}:</strong>
            <select name="country_id" id="country_id" onchange="countryChange(this.value)" class="form-control">
                <option >Select Country</option>
                @foreach($countries as $eachCountry)
                    <option @if($eachCountry->id == $event->country_id) selected @endif  value="{{$eachCountry->id}}">{{$eachCountry->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('State') }}:</strong>
            <select name="state_id" id="selectState"  onchange="stateChange(this.value)" class="form-control">
                <option>Select State</option>
                
            </select>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('City') }}:</strong>
            <select name="city_id" id="selectCity"   class="form-control">
                <option>Select City</option>
                
            </select>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Image') }}:</strong>
            <input type="file" name="image" style="padding-right:0px;padding-left:0px;"  class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
          <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i>&nbsp;{{ __('Save') }}</button>
    </div>
</div>
{!! Form::close() !!}

@endsection

<script type="text/javascript">
    
    
    $(document).ready(function() { $("#country_id").trigger("change");});



      countryChange = (thisValue) => {
        $.ajax({
           type:'POST',
           url:"{{ route('events.get_states') }}",
           data: {
                     countryid: thisValue,
                     stateid:"{{$event->state_id}}"
                  },
           success:function(data){
            $("#selectState").html(data);
            $("#selectState").trigger("change"); 
            
             
           }
        });

        

    }

    stateChange = (thisValue) => {

        $.ajax({
           type:'POST',
           url:"{{ route('events.get_cities') }}",
           data: {
                     stateid: thisValue,
                     cityid:"{{$event->city_id}}"
                  },
           success:function(data){
            console.log(data);
            $("#selectCity").html(data);
             
           }
        });

    }


</script>