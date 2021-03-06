@extends('layouts.template')
@section('style')
    <style type="text/css">
        #headerText{
            /*padding-top: 85px;*/
        }
        .hybhTA {
            font-size: 17px;
            font-weight: bold;
            line-height: 18px;
            display: flex;
            margin: 8px 0px 0px;
        }
        .gKJFzR {
                color: red;
                margin-right: 0.3em;
            }
            .score{
                text-align: right;
            }
            .headerTextClass:hover, .headerTextClass:focus {
                color: black;
                text-decoration: none;
                outline: none;
            }
            .priceSpan{
                font-weight:700 !important;
            }
            .bannerimg{
                padding-top:45px !important;
            }
            h1,h3,h2,h4{
                  font-size: 0.875rem;
                  line-height: 1.6;
                  font-family: "NeoSansArabicBold", NeoSansArabic-Regular;
            }
            .h1Cls{
                font-size: 44px;
                margin-bottom: 15px;
                line-height: 1;
            }
            .bannerSpan{
                font-size:16px;
                color: black;
            }
            .circleDiv1,.circleDiv2,.circleDiv3{
                border-radius: 50%;
                height: 140px;
                width: 140px;
                border: 2px solid #FEA621;
                margin: 0 auto;
                margin-bottom: 15px;
            }
            .circleSpan{
                color: black;
            }

            .circleSpan:hover, .circleSpan:focus {
                color: black;
            }
            .bxList{
                border:0px solid #ededed !important;
            }

            .box_1{
                    text-align: right;
            }
            .div4:hover {
                top: 0px;
                transform: scale(1.07);
                transition: transform 0.4s linear 0s;
                vertical-align: top;
            }
            .div4 {
                transition: transform 1s;
            }

            .info-sec {
                text-align: center;
                height: 68%;
            }


    </style>
@stop
@section('content')
    <!-- Conent Section -->
    <main>
        <section id="grid" class="hero_single version_2">
            <div class="wrapper">
                <div class="container" id="headerText">
                    <h3>
                        {!! __('messages.BOOK_UNIQUE_EXPERIENCES') !!} <br />
                        {!! __('messages.BOOK_UNIQUE_EXPERIENCES1') !!} <br />
                    </h3>
                    <p>
                        {{ __('messages.Expolore_top_rated_tours_hotels_and_restaurants_around_the_world1') }}<br />
                        {{ __('messages.Expolore_top_rated_tours_hotels_and_restaurants_around_the_world2') }}
                    </p>
                    <form>
                        <div class="row no-gutters custom-search-input-2">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="{{ __('messages.Hotel_City') }}">
                                    <i class="icon_pin_alt"></i>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="dates" placeholder="{{ __('messages.When') }}">
                                    <i class="icon_calendar"></i>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="panel-dropdown">
                                    <a href="#">{{ __('messages.Guests') }} <span class="qtyTotal">1</span></a>
                                    <div class="panel-dropdown-content">
                                    <!-- Quantity Buttons -->
                                        <div class="qtyButtons">
                                            <label>{{ __('messages.Adults') }}</label>
                                            <input type="text" name="qtyInput" value="1">
                                        </div>
                                        <div class="qtyButtons">
                                            <label>{{ __('messages.Childrens') }}</label>
                                            <input type="text" name="qtyInput" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="submit" style="" class="btn_search search-btn-css" value="">
                            </div>
                        </div>
                            <!-- /row -->
                    </form>
                </div>
            </div>
        </section>

        <!-- /hero_single -->

        <div class="container margin_40_0 cont-padd">

        <div class="">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 div4">
                    <div class="box_grid">
                        <div class="wrapper box-setting blue-col">
                            <img src="{{asset('frontend/img/Group65.png')}}" class="align-r" />
                            <div class="h10 clearb"></div>
                            <h3 class="head"><a class="anchorCls" href="#">{!! __('messages.Dashboardgrid3') !!}</a></h3>
                            <p class="mg-btm-none">{!! __('messages.Dashboardgridtext3') !!}</p>
                        </div>
                        <figure>
                            <a href="#">
                                <img src="{{asset('frontend/img/groupgrid1.png')}}" class="img-fluid" alt="" width="800" height="533">
                            </a>
                        </figure>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 div4" >
                    <div class="box_grid">
                         <div class="wrapper box-setting yellow-col" >
                            <img src="{{asset('frontend/img/Group87.png')}}" class="align-r" />

                            <div class="h10 clearb"></div>

                            <h3 class="head"><a class="anchorCls" href="#">{!! __('messages.Dashboardgrid2') !!}</a></h3>

                            <p class="mg-btm-none">{!! __('messages.Dashboardgridtext3') !!}</p>
                        </div>

                        <figure>
                            <a href="#"><img src="{{asset('frontend/img/groupgrid2.png')}}" class="img-fluid" alt="" width="800" height="533"></a>
                        </figure>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 div4">
                    <div class="box_grid">
                        <div class="wrapper box-setting red-col">
                            <img src="{{asset('frontend/img/Group51.png')}}" class="align-r" />
                            <div class="h10 clearb"></div>
                              <h3 class="head"><a class="anchorCls" href="#">{!! __('messages.Dashboardgrid1') !!}</a></h3>
                            <p class="mg-btm-none">{!! __('messages.Dashboardgridtext1') !!}</p>
                        </div>
                        <figure>
                            <a href="tour-detbanner mb-0ail.html"><img src="{{asset('frontend/img/groupgrid3.png')}}" class="img-fluid" alt="" width="800" height="533"></a>

                        </figure>


                    </div>
                </div>

            </div>
            <!-- /row -->
            </div>
            <!-- /isotope-wrapper -->

        </div>





        <!-- /container -->

        <div class="container container-custom cont-padd">
            <section class="">
                <div class="main_title_3">
                    <span><em></em></span>
                    <h2>{!! __('messages.AllCities') !!}</h2>
                </div>
                <div class="row">
                   <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="#" class="grid_item">
                            <figure>
                                <div class="info info-sec">
                                    <h3>@lang('messages.cities.Dubai')</h3>
                                </div>
                                <img src="{{asset('frontend/img/Cities_Pictures/Dubai/foodnas-Dubai_400x270.jpg')}}" class="img-fluid" alt="">

                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="#" class="grid_item">
                            <figure>
                                <div class="info info-sec">
                                    <h3>@lang('messages.cities.Beirut')</h3>
                                </div>
                                <img src="{{asset('frontend/img/Cities_Pictures/Beirut/foodnas-Beirut_400x270.jpg')}}" class="img-fluid" alt="">

                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="#" class="grid_item">
                            <figure>
                                <div class="info info-sec">
                                    <h3>@lang('messages.cities.Amman')</h3>
                                </div>
                                <img src="{{asset('frontend/img/Cities_Pictures/Amman/foodnas-Amman_400x270.jpg')}}" class="img-fluid" alt="">

                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="hotel-detail.html" class="grid_item">
                            <figure>
                                <div class="info info-sec">
                                    <h3>@lang('messages.cities.Abu_Dhabi')</h3>
                                </div>
                                <img src="{{asset('frontend/img/Cities_Pictures/Abu_Dhabi/foodnas-abudhabi_400x270.jpg')}}" class="img-fluid" alt="">

                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /row -->
                <!-- <a href="hotels-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a> -->
            </section>
            <!-- /section -->

            <div class="container margin_15_0 cont-padd">
            <section class="">
{{--                <div class="main_title_3">--}}
{{--                    <span><em></em></span>--}}
{{--                    <h2>{!! __('messages.how_it_works') !!}</h2>--}}
{{--                </div>--}}


            <div class="banner mb-0">
                <div class="wrapper d-flex align-items-center opacity-mask">
                    <div class="col-md-12 pull-left" style="padding-left: 60px;">
                          <div class="col-md-12" style="text-align: right;">


                                <!-- <p>{!! __('messages.Adventure') !!}</p> -->
                                <h2 class="h1Cls">{!! __('messages.banner.text1') !!}<br /> {!! __('messages.banner.text2') !!} <br />
                                {!! __('messages.banner.text3') !!}
                                </h2>

                                <span class="bannerSpan">{{ __('messages.banner.para1')}}</span><br />
                                <span class="bannerSpan">{{ __('messages.banner.para2')}}</span><br />
                                <span class="bannerSpan">{{ __('messages.banner.para3')}}</span><br />


                                <div>
                                     <a href="adventure.html" style="margin-top: 20px;width: 220px;margin-left: 20px;" class="btn_1"><span style="    font-size: 20px;">العمل كمضيف
</span></a>
                                </div>







    </div>
                    </div>
                </div>
                <!-- /wrapper -->
            </div>
            <!-- /banner -->
        </section>
    </div>


   <div class="container margin_15_0 cont-padd bannerimg">
            <section class="">
                <div class="main_title_3">
                    <span><em></em></span>
                    <h2>{!! __('messages.how_it_works') !!}</h2>
                </div>



 <div class="bg_color_1">
            <div class="container margin_40_0">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list bxList">
                            <div class="circleDiv1"></div>
                            <h4>{!! __('messages.circleImages.imgLebel1') !!}</h4>

                            <span class="circleSpan">{!! __('messages.circleImages.imgText11') !!}</span><br />
                            <span class="circleSpan">{!! __('messages.circleImages.imgText12') !!}</span><br />

                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list bxList">
                            <div class="circleDiv2"></div>
                            <h4>{!! __('messages.circleImages.imgLebel2') !!}</h4>
                            <span class="circleSpan">{!! __('messages.circleImages.imgText21') !!}</span><br />
                            <span class="circleSpan">{!! __('messages.circleImages.imgText22') !!}</span><br />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list bxList">
                            <div class="circleDiv3"></div>
                            <h4>{!! __('messages.circleImages.imgLebel3') !!}</h4>
                             <span class="circleSpan">{!! __('messages.circleImages.imgText31') !!}</span><br />
                            <span class="circleSpan">{!! __('messages.circleImages.imgText32') !!}</span><br />
                        </a>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    </section>
</div>




            <div class="container margin_15_0 cont-padd bannerimg">
            <section class="">
{{--                <div class="main_title_3">--}}
{{--                    <span><em></em></span>--}}
{{--                    <h2>{!! __('messages.AllCities') !!}</h2>--}}
{{--                </div>--}}


        <div class="">
            <div class="row">




                    <div class="col-xl-4 col-lg-6 col-md-6 div4">

                    <div class="box_grid">

                        <figure>
                            <a href="#"><img src="{{asset('frontend/img/FoodItems/img1-400-267.jpg')}}" class="img-fluid" alt="" width="800" height="533"></a>

                            <div style="position:absolute;right:10px;bottom:20px;">
                                    <img src="{{asset('frontend/img/avatar.jpg')}}" style="height: 50px;width: 50px; border-radius: 50%;">
                            </div>



                        </figure>

                        <div class="wrapper" style="text-align: right;">
                            <h3><a class="headerTextClass" href="#">Tour Eiffel</a></h3>
                            <p>{!! __('messages.fooditems.text1') !!}
                                <br />
                                {!! __('messages.fooditems.text4') !!}
                            </p>
                            <span class="price priceSpan">From <strong>$65</strong> /per person</span>
                        </div>
                        <ul style="padding-bottom: 40px;">
                            <li style="float: right;">
                                <svg class="bi bi-clock" width="1em" style="margin-top: -3px;" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm8-7A8 8 0 110 8a8 8 0 0116 0z" clip-rule="evenodd"></path>
                                  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 01.5.5v5.21l3.248 1.856a.5.5 0 01-.496.868l-3.5-2A.5.5 0 017 9V3.5a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                                </svg>
                                 1h 30min</li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>


                    </div>
                </div>






                <div class="col-xl-4 col-lg-6 col-md-6 div4">

                    <div class="box_grid">

                        <figure>
                            <a href="#"><img src="{{asset('frontend/img/FoodItems/img3-400-267.jpg')}}" class="img-fluid" alt="" width="800" height="533"></a>

                            <div style="position:absolute;right:10px;bottom:20px;">
                                    <img src="{{asset('frontend/img/avatar.jpg')}}" style="height: 50px;width: 50px; border-radius: 50%;">
                            </div>



                        </figure>

                        <div class="wrapper" style="text-align: right;">
                            <h3><a class="headerTextClass"  href="#">Arc Triomphe</a></h3>

                            <p>{!! __('messages.fooditems.text1') !!}
                                <br />
                                {!! __('messages.fooditems.text4') !!}
                            </p>
                            <span class="price priceSpan">From <strong>$65</strong> /per person</span>
                        </div>


<!--
                         <div class="wrapper" style="color:black;text-align: right;padding-right: :15px;">
                              <h3 style="text-align: right;color: black;padding-top: 10px;"><a class=""  style="color:red;" href="#">Fish Fusion</a></h3>



                           <p style="margin-bottom:0px;">
                                {!! __('messages.fooditems.text1') !!}
                                <br />
                                {!! __('messages.fooditems.text4') !!}
                            </p>


                            <span style="color: red;font-size: 14px;font-weight: bold;" class="EventCard__CardColoredText-qmsapq-3 gKJFzR">{!! __('messages.Dinner') !!}</span> <span style="font-size: 14px;font-weight: bold;">{!! __('messages.inTel') !!}</span><br />

                              <span class="EventCard__CardSubTitle-qmsapq-2 hybhTA"><span color="orange" class="EventCard__CardColoredText-qmsapq-3 gKJFzR">{!! __('messages.AuthenticItalian') !!}</span>


                        </div> -->

                        <ul style="padding-bottom: 40px;">
                            <li style="float: right;">
                            <svg class="bi bi-clock" width="1em" style="margin-top: -3px;" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm8-7A8 8 0 110 8a8 8 0 0116 0z" clip-rule="evenodd"></path>
                                  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 01.5.5v5.21l3.248 1.856a.5.5 0 01-.496.868l-3.5-2A.5.5 0 017 9V3.5a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                                </svg>

                             1h 30min</li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>

                       <!--  <div style="width: 100%;height: 45px;background-color: #FF9900;color: white;text-transform:uppercase;text-align: center;">
                            <span style="line-height: 45px;">Request To Book</span>
                        </div> -->


                    </div>
                </div>


                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6 div4">

                    <div class="box_grid">

                        <figure>
                            <a href="#">
                                <img src="{{asset('frontend/img/FoodItems/img2-400-267.jpg')}}" class="img-fluid" alt="" width="800" height="533">


                            </a>

                            <div style="position:absolute;right:10px;bottom:20px;">
                                    <img src="{{asset('frontend/img/avatar.jpg')}}" style="height: 50px;width: 50px; border-radius: 50%;">
                            </div>


                        </figure>

                        <div class="wrapper" style="text-align: right;">
                              <h3><a class="headerTextClass"  href="#">Notredam</a></h3>

                            <p>{!! __('messages.fooditems.text1') !!}
                                <br />
                                {!! __('messages.fooditems.text4') !!}
                            </p>
                            <span class="price priceSpan">From <strong>$65</strong> /per person</span>
                        </div>



                         <!--  <div class="wrapper" style="color:black;text-align: right;padding-right: :15px;">
                              <h3 style="text-align: right;color: black;padding-top: 10px;"><a class="" style="color:red;" href="#">Barista Workshop</a></h3>
                            <p style="margin-bottom:0px;">
                                {!! __('messages.fooditems.text1') !!}
                                <br />
                                {!! __('messages.fooditems.text4') !!}
                            </p>


                            <span style="color: red;font-size: 14px;font-weight: bold;" class="EventCard__CardColoredText-qmsapq-3 gKJFzR">{!! __('messages.Dinner') !!}</span> <span style="font-size: 14px;font-weight: bold;">{!! __('messages.inTel') !!}</span><br />

                              <span class="EventCard__CardSubTitle-qmsapq-2 hybhTA"><span color="orange" class="EventCard__CardColoredText-qmsapq-3 gKJFzR">{!! __('messages.AuthenticItalian') !!}</span>


                        </div> -->



                        <ul style="padding-bottom: 40px;">
                            <li style="float: right;">
                                <svg class="bi bi-clock" width="1em" style="margin-top: -3px;" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm8-7A8 8 0 110 8a8 8 0 0116 0z" clip-rule="evenodd"></path>
                                  <path fill-rule="evenodd" d="M7.5 3a.5.5 0 01.5.5v5.21l3.248 1.856a.5.5 0 01-.496.868l-3.5-2A.5.5 0 017 9V3.5a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
                                </svg>
                             1h 30min</li>
                            <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
                        </ul>
                    <!--     <div style="width: 100%;height: 45px;background-color: #ff0000;color: white;text-transform:uppercase;text-align: center;">
                            <span style="line-height: 45px;">Request To Book</span>
                        </div> -->

                    </div>
                </div>

            </div>
            <!-- /row -->
            </div>
            <!-- /isotope-wrapper -->
        </section>

        </div>

{{--            <section class="add_bottom_45">--}}
{{--                <div class="main_title_3">--}}
{{--                    <span><em></em></span>--}}
{{--                    <h2>Popular Restaurants</h2>--}}
{{--                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-3 col-lg-6 col-md-6">--}}
{{--                        <a href="restaurant-detail.html" class="grid_item">--}}
{{--                            <figure>--}}
{{--                                <div class="score"><strong>8.5</strong></div>--}}
{{--                                <img src="{{asset('frontend/img/restaurant_1.jpg')}}" class="img-fluid" alt="">--}}
{{--                                <div class="info">--}}
{{--                                    <h3>Da Alfredo</h3>--}}
{{--                                </div>--}}
{{--                            </figure>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- /grid_item -->--}}
{{--                    <div class="col-xl-3 col-lg-6 col-md-6">--}}
{{--                        <a href="restaurant-detail.html" class="grid_item">--}}
{{--                            <figure>--}}
{{--                                <div class="score"><strong>7.9</strong></div>--}}
{{--                                <img src="{{asset('frontend/img/restaurant_2.jpg')}}" class="img-fluid" alt="">--}}
{{--                                <div class="info">--}}
{{--                                    <h3>Slow Food</h3>--}}
{{--                                </div>--}}
{{--                            </figure>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- /grid_item -->--}}
{{--                    <div class="col-xl-3 col-lg-6 col-md-6">--}}
{{--                        <a href="restaurant-detail.html" class="grid_item">--}}
{{--                            <figure>--}}
{{--                                <div class="score"><strong>7.5</strong></div>--}}
{{--                                <img src="{{asset('frontend/img/restaurant_3.jpg')}}" class="img-fluid" alt="">--}}
{{--                                <div class="info">--}}
{{--                                    <h3>Bella Napoli</h3>--}}
{{--                                </div>--}}
{{--                            </figure>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- /grid_item -->--}}
{{--                    <div class="col-xl-3 col-lg-6 col-md-6">--}}
{{--                        <a href="restaurant-detail.html" class="grid_item">--}}
{{--                            <figure>--}}
{{--                                <div class="score"><strong>9.0</strong></div>--}}
{{--                                <img src="{{asset('frontend/img/restaurant_4.jpg')}}" class="img-fluid" alt="">--}}
{{--                                <div class="info">--}}
{{--                                    <h3>Marcus</h3>--}}
{{--                                </div>--}}
{{--                            </figure>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- /grid_item -->--}}
{{--                </div>--}}
{{--                <!-- /row -->--}}
{{--                <!-- <a href="restaurants-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a> -->--}}
{{--            </section>--}}
            <!-- /section -->



        </div>
        <!-- /container -->

{{--        <div class="bg_color_1">--}}
{{--            <div class="container margin_80_55">--}}
{{--                <div class="main_title_2">--}}
{{--                    <span><em></em></span>--}}
{{--                    <h3>News and Events</h3>--}}
{{--                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <a class="box_news" href="#0">--}}
{{--                            <figure><img src="{{asset('frontend/img/news_home_1.jpg')}}" alt="">--}}
{{--                                <figcaption><strong>28</strong>Dec</figcaption>--}}
{{--                            </figure>--}}
{{--                            <ul>--}}
{{--                                <li>Mark Twain</li>--}}
{{--                                <li>20.11.2017</li>--}}
{{--                            </ul>--}}
{{--                            <h4>Pri oportere scribentur eu</h4>--}}
{{--                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- /box_news -->--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <a class="box_news" href="#0">--}}
{{--                            <figure><img src="{{asset('frontend/img/news_home_2.jpg')}}" alt="">--}}
{{--                                <figcaption><strong>28</strong>Dec</figcaption>--}}
{{--                            </figure>--}}
{{--                            <ul>--}}
{{--                                <li>Jhon Doe</li>--}}
{{--                                <li>20.11.2017</li>--}}
{{--                            </ul>--}}
{{--                            <h4>Duo eius postea suscipit ad</h4>--}}
{{--                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- /box_news -->--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <a class="box_news" href="#0">--}}
{{--                            <figure><img src="{{asset('frontend/img/news_home_3.jpg')}}" alt="">--}}
{{--                                <figcaption><strong>28</strong>Dec</figcaption>--}}
{{--                            </figure>--}}
{{--                            <ul>--}}
{{--                                <li>Luca Robinson</li>--}}
{{--                                <li>20.11.2017</li>--}}
{{--                            </ul>--}}
{{--                            <h4>Elitr mandamus cu has</h4>--}}
{{--                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- /box_news -->--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <a class="box_news" href="#0">--}}
{{--                            <figure><img src="{{asset('frontend/img/news_home_4.jpg')}}" alt="">--}}
{{--                                <figcaption><strong>28</strong>Dec</figcaption>--}}
{{--                            </figure>--}}
{{--                            <ul>--}}
{{--                                <li>Paula Rodrigez</li>--}}
{{--                                <li>20.11.2017</li>--}}
{{--                            </ul>--}}
{{--                            <h4>Id est adhuc ignota delenit</h4>--}}
{{--                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- /box_news -->--}}
{{--                </div>--}}
{{--                <!-- /row -->--}}
{{--                <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>--}}
{{--            </div>--}}
{{--            <!-- /container -->--}}
{{--        </div>--}}
        <!-- /bg_color_1 -->

        <div class="call_section mtop30">
            <div class="container clearfix">
                <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                    <div class="block-reveal">
                        <div class="block-vertical"></div>
                        <div class="box_1">
                            <h3>{{ __('messages.EnjoyTrail')}}</h3>
                            <p>{{ __('messages.LoremIpsam')}}</p>
                            <a href="#0" class="btn_1 rounded">{{ __('messages.ReadMore')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/call_section-->
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.toast.css') }}" />
     <script src="{{ asset('frontend/js/jquery.toast.js') }}"></script>
    <script type="text/javascript">


        <?php
            if(Session::has('status')){ ?>
                $.toast({
                    heading: "{{ __('Success') }}",
                    text: '<?php echo Session::get('status'); ?>',
                    showHideTransition: 'slide',
                    position: 'top-center',
                    icon: 'success'
                })
            <?php Session::forget('status');}?>

         <?php
            if(Session::has('warning')){ ?>

                $.toast({
                    heading: "{{ __('Warning') }}",
                    text: '<?php echo Session::get('warning'); ?>',
                    showHideTransition: 'slide',
                    position: 'top-center',
                    icon: 'warning'
                })


            <?php Session::forget('status');

             }
         ?>


    </script>

    <!-- Conent Section end -->
@endsection

@section('script')


@stop
