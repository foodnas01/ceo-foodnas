@extends('layouts.main')
@section('style')
    <style type="text/css">

    </style>
@stop
@section('content')
    <!-- Conent Section -->
    <main id="main" class="add">
        <div class="content_holder"> <!--style="margin-bottom: 25px;"-->
            <div class="inHolder">
                <div class="tabLinks" id='mainTab'>
							<span class="mb_profile_icon">
								<img src='<?php echo asset("assets/images/info_icon_mobile.png"); ?>'
                                     alt="icon" class="img-responsive">
							</span>
                    <div class="tabLinks_holder">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active dashboard_li">
                                <a href="#dashboard" aria-controls="dashboard" role="tab" data-toggle="tab">
                                    <div class="icon_holder">
                                        <img src='<?php echo asset("assets/images/dashboard_icon_disable.png"); ?>'
                                             alt="icon" class="disable_icon">
                                        <img src='<?php echo asset("assets/images/dashboard_icon_active.png"); ?>'
                                             alt="icon" class="active_icon">
                                    </div>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#affiliate" aria-controls="affiliate" role="tab" data-toggle="tab">
                                    <div class="icon_holder">
                                        <img src='<?php echo asset("assets/images/affiliate_icon_disable.png"); ?>'
                                             alt="icon" class="disable_icon">
                                        <img src='<?php echo asset("assets/images/affiliate_icon_active.png"); ?>'
                                             alt="icon" class="active_icon">
                                    </div>
                                    <span>Bounty Program</span>
                                </a>
                            </li>
                            <li role="presentation" class="kyc_li">
                                <a href="#documents" aria-controls="documents" role="tab" data-toggle="tab">
                                    <?php if ($userData->kyc_status == 'pending') { ?>
                                    <div class="icon_holder">
                                        <img src='<?php echo asset("assets/images/document_icon_disable.png"); ?>'
                                             alt="icon" class="disable_icon">
                                        <img src='<?php echo asset("assets/images/document_icon_red.png"); ?>'
                                             alt="icon" class="active_icon">
                                    </div>
                                    <span>KYC</span>
                                    <?php } elseif ($userData->kyc_status == 'inprocess') { ?>
                                    <div class="icon_holder">
                                        <img src='<?php echo asset("assets/images/document_icon_disable.png"); ?>'
                                             alt="icon" class="disable_icon">
                                        <img src='<?php echo asset("assets/images/document_icon_yellow.png"); ?>'
                                             alt="icon" class="active_icon">
                                    </div>
                                    <span>KYC</span>
                                    <?php } elseif ($userData->kyc_status == 'approved') { ?>
                                    <div class="icon_holder">
                                        <img src='<?php echo asset("assets/images/document_icon_disable.png"); ?>'
                                             alt="icon" class="disable_icon">
                                        <img src='<?php echo asset("assets/images/document_icon_green.png"); ?>'
                                             alt="icon" class="active_icon">
                                    </div>
                                    <span>KYC</span>

                                    <?php } ?>


                                </a>
                            </li>
                            <li role="presentation">
                                <a id="prs_info" href="#info" aria-controls="info" role="tab" data-toggle="tab">
                                    <div class="icon_holder">
                                        <img src='<?php echo asset("assets/images/info_icon_disable.png"); ?>'
                                             alt="icon" class="disable_icon">
                                        <img src='<?php echo asset("assets/images/info_icon_active.png"); ?>'
                                             alt="icon" class="active_icon">
                                    </div>
                                    <span class="tr">Personal Info</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#login-password" aria-controls="password" role="tab" data-toggle="tab">
                                    <div class="icon_holder">
                                        <img src='<?php echo asset("assets/images/login_icon_disable.png"); ?>'
                                             alt="icon" class="disable_icon">
                                        <img src='<?php echo asset("assets/images/login_icon_active.png"); ?>'
                                             alt="icon" class="active_icon">
                                    </div>
                                    <span class="tr" key="d-lia-sp">Login and password</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('logout'); ?>">
                                    <div class="icon_holder">
                                        <img src='<?php echo asset("assets/images/logout_icon_disable.png"); ?>'
                                             alt="icon" class="disable_icon">
                                        <img src='<?php echo asset("assets/images/logout_icon_active.png"); ?>'
                                             alt="icon" class="active_icon">
                                    </div>
                                    <span class="tr" key="d-li-sp">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <!-- Tab panes -->
        <div class="dashboard_tabs">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="dashboard">
                    @include('frontend.dashboard.home')
                </div>

                <div class="tab-pane fade" id="affiliate">
                    @include('frontend.dashboard.bounty')
                </div>
                <div class="tab-pane fade" id="documents">
<?php
$ip = \CommonHelper::get_client_ip();
$userLocation = \CommonHelper::getVisitorLocation($ip);
$region_array = explode(',', $appSetting['blocked_countries']);
if (in_array($userLocation['geoplugin_countryCode'], $region_array)) { ?>
<?php if ($userLocation['geoplugin_countryName'] == 'United States') {
    $geoCountryName = 'The ' . $userLocation['geoplugin_countryName'];
} else {
    $geoCountryName = $userLocation['geoplugin_countryName'];
}
?>
    <div class="content_holder">
        <div class="content_holder">            
            <p style="font-size: 25px;margin: 30px;">The Terra Virtua token sale is not available to contributors from your region at this time.</p>
            <p style="font-size: 25px;margin: 30px;"> Thank you for your interest! </p>
        </div>
    </div>
<?php 
} else { ?>
  @include('frontend.dashboard.kyc')
 <?php } ?>

                </div>
                <div class="tab-pane fade" id="info">
                    @include('frontend.dashboard.personal')

                </div>
                <div class="tab-pane fade" id="login-password">
                    @include('frontend.dashboard.password')

                </div>
            </div>
        </div>
    </main>
    <!-- Conent Section end -->
@endsection

@section('script')

@include('frontend.dashboard.home_js')
@include('frontend.dashboard.bounty_js')
@include('frontend.dashboard.kyc_js')
@include('frontend.dashboard.personal_js')
@include('frontend.dashboard.password_js')

@stop
