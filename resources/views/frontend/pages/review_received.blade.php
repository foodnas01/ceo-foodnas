@extends('layouts.dashboard-template') 
@section('style')
<style type="text/css">
    #headerText {
        padding-top: 120px;
    }
</style>
@stop 
@section('content')

 
    <style type="text/css">
     .bzPMrI {
            display: inline-block;
            margin-right: 32px;
            margin-bottom: 8px;
            padding-bottom: 8px;
            cursor: pointer;
            font-weight: normal;
            position: relative;
        }


    .bzPMrI::after {
        content: "";
        display: block;
        position: absolute;
        bottom: 0px;
        left: 0px;
        width: 0px;
        height: 2px;
        opacity: 0;
        background: rgb(253, 120, 84);
    }

    .iuSSfX {
        display: inline-block;
        margin-right: 32px;
        margin-bottom: 8px;
        padding-bottom: 8px;
        cursor: default;
        font-weight: bold;
        position: relative;
    }

    .iuSSfX::after {
        content: "";
        display: block;
        position: absolute;
        bottom: 0px;
        left: 0px;
        width: 100%;
        height: 2px;
        opacity: 1;
        background: rgb(253, 120, 84);
    }

    .bykGeW {
    margin-top: 8px;
}

.bzPMrI:hover::after {
    opacity: 1;
    width: 100%;
    transition: all 0.3s ease 0s;
}
.iuSSfX:hover::after {
    opacity: 1;
    width: 100%;
    transition: all 0.3s ease 0s;
}

.fzrosB {
    position: relative;
    background: #f6f6f6 !important;
    border-radius: 4px;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(223, 226, 231);
    border-image: initial;
    padding: 16px;
    margin: 0px 8px 16px;
}

.Dashboard__Profile-Reviews .__receivedReviewsRating {
    margin-top: 8px;
    margin-bottom: 16px;
    font-size: 18px;
    display: flex;
    align-items: center;
}
.__receivedReviewsRating{
    font-weight: bold;
}

</style>

<body class="rtl" >
    <main>
        <div class="bg_color_1" style="transform: none; position: relative;">
            @include('layouts/navbar')
            <div class="container margin_80_55">
                <div class="row">
                    @include('layouts/leftmenus')
                    <div class="col-lg-9" style="margin-top: 15px;">
                        <section >
                            <!-- <h2 id="page">{{ __('My Profile') }}</h2> -->
                            <div class="col-lg-12">

                                <div class="row">
                                    <div><div class="Dashboard__Profile-Reviews"><div class="Tabs__Tab-sc-1aigri6-0 bzPMrI"  onclick="reviewAbout()">Reviews about you</div><div class="Tabs__Tab-sc-1aigri6-0 iuSSfX"  onclick="reviewBy()">Reviews by you</div><div class="Tabs__TabsPane-sc-1aigri6-1 bykGeW"><div class="DashboardContainer__Box-sc-17hrfqy-0 fzrosB"><p type="secondary" class="Text__StyledText-sc-1y7eo9o-0 hHAgex" style="font-weight: normal;">Write a review after a Eatwith experience. Reviews you've received will be visible both here and on your public profile</p>
                                        <h2 class="__receivedReviewsRating"><span class="__text">Reviews</span></h2>

                                        <div id="reviews-list"></div></div></div></div></div>

                                </div>    
                            </div>
                        </section>

                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    </main>
</body>


<script type="text/javascript">


   reviewAbout = () => {
    window.location.href="{{route('review_written')}}"
   }

   reviewBy = () => {
    window.location.href="{{route('review_received')}}"
   }
   
   



</script>






<!-- Conent Section end -->
@endsection