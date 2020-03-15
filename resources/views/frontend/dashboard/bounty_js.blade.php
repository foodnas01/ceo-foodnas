<!-- Bounty -->
    <script>
        //JS script

        $('.btn-modal').on('click', function (e) {
            // e.preventDefault();
            $('#fsModal').modal('show').find('.modal-dialog').load("{{ url('/bounty-program-popup.html')}}");
            //$('#fsModal').modal('show');
        });
        
        function addBounty(formId) {
            if (formId == 'contentInfoForm') {

                if (contentInfoForm.content_type.value == '') {
                    $('#' + formId).find('.MSG').html('<div class="alert alert-warning"><strong>Warning! </strong>Please select the Content Type\n\
							                  </div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }

                if (contentInfoForm.content_link.value == '') {
                    $('#' + formId).find('.MSG').html('<div class="alert alert-warning"><strong>Warning! </strong> Please enter the Link Type\n\
							                  </div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }

                if (contentInfoForm.content_type.value == "bitcointalk") {
                    var pattern = /^http(?:s)?:\/\/(?:www\.)?bitcointalk\.org\/([^]+)$/;
                    var str = contentInfoForm.content_link.value;

                    if (socialValidation(pattern, str) == null) {
                        $('#' + formId).find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong>{{ trans("message.enter_valid_bitcoin_talk_link") }}\n\
							</div>');
                        $("html, body").animate({scrollTop: 0}, "slow");
                        return;
                    }
                }
                if (contentInfoForm.content_type.value == "youtube") {

                    var pattern = /^http(?:s)?:\/\/(?:www\.)?youtube\.com\/([^]+)$/;
                    var str = contentInfoForm.content_link.value;

                    if (socialValidation(pattern, str) == null) {
                        $('#' + formId).find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong>{{ trans("message.enter__valid_youtube_url") }}\n\
							</div>');
                        $("html, body").animate({scrollTop: 0}, "slow");
                        return;
                    }
                }

                if (contentInfoForm.content_type.value == "facebook") {

                    var pattern = /^http(?:s)?:\/\/(?:www\.)?facebook\.com\/([^]+)$/;
                    var str = contentInfoForm.content_link.value;
                    if (socialValidation(pattern, str) == null) {
                        $('#' + formId).find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong>Please enter the valid Facebook URL.\n\
							</div>');
                        $("html, body").animate({scrollTop: 0}, "slow");
                        return;
                    }
                }
            }

            if (formId == 'localizationForm') {
                if (localizationForm.translation_type.value == '') {

                    $('#' + formId).find('.MSG').html('<div class="alert alert-warning"><strong>Warning! </strong>Please select the translation type\n\
							                  </div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;

                }

                if (localizationForm.language.value == '') {

                    $('#' + formId).find('.MSG').html('<div class="alert alert-warning"><strong>Warning! </strong>Please select the language\n\
							                  </div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;

                }

                if (localizationForm.translation_link_url.value == '') {

                    $('#' + formId).find('.MSG').html('<div class="alert alert-warning"><strong>Warning! </strong> Please enter the Link\n\
							                  </div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;

                }

            }

            if (formId == 'channelTelegramForm') {

                if (channelTelegramForm.telegram_new_member.value == '') {

                    $('#' + formId).find('.MSG').html('<div class="alert alert-warning"><strong>Warning! </strong> Please enter the Refer a member\n\
							                  </div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;

                }

            }


            formData = $('#' + formId).serialize() + '&formId=' + formId;

            $.ajax({
                'type': 'post',
                'data': formData,
                'url': '{{ route("addBounty") }}',
                'success': function ($successMsg) {

                    $('#' + formId).find('.MSG').html('<div class="alert alert-success">\n\
							  <strong>Success!</strong> ' + $successMsg + '\n\
							</div>');
                    $('#' + formId).trigger("reset");
                    $('#' + formId).find('.form_opt li').removeClass('active');
                    $("html, body").animate({scrollTop: 0}, "slow");
                },
                'error': function (error) {

                    text = '<div class="alert alert-warning">\n\
                   <strong>Warning!</strong> ' + error.responseText + '</div>';
                    $('#' + formId).find('.MSG').html(text);
                    $("html, body").animate({scrollTop: 0}, "slow");
                },
            })
        }

        function funcCopyUrl() {
            $('#copyUrl').prop("disabled", false);
            $("#copyUrl").select();
            document.execCommand("copy");
            $('#copyUrl').prop("disabled", true);
        }

        $(document).ready(function () {
            $("input[type='radio']").iCheck({
                checkboxClass: 'icheckbox_flat-purple',
                radioClass: 'iradio_square-purple',
                increaseArea: '20%' // optional
            });
        });
    </script>


            <script type="text/javascript">
            $(document).on('ready', function () {
             
                $('.mb_profile_icon').click(function () {
                    $('body').toggleClass('active_profile');
                });
               
            });
        </script>   

          <!--/**
    * Bounty section
    */-->
    <script src="{!! asset('assets/js/msgBox.js') !!}"></script>
    <script type="text/javascript">

        $(document).ready(function () {
           $('.homeClickHere').on('click', function () {

                $('.dashboard_li').removeClass('active');
                $('.kyc_li').addClass('active');
            })

            $('.dashboardClickHere').on('click', function () {

                $('#mainTab li').removeClass('active');
                $('.dashboard_li').addClass('active');
            })


            $('.socialForm').bind('submit', function (event) {
                $this = $(this);
                event.preventDefault();
                $this.find('.MSG').html('');
                if (socialProfile.bitcointalk_username.value == "" && socialProfile.bitcointalk_profile_link.value == ""
                    && socialProfile.twitter_acccount_url.value == "" && socialProfile.facebook_account_url.value == ""
                    && socialProfile.other_forum_url.value == "") {

                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong> {{ trans("message.need_submit_least_one_mandatory_field") }}\n\
							</div>');
                  
                    return;
                }
                if (socialProfile.bitcointalk_username.value != "") {
                    var pattern = /^[a-z0-9_-]{4,32}$/;
                    var str = socialProfile.bitcointalk_username.value;
                    if (socialValidation(pattern, str) == null) {
                        $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong> {{ trans("message.enter_valid_bitcoin_talk_username") }}\n\
							</div>');
                       
                        return;
                    }
                }
                if (socialProfile.bitcointalk_profile_link.value != "") {

                    var pattern = /http(?:s)?:\/\/(?:www\.)?bitcointalk\.org\/([a-zA-Z0-9_]+)/;
                    var str = socialProfile.bitcointalk_profile_link.value;
                    if (socialValidation(pattern, str) == null) {
                        $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong> {{ trans("message.enter_valid_bitcoin_talk_profile_link") }}\n\
							</div>');
                       
                        return;
                    }
                }
                if (socialProfile.telegram.value != "") {

                    $.ajax({
                        type: "POST",
                        dataType: 'json',
                        data: {username: socialProfile.telegram.value},
                        url: "https://api.pwrtelegram.xyz/user489569835:4xGz254mTmz6KMQC0IWCQFC1drPZx0gE9Nunt0qmUOM/account.checkUsername",
                        success: function (data) {


                            if (data.ok == false) {
                                $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong> {{ trans("message.enter_valid_telegram_username") }}\n\
							</div>');
                                
                                return;
                            }
                        },
                        error: function (errorMsg) {
                            var pattern = /^[a-z0-9_-]{4,32}$/;
                            var str = userProfile.telegram.value;

                            if (socialValidation(pattern, str) == null) {
                                $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong> {{ trans("message.enter_valid_telegram_username") }}\n\
							</div>');
                                
                                return;
                            }
                        }

                    })
                }
                if (socialProfile.twitter_acccount_url.value != "") {

                    var pattern = /http(?:s)?:\/\/(?:www\.)?twitter\.com\/([a-zA-Z0-9_]+)/;
                    var str = socialProfile.twitter_acccount_url.value;
                    if (socialValidation(pattern, str) == null) {
                        $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong> {{ trans("message.enter_valid_twitter_account_url") }}\n\
							</div>');
                      
                        return;
                    }
                }
                if (socialProfile.facebook_account_url.value != "") {

                    var pattern = /http(?:s)?:\/\/(?:www\.)?facebook\.com\/([a-zA-Z0-9_]+)/;
                    var str = socialProfile.facebook_account_url.value;
                    if (socialValidation(pattern, str) == null) {
                        $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong> {{ trans("message.enter_valid_facebook_account_url") }}\n\
							</div>');
                       
                        return;
                    }
                }
                if (!$('.agreement').is(':checked')) {

                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
							  <strong>Warning! </strong> {{ trans("message.agree_term_and_condition") }}\n\
							</div>');
                  
                    return;
                }

                $.ajax({
                    type: "POST",
                    data: $this.serialize(),
                    url: "{{ route('submitSocialData') }}",
                    success: function () {
                         $this.find('.MSG').html('<div class="alert alert-success">\n\
							  <strong>Success!</strong> {{ trans("message.social_profile_updated_successfully") }} \n\
							</div>')
                        $('.personal_info').addClass('hide');
                        $('.bounty_tabLinks').removeClass('hide');
                        
                    },
                    error: function (errorMsg) {
                        $html = '<div class="alert alert-warning"><strong>Warning!</strong>';
                        errorMsgArr = JSON.parse(errorMsg.responseText);
                        $.each(errorMsgArr, function (ind, valArr) {
                            $.each(valArr, function (ind, val) {
                                $html += '<p>' + val + '</p>';
                            })
                        })
                        $html += '</div>';
                        $this.find('.MSG').html($html);
                        $("html, body").animate({scrollTop: 0}, "slow");
                    }
                })
            })


            $('.form_opt1 li').click(function () {
                $('.form_opt1 li').removeClass('active');
                $(this).addClass('active');
            });
            $('.form_opt2 li').click(function () {
                $('.form_opt2 li').removeClass('active');
                $(this).addClass('active');
            });
            $('.form_opt3 li').click(function () {
                $('.form_opt3 li').removeClass('active');
                $(this).addClass('active');
            });

            $('.bounty_tabLinks li').bind('click', function () {
                $('.MSG').html('');
            })
            $('ul[role=channelList]').bind('click', function () {
                $('.MSG').html('');
            })
        })
     
        //appModel.open({message: $('.modal_wait_message') , title: "Important note...",progressBar:true ,closeable:true, autoClose:0});
        //appModel.close();
        //appModel.open({message: $('.modal_wait_message') , title: "Add Keyword to product",progressBar:true ,closeable:true, autoClose:0});
        //appModel.close();
        //msgBox.close();
        //msgBox.close();
        //appModel.close();
        //appModel.open({message: $('.addForm') , title: "Add keywords to enable product tracking",progressBar:true ,closeable:true, autoClose:0});
        //addContent();
        msgBox.open({
            message: "Please Wait While adding prodcut",
            title: "Please Wait...",
            progressBar: true,
            closeable: true
        });
</script>