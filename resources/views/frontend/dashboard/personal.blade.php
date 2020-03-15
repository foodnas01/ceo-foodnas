<div class="content_holder">
    <form class="userProfile" name="userProfile" autocomplete="off" >
        <div class="form_holder add">
            <h2 class="tr" key="di-h2">Account Information</h2>
            <div class="MSG"></div>
            <div class="row">
                <div class="col-sm-6 col-xs-12 column">
                    <div class="field_wrap">
                        <input type="text" name="firstname" id="firstname" value="<?php echo $userData->firstname; ?>"
                               placeholder="First Name" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 column">
                    <div class="field_wrap">
                        <input type="text" name="lastname" value="<?php echo $userData->lastname; ?>"
                               placeholder="Last Name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12 column">
                    <div class="field_wrap">
                                <input type="text" name="date_of_birth"
         value="<?php if($userData->date_of_birth != '-0001-11-30' && $userData->date_of_birth != '1970-01-01' &&  $userData->date_of_birth != '0000-00-00' && $userData->date_of_birth != '0000-00-00 00:00:00'){ echo $userData->date_of_birth; } ?>"
                               placeholder="Date Of Birth" class="form-control datepicker" readonly>
                    </div>
                </div>

                <script>
                    $('.datepicker').datepicker({
                        format: 'yyyy-mm-dd'
                    })
                </script>

                <div class="col-sm-6 col-xs-12 column">
                    <div class="field_wrap">
                        <input type="tel" name="phone" value="<?php echo $userData->phone; ?>" placeholder="Phone"
                               class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12 column">
                    <div class="field_wrap">
                        <input type="text" name="company" value="<?php echo $userData->company; ?>"
                               placeholder="Company" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 column hide">
                    <div class="field_wrap">
                        <div class="select_holder">
                            <select name="lang">
                                <option value="">Language</option>
                                <option <?php echo ($userData->lang == 'English') ? 'selected' : '' ?> value="English">
                                    English
                                </option>
                                <option <?php echo ($userData->lang == 'Arabic') ? 'selected' : '' ?> value="Arabic">
                                    Arabic
                                </option>
                                <option <?php echo ($userData->lang == 'French') ? 'selected' : '' ?> value="French">
                                    French
                                </option>
                                <option <?php echo ($userData->lang == 'Korean') ? 'selected' : '' ?> value="Korean">
                                    Korean
                                </option>
                                <option <?php echo ($userData->lang == 'German') ? 'selected' : '' ?> value="Korean">
                                    German
                                </option>
                                <option <?php echo ($userData->lang == 'Japanese') ? 'selected' : '' ?> value="Korean">
                                    Japanese
                                </option>

                                <option <?php echo ($userData->lang == 'Indonesia') ? 'selected' : '' ?>
                                        value="Indonesia">Indonesia
                                </option>
                                <option <?php echo ($userData->lang == 'Filipino') ? 'selected' : '' ?>value="Filipino">
                                    Filipino
                                </option>
                                <option <?php echo ($userData->lang == 'Russian') ? 'selected' : '' ?> value="Russian">
                                    Russian
                                </option>
                                <option <?php echo ($userData->lang == 'Vietnamese') ? 'selected' : '' ?>
                                        value="Vietnamese">Vietnamese
                                </option>
                                <option <?php echo ($userData->lang == 'Thai') ? 'selected' : '' ?> value="Thai">Thai
                                </option>
                                <option <?php echo ($userData->lang == 'French') ? 'selected' : '' ?> value="French">
                                    French
                                </option>
                                <option <?php echo ($userData->lang == 'Turkish') ? 'selected' : '' ?> value="Turkish">
                                    Turkish
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="seprator"></span>
        <div class="form_holder add">
            <h2>Physical Address</h2>
            <div class="row">
                <div class="col-sm-6 col-xs-12 column">
                    <div class="field_wrap">
                        <?php if (isset($kyc_content['address']) && $kyc_approve['address'] == 1) { ?>
                            <input type="text" name="address" value="<?php echo $kyc_content['address']; ?>"
                                   placeholder="Address" class="form-control" readonly>
                        <?php } else { ?>
                            <input type="text" name="address" value="<?php echo $userData->address; ?>"
                                   placeholder="Address" class="form-control">
                        <?php } ?>

                    </div>
                </div>

                <div class="col-sm-6 col-xs-12 column">
                    <div class="field_wrap">
                        <?php if (isset($kyc_content['zip']) && $kyc_approve['address'] == 1) { ?>
                            <input type="text" name="zipcode" value="<?php echo $kyc_content['zip']; ?>"
                                   placeholder="Zip" class="form-control" readonly>
                        <?php } else { ?>
                            <input type="text" name="zipcode" value="<?php echo $userData->zipcode; ?>"
                                   placeholder="Zip/PO Box/Postcode" class="form-control">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6 col-xs-12 column">
                    <div class="field_wrap">
                        <?php if (isset($kyc_content['city']) && $kyc_approve['address'] == 1) { ?>
                            <input type="text" name="city" value="<?php echo $kyc_content['city']; ?>"
                                   placeholder="City" class="form-control" readonly>
                        <?php } else { ?>
                            <input type="text" name="city" value="<?php echo $userData->city; ?>" placeholder="City"
                                   class="form-control">
                        <?php } ?>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12 column">
                    <div class="field_wrap">
                        <div class="select_holder">

                            <?php if (isset($kyc_content['country']) && $kyc_approve['address'] == 1) { ?>
                                <input type="text" name="country" value="<?php echo $kyc_content['country']; ?>"
                                       placeholder="Zip" class="form-control" readonly>
                            <?php } else { ?>
                                <select name="country" class="change_country">
                                    <option value="">Select Country</option>
                                    <?php foreach ($countryData as $countryRow) { ?>
                                        <option <?php echo ($countryRow->nicename == $userData->country) ? 'selected' : ''; ?>
                                                value="<?php echo $countryRow->nicename; ?>"> <?php echo $countryRow->nicename; ?> </option>
                                    <?php } ?>

                                </select>
                            <?php } ?>

                        </div>
                    </div>
                </div>


                <div class="col-sm-4 col-xs-12 column state_dev hide <?php //echo ( $userData->country == 'US' ) ? '': 'hide'; ?>">
                    <div class="field_wrap">
                        <div class="select_holder">
                            <select name="state">
                                <option value="">Select State</option>
                                <?php foreach ($stateData as $stateRow) { ?>
                                    <option <?php echo ($stateRow->state_code == $userData->state) ? 'selected' : ''; ?>
                                            value="<?php echo $stateRow->state_code; ?>"> <?php echo $stateRow->state; ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <span class="seprator"></span>
            <div class="form_holder add">
                <h2>Social Media Bounty</h2>
                <div class="row">

                    <div class="col-sm-6 col-xs-12 column">
                        <div class="field_wrap">
                            <input type="text" placeholder="Bitcoin Talk Username*" name="bitcointalk_username"
                                   value="<?php echo $userData->bitcointalk_username; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 column">
                        <div class="field_wrap">
                            <input type="text" placeholder="Bitcoin Talk Profile Link*" name="bitcointalk_profile_link"
                                   value="<?php echo $userData->bitcointalk_profile_link; ?>" class="form-control">
                        </div>
                    </div>

                </div>


                <div class="row">

                    <div class="col-sm-6 col-xs-12 column">
                        <div class="field_wrap">
                            <input type="text" placeholder="Bitcoin Talk Rank" name="bitcointalk_rank"
                                   value="<?php echo $userData->bitcointalk_rank; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 column">
                        <div class="field_wrap">
                            <input type="text" placeholder="Telegram User Name" name="telegram"
                                   value="<?php echo $userData->telegram_username; ?>" class="form-control">
                        </div>
                    </div>

                </div>


                <div class="row">

                    <div class="col-sm-6 col-xs-12 column">
                        <div class="field_wrap">
                            <input type="text" placeholder="Twitter Account URL*" name="twitter_acccount_url"
                                   value="<?php echo $userData->twitter_acccount_url; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 column">
                        <div class="field_wrap">
                            <input type="text" placeholder="Twitter Audit URL" name="twitter_audit_url"
                                   value="<?php echo $userData->twitter_audit_url; ?>" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-6 col-xs-12 column">
                        <div class="field_wrap">
                            <input type="text" placeholder="Twitter Number Of Followers" name="twitter_followers"
                                   value="<?php echo !empty($userData->twitter_followers) ? $userData->twitter_followers:''; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 column">
                        <div class="field_wrap">
                            <input type="text" placeholder="Facebook Account URL*" name="facebook_account_url"
                                   value="<?php echo $userData->facebook_account_url; ?>" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-6 col-xs-12 column">
                        <div class="field_wrap">
                            <input type="text" placeholder="Other Forum URL*" name="other_forum_url"
                                   value="<?php echo $userData->other_forum_url; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12 column">
                        <div class="field_wrap">
                            <input type="text" placeholder="Other Social Media URL" name="other_social_url"
                                   value="<?php echo $userData->other_social_url; ?>" class="form-control">
                        </div>
                    </div>

                </div>
                <!--<div class="row">
											<div class="col-xs-12">
												<div class="checkLabel">
													<input type="checkbox" value="1" class="personal_agreement">
													<span class="checkbox"></span>
													<span class="title">By joining our bounty program, you accept and agree with the <a target="_blank" href="<?php //echo base_url('/agreement.html'); ?>">bounty terms</a></span>
												</div>
											</div>
										</div>-->
                <div class="btn_center">
                    <input type="submit" class="btn" value="Save">
                </div>

            </div>
       </div>
    </form>
</div>