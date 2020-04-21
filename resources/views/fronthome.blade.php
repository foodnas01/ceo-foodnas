@extends('layouts.dashboard-template')
@section('style')
    <style type="text/css">

        #headerText{
            padding-top: 120px;
        }

    </style>
@stop
@section('content')

<body class="rtl">
    <main>
        
        <section class="hero_in general">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>
                    Dashboard Page
                    </h1>
                </div>
            </div>
        </section>
   

        <div class="bg_color_1" style="transform: none; position: relative;">
            @include('layouts/navbar')
            <div class="container margin_60_35">
                <div class="row">
                     @include('layouts/leftmenus')
                    <div class="col-lg-8" id="dynamicContent">
                        <section id="description">
                            <h2>My Profile</h2>
                            <p>Per consequat adolescens ex, cu nibh commune <strong>temporibus vim</strong>, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                            <p>Cum et probo menandri. Officiis consulatu pro et, ne sea sale invidunt, sed ut sint <strong>blandit</strong> efficiendi. Atomorum explicari eu qui, est enim quaerendum te. Quo harum viris id. Per ne quando dolore evertitur, pro ad cibo commune.</p>
                            <h3>Instagram photos feed</h3>
                            <div id="instagram-feed" class="clearfix"></div>
                            <hr>

                            <h3>Program <small>(60 minutes)</small></h3>
                            <p>
                                Iudico omnesque vis at, ius an laboramus adversarium. An eirmod doctus admodum est, vero numquam et mel, an duo modo error. No affert timeam mea, legimus ceteros his in. Aperiri honestatis sit at. Eos aeque fuisset ei, case denique eam ne. Augue invidunt has ad, ullum debitis mea ei, ne aliquip dignissim nec.
                            </p>
                            <ul class="cbp_tmtimeline">
                                <li>
                                    <time class="cbp_tmtime" datetime="09:30"><span>30 min.</span><span>09:30</span>
                                    </time>
                                    <div class="cbp_tmicon">
                                        1
                                    </div>
                                    <div class="cbp_tmlabel">
                                        <div class="hidden-xs">
                                            <img src="img/tour_plan_1.jpg" alt="" class="rounded-circle thumb_visit">
                                        </div>
                                        <h4>Interior of the cathedral</h4>
                                        <p>
                                            Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu. Ius diam vivendo ne.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <time class="cbp_tmtime" datetime="11:30"><span>2 hours</span><span>11:30</span>
                                    </time>
                                    <div class="cbp_tmicon">
                                        2
                                    </div>
                                    <div class="cbp_tmlabel">
                                        <div class="hidden-xs">
                                            <img src="img/tour_plan_2.jpg" alt="" class="rounded-circle thumb_visit">
                                        </div>
                                        <h4>Statue of Saint Reparata</h4>
                                        <p>
                                            Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu. Ius diam vivendo ne.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <time class="cbp_tmtime" datetime="13:30"><span>1 hour</span><span>13:30</span>
                                    </time>
                                    <div class="cbp_tmicon">
                                        3
                                    </div>
                                    <div class="cbp_tmlabel">
                                        <div class="hidden-xs">
                                            <img src="img/tour_plan_3.jpg" alt="" class="rounded-circle thumb_visit">
                                        </div>
                                        <h4>Huge clock decorated</h4>
                                        <p>
                                            Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu. Ius diam vivendo ne.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <time class="cbp_tmtime" datetime="14:30"><span>2 hours</span><span>14:30</span>
                                    </time>
                                    <div class="cbp_tmicon">
                                        4
                                    </div>
                                    <div class="cbp_tmlabel">
                                        <div class="hidden-xs">
                                            <img src="img/tour_plan_4.jpg" alt="" class="rounded-circle thumb_visit">
                                        </div>
                                        <h4>Vasari's fresco</h4>
                                        <p>
                                            Vero consequat cotidieque ad eam. Ea duis errem qui, impedit blandit sed eu. Ius diam vivendo ne.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <hr>
                            <p>Mea appareat omittantur eloquentiam ad, nam ei quas <strong>oportere democritum</strong>. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="bullets">
                                        <li>Dolorem mediocritatem</li>
                                        <li>Mea appareat</li>
                                        <li>Prima causae</li>
                                        <li>Singulis indoctum</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="bullets">
                                        <li>Timeam inimicus</li>
                                        <li>Oportere democritum</li>
                                        <li>Cetero inermis</li>
                                        <li>Pertinacia eum</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->
                            
                            <hr>  
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
    
    navbarLink = (thisValue) => {
        $.ajax({
          url: "{{ url('/pages/') }}"+"/"+thisValue,
          method: 'get',  
          success: function(result){
             $("#dynamicContent").html(result);
          }});
    }
</script>

        <!-- Conent Section end -->
@endsection

