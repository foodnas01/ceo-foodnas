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



{!! Form::open(array('route' => 'events.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
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


            <input class="form-control" value="{{ old('start_date') }}" style="padding-right:10px;padding-left:10px;" name="start_date" type="date" data-date-inline-picker="false" data-date-popover='{"inline": true}' />

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('End Date') }}:</strong>
            <input class="form-control" value="{{ old('end_date') }}" style="padding-right:10px;padding-left:10px;" name="end_date" type="date" data-date-inline-picker="false" data-date-popover='{"inline": true}' />
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
            <strong>{{ __('Country') }}:</strong>
            {!! Form::text('country', null, array('required'=> 'required','class' => 'form-control ')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('State') }}:</strong>
            {!! Form::text('state', null, array('required'=> 'required','class' => 'form-control ')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('City') }}:</strong>
            {!! Form::text('city', null, array('required'=> 'required','class' => 'form-control ')) !!}
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