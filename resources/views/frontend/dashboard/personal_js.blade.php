<script>  
      $('.userProfile').bind('submit', function (event) {

            $this = $(this);
            event.preventDefault();

            $this.find('.MSG').html('');

            if (userProfile.firstname.value == "") {
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong><?php echo trans('messages.enter_first_name'); ?>\n\
							</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }

            if (userProfile.lastname.value == "") {
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong><?php echo trans('messages.enter_last_name'); ?>\n\
							</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }

            if (userProfile.address.value == "") {
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong><?php echo trans('messages.enter_the_address'); ?>\n\
							</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }

            if (userProfile.zipcode.value == "") {
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong><?php echo trans('messages.enter_the_zip_code'); ?>\n\
							</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }

            if (userProfile.bitcointalk_username.value == "" && userProfile.bitcointalk_profile_link.value == ""
                && userProfile.twitter_acccount_url.value == "" && userProfile.facebook_account_url.value == ""
                && userProfile.other_forum_url.value == "") {

                $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong><?php echo trans('messages.least_one_mandatory_social_media_section'); ?>\n\
							</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }

            if (userProfile.bitcointalk_username.value != "") {
                var pattern = /^[a-z0-9_-]{4,32}$/;
                var str = userProfile.bitcointalk_username.value;

                if (socialValidation(pattern, str) == null) {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong><?php echo trans('messages.enter_valid_bitcoin_talk_username'); ?>\n\
							</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
            }

            if (userProfile.bitcointalk_profile_link.value != "") {

                var pattern = /http(?:s)?:\/\/(?:www\.)?bitcointalk\.org\/([a-zA-Z0-9_]+)/;
                var str = userProfile.bitcointalk_profile_link.value;
                if (socialValidation(pattern, str) == null) {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong><?php echo trans('messages.enter_valid_bitcoin_talk_profile_link'); ?>\n\
							</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
            }

            if (userProfile.telegram.value != "") {

                var pattern = /^@?(\w)[a-z0-9_-]{2,32}$/;
                var str = userProfile.telegram.value;
                if (socialValidation(pattern, str) == null) {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong><?php echo trans('messages.enter_valid_telegram_username'); ?>\n\
							</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
                var telegram_username = userProfile.telegram.value;
                var check_telegram_username = telegram_username.indexOf('@') == 0 ? telegram_username.substring(1) : telegram_username;

                // $.ajax({
                //     type: "POST",
                //     dataType: 'json',
                //     data: {username: check_telegram_username},
                //     url: "https://api.pwrtelegram.xyz/user489569835:4xGz254mTmz6KMQC0IWCQFC1drPZx0gE9Nunt0qmUOM/account.checkUsername",
                //     success: function (data) {
                //         if (data.ok == false) {
                //             $this.find('.MSG').html('<div class="alert alert-warning">\n\
				// 			  <strong>Warning! </strong><?php echo trans('messages.enter_valid_telegram_username'); ?>\n\
				// 			</div>');
                //             $("html, body").animate({scrollTop: 0}, "slow");
                //             return;
                //         }
                //     },
                //     error: function (errorMsg) {
                //         var pattern = /^@?(\w)[a-z0-9_-]{4,32}$/;
                //         var str = userProfile.telegram.value;
                //         if (socialValidation(pattern, str) == null) {
                //             $this.find('.MSG').html('<div class="alert alert-warning">\n\
				// 			  <strong>Warning! </strong><?php echo trans('messages.enter_valid_telegram_username'); ?>\n\
				// 			</div>');
                //             $("html, body").animate({scrollTop: 0}, "slow");
                //             return;
                //         }
                //     }
                // })
            }

            if (userProfile.twitter_acccount_url.value != "") {

                var pattern = /http(?:s)?:\/\/(?:www\.)?twitter\.com\/([a-zA-Z0-9_]+)/;
                var str = userProfile.twitter_acccount_url.value;
                if (socialValidation(pattern, str) == null) {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong><?php echo trans('messages.enter_valid_twitter_account_url'); ?>\n\
							</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
            }

            if (userProfile.facebook_account_url.value != "") {

                var pattern = /http(?:s)?:\/\/(?:www\.)?facebook\.com\/([a-zA-Z0-9_]+)/;
                var str = userProfile.facebook_account_url.value;

                if (socialValidation(pattern, str) == null) {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong><?php echo trans('messages.enter_valid_facebook_account_url'); ?>\n\
							</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
            }
   
            $.ajax({
                type: "POST",
                data: $this.serialize() + '&_token={{ csrf_token() }}',
                url: "{{ route('submitProfile') }}",
                success: function () {
                    $this.find('.MSG').html('<div class="alert alert-success">\n\
							  <strong>Success!</strong><?php echo trans('messages.profile_updated_successfully'); ?>\n\
							</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                },
               error: function (errorMsg) {
                    
                    $html = '<div class="alert alert-warning"><strong>Warning!</strong>';
                    errorMsgArr = JSON.parse(errorMsg.responseText);
                    
                    $.each(errorMsgArr, function (ind, val) {
                     
                        $html += '<p>' + val + '</p>';
                    })
                    $html += '</div>';
                   $this.find('.MSG').html($html);
                    $("#kycBtn").prop('disabled', false);
                    $("html, body").animate({scrollTop: 0}, "slow");
                }
            })
        });
</script>