<div class="content_holder " style="min-height: 400px;">
    
    <p>The Bounty Scheme will be starting within 7-10 days. We will also email you when the scheme begins!</p>
    <div class="upd_block">
        <h2>This will be available as a feature soon.</h2>
    </div>
</div>
<div class="content_holder form_holder hide" style="">
    <div class="POPUP-MSG-SUCCESS"></div>
    <div class="personal_info hide <?php //echo (isset($this->session->userdata('userInfo')['socialMediaCheck']) && !empty($this->session->userdata('userInfo')['socialMediaCheck'])) ? 'hide' : ''; ?>">
        <p>Please complete your <a class="personal_info_tab2" data-toggle="modal" data-target="#socialModal">Social
                Media profile</a> to participate in the Bounty Scheme.</p>
    </div>

    <div class="personal_info greyTab" style="margin: 0px 0 30px;">
        <p>Learn more about our Bounty Program!<a class="btn-modal" href="#"> Click here</a></p>
    </div>

    <div class="bounty_tabLinks  <?php //echo (isset($this->session->userdata('userInfo')['socialMediaCheck']) && !empty($this->session->userdata('userInfo')['socialMediaCheck'])) ? '' : 'hide'; ?>">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active" style="text-transform: none;">
                <a href="#bounty_stats" aria-controls="stats" role="tab" data-toggle="tab">
                    <span class="nice_check"></span>
                    <span class="tr" key="db-li1-s">Bounty (reward) Statistics</span>
                </a>
            </li>
            <li role="presentation" style="text-transform: none;">
                <a href="#bounty_content" aria-controls="content" role="tab" data-toggle="tab">
                    <span class="nice_check"></span>
                    <span>Content</span>
                </a>
            </li>
            <li role="presentation" style="text-transform: none;">
                <a href="#bounty_local" aria-controls="localization" role="tab" data-toggle="tab">
                    <span class="nice_check"></span>
                    <span>Localization</span>
                </a>
            </li>
            <li role="presentation" style="text-transform: none;">
                <a href="#bounty_channel" aria-controls="channel" role="tab" data-toggle="tab">
                    <span class="nice_check"></span>
                    <span>Twitter/Telegram</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="tab-content inner">

        <div role="tabpanel" class="tab-pane active" id="bounty_stats">
            <h2 class="tr" key="db-h2">Your Terra Virtua Bounty (reward) Scheme Statistics</h2>
            <span class="title"
                  style="color: #a84ca2;font-weight: 600;font-size: 25px;"><?php echo (isset($stats['publish']['remainDays'])) ? $stats['publish']['remainDays'] : 0; ?></span>
            <h5 class="tr" key="db-h5">
                Days left for this Week
            </h5>
            <br>
            <div class="user_info">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="column">
                            <p><span class="tr" key="db-p1-s1">Content Created </span><span
                                        class="value"><?php echo (isset($stats['publish']['content'])) ? $stats['publish']['content'] : 0; ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="column">
                            <p><span class="tr" key="db-p2-s1">Localizations Completed </span><span
                                        class="value"><?php echo (isset($stats['publish']['localization'])) ? $stats['publish']['localization'] : 0; ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="column">
                            <p><span class="tr" key="db-p3-s1">Twitter/Telegram Posts</span> <span
                                        class="value"><?php echo (isset($stats['publish']['channel'])) ? $stats['publish']['channel'] : 0; ?></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="column">
                            <p><span class="tr" key="db-p4-s1">Weekly Points Earned </span> <span
                                        class="value"><?php echo (isset($stats['publish']['total_points'])) ? $stats['publish']['total_points'] : 0; ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="column">
                            <p><span class="tr" key="db-p5-s1">Weekly TERRA (TVT) Earned </span> <span
                                        class="value"><?php echo number_format($bounty['terraEarnedWeek'], 2, '.', ''); ?></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                        <div class="column">
                            <p><span class="tr" key="db-p6-s1">Total TERRA (TVT) Earned </span><span
                                        class="value"><?php echo number_format($bounty['terraEarned'], 2, '.', ''); ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="bounty_content">
            <div class="one_colForm">
                <form id="contentInfoForm">
                    <div class="form_holder add">
                        <h2 class="tr" key="db-h2-2">Content Information</h2>
                        <div class="MSG"></div>
                        <input type="hidden" name="activity_type" value="content"/>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="field_wrap">
                                    <div class="select_holder">
                                        <select name="content_type" name="content_type" class="content_type">
                                            <option value="" class="tr" key="db-s1-op1">Content Type</option>
                                            <option value="bitcointalk">Bitcoin Talk</option>
                                            <option value="forum">Forum</option>
                                            <option value="youtube">Youtube</option>
                                            <option value="facebook">Facebook</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="field_wrap">
                                    <input type="text" name="content_link" placeholder="Paste link here"
                                           class="form-control content_link">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="field_wrap">
                                    <label class="tr field_label" key="db-lb1">Additional Information </label>
                                    <textarea name="additional_info"
                                              placeholder="i.e. (I have added Terra Virtua to my  signature in a forum)"
                                              class="form-control additional_info"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Content save button -->
                        <input type="button" class="btn" onclick="addBounty('contentInfoForm');" value="Save" />
                    </div>
                </form>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="bounty_local">
            <div class="one_colForm">
                <form id="localizationForm">
                    <div class="form_holder add">
                        <h2 class="tr" key="db-h2-3">Localization Information</h2>
                        <div class="MSG"></div>
                        <input type="hidden" name="activity_type" value="localization"/>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="field_wrap">
                                    <div class="select_holder">
                                        <select class="translation_type" name="translation_type">
                                            <option value="" class="tr" key="db-s2-op1">Translation type</option>
                                            <option value="whitepaper">White paper</option>
                                            <option value="blog">Blog</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="field_wrap">
                                    <div class="select_holder language">
                                        <select name="language">
                                            <option value="" class="tr" key="db-s3-op1">Language</option>
                                            <option value="English">English</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="French">French</option>
                                            <option value="Korean">Korean</option>
                                            <option value="german">German</option>
                                            <option value="japanese">Japanese</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Filipino">Filipino</option>
                                            <option value="Russian">Russian</option>
                                            <option value="Vietnamese">Vietnamese</option>
                                            <option value="Thai">Thai</option>
                                            <option value="French">French</option>
                                            <option value="Turkish">Turkish</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="field_wrap">
                                    <input type="text" name="translation_link_url" placeholder="Paste link here"
                                           class="form-control translation_link_url">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="field_wrap">
                                    <label class="tr field_label" key="db-lb1">Additional Information </label>
                                    <textarea name="additional_info"
                                              placeholder="i.e. (I have added Terra Virtua to my  signature in a forum)"
                                              class="form-control additional_info"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- localization save button -->
                        <input type="button" class="btn bounty-submit" onclick="addBounty('localizationForm')"
                               value="Save">
                    </div>
                </form>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="bounty_channel">

            <h2>Twitter/Telegram Information</h2>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs choose_option channelList" role="channelList">
                        <li role="presentation" class="active channel_type" data-value="twitter"
                            style="text-transform: none">
                            <a href="#tw_form" aria-controls="tw_form" role="tab" data-toggle="tab">
                                <span class="nice_check"></span>
                                <span class="title">Twitter</span>
                            </a>
                        </li>
                        <li role="presentation" class="channel_type channelList" data-value="telegram"
                            style="text-transform: none">
                            <a href="#tlg_form" aria-controls="tlg_form" role="tab" data-toggle="tab">
                                <span class="nice_check"></span>
                                <span class="title">Telegram</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tw_form">
                            <div class="">
                                <form id="channelTwitterForm">
                                    <div class="MSG" style="text-align: center;"></div>
                                    <div class="form_holder options">

                                        <input type="hidden" name="activity_type" value="channel"/>
                                        <input type="hidden" name="channel_type" value="twitter"/>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <span class="tr label_title" key="db-sp1">Follow the Terra Virtua Twitter account</span>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <ul class="choose_option form_opt form_opt1">
                                                    <li style="padding: 0 0 0 0px;">
                                                        <label>
                                                            <input type="radio" name="twitter_follow_tv_program"
                                                                   value="1" style="z-index: 0;">
                                                            <span class="nice_check hide"></span>
                                                            <span class="tr title" key="yes"
                                                                  style="margin-left: 25px;vertical-align: bottom;">Yes</span>
                                                        </label>
                                                    </li>

                                                    <li style="padding: 0 0 0 0px;">
                                                        <label>
                                                            <input type="radio" name="twitter_follow_tv_program"
                                                                   value="0" style="z-index: 0;">
                                                            <span class="nice_check hide"></span>
                                                            <span class="tr title" key="db-lb3"
                                                                  style="margin-left: 25px;vertical-align: bottom;">No</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <span class="tr label_title" key="db-sp2">Like and retweet a post</span>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <ul class="choose_option form_opt form_opt2">
                                                    <li style="padding: 0 0 0 0px;">
                                                        <label>
                                                            <input type="radio" name="twitter_like_tweet_post" value="1"
                                                                   style="z-index: 0;">

                                                            <span class="nice_check  hide"></span>
                                                            <span class="title"
                                                                  style="margin-left: 25px;vertical-align: bottom;">Yes</span>
                                                        </label>
                                                    </li>
                                                    <li style="padding: 0 0 0 0px;">
                                                        <label>
                                                            <input type="radio" name="twitter_like_tweet_post" value="0"
                                                                   style="z-index: 0;">
                                                            <span class="nice_check hide"></span>
                                                            <span class="title"
                                                                  style="margin-left: 25px;vertical-align: bottom;">No</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <span class="tr label_title" key="db-sp3">Create a twitter post with <span
                                                            class="fw_600" style="color: #a84ca2;">#TerraVirtuaICO #terravirtua  #ICO</span></span>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <ul class="choose_option form_opt form_opt3">
                                                    <li style="padding: 0 0 0 0px;">
                                                        <label>
                                                            <input type="radio" name="twitter_new_terravirtua" value="1"
                                                                   style="z-index: 0;">
                                                            <span class="nice_check  hide"></span>
                                                            <span class="tr title"
                                                                  style="margin-left: 25px;vertical-align: bottom;" key="db-lb2">Yes</span>
                                                        </label>
                                                    </li>
                                                    <li style="padding: 0 0 0 0px;">
                                                        <label>
                                                            <input type="radio" name="twitter_new_terravirtua" value="0"
                                                                   style="z-index: 0;">
                                                            <span class="nice_check  hide"></span>
                                                            <span class="title"
                                                                  style="margin-left: 25px;vertical-align: bottom;">No</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-xs-12">
                                                <span class="tr label_title" key="db-lb1">Additional Information</span>
                                            </div>
                                            <div class="col-sm-9 col-xs-12">
                                                <textarea name="additional_info"
                                                          placeholder=" i.e. (Telegram member I have added is Bob Smith)"
                                                          class="form-control dark additional_info"></textarea>
                                            </div>
                                        </div>
                                        <div class="row btn_wrap">
                                            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                                                <!-- twitter save button -->
                                                <input type="button" class="btn" value="Save"
                                                       onclick="addBounty('channelTwitterForm')">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tlg_form">
                            <form id="channelTelegramForm">
                                <div class="MSG"></div>
                                <div class="one_colForm">
                                    <div class="form_holder add">

                                        <div class="row">
                                            <input type="hidden" name="activity_type" value="channel"/>
                                            <input type="hidden" name="channel_type" value="telegram"/>
                                            <div class="col-xs-12">
                                                <div class="field_wrap">
                                                    <div class="subs_form">
                                                        <div class="fieldHolder">
                                                            <input type="text" id="copyUrl"
                                                                   placeholder="https://t.me/TerraVirtua"
                                                                   value="https://t.me/TerraVirtua" class="form-control"
                                                                   disabled="">
                                                            <div class="msg_state">
                                                                <button type="button" class="btn purple"
                                                                        onclick="funcCopyUrl()" class="tr" key="dh-btn">Copy
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="col-xs-12">
                                                <div class="field_wrap">
                                                    <input type="text" placeholder="Name / Phone number" class="form-control">
                                                </div>
                                            </div>-->
                                            <div class="col-xs-12">
                                                <div class="field_wrap">
                                                    <label class="field_label">Refer a member to our telegram
                                                        group</label>
                                                    <input type="text" name="telegram_new_member"
                                                           placeholder="Name / Phone number"
                                                           class="form-control telegram_new_member">
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="field_wrap">
                                                    <label class="tr field_label" key="db-lb1">Additional
                                                        Information </label>
                                                    <textarea name="additional_info"
                                                              placeholder="i.e. (I have added Terra Virtua to my  signature in a forum)"
                                                              class="form-control additional_info"></textarea>
                                                </div>
                                            </div>
                                            <!-- Telegram save button -->
                                            <input type="button" class="btn" onclick="addBounty('channelTelegramForm')"
                                                   value="Save">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- modal -->
<div id="fsModal" class="modal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- dialog -->
    <div class="modal-dialog" style="width: 95%;">

        <!-- content -->
        <div class="modal-content">

            <!-- header -->

            <!-- header -->

            <!-- body -->
            <div class="modal-body">
                <p>Loading...</p>
            </div>
            <!-- body -->

            <!-- footer -->

            <!-- footer -->

        </div>
        <!-- content -->

    </div>
    <!-- dialog -->

</div>
<!-- modal -->

<!-- Modal -->
      <!--  // Modal popup form -->
    <div id="socialModal" id="btcModal" class="modal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true">
        
           <div class="modal-dialog">

        <!-- content -->
        <div class="modal-content">

            <!-- header -->

            <!-- header -->

            <!-- body -->
            <div class="modal-body">
        <div class="addForm info_form" style="padding:0 20px;">
            
            <form class="socialForm" id="socialProfile" name="socialProfile">
                <div class="MSG"></div>

                <div class="row">

                    <div class="col-sm-6 col-xs-12">
                        <div class="field_row">
                            <label>Bitcoin Talk Username*</label>
                            <input type="text" name="bitcointalk_username"
                                   value="<?php echo $userData->bitcointalk_username; ?>" placeholder="Your answer"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="field_row">
                            <label>Bitcoin Talk Profile Link*</label>
                            <input type="text" name="bitcointalk_profile_link"
                                   value="<?php echo $userData->bitcointalk_profile_link; ?>" placeholder="Your answer"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="field_row">
                            <label>Bitcoin Talk Rank</label>
                            <input type="text" name="bitcointalk_rank"
                                   value="<?php echo $userData->bitcointalk_rank; ?>" placeholder="Your answer"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="field_row">
                            <label>Telegram User Name</label>
                            <input type="text" name="telegram" value="<?php echo $userData->telegram_username; ?>"
                                   placeholder="Your answer" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="field_row">
                            <label>Twitter Account URL*</label>
                            <input type="text" name="twitter_acccount_url"
                                   value="<?php echo $userData->twitter_acccount_url; ?>" placeholder="Your answer"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="field_row">
                            <label>Twitter Audit URL</label>
                            <input type="text" name="twitter_audit_url"
                                   value="<?php echo $userData->twitter_audit_url; ?>" placeholder="Your answer"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="field_row">
                            <label>Twitter Number Of Followers</label>
                            <input type="text" name="twitter_followers"
                                   value="<?php echo $userData->twitter_followers; ?>" placeholder="Your answer"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="field_row">
                            <label>Facebook Account URL*</label>
                            <input type="text" name="facebook_account_url"
                                   value="<?php echo $userData->facebook_account_url; ?>" placeholder="Your answer"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">

                        <div class="field_row">
                            <label>Other Forum URL*</label>
                            <input type="text" name="other_forum_url" value="<?php echo $userData->other_forum_url; ?>"
                                   placeholder="Your answer" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="field_row">
                            <label>Other Social Media URL</label>
                            <input type="text" name="other_social_url"
                                   value="<?php echo $userData->other_social_url; ?>" placeholder="Your answer"
                                   class="form-control">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12">

                        <div>
                            <input tabindex="4" value="" type="checkbox" id="input-4" name="market_id"
                                   class="agreement">
                            <span class="title" style="font-size: 12px;">By joining our bounty program, you accept and agree with the <a
                                        target="_blank"
                                        href="<?php echo url('/agreement.html'); ?>">bounty terms</a></span>
                        </div>
                        <input type="submit" class="btn" value="Save">
                    </div>
                </div>
            </form>
            
            
                    </div>
        <!-- content -->

    </div>
    <!-- dialog -->

</div>
            
        </div>
    </div>


    <style>
        .bounty_tabLinks .nav-tabs {
            padding: 6px 0 35px;
        }

        .socialForm input[type="submit"] {
            margin-left: auto;
            margin-right: auto;
            align-content: center;
            display: block;
        }

    </style>
