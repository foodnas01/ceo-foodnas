@extends('layouts.gridPages')
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



{!! Form::open(array('route' => 'pages.store','id'=>'guestUsers','method'=>'POST','enctype'=>'multipart/form-data')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

      <div class="alert alert-danger" style="display: none;">
        <ul id="errors">
           
        </ul>
      </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Title') }}</strong>
             <input type="text" placeholder="{{ __('Title') }}" class="form-control clsTextfield1" required="" name="title">

        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Type') }}</strong>
             <select class="CountryCls form-control" id="type" name="type" placeholder="" style="width: 100%;">

                <option  value="" selected="" disabled="">{{ __('Select Type') }}</option>
                <option  value="aboutus">{{ __('About Us') }}</option>
                <option  value="privacy">{{ __('Privacy Policy') }}</option>
                <option  value="Joinashost">{{ __('Join As Host') }}</option>
                <option  value="how_it_works">{{ __('How It Works') }}</option>
                <option  value="terms_conditions">{{ __('Terms And Conditions') }}</option>
                <option value="trust">{{ __('messages.Trust') }}</option>
                <option value="jobs">{{ __('messages.Jobs') }}</option>
                <option value="faqs">{{ __('messages.FAQ') }}</option>

              </select>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Featured Image') }}</strong><br />
            <input type="file" name="featured_image" id="featured_image" />
            
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Content') }}</strong>
             <textarea name="editor1"></textarea>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
        <button type="submit"  class="btn btn-success"><i class="fa fa-floppy-o"></i>&nbsp;{{ __('Save') }}</button>
    </div>
</div>
{!! Form::close() !!}

<script>

  CKEDITOR.config.disableNativeSpellChecker = false;
  CKEDITOR.replace( 'editor1', 
  {       
    filebrowserBrowseUrl :      '/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?Type=Images',
    filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?Type=Flash',
    filebrowserUploadUrl :      '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
  });



</script>


@endsection