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



{!! Form::open(array('route' => 'users.store','id'=>'userForm','method'=>'POST','enctype'=>'multipart/form-data')) !!}
<div class="row">


    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="alert alert-danger" style="display: none;">
        <ul id="errors">
           
        </ul>
      </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Name') }}:</strong>
            {!! Form::text('name', null, array('required'=> 'required','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Email') }}:</strong>
            {!! Form::text('email', null, array('required'=> 'required','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Phone') }}:</strong>
            {!! Form::text('phone_no', null, array('required'=> 'required','class' => 'form-control ')) !!}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Password') }}:</strong>
            {!! Form::password('password', array('required'=> 'required','class' => 'form-control ')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Confirm Password') }}:</strong>
            {!! Form::password('confirm-password', array('required'=> 'required','class' => 'form-control ')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Date of Birth')}}:</strong>
             <input class="form-control" value="{{ old('dob') }}" style="padding-right:10px;padding-left:10px;" name="dob" type="date" data-date-inline-picker="false" data-date-popover='{"inline": true}' />
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Image') }}:</strong>
            <input type="file" name="user_image" style="padding-right:0px;padding-left:0px;"  class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Gender') }}:</strong>
            <div style="display: flex;">
                <input type="radio" @if (old('gender') == 'male') checked="checked" @endif  id="male" name="gender" value="male" style="margin-top: 5px;">
                <label for="male" style="padding-right: 20px;padding-left: 20px;">{{ __('Male') }}</label>
                <br>
                <input type="radio" id="female"  @if (old('gender') == 'female') checked="checked" @endif  name="gender" value="female" style="margin-top: 5px;">
                <label for="female" style="padding-right: 20px;padding-left: 20px;">{{ __('Female') }}</label>
                <br>
                <input type="radio"  id="other"  @if (old('gender') == 'other') checked="checked" @endif name="gender" value="other" style="margin-top: 5px;">
                <label for="other" style="padding-right: 20px;">{{ __('Other') }}</label>
            </div>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Role') }}:</strong>
            {!! Form::select('roles[]', $roles,[], array('required'=> 'required','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
        <button type="submit"  class="btn btn-success"><i class="fa fa-floppy-o"></i>&nbsp;{{ __('Save') }}</button>
    </div>
</div>
{!! Form::close() !!}

@endsection