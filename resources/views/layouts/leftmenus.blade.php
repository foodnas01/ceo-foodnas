 <style type="text/css">
     
     .img-container-block {
          text-align: center;
        }
        .img-container-inline {
          text-align: center;
          display: block;
        }
        img{
             border-radius: 50%;
        }

 </style>
 <aside class="col-lg-3" id="sidebar">
    <div class="box_detail booking">
        <!-- <div class="price">
            <span>45$ <small>person</small></span>
            <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="dates" placeholder="When..">
            <i class="icon_calendar"></i>
        </div>
        <div class="panel-dropdown">
            <a href="#">Guests <span class="qtyTotal">1</span></a>
            <div class="panel-dropdown-content right">
                <div class="qtyButtons">
                    <label>Adults</label>
                    <input type="text" name="qtyInput" value="1">
                </div>
                <div class="qtyButtons">
                    <label>Childrens</label>
                    <input type="text" name="qtyInput" value="0">
                </div>
            </div>
        </div>
        <a href="cart-1.html" class="btn_1 full-width purchase">Purchase</a>
        <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a>
        <div class="text-center"><small>No money charged in this step</small></div> -->

        <!-- Block parent element -->
        <div class="img-container-block">
             @if (file_exists(public_path().'/uploads/profile_images/'.\Session::get('userinfo')->user_image))
                <img height="200" width="200" src="{{ asset('uploads/profile_images/'.\Session::get('userinfo')->user_image) }}">
            @else
                <img height="200" width="200" src="{{ asset('frontend/img/avatar.jpg') }}">
            @endif


          <p>{{ucwords(\Session::get('userinfo')->name)}}</p>
        </div>



    </div>
    <!-- <ul class="share-buttons">
        <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
        <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
        <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
    </ul> -->
</aside>