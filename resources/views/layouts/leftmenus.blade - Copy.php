 <style type="text/css">
     
     .img-container-block {
          text-align: center;
        }
        .img-container-inline {
          text-align: center;
          display: block;
        }
        #userImage{
             border-radius: 50%;
        }

 </style>
 <aside class="col-lg-3" id="sidebar">
    <div class="box_detail booking">
       
        <!-- Block parent element -->
        <div class="img-container-block">
             @if (file_exists(public_path().'/uploads/profile_images/'.\Session::get('userinfo')->user_image))
                <img id="userImage" height="200" width="200" src="{{ asset('uploads/profile_images/'.\Session::get('userinfo')->user_image) }}">
            @else
                <img height="200" width="200" src="{{ asset('frontend/img/avatar.jpg') }}">
            @endif


          <p>{{ucwords(\Session::get('userinfo')->name)}}</p>
        </div>



    </div>
    
</aside>