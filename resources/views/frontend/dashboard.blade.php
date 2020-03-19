@extends('layouts.template')
@section('style')
    <style type="text/css">

        #headerText{
            padding-top: 85px;
        }

    </style>
@stop
@section('content')
    <!-- Conent Section -->


    <main>
        <section class="hero_single version_2">
            <div class="wrapper">
                <div class="col-lg-8" id="headerText">
                    <h3> {!! __('messages.BOOK_UNIQUE_EXPERIENCES') !!} <br />
                         {!! __('messages.BOOK_UNIQUE_EXPERIENCES1') !!} <br />
                      </h3>

                    <p>{{ __('messages.Expolore_top_rated_tours_hotels_and_restaurants_around_the_world1') }}<br />
                    {{ __('messages.Expolore_top_rated_tours_hotels_and_restaurants_around_the_world2') }}</p>

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
                              <!--   <img src = "{{ asset('frontend/img/Group132.png')}}" /> -->
                                <input type="submit" style="background: url(../frontend/img/Group132.png) center center no-repeat;background-color: red;margin-bottom: -6px;" class="btn_search" value="">
                            </div>
                        </div>
                        <!-- /row -->
                    </form>
                </div>
            </div>
        </section>
        <!-- /hero_single -->

        <div class="container margin_60_35">
            
        <div class="wrapper-grid">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid">

                        <div class="wrapper" style="background-color:#A366FF;color:white;text-align: center;">
                            <img src="{{asset('frontend/img/Group65.png')}}" style="float: right;" />
                            <div style="height: 10px;"></div>
                            <h3 style="margin-top:60px;text-align: center;"><a class="anchorCls" href="#">{!! __('messages.Dashboardgrid3') !!}</a></h3>
                            <p>{!! __('messages.Dashboardgridtext3') !!}</p>
                           
                        </div>
                        <figure>

                            <a href="tour-detail.html">
                                <img src="{{asset('frontend/img/groupgrid1.png')}}" class="img-fluid" alt="" width="800" height="533">
                            </a>
                            
                        </figure>
                        
                       
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid">

                         <div class="wrapper" style="background-color:#FF9900;color:white;text-align: center;">
                            <img src="{{asset('frontend/img/Group87.png')}}" style="float: right;" />
                            <div style="height: 10px;"></div>
                              <h3 style="margin-top:60px;text-align: center;"><a class="anchorCls" href="#">{!! __('messages.Dashboardgrid2') !!}</a></h3>
                            <p>{!! __('messages.Dashboardgridtext2') !!}</p>
                          
                        </div>


                        <figure>
                            <a href="tour-detail.html"><img src="{{asset('frontend/img/groupgrid2.png')}}" class="img-fluid" alt="" width="800" height="533"></a>
                            
                        </figure>
                    </div>
                </div>
                <!-- /box_grid -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box_grid">
                        <div class="wrapper" style="background-color:#FF0000;color:white;text-align: center;">
                            <img src="{{asset('frontend/img/Group51.png')}}" style="float: right;" />
                            <div style="height: 10px;"></div>
                              <h3 style="margin-top:60px;text-align: center;"><a class="anchorCls" href="#">{!! __('messages.Dashboardgrid1') !!}</a></h3>
                            <p>{!! __('messages.Dashboardgridtext1') !!}</p>
                        </div>
                        <figure>
                            <a href="tour-detail.html"><img src="{{asset('frontend/img/groupgrid3.png')}}" class="img-fluid" alt="" width="800" height="533"></a>
                            
                        </figure>
                        
                      
                    </div>
                </div>

            </div>
            <!-- /row -->
            </div>
            <!-- /isotope-wrapper -->
                        
        </div>


        
        <!-- /container -->

        <div class="container container-custom margin_30_95">
            <section class="add_bottom_45">
                <div class="main_title_3">
                    <span><em></em></span>
                    <h2>Popular Hotels and Accommodations</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="hotel-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>8.9</strong></div>
                                <img src="{{asset('frontend/img/hotel_1.jpg')}}" class="img-fluid" alt="">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Mariott Hotel</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="hotel-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>7.9</strong></div>
                                <img src="{{asset('frontend/img/hotel_2.jpg')}}" class="img-fluid" alt="">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Concorde Hotel </h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="hotel-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>7.0</strong></div>
                                <img src="{{asset('frontend/img/hotel_3.jpg')}}" class="img-fluid" alt="">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Louvre Hotel</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="hotel-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>8.9</strong></div>
                                <img src="{{asset('frontend/img/hotel_4.jpg')}}" class="img-fluid" alt="">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Park Yatt Hotel</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /row -->
                <a href="hotels-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
            </section>
            <!-- /section -->

            <section class="add_bottom_45">
                <div class="main_title_3">
                    <span><em></em></span>
                    <h2>Popular Restaurants</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="restaurant-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>8.5</strong></div>
                                <img src="{{asset('frontend/img/restaurant_1.jpg')}}" class="img-fluid" alt="">
                                <div class="info">
                                    <h3>Da Alfredo</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="restaurant-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>7.9</strong></div>
                                <img src="{{asset('frontend/img/restaurant_2.jpg')}}" class="img-fluid" alt="">
                                <div class="info">
                                    <h3>Slow Food</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="restaurant-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>7.5</strong></div>
                                <img src="{{asset('frontend/img/restaurant_3.jpg')}}" class="img-fluid" alt="">
                                <div class="info">
                                    <h3>Bella Napoli</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="restaurant-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>9.0</strong></div>
                                <img src="{{asset('frontend/img/restaurant_4.jpg')}}" class="img-fluid" alt="">
                                <div class="info">
                                    <h3>Marcus</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /row -->
                <a href="restaurants-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
            </section>
            <!-- /section -->

            <div class="banner mb-0">
                <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
                    <div>
                        <small>Adventure</small>
                        <h3>Your Perfect<br>Advenure Experience</h3>
                        <p>Activities and accommodations</p>
                        <a href="adventure.html" class="btn_1">Read more</a>
                    </div>
                </div>
                <!-- /wrapper -->
            </div>
            <!-- /banner -->

        </div>
        <!-- /container -->

        <div class="bg_color_1">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h3>News and Events</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="{{asset('frontend/img/news_home_1.jpg')}}" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Mark Twain</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Pri oportere scribentur eu</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="{{asset('frontend/img/news_home_2.jpg')}}" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Jhon Doe</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Duo eius postea suscipit ad</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="{{asset('frontend/img/news_home_3.jpg')}}" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Luca Robinson</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Elitr mandamus cu has</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                    <div class="col-lg-6">
                        <a class="box_news" href="#0">
                            <figure><img src="{{asset('frontend/img/news_home_4.jpg')}}" alt="">
                                <figcaption><strong>28</strong>Dec</figcaption>
                            </figure>
                            <ul>
                                <li>Paula Rodrigez</li>
                                <li>20.11.2017</li>
                            </ul>
                            <h4>Id est adhuc ignota delenit</h4>
                            <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                        </a>
                    </div>
                    <!-- /box_news -->
                </div>
                <!-- /row -->
                <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->

        <div class="call_section">
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

    <!-- Conent Section end -->
@endsection

@section('script')


@stop
