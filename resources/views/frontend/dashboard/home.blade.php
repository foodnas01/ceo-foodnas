<div class="content_holder hide">
    <div class="personal_info">
        <p>Please, fill out additional personal <a class="personal_info_tab" href="#info" aria-controls="info"
                                                   role="tab" data-toggle="tab">contact details.</a></p>
    </div>
</div>
<div class="content_holder hide">
    <div class="sm_contentHolder">
        <div class="infoHead" style="font-size: 30px;">
            <p class="fw_500"
               style="font-size: 36px; font-family:adam; font-weight:700; letter-spacing:1px; color:#a84ca2; ">
                Congratulations! </p>
            <p class="fw_500" style="font-size: 16px;  line-height:32px; letter-spacing:2px; ">You have successfully
                registered for the Terra Virtua PRE-ICO. You are now qualified for the 50% bonus. We will contact you
                early next week for identity confirmation and will provide details on how to make your contribution.</p>
        </div>
    </div>
</div>

<div class="section_infodb">

    <h2 style="font-family: roundo;font-weight: 600;" class="hide">Referal
        code: {{$userData->referal_code}}</h2>

    <?php if ($userData->kyc_status != 'approved') { ?>
        <div class="db_step1" style="min-height: 500px;">
            <div class="content_holder">
                <div class="personal_info greenTab2" style="background: #57bd57;">
                    <p><span class="tr" key="dh-ps1">To participate in this ICO you will need to be KYC listed, Please  </span><a
                                href="#documents" aria-controls="documents" role="tab" data-toggle="tab"
                                class="tr fw_600 homeClickHere" key="dh-pa1">click here and complete this
                            process.</a></p>
                </div>

                <div class="total_earn">
                    <ul class="list-unstyled earnList">
                        <li>
                            <span class="tr title">Bounty TERRA Earned</span>
                            <span class="number">{{number_format($bounty['terraEarned'], 2, '.', '')}}</span>
                        </li>
                        <li>
                            <span class="tr title" key="dh-li2">Air Drop TERRA Earned</span>
                            <span class="number">{{number_format($userData->terra_airdrop, 2, '.', '')}}</span>
                        </li>
                        <li>
                            <span class="tr title" key="dh-li3">Promo TERRA Earned</span>
                            <span class="number">{{number_format($userData->terra_promo, 2, '.', '')}} </span>
                        </li>

                        <li>
                            <span class="tr title" key="dh-li4">Referral TERRA Earned</span>
                            <span class="number">{{number_format($referral["terraEarned"], 2, '.', '')}} </span>
                        </li>

                        <li>
                            <span class="tr title" key="dh-li5">TERRA Purchased</span>
                            <span class="number">{{number_format($ethTrans["terraEarned"], 2, '.', '')}} </span>
                        </li>
                        <li class="total">
                            <span class="tr title" key="dh-li6">Total TERRA (TVA) Owned</span>
                            @php $total_terra = $bounty['terraEarned'] + $userData->terra_airdrop + $referral["terraEarned"] + $userData->terra_promo + $ethTrans['terraEarned'] @endphp 
                            <span class="number">{{number_format($total_terra, 2, '.', '')}}</span>
                        </li>
                    </ul>
                </div>
               
                @if(!empty($telegram_username))
                 <div class="db_step3" style="min-height: 250px;">
                <div class="shareLink">
                   <div id='copyBotMGS'></div>
                <h2>Get 5 TERRA Free For Inviting Friends</h2>
                <p>Share your Telegram link with friends and earn 5 TERRA for each verified signup!</p>
             
                    <div class="subs_form">
                    
                        <div class="fieldHolder">
                            <input id="userBotLink" name="userBotLink" style="font-size: 15px;font-weight: 700;" value="https://t.me/terravirtuadrop_bot?start={{$telegram_username}}"  placeholder="https://t.me/terravirtuadrop_bot?start={{$telegram_username}} " class="form-control" type="text" readonly>
                                <div class="msg_state">									
                                        <button id="btn_copy_bot" data-clipboard-target="#userBotLink" key="copy" class="btn purple">Copy</button>
                                </div>
                        </div>
                    </div>
                </div>
              </div>
               @endif
                
                
                
            </div>
        </div>
        <?php
    } ?>
    
    
  @if ($userData->kyc_status == 'approved')  
    @if($appSetting['kyc_sale'] == 1)
        <div class="db_step2">            
            <div class="buyTerra" style="background:#f4f3ed;height: 100px;min-height: 50px;" id="step2">
                <div class="content_holder">
                    
                    <div class="btn_infoWrap">
                        <a class="tr btn default_btn"
                           onclick="$('#step2').addClass('hide');$('#step3').removeClass('hide');" key="dh-a2">Buy
                            Terra</a>
                    </div>
                </div>
            </div>
      
            <div class="str_section hide" id="step3">
                <div class="content_holder">
                    <div class="tabLinks_holder">
                        <ul class="nav nav-tabs" role="transactionlist">
                            <li role="presentation">
                                <a href="#trs_btc" aria-controls="BTC" role="tab" data-toggle="tab">
                                    <div class="icon_holder">
                                        <img src="images/bitcoin_greyIcon.png" alt="icon" class="disable_icon">
                                        <img src="images/bitcoin_activeIcon.png" alt="icon" class="active_icon">
                                    </div>
                                    <span class="tr title" key="dh-li7-s">Transaction in BTC</span>
                                </a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="#trs_eth" aria-controls="ETH" role="tab" data-toggle="tab">
                                    <div class="icon_holder">
                                        <img src="images/eth_greyIcon.png" alt="icon" class="disable_icon">
                                        <img src="images/eth_activeIcon.png" alt="icon" class="active_icon">
                                    </div>
                                    <span class="tr title" key="dh-li8-s">Transaction in ETH</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                      <div id="copyMGS"></div>
                        <div role="tabpanel" class="tab-pane fade" id="trs_btc">
                            <div class="subs_form">
                                <p style="text-align: left;"><b>Step 1: </b><span class="tr" key="dh-p4">To purchase tokens please send your BTC to our address below</span></p>
                                <div class="fieldHolder">
                                    <input type="text" id="buserWalletAddress" name="buserWalletAddress"
                                           value="{{ $appSetting['btc_wallet_address'] }}"
                                           placeholder="Enter Your ETH Wallet..." class="form-control" readonly
                                           style="font-size: 15px;font-weight: 700;">
                                    <div class="msg_state">
                                        <button id="copyBtcClipboard_btn" name="copyBtcClipboard_btn" class="tr btn purple"
                                         data-clipboard-target="#buserWalletAddress"
                                                 key="copy">Copy
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p class="tr notice hide" key="dh-p3">Please do not send funds from an exchange!</p>
                            <form class="btctxid_from" name="btctxid_from" id="btctxid_from">
                             <div class="MSG"></div>
                               <div class="subs_form">
                                <p style="margin: 10px 0px;text-align: left; "><b>Step 2: </b>Provide us your wallet address which you are sending from</p>
                                <p class="tr notice">Please do not send funds from an exchange!</p>
                                </p>
                                    <div class="fieldHolder" style="padding: 0 0 0 0;">
                                            <input type="text" id="btc_wallet_address" name="btc_wallet_address" value=""
                                               placeholder="Enter Your BTC Wallet Address" class="form-control"
                                               style="font-size: 15px;font-weight: 700;margin-bottom: 25px;">
                                        </div>
                                 <p style="margin: 10px 0px;text-align: left;"><b>Step 3: </b>When you have sent your BTC please provide the transaction ID</p>   
                                    <div class="fieldHolder" style="padding: 0 0 0 0;"> 
                                        <input type="text" id="btctxid" name="btctxid" value=""
                                               placeholder="Enter Your BTC Transaction ID" class="form-control"
                                               style="font-size: 15px;font-weight: 700;">
                                          
                                        
                                    
                                    </div>
                                </div>

                                <div class="btn_center">
                                            <button type="submit" id="btctxid_btn" name="btctxid_btn" class="btn purple" >submit
                                            </button>
                                </div>

                            </form>
                        </div>


                        <div role="tabpanel" class="tab-pane fade in active" id="trs_eth">
                            <div class="subs_form">
                             <p style="text-align: left;">
                             <b>Step 1: </b>
                             <span class="tr" key="dh-p2">
                               To purchase tokens please send your ETH to our address below
                             </span>
                             </p>
                                <div class="fieldHolder">
                                    <input type="text" id="userWalletAddress" name="userWalletAddress"
                                           placeholder="Enter Your ETH Wallet..."
                                           value="{{ $appSetting['etherium_wallet_address'] }}"
                                           class="form-control" readonly
                                           style="font-size: 15px;font-weight: 700;"
                                    >
                                    <div class="msg_state">
                                        <button id="submit_btn" 
                                         data-clipboard-target="#userWalletAddress"
                                        class="btn purple">Copy
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p class="tr notice hide" key="dh-p3">Please do not send funds from an exchange!</p>

                            <form class="ethtxid_from" name="ethtxid_from" id="ethtxid_from">
                             <div class="MSG"></div>
                               <div class="subs_form">
                                <p style="margin: 10px 0px;text-align: left; "><b>Step 2: </b>Provide us your ETH wallet address which you are sending from</p>
                                 <p class="tr notice">Please do not send funds from an exchange!</p>
                                    <div class="fieldHolder" style="padding: 0 0 0 0;">
                                            <input type="text" id="eth_wallet_address" name="eth_wallet_address" value=""
                                               placeholder="Enter Your ETH Wallet Address" class="form-control"
                                               style="font-size: 15px;font-weight: 700;margin-bottom: 25px;">
                                        </div>
                                 <p style="margin: 10px 0px;text-align: left;"><b>Step 3: </b>When you have sent your ETH please provide the transaction ID</p>   
                                    <div class="fieldHolder" style="padding: 0 0 0 0;"> 
                                        <input type="text" id="ethtxid" name="ethtxid" value=""
                                               placeholder="Enter Your ETH Transaction ID" class="form-control"
                                               style="font-size: 15px;font-weight: 700;">
                                          
                                        
                                    
                                    </div>
                                </div>

                                <div class="btn_center">
                                            <button type="submit" id="ethtxid_btn" name="ethtxid_btn" class="btn purple" >submit
                                            </button>
                                </div>

                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
     <div class="db_step3">
            <div class="content_holder">
                <div class="total_earn">
                    <ul class="list-unstyled earnList">
                        <li>
                            <span class="tr title">Bounty TERRA Earned</span>
                            <span class="number">{{ number_format($bounty['terraEarned'], 2, '.', '') }}</span>
                        </li>
                        <li>
                            <span class="tr title" key="dh-li2">Air Drop TERRA Earned</span>
                            <span class="number">{{number_format($userData->terra_airdrop, 2, '.', '')}}</span>
                        </li>
                        <li>
                            <span class="tr title" key="dh-li3">Promo TERRA Earned</span>
                            <span class="number">{{number_format($userData->terra_promo, 2, '.', '')}}</span>
                        </li>

                        <li>
                            <span class="tr title" key="dh-li4">Referral TERRA Earned</span>
                            <span class="number">{{number_format($referral["terraEarned"], 2, '.', '')}}</span>
                        </li>

                        <li>
                            <span class="tr title" key="dh-li5">TERRA Purchased</span>
                            <span class="number">{{number_format($ethTrans['terraEarned'], 2, '.', '')}}</span>
                        </li>
                        <li class="total">
                            <span class="tr title" key="dh-li6">Total TERRA (TVA) Owned</span>
                            @php $total_terra = $bounty['terraEarned'] + $userData->terra_airdrop + $referral["terraEarned"] + $userData->terra_promo + $ethTrans['terraEarned'] @endphp
                            <span class="number">{{number_format($total_terra, 2, '.', '')}}</span>
                        </li>
                    </ul>
                </div>
         
        @if(!empty($telegram_username)) 
                <div class="shareLink">
                <h2>Get 5 TERRA Free For Inviting Friends</h2>
                <p>Share your Telegram link with friends and earn 5 TERRA for each verified signup!</p>
                    <div class="subs_form">
                     <div id='copyBotMGS'></div>
                        <div class="fieldHolder">
                            <input id="userBotLink" name="userBotLink" style="font-size: 15px;font-weight: 700;" value="https://t.me/terravirtuadrop_bot?start={{$telegram_username}}"  placeholder="https://t.me/terravirtuadrop_bot?start=<?php echo $telegram_username?>" class="form-control" type="text" readonly>
                                <div class="msg_state">									
                                        <button id="btn_copy_bot" data-clipboard-target="#userBotLink" key="copy" class="btn purple">Copy</button>
                                </div>
                        </div>
                    </div>
                </div>
        @endif
                
            </diV>
            @if(!empty($ethTransactions))  
                <!-- Transaction History -->
                <div class="str_section history">
                    <div class="content_holder">
                        <h1>Transaction History</h1>
                        <div class="colHolder">
                            <div class="hs_wrap">
                                <div class="column">
                                    <span class="title">Date</span>
                                    <ul class="list-unstyled list">
                                        @foreach ($ethTransactions as $ethTransaction)  
                                            <li>
                                             @if($ethTransaction->timestamp !='')
                                               {{ date("d/m/Y h:i a", $ethTransaction->timestamp) }}
                                             @else
                                               {{ date("d/m/Y h:i a", strtotime($ethTransaction->created_at)) }}
                                             @endif
                                          </li>
                                         @endforeach
                                    </ul>
                                </div>
                                <div class="column">
                                    <span class="title">Transferred</span>
                                    <ul class="list-unstyled list">
                                         @foreach ($ethTransactions as $ethTransaction) 
                                            <li>
                                            <span> {{number_format($ethTransaction->tx_value, 8, '.', '')}}</span>
                                            <span> {{$ethTransaction->transaction_type}} </span>
                                            </li>
                                             
                                         @endforeach
                                    </ul>
                                </div>
                                <div class="column">
                                    <span class="title">USD Amount</span>
                                    <ul class="list-unstyled list">
                                       @foreach ($ethTransactions as $ethTransaction) 
                                       @php  $usdValue = $ethTransaction->tx_value * $ethTransaction->usd_rate @endphp
                                             <li>{{$usdValue}}</li>
                                       @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       @endif
                
            <!-- Calculator Section -->

            <div class="calc_section" style="padding: 20px 0;">
                <div class="content_holder">
                    <div class="inHolder">
                        <h1 style="font-family: roundo;font-weight: 600;" class="tr" key="dh-h1">Calculator</h1>
                        <p style="font-weight: 500;" class="tr" key="dh-p1">Enter the amount you invest and see
                            how many TERRA you will get</p>
                        <ul class="calc_list">
                            <li>
                                <label class="tr" key="dh-p1-li1">Amount</label>
                                <input type="number" value="1" class="calc_amount">
                            </li>

                            <li>
                                <label class="tr" key="dh-p1-li2">Currency</label>
                                <div class="selected_currancy">
                                    <img src="images/ethereum_currancy.png" alt="image description">
                                    <span class="title">Eth</span>
                                </div>


                                <ul class="crn_list">
                                    <li>
                                        <img src="images/bitcoin_currancy.png" alt="image description">
                                        <span class="title">Btc</span>
                                    </li>

                                    <li>
                                        <img src="images/ethereum_currancy.png" alt="image description">
                                        <span class="title">Eth</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="equal_sign">=</span>
                                <label class="tr" key="dh-p1-li3">TERRA you will get</label>
                                <span class="total_val">25,000</span>
                              
                            </li>
                        </ul>
<br>
                        <p style="font-weight: 500;color: #c81825;" class="tr">
                            Contribute now and get a <?php echo $bonus_token; ?>% BONUS on the above TERRA amount!
                        </p>

                        
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
<!-- modal -->
<div id="btcModal" class="modal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- dialog -->
    <div class="modal-dialog">

        <!-- content -->
        <div class="modal-content">

            <!-- header -->

            <!-- header -->

            <!-- body -->
            <div class="modal-body">
                <div style="font-size: 20px;">
					<?php echo trans('message.confirmed_transaction_tvt') ?>
				</div>
            </div>
            <!-- body -->

            <!-- footer -->
      <div class="modal-footer " style="text-align: center;">
        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
      </div>
            <!-- footer -->

        </div>
        <!-- content -->

    </div>
    <!-- dialog -->

</div>


<!-- modal -->
	
