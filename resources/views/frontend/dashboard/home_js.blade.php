<!-- homme Script  -->
<script type="text/javascript">
    $(document).ready(function () {

            var currency = $('.selected_currancy span').html();
            var total = 1;
            $(".calc_amount").each(function (index, item) {
                temp = parseFloat($(item).val());
                if (isNaN(temp)) {
                    temp = 0;

                }
                total = total * temp;
            });

            if (currency == 'Eth') {
                total = total * <?php echo Session::get('eth_usd_rate'); ?>;
                terras = total /<?php echo $tvt_rate ?>;
                $("span.total_val").text(terras.toFixed(2));
            }
            else if (currency == 'Btc') {
                total = total *<?php echo Session::get('btc_usd_rate'); ?>;
                terras = total /<?php echo $tvt_rate ?>;
                $("span.total_val").text(terras.toFixed(2));
            }

            $(".calc_amount").trigger("change");
            $(".calc_amount").change(function () {

                var currency = $('.selected_currancy span').html();
                var total = 1;
                $(".calc_amount").each(function (index, item) {
                    temp = parseFloat($(item).val());
                    if (isNaN(temp)) {
                        temp = 0;

                    }
                    total = total * temp;
                });

                if (currency == 'Eth') {
                    total = total * <?php echo Session::get('eth_usd_rate'); ?>;
                    terras = total /<?php echo $tvt_rate ?>;
                    $("span.total_val").text(terras.toFixed(2));
                }
                else if (currency == 'Btc') {
                    total = total *<?php echo Session::get('btc_usd_rate'); ?>;
                    terras = total /<?php echo $tvt_rate ?>;
                    $("span.total_val").text(terras.toFixed(2));
                }

            });

            $(".calc_amount").keyup(function () {
                var currency = $('.selected_currancy span').html();
                var total = 1;
                $(".calc_amount").each(function (index, item) {
                    temp = parseFloat($(item).val());
                    if (isNaN(temp)) {
                        temp = 0;

                    }
                    total = total * temp;
                });

                if (currency == 'Eth') {
                    total = total * <?php echo Session::get('eth_usd_rate');?>;
                    terras = total /<?php echo $tvt_rate ?>;
                    $("span.total_val").text(terras.toFixed(2));
                }
                else if (currency == 'Btc') {
                    total = total *<?php echo Session::get('btc_usd_rate');?>;
                    terras = total /<?php echo $tvt_rate ?>;
                    $("span.total_val").text(terras.toFixed(2));
                }


            });

            $(".crn_list li").click(function () {
                var currency = $(this).find('span').html();
              
                var total = 1;
                $(".calc_amount").each(function (index, item) {
                    temp = parseFloat($(item).val());
                    if (isNaN(temp)) {
                        temp = 0;

                    }
                    total = total * temp;
                });

                if (currency == 'Eth') {
                    total = total * <?php echo Session::get('eth_usd_rate'); ?>;
                    terras = total /<?php echo $tvt_rate ?>;
                    $("span.total_val").text(terras.toFixed(2));
                }
                else if (currency == 'Btc') {
                    total = total *<?php echo Session::get('btc_usd_rate'); ?>;
                    terras = total /<?php echo $tvt_rate ?>;
                    $("span.total_val").text(terras.toFixed(2));
                }

            });

            $('.ethtxid_from').bind('submit', function (event) {
                $this = $(this);
                event.preventDefault();
                $this.find('.MSG').html('');

                if (ethtxid_from.eth_wallet_address.value == "") {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong> <?php echo trans('message.enter_the_eth_wallet_address'); ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }

                if (ethtxid_from.ethtxid.value == "") {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong> <?php echo trans('message.enter_the_eth_transaction_id') ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }

              
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: $this.serialize(),
                    url: "<?php echo url('user/ethUpdate') ?>",
                    success: function (data) {

                        if (data.error == 0) {
                            $('#btcModal').modal('show');
                            $this.find('.MSG').html('<div class="alert alert-success">\n\
							                                    		  <strong>Success!</strong> ' + data.message + ' \n\
						                                      	 		</div>');
                        }

                        if (data.error == -1) {

                            $('#btcModal').modal('show').find('.modal-body').html('<div style="font-size:20px;">\n\
							                                     ' + data.message + ' \n\
						                                      	 		</div>');


                        }

                        if (data.error == 1) {


                            $this.find('.MSG').html('<div class="alert alert-warning">\n\
									                               <strong>Warning! </strong> ' + data.message + '\n\
									                         </div>');
                            $("html, body").animate({scrollTop: 0}, "slow");
                        }

                    },
                    error: function (errorMsg) {
                        $this.find('.MSG').html('<div class="alert alert-warning">\n\
									  <strong>Warning!</strong>' + errorMsg.responseText + '\n\
									</div>');
                        $("html, body").animate({scrollTop: 0}, "slow");
                    }
                })
            })


            $('.btctxid_from').bind('submit', function (event) {
                $this = $(this);
                event.preventDefault();
                $this.find('.MSG').html('');

                if (btctxid_from.btc_wallet_address.value == "") {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong> <?php echo trans('message.enter_the_btc_wallet_address'); ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }

                if (btctxid_from.btctxid.value == "") {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong><?php echo trans('message.enter_the_btc_transaction_id'); ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
              
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: $this.serialize(),
                    url: "<?php echo url('user/btcUpdate') ?>",
                    success: function (data) {
                        if (data.error == 0) {
                            $('#btcModal').modal('show');

                            $this.find('.MSG').html('<div class="alert alert-success">\n\
							 		  <strong>Success!</strong> ' + data.message + ' \n\
							 		</div>');
                        }


                        if (data.error == -1) {


                            $this.find('.MSG').html('<div class="alert alert-success">\n\
							 		  <strong>Success!</strong> ' + data.message + ' \n\
							 		</div>');


                        }

                        if (data.error == 1) {


                            $this.find('.MSG').html('<div class="alert alert-warning">\n\
									                               <strong>Warning! </strong> ' + data.message + '\n\
									                         </div>');
                            $("html, body").animate({scrollTop: 0}, "slow");
                        }

                    },
                    error: function (errorMsg) {
                        $this.find('.MSG').html('<div class="alert alert-warning">\n\
									  <strong>Warning!</strong>' + errorMsg.responseText + '\n\
									</div>');
                        $("html, body").animate({scrollTop: 0}, "slow");
                    }
                })
            })
        });
    </script> 

       <script>
        $('.btn-modal').on('click', function (e) {
            e.preventDefault();
            $('#fsModal').modal('show');
        });
        $('.btn-modal').on('hide', function (e) {

            location.reload();

        });
        $('#btcModal').on('hidden.bs.modal', function (e) {

            location.reload();

        });


        function copyBtcClipboard() {
            $("#copyMGS").html('');
            /* Get the text field */
            var copyText = document.getElementById("buserWalletAddress");

            /* Select the text field */
            copyText.select();

            /* Copy the text inside the text field */
            document.execCommand("Copy");


            $("#copyMGS").html('<div class="alert alert-success">\n\
									  <strong> <?php echo trans('message.copied'); ?></strong>\n\
									</div>')

        }

        function copyClipboard() {
            $("#copyMGS").html('');
            /* Get the text field */
            var copyText = document.getElementById("userWalletAddress");

            /* Select the text field */
            copyText.select();

            /* Copy the text inside the text field */
            document.execCommand("Copy");


            $("#copyMGS").html('<div class="alert alert-success">\n\
									  <strong><?php echo trans('message.copied'); ?></strong>\n\
									</div>')

        }

        //new ClipboardJS('#copyBtcClipboard_btn');
        var btcClipboard = new ClipboardJS('#copyBtcClipboard_btn');
        btcClipboard.on('success', function (e) {

            $("#copyMGS").html('<div class="alert alert-success">\n\
									  <strong><?php echo trans('message.copied'); ?></strong>\n\
									</div>')
        });

        btcClipboard.on('error', function (e) {
            $("#copyMGS").html('<div class="alert alert-success">\n\
									  <strong>Not Copy <?php echo trans('message.not_copy'); ?></strong>\n\
									</div>')
        });


        var botClipboard = new ClipboardJS('#btn_copy_bot');
        botClipboard.on('success', function (e) {

            $("#copyBotMGS").html('<div class="alert alert-success">\n\
									  <strong><?php echo trans('message.copied'); ?></strong>\n\
									</div>')
        });


        //new ClipboardJS('#copyBtcClipboard_btn');
        var ethClipboard = new ClipboardJS('#submit_btn');
        ethClipboard.on('success', function (e) {

            $("#copyMGS").html('<div class="alert alert-success">\n\
									  <strong><?php echo trans('message.copied'); ?></strong>\n\
									</div>')
        });

        ethClipboard.on('error', function (e) {
            $("#copyMGS").html('<div class="alert alert-success">\n\
									  <strong><?php echo trans('message.not_copy'); ?></strong>\n\
									</div>')
        });

    </script>
    <script>
    var normalize = (s) => {
            let x = String(s) || '';
            return x.replace(/^[\s\xa0]+|[\s\xa0]+$/g, '');
        };

        var check = (s) => {

            if (s.length < 26 || s.length > 35) {
                return false;
            }

            let re = /^[A-Z0-9]+$/i;
            if (!re.test(s)) {
                return false;
            }
            return true;
        };

        var validate = (s) => {

            let className = 'msg fail';
            let textMessage = 'Invalid bitcoin address';

            if (!s) {
                textMessage = 'Please enter a valid address';
            }

            let re = check(s);
            if (re) {
                className = 'msg pass';
                textMessage = 'Bitcoin address is valid';
            }
            return re;
        };


        function btcCheck(uservalue) {
            let v = normalize(uservalue);
            let result = validate(v);
            return result;
        }


        function check(address) {
            var decoded = base58_decode(address);
            if (decoded.length != 25) return false;

            var cksum = decoded.substr(decoded.length - 4);
            var rest = decoded.substr(0, decoded.length - 4);

            var good_cksum = hex2a(sha256_digest(hex2a(sha256_digest(rest)))).substr(0, 4);

            if (cksum != good_cksum) return false;
            return true;
        }

        function base58_decode(string) {
            var table = '123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz';
            var table_rev = new Array();

            var i;
            for (i = 0; i < 58; i++) {
                table_rev[table[i]] = int2bigInt(i, 8, 0);
            }

            var l = string.length;
            var long_value = int2bigInt(0, 1, 0);

            var num_58 = int2bigInt(58, 8, 0);

            var c;
            for (i = 0; i < l; i++) {
                c = string[l - i - 1];
                long_value = add(long_value, mult(table_rev[c], pow(num_58, i)));
            }

            var hex = bigInt2str(long_value, 16);

            var str = hex2a(hex);

            var nPad;
            for (nPad = 0; string[nPad] == table[0]; nPad++) ;

            var output = str;
            if (nPad > 0) output = repeat("\0", nPad) + str;

            return output;
        }

        function hex2a(hex) {
            var str = '';
            for (var i = 0; i < hex.length; i += 2)
                str += String.fromCharCode(parseInt(hex.substr(i, 2), 16));
            return str;
        }

        function a2hex(str) {
            var aHex = "0123456789abcdef";
            var l = str.length;
            var nBuf;
            var strBuf;
            var strOut = "";
            for (var i = 0; i < l; i++) {
                nBuf = str.charCodeAt(i);
                strBuf = aHex[Math.floor(nBuf / 16)];
                strBuf += aHex[nBuf % 16];
                strOut += strBuf;
            }
            return strOut;
        }

        function pow(big, exp) {
            if (exp == 0) return int2bigInt(1, 1, 0);
            var i;
            var newbig = big;
            for (i = 1; i < exp; i++) {
                newbig = mult(newbig, big);
            }

            return newbig;
        }

        function repeat(s, n) {
            var a = [];
            while (a.length < n) {
                a.push(s);
            }
            return a.join('');
        }
    </script>


    <script>
    function socialValidation(pattern, str) {

            return str.match(pattern);
        }
   
   
        $(document).on('ready', function () {
      
            $(".select_option").change(function () {
                if ($(this).val() == "0")
                    $(this).addClass("empty");
                else
                    $(this).removeClass("empty")
            });
            $(".select_option").change();

            $('.selected_currancy').click(function () {
                $('.crn_list').slideToggle();
            });
            $('.crn_list li').click(function () {
                $('.crn_list li').removeClass('active');
                $(this).addClass('active');
                $('.selected_currancy').html($(this).html());
                $('.crn_list').slideUp();
            });
            $('.crs_columns .crs_block').click(function () {
                $('.crs_columns').fadeOut(500);
                $('.tv_code').delay(500).fadeIn(500);
            });
            $('.back_currancy').click(function () {
                $('.tv_code').fadeOut(500);
                $('.crs_columns').delay(500).fadeIn(500);
            });
            $('.checkLabel').click(function () {
                $('.checkLabel').toggleClass('checked');
            });
   
        })
    </script>