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

@php

  $listCities['saudia'] = ['مدينة الرياض','جدة','مكة المكرمة','المدينة المنورة','الدمام','الطائف'];

  $listCities['uae'] = ['دبي','أبوظبي','الشارقة','عجمان','العين'];
  $listCities['oman'] = ['مسقط','صلالة', 'نزوى', 'صحار', 'صور'];
  $listCities['yamen'] = ['صنعاء', 'تعز','الحديدة','عدن', 'إب','ذمار'];
  $listCities['qatar'] = ['الدوحة','الوكرة', 'دخان', 'الخور', 'زبارة'];
  $listCities['bahrain'] = ['المنامة','الرفاع', 'المحرق', 'عالي', 'سترة'];
  $listCities['jordon'] = ['عمان', 'الزرقاء', 'إربد', 'الرصيفة', 'القويسمة', 'تلاع العلي  ', 'وادي السير  '];
  $listCities['morocco'] = ['الدار البيضاء', 'فاس', 'طنجة','مراكش', 'مكناس']; 

@endphp



{!! Form::open(array('route' => 'guests.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('First Name') }}:</strong>
             <input type="text" placeholder="الاسم الكامل" class="form-control clsTextfield1" required="" name="firstName">

        </div>
    </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Country') }}:</strong>
            <select class="CountryCls form-control" id="country" name="country" onchange="changeCountry(this)" style="width: 100%;">
                                    
                <option  data-value="saudia" data-content='<span class="flag-icon flag-icon-us"></span> English' value="المملكة العربية السعودية"> المملكة العربية السعودية</option>
                <option data-value="uae"  value="الامارات العربية ">الامارات العربية </option>
                <option data-value="oman" value="سلطنة عمان">سلطنة عمان</option>
                <option data-value="yamen" value="اليمن">اليمن</option>
                <option data-value="qatar" value="دولة قطر">دولة قطر</option>
                <option data-value="bahrain" value="البحرين">البحرين</option>
                <option data-value="jordon" value="الأردن">الأردن</option>
                <option  data-value="morocco" value="المغرب">المغرب</option>
                <option  data-value="lebnon" value="لبنان">لبنان</option>
                <option  data-value="phlastine" value="فلسطين">فلسطين</option>
                <option  data-value="alquait" value="الكويت">الكويت</option>
                <option  data-value="aljazair" value="الجزائر">الجزائر</option>
                <option  data-value="altunas" value="تونس">تونس</option>
                <option  data-value="libya" value="ليبيا">ليبيا</option>
                <option  data-value="sudaan" value="سودان">سودان</option>
              </select>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('City') }}:</strong>
           <input type="text" placeholder="المدينة"  name="city" class="form-control clsTextfield1" required="" id="city">

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Email') }}:</strong>
             <input type="text" placeholder="البريد الإلكتروني"  name="email" class="form-control clsTextfield1" required="" id="email">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Skills') }}:</strong>
             <select class="CountryCls form-control" id="skills" name="skills" placeholder="" style="width: 100%;">

                <option value="" selected="" disabled="">المهارة </option>
                <option  value="مضيف">مضيف</option>
                <option  value="شیف">شیف</option>
                <option  value="مرشد سياحي">مرشد سياحي</option>
                <option  value="مدرب">مدرب</option>
                <option  value="شيف مخبوزات">شيف مخبوزات</option>
                <option  value="خبّاز">خبّاز</option>
                <option  value="ساق">ساق</option>
                <option  value="أخرى">أخرى</option>  
              </select>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Level') }}:</strong>
            <select class="CountryCls form-control" id="level" name="level" placeholder="" style="width: 100%;">
                <option value="" selected="" disabled="">المستوى</option>
                <option  value="مبتدئ">مبتدئ</option>
                <option  value="متوسط الخبرة">متوسط الخبرة</option>
                <option  value="شبه محترف">شبه محترف</option>
                <option  value="محترف">محترف</option>
              </select>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ __('Phone') }}:</strong>
             <input type="text"  maxLength="10"  required="" class="form-control clsTextfield1"  name="phoneNumber" id="phone">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
             <input type="checkbox" id="c1"  name="terms" id="terms">
             <label for="c1" class="spanText"> أوافق على الشروط و الأحكام فودناس</label>
             <span class="spanText"><span>
             <p class="pCls" style="margin:0.4em 0">يعتبر تسجيلك في الموقع الآن هو مجرد تسجيل مبدئي وسوف نقوم بإرسال بريد إلكتروني إليك فور انطلاق الموقع لاستكمال اجراءات تسجيلك بشكل كامل.</p>
        </div>
    </div>

  

   


    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i>&nbsp;{{ __('Save') }}</button>
    </div>
</div>
{!! Form::close() !!}


<script type="text/javascript">
    $("#c1").change(function(){
        if($(this).is(":checked")){
            $("#btnSubmit").removeAttr("disabled");
        }else{
            $("#btnSubmit").attr("disabled","disabled");
        }
    });


    changeCountry = (thisObj) => {
    $(".CityCls").html('');
    if($(thisObj).find(":selected").attr("data-value") == "saudia"){
      <?php foreach($listCities['saudia'] as $eachKey => $eachCity){ ?>
          $(".CityCls").append('<option value="<?=$eachKey?>"><?=$eachCity?></option');
      <?php } ?>
    }else if($(thisObj).find(":selected").attr("data-value") == "uae"){
      <?php foreach($listCities['uae'] as $eachCity){ ?>
          $(".CityCls").append('<option value="<?=$eachKey?>"><?=$eachCity?></option');
      <?php } ?>
    }else if($(thisObj).find(":selected").attr("data-value") == "oman"){
      <?php foreach($listCities['oman'] as $eachCity){ ?>
          $(".CityCls").append('<option value="<?=$eachKey?>"><?=$eachCity?></option');
      <?php } ?>
    }else if($(thisObj).find(":selected").attr("data-value") == "yamen"){
      <?php foreach($listCities['yamen'] as $eachCity){ ?>
          $(".CityCls").append('<option value="<?=$eachKey?>"><?=$eachCity?></option');
      <?php } ?>
    }else if($(thisObj).find(":selected").attr("data-value") == "qatar"){
      <?php foreach($listCities['qatar'] as $eachCity){ ?>
          $(".CityCls").append('<option value="<?=$eachKey?>"><?=$eachCity?></option');
      <?php } ?>
    }else if($(thisObj).find(":selected").attr("data-value") == "bahrain"){
      <?php foreach($listCities['bahrain'] as $eachCity){ ?>
          $(".CityCls").append('<option value="<?=$eachKey?>"><?=$eachCity?></option');
      <?php } ?>
    }else if($(thisObj).find(":selected").attr("data-value") == "jordon"){
      <?php foreach($listCities['jordon'] as $eachCity){ ?>
          $(".CityCls").append('<option value="<?=$eachKey?>"><?=$eachCity?></option');
      <?php } ?>
    }else if($(thisObj).find(":selected").attr("data-value") == "morocco"){
      <?php foreach($listCities['morocco'] as $eachCity){ ?>
          $(".CityCls").append('<option value="<?=$eachKey?>"><?=$eachCity?></option');
      <?php } ?>
    }
    
  }

</script>
@endsection