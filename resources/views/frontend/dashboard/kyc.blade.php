<div class="content_holder">
    <?php if ($userData->kyc_status == 'pending') { ?>
    <div id='kycpending'>
        <div class="userTab">
            <div class="personal_info redTab">
                <p>KYC (Know Your Customer) Incomplete</p>
            </div>
            <?php if (isset($kyc_content['address']) && $kyc_content['address'] != '') { ?>
            <p>Please see the email from support and resubmit the documents/Info requested.</p>
            <?php } else { ?>
            <p>
            <p><span class="tr" key="dk-p4-sp1">To participate in the Terra Virtua ICO you need to complete a simple KYC process. </span><br>
                <span class="tr fw_700 fc_red" key="dk-p4-sp2">Note:</span><span class="tr" key="dk-p4-sp3"> Personal info must be completed</span>
            </p>
            <?php } ?>

            <form class="kycProfile" name="kycProfile" id="kycProfile" method="post"
                  enctype="multipart/form-data" autocomplete="off">
                <div class="MSG" id="kyc_MSG"></div>
                <div class="form_holder">
                    <?php if ( isset($userData->firstname) && empty($userData->firstname) ) { ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="field_wrap">
                                <input type="text" id="firstname" name="firstname"
                                       placeholder="First Name" class="form-control"
                                       value="<?php echo $userData->firstname; ?>">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if ( isset($userData->lastname) && empty($userData->lastname) ) { ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="field_wrap">
                                <input type="text" id="lastname" name="lastname"
                                       placeholder="Last Name" class="form-control"
                                       value="<?php echo $userData->lastname; ?>">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="field_wrap">
                                <?php if (isset($kyc_content['address']) && $kyc_approve['address'] == 1) { ?>
                                <input type="text" id="kyc_address" name="kyc_address"
                                       placeholder="Full Address " class="form-control"
                                       value="<?php echo $kyc_content['address']; ?>" readonly>
                                <span class="alert_label">Approved</span>
                                <?php } elseif (isset($kyc_content['address']) && $kyc_approve['address'] == -1) { ?>
                                <input type="text" id="kyc_address" name="kyc_address"
                                       placeholder="Full Address" class="form-control"
                                       value="<?php echo $kyc_content['address']; ?>">
                                <span class="alert_label reject">Rejected</span>
                                <?php } else { ?>
                                <input type="text" id="kyc_address" name="kyc_address"
                                       value="<?php echo $userData->address; ?>" placeholder="Full Address"
                                       class="form-control">
                                <?php } ?>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="field_wrap">
                                <?php if (isset($kyc_content['zip']) && isset($kyc_content['address']) && $kyc_approve['address'] == 1) { ?>
                                <input type="text" id="kyc_zip" name="kyc_zip"
                                       placeholder="Zip/PO Box/Postcode" class="form-control"
                                       value="<?php echo $kyc_content['zip']; ?>" readonly>
                                <?php } elseif (isset($kyc_content['zip']) && isset($kyc_content['address']) && $kyc_approve['address'] == -1) { ?>
                                <input type="text" id="kyc_zip" name="kyc_zip"
                                       placeholder="Zip/PO Box/Postcode" class="form-control"
                                       value="<?php echo $kyc_content['zip']; ?>">
                                <?php } else { ?>
                                <input type="text" id="kyc_zip" name="kyc_zip"
                                       value="<?php echo $userData->zipcode; ?>"
                                       placeholder="Zip/PO Box/Postcode" class="form-control">
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <div class="field_wrap">
                                <?php if (isset($kyc_content['city']) && isset($kyc_content['address']) && $kyc_approve['address'] == 1) { ?>

                                <input type="text" id="kyc_city" name="kyc_city" placeholder="City "
                                       class="form-control" value="<?php echo $kyc_content['city']; ?>"
                                       readonly>
                                <?php } elseif (isset($kyc_content['city']) && isset($kyc_content['address']) && $kyc_approve['address'] == -1) { ?>

                                <input type="text" id="kyc_city" name="kyc_city" placeholder="City"
                                       class="form-control" value="<?php echo $kyc_content['city']; ?>">
                                <?php } else { ?>

                                <input type="text" id="kyc_city" name="kyc_city"
                                       value="<?php echo $userData->city; ?>" placeholder="City"
                                       class="form-control">
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-sm-4 col-xs-12">
                            <div class="field_wrap">
                                <?php if (isset($kyc_content['country']) && isset($kyc_content['address']) && $kyc_approve['address'] == 1) { ?>

                                <input type="text" id="kyc_country" name="kyc_country" placeholder="Country"
                                       class="form-control" value="<?php echo $kyc_content['country']; ?>"
                                       readonly>
                                <?php } elseif (isset($kyc_content['country']) && isset($kyc_content['address']) && $kyc_approve['address'] == -1) { ?>
                                <div class="select_holder">
                                    <select id="kyc_country" name="kyc_country" class="change_country">
                                        <option value="">Select Country</option>
                                        <?php foreach ($countryData as $countryRow) { ?>
                                        <option
                                            <?php echo ($countryRow->nicename == $kyc_content['country']) ? 'selected' : ''; ?>
                                            value="<?php echo $countryRow->nicename ?>"> <?php echo $countryRow->nicename; ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            <!-- <input type="text" id="kyc_country" name="kyc_country" placeholder="Country" class="form-control" value ="<?php echo $kyc_content['country']; ?>" >   -->
                                <?php } else { ?>
                                <div class="select_holder">
                                    <select id="kyc_country" name="kyc_country" class="change_country">
                                        <option value="">Select Country</option>
                                        <?php foreach ($countryData as $countryRow) { ?>
                                        <option
                                            <?php echo ($countryRow->nicename == $userData->country) ? 'selected' : ''; ?>
                                            value="<?php echo $countryRow->nicename ?>"> <?php echo $countryRow->nicename; ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <!-- <input type="text" id="kyc_country" name="kyc_country" placeholder="Country" class="form-control"> -->
                                <?php } ?>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="field_wrap">
                                <?php if (isset($kyc_content['eth_address']) && $kyc_approve['eth_address'] == 1) { ?>
                                <input type="text" id="kyc_eth_address" name="kyc_eth_address"
                                       placeholder="Ethereum Address" class="form-control"
                                       value="<?php echo $kyc_content['eth_address']; ?>" readonly>
                                <span class="alert_label">Approved</span>
                                <?php } elseif (isset($kyc_content['eth_address']) && $kyc_approve['eth_address'] == -1) { ?>
                                <input type="text" id="kyc_eth_address" name="kyc_eth_address"
                                       placeholder="Ethereum Address" class="form-control"
                                       value="<?php echo $kyc_content['eth_address']; ?>">
                                <span class="alert_label reject">Rejected</span>
                                <?php } else { ?>
                                <input type="text" id="kyc_eth_address" name="kyc_eth_address"
                                       placeholder="Ethereum Address" class="form-control">
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="field_wrap">
                                <?php if (isset($kyc_content['btc_address']) && $kyc_approve['btc_address'] == 1) { ?>
                                <input type="text" id="kyc_bitcoin_address" name="kyc_bitcoin_address"
                                       placeholder="Bitcoin Address" class="form-control"
                                       value="<?php echo $kyc_content['btc_address']; ?>" readonly>
                                <span class="alert_label">Approved</span>
                                <?php } elseif (isset($kyc_content['btc_address']) && $kyc_approve['btc_address'] == -1) { ?>
                                <input type="text" id="kyc_bitcoin_address" name="kyc_bitcoin_address"
                                       placeholder="Bitcoin Address" class="form-control"
                                       value="<?php echo $kyc_content['btc_address']; ?>">
                                <span class="alert_label reject">Rejected</span>
                                <?php } else { ?>
                                <input type="text" id="kyc_bitcoin_address" name="kyc_bitcoin_address"
                                       placeholder="Bitcoin Address" class="form-control">
                                <?php } ?>
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="file_container field_wrap">

                                <?php if (isset($kyc_content['photo']) && $kyc_approve['photo'] == 1) { ?>
                                <?php $kyc_photo = explode("_", $kyc_content['photo']); ?>
                                <div class="title_field"
                                     id="kyc_photo_name"><?php echo $kyc_content['photo'];// $kyc_photo['1']; ?></div>
                                <span class="alert_label">Approved</span>
                                <div class="btn_field">
                                    <div class="file_select">
                                        <input type="hidden" id="kyc_photo_link" name="kyc_photo_link"
                                               value="<?php echo $kyc_content['photo'] ?>"
                                               class="form-control" readonly>

                                    </div>
                                </div>
                                <?php } elseif (isset($kyc_content['photo']) && $kyc_approve['photo'] == -1) { ?>
                                <div class="title_field" id="kyc_photo_name">Official ID including your photograph (i.e.
                                    driving license, passport)
                                </div>
                                <div class="btn_field">
														<span id="Photo_file"><span style="font-size:11px;"> jpg , png allowed | max size: 1 MB</span>
														<span class="tag">Rejected</span> 
                                                        </span>
                                    <div class="file_select">
                                        <input type="hidden" id="kyc_photo_link" name="kyc_photo_link"
                                               value="" class="form-control" readonly>
                                        <input type="file" id="kyc_photo" name="kyc_photo" class="inputfile"
                                               onchange="file_load('Photo_file')">
                                        <label for="kyc_photo">Upload</label>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="title_field" id="kyc_photo_name">Official ID including your photograph (i.e.
                                    driving license, passport)
                                </div>
                                <div class="btn_field">
														<span id="Photo_file"><span style="font-size:11px;"> jpg , png allowed | max size: 1 MB</span>
														<span class="tag">Missing</span> 
                                                        </span>
                                    <div class="file_select">
                                        <input type="hidden" id="kyc_photo_link" name="kyc_photo_link"
                                               value="" class="form-control" readonly>
                                        <input type="file" id="kyc_photo" name="kyc_photo" class="inputfile"
                                               onchange="file_load('Photo_file')">
                                        <label for="kyc_photo">Upload</label>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="field_wrap">
                                <p><span class="tr" key="dk-p3-sp1"> If you plan to contribute more than </span>
                                    <span class="tr fc_purple fw_600"
                                          key="dk-p3-sp2">USD 4000</span>, <span class="tr" key="dk-p3-sp3">you need to submit further information to complete our enhanced KYC.</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <span class="border"></span>
                        </div>


                        <div class="col-xs-12">
                            <div class="fields_frame">

                                <?php if (isset($kyc_content['contribute']) && $kyc_content['contribute'] == 1) { ?>
                                <label style="float: left;">
                                    <div class="checkLabel align-left checked">
                                        <input type="checkbox" id="kyc_checkbox" name="kyc_checkbox"
                                               onclick="kycformhide();" checked>
                                        <span class="checkbox"></span>
                                        <span class="tr title"
                                              key="dk-lb-sp2">Yes I plan to contribute more than $4,000</span>
                                    </div>
                                </label>
                                <input type="hidden" id="contribute" name="contribute"
                                       value="<?php echo $kyc_content['contribute'] ?>">

                                <?php } else { ?>

                                <label style="float: left;">
                                    <div class="checkLabel align-left">
                                        <input type="checkbox" id="kyc_checkbo" name="kyc_checkbox"
                                               onclick="kycformhide();">
                                        <span class="checkbox"></span>
                                        <span class="tr title"
                                              key="dk-lb-sp2">Yes I plan to contribute more than $4,000</span>
                                    </div>
                                </label>
                                <input type="hidden" id="contribute" name="contribute" value="0">

                                <?php } ?>

                            </div>
                        </div>

                    </div>


                    <div id="kyc_hide_form"
                         <?php if (isset($kyc_content['contribute']) && $kyc_content['contribute'] == 1) { ?>
                         class=""
                         <?php } else { ?>
                         class="hide"
                    <?php } ?> >
                        <div class="col-xs-12">
                            <span class="border"></span>
                        </div>


                        <div class="col-xs-12 hide">
                            <div class="field_wrap">
                                <p>If you plan to contribute more than <span class="tr fc_purple fw_600"
                                                                             key="dk-p3-sp2">USD 4000</span>,
                                    please submit the information below to complete the enhanced KYC.</p>
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="file_container field_wrap">
                                <?php if (isset($kyc_content['identification']) && $kyc_approve['identification'] == 1) { ?>

                                <?php $kyc_identification = explode("_", $kyc_content['identification']); ?>
                                <div class="title_field"
                                     id="kyc_nic_name"><?php echo $kyc_content['identification']; //$kyc_identification['1'] ?></div>
                                <span class="alert_label">Approved</span>
                                <div class="btn_field">
                                    <div class="file_select">
                                        <input type="hidden" id="kyc_nic_link" name="kyc_nic_link"
                                               value="<?php echo $kyc_content['identification'] ?>"
                                               class="form-control" readonly>

                                    </div>
                                </div>

                                <?php } elseif (isset($kyc_content['identification']) && $kyc_approve['identification'] == -1) { ?>
                                <div class="title_field" id="kyc_nic_name">National Identity Card OR
                                    Passport ID (Front Side)
                                </div>
                                <div class="btn_field">
														<span id="nic_file"><span style="font-size:11px;"> jpg , png allowed | max size: 1 MB</span>
                                                            <?php if (isset($kyc_content['contribute']) && $kyc_content['contribute'] == 1) { ?>
                                                            <span class="tag">Rejected</span>
                                                            <?php } else { ?>
                                                            <span class="tag">Missing</span>
                                                            <?php } ?>
                                                        </span>
                                    <div class="file_select">
                                        <input type="hidden" id="kyc_nic_link" name="kyc_nic_link"
                                               value="" class="form-control" readonly>
                                        <input type="file" id="kyc_nic" name="kyc_nic" class="inputfile"
                                               onchange="file_load('nic_file')">
                                        <label for="kyc_nic">Upload</label>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="title_field" id="kyc_nic_name">National Identity Card OR
                                    Passport ID (Front Side)
                                </div>
                                <div class="btn_field">
														<span id="nic_file"><span style="font-size:11px;"> jpg , png allowed | max size: 1 MB</span>
														<span class="tag">Missing</span> 
                                                        </span>
                                    <div class="file_select">
                                        <input type="hidden" id="kyc_nic_link" name="kyc_nic_link"
                                               value="" class="form-control" readonly>
                                        <input type="file" id="kyc_nic" name="kyc_nic" class="inputfile"
                                               onchange="file_load('nic_file')">
                                        <label for="kyc_nic">Upload</label>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>


                        <div class="col-xs-12">
                            <div class="file_container field_wrap">
                                <?php if (isset($kyc_content['bill_address']) && $kyc_approve['bill_address'] == 1) { ?>
                                <?php $kyc_bill_address = explode("_", $kyc_content['bill_address']); ?>
                                <div class="title_field"
                                     id="kyc_bill_name"><?php echo $kyc_content['bill_address']; // $kyc_bill_address['1'] ?></div>
                                <span class="alert_label">Approved</span>
                                <div class="btn_field">
                                    <div class="file_select">
                                        <input type="hidden" id="kyc_bill_link" name="kyc_bill_link"
                                               value="<?php echo $kyc_content['bill_address'] ?>"
                                               class="form-control" readonly>
                                    </div>
                                </div>
                                <?php } elseif (isset($kyc_content['bill_address']) && $kyc_approve['bill_address'] == -1) { ?>
                                <div class="title_field" id="kyc_bill_name">Utility Bill (Back Side)
                                </div>
                                <div class="btn_field">
														<span id="bill_file"><span style="font-size:11px;"> jpg , png allowed | max size: 1 MB</span>
                                                            <?php if (isset($kyc_content['contribute']) && $kyc_content['contribute'] == 1) { ?>
                                                            <span class="tag">Rejected</span>
                                                            <?php } else { ?>
                                                            <span class="tag">Missing</span>
                                                            <?php } ?>
                                                        </span>
                                    <div class="file_select">
                                        <input type="hidden" id="kyc_bill_link" name="kyc_bill_link"
                                               value="" class="form-control" readonly>
                                        <input type="file" id="kyc_bill" name="kyc_bill"
                                               class="inputfile" onchange="file_load('bill_file')">
                                        <label for="kyc_bill">Upload</label>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="title_field" id="kyc_bill_name">Utility Bill (Back Side)
                                </div>
                                <div class="btn_field">
														<span id="bill_file"><span style="font-size:11px;"> jpg , png allowed | max size: 1 MB</span>
														<span class="tag">Missing</span> 
                                                        </span>
                                    <div class="file_select">
                                        <input type="hidden" id="kyc_bill_link" name="kyc_bill_link"
                                               value="" class="form-control" readonly>
                                        <input type="file" id="kyc_bill" name="kyc_bill"
                                               class="inputfile" onchange="file_load('bill_file')">
                                        <label for="kyc_bill">Upload</label>
                                    </div>
                                </div>

                                <?php } ?>
                            </div>
                        </div>
                        {{----}}
                        <div class="col-sm-6 col-xs-12">
                            <div class="field_wrap">
                                <?php if (isset($kyc_content['phone']) && $kyc_approve['phone'] == 1) { ?>
                                <input type="text" id="kyc_phone" name="kyc_phone" placeholder="Phone Number"
                                       class="form-control" value="<?php echo $kyc_content['phone']; ?>"
                                       readonly>
                                        <span class="alert_label">Approved</span>
                                <?php
                                } elseif (isset($kyc_content['phone']) && $kyc_approve['phone'] == -1) { ?>

                                <input type="text" id="kyc_phone" name="kyc_phone" placeholder="Phone Number"
                                       class="form-control" value="<?php echo $kyc_content['phone']; ?>">
                                         <span class="alert_label reject">Rejected</span>
                                <?php
                                } else { ?>

                                <input type="text" id="kyc_phone" name="kyc_phone"
                                       value="" placeholder="Phone Number"
                                       class="form-control">
                                <?php
                                } ?>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="field_wrap">
                                <?php if (isset($kyc_content['income_source']) && $kyc_approve['income_source'] == 1) { ?>
                                <input type="text" id="kyc_income_source" name="kyc_income_source"
                                       placeholder="Income Source"
                                       class="form-control" value="<?php echo $kyc_content['income_source']; ?>"
                                       readonly>
                                <span class="alert_label">Approved</span>
                                <?php
                                } elseif (isset($kyc_content['income_source']) && $kyc_approve['income_source'] == -1) { ?>
                                <div class="select_holder">
                                    <select id="kyc_income_source" name="kyc_income_source" class="change_country">
                                        <option value="">Select Income Source</option>
                                        <?php foreach ($incomeSourceData as $incomeSourceRow) { ?>
                                        <option
                                            <?php echo ($incomeSourceRow->source == $kyc_content['income_source']) ? 'selected' : ''; ?>
                                            value="<?php echo $incomeSourceRow->source ?>"> <?php echo $incomeSourceRow->source; ?> </option>
                                        <?php
                                        } ?>
                                    </select>
                                      {{--<span class="alert_label reject">Rejecteds</span>--}}
                                </div>
                                    <span class="alert_label reject">Rejected</span>

                                <?php
                                } else { ?>
                                <div class="select_holder">
                                    <select id="kyc_income_source" name="kyc_income_source" class="change_country">
                                        <option value="">Select Income Source</option>
                                        <?php foreach ($incomeSourceData as $incomeSourceRow) { ?>
                                        <option 
                                      <?php if (isset($kyc_content['income_source']) && !empty($kyc_content['income_source'])){
                                                if($incomeSourceRow->source == $kyc_content['income_source']){
                                                    echo 'selected';
                                                }
                                                else
                                                {
                                                    echo '';   
                                                }    
                                            }
                                        ?> 
                                        value="<?php echo $incomeSourceRow->source ?>"> <?php echo $incomeSourceRow->source; ?> </option>
                                        <?php
                                        } ?>
                                    </select>
                                </div>

                                <!-- <input type="text" id="kyc_country" name="kyc_country" placeholder="Country" class="form-control"> -->
                                <?php
                                } ?>
                            </div>
                        </div>
                        {{----}}
                    </div>


                    <div class="fields_frame">
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" id="kycBtn" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <?php } elseif ($userData->kyc_status == 'inprocess') { ?>
    <div class="processTab">
        <div class="personal_info yellowTab">
            <p class="tr" key="dk-p1"> KYC (Know Your Customer) In Process</p>
        </div>
        <p><span class="tr" key="dk-p2-sp">Your KYC application is currently being verified. If you have any queries please email </span><a
                    href="mailto:KYC@terravirtua.io">KYC@terravirtua.io</a></p>
    </div>

    <?php } elseif ($userData->kyc_status == 'approved') { ?>
    <div class="approveTab">
        <div class="personal_info greenTab">
            <p class="tr" key="dk-p-app">KYC (Know Your Customer) Approved</p>
        </div>
        <p><span class="tr" key="dk-pn-s1">Congratulations, you are now </span><b class="tr"
                                                                                  key="dk-pn-b">APPROVED</b><span
                    class="tr" key="dk-pn-s2"> to participate in the Terra Virtua ICO!</span></p>
    </div>
   @if($appSetting['kyc_sale'] == 1)
    <div class="buyTerra" style="background:#f4f3ed;height: 100px;min-height: 50px;" id="step2">
        <div class="content_holder">
            <div class="btn_infoWrap">
                <a href="#dashboard" aria-controls="documents" role="tab" data-toggle="tab"
                   class="tr btn default_btn dashboardClickHere"
                   onclick="$('#step2').addClass('hide');$('#step3').removeClass('hide');" key="dh-a2">Buy
                    Terra</a>
            </div>
        </div>
    </div>
   @endif
    <?php } ?>
</div>