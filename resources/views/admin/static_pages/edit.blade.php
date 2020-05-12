@extends('layouts.grid')


<style type="text/css">
  .modal-content{
        width: 660px;
        left: 60px;
  }
</style>

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



{!! Form::model($page, ['method' => 'PATCH','id'=>'aboutUsers','enctype'=>'multipart/form-data','route' => ['pages.update', $page->id]]) !!}
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
             <input type="text" placeholder="{{ __('Title') }}" value="{{$page->title}}" class="form-control clsTextfield1" required="" name="title">

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Type') }}</strong>
             <select class="CountryCls form-control" id="type" name="type" placeholder="" style="width: 100%;">

                <option value="" selected="" disabled="">المهارة </option>
                <option @if($page->type == 'aboutus') selected='selected' @endif value="aboutus">About Us</option>
                <option @if($page->type == 'privacy') selected='selected' @endif  value="privacy">Privacy Policy</option>
                <option @if($page->type == 'Joinashost') selected='selected' @endif   value="Joinashost">{{ __('Join As Host') }}</option>
                <option @if($page->type == 'how_it_works') selected='selected' @endif   value="how_it_works">{{ __('How It Works') }}</option>
                 <option @if($page->type == 'terms_conditions') selected='selected' @endif   value="terms_conditions">{{ __('Terms And Conditions') }}</option>

                 <option @if($page->type == 'trust') selected='selected' @endif   value="trust">{{ __('messages.Trust') }}</option>
                 <option @if($page->type == 'jobs') selected='selected' @endif   value="jobs">{{ __('messages.Jobs') }}</option>

                 <option @if($page->type == 'faqs') selected='selected' @endif   value="faqs">{{ __('messages.FAQ') }}</option>


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
             <textarea name="editor1">{{$page->content}}</textarea>
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