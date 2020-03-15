<script>

     var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];

        function Validate(arrInputs) {

            for (var i = 0; i < arrInputs.length; i++) {
                var oInput = arrInputs[i];
                if (oInput.type == "file") {
                    var sFileName = oInput.value;
                    if (sFileName.length > 0) {
                        var blnValid = false;
                        for (var j = 0; j < _validFileExtensions.length; j++) {
                            var sCurExtension = _validFileExtensions[j];
                            if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                                blnValid = true;
                                break;
                            }
                        }

                        if (!blnValid) {
                            alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                            return false;
                        }
                    }
                }
            }
            return true;
        }


    function file_load(type) {
            $('#' + type).html('');
    }
    
    function kycformhide() {

            if (kycProfile.kyc_checkbox.checked == false) {
                $("#kyc_hide_form").addClass('hide');
                $("#kycProfile  .checkLabel").removeClass('checked');
                $("#contribute").val(0);
            } else {
                $("#kyc_hide_form").removeClass('hide');
                $("#kycProfile .checkLabel").addClass('checked');
                $("#contribute").val(1);
            }

    }

   $('.kycProfile').bind('submit', function (event) {
            $this = $(this);
            event.preventDefault();
            $this.find('.MSG').html('');
            if ($('#firstname').length == 1 && $('#kycProfile #firstname').val() == "") {
            
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
                                       <strong>Warning! </strong> <?php echo trans('messages.enter_first_name'); ?>\n\
								</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }
            if ($('#lastname').length == 1 && $('#kycProfile #lastname').val() == "") {
             
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong> <?php echo trans('messages.enter_last_name'); ?>\n\
								</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }
            if (kycProfile.kyc_address.value == "") {
            
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong> <?php echo trans('messages.enter_full_address'); ?>\n\
								</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }
            if (kycProfile.kyc_city.value == "") {
               
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong> <?php echo trans('messages.enter_city'); ?>\n\
								</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }
            if (kycProfile.kyc_country.value == "") {
                
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong><?php echo trans('messages.enter_country'); ?>\n\
								</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }
            if (kycProfile.kyc_zip.value == "") {
               
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong> <?php echo trans('messages.enter_zip_code'); ?>\n\
								</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }

            if (kycProfile.kyc_checkbox.checked) {

                var pattern = "^[+-0][0-9]{9,15}$";  // without start and end dellimeter it will only run uptill match and ignore rest of the string
                var phoneRegX = new RegExp(pattern);

                if (!phoneRegX.test(kycProfile.kyc_phone.value)) {

                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong><?php echo 'Please enter the valid Phone Number, it should be numeric and must contain 9 to 15 digits'; ?>\n\
								</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }

                if (kycProfile.kyc_income_source.value == "") {

                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong><?php echo 'Please enter the Income Source'; ?>\n\
								</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
            }
            if (kycProfile.kyc_eth_address.value == "" && kycProfile.kyc_bitcoin_address.value == "") {
               
                $this.find('.MSG').html('<div class="alert alert-warning">\n\
                                       <strong>Warning! </strong><?php echo trans('messages.ethereum_wallet_address_bitcoin_address'); ?>\n\
								</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return;
            }
            if (kycProfile.kyc_eth_address.value != "") {

                if (web3.isAddress(kycProfile.kyc_eth_address.value) == false) {
                
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong> <?php echo "Please enter the valid Ethereum wallet address."; ?>\n\
								</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
            }
            if (kycProfile.kyc_bitcoin_address.value != "") {
                if (kycProfile.kyc_bitcoin_address.value.length != 34) {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong> <?php echo trans('messages.enter_valid_Bitcoin_address'); ?>\n\
								</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
                if (btcCheck(kycProfile.kyc_bitcoin_address.value) == false) {
                    $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong> <?php echo trans('messages.enter_valid_Bitcoin_address'); ?>\n\
								</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
                $.getJSON("https://chain.so/api/v2/is_address_valid/BTC/" + kycProfile.kyc_bitcoin_address.value, function (data) {
                    if (data.data.is_valid == false) {
                        $this.find('.MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong> <?php echo trans('messages.enter_valid_Bitcoin_address'); ?>\n\
								</div>');
                        $("html, body").animate({scrollTop: 0}, "slow");
                        return;
                    }
                });
            }
            if (kycProfile.kyc_photo_link.value == "") {
                $('#photo_file').html('<span class="tag">Missing</span>');
                $('#kyc_MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong><?php echo trans('messages.upload_photo_id'); ?>\n\
								</div>');
                $("html, body").animate({scrollTop: 0}, "slow");
                return false;
            }
            if (kycProfile.contribute.value == 1) {
                if (kycProfile.kyc_nic_link.value == "") {
                    $('#nic_file').html('<span class="tag">Missing</span>');
                    $('#kyc_MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong><?php echo trans('messages.upload_national_identity_card'); ?>\n\
								</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
                if (kycProfile.kyc_bill_link.value == "") {
                    $('#bill_file').html('<span class="tag">Missing</span>');
                    $('#kyc_MSG').html('<div class="alert alert-warning">\n\
								  <strong>Warning! </strong><?php echo trans('messages.upload_utility_bill'); ?>\n\
								</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return;
                }
            }
            $("#kycBtn").prop('disabled', true);
            $.ajax({
                type: "POST",
                data: $this.serialize() + '&_token={{ csrf_token() }}',
                url: "{{ route('updateKyc') }}",
                success: function () {
                    $('#kycpending').html('<div class="processTab">\n\
								<div class="personal_info yellowTab">\n\
									<p class="tr" key="kyc-in-process">KYC (Know Your Customer) In Process </p>\n\
								</div>\n\
								<p>Your KYC application is currently being verified. If you have any queries please email <a href="mailto:KYC@terravirtua.io">KYC@terravirtua.io</a></p>\n\
							</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    $('.kyc_li span').css('color', '#ffbf00');
                    $(".kyc_li .disable_icon").attr('src', '<?php echo asset("assets/images/document_icon_yellow.png"); ?>')
                    $(".kyc_li .active_icon").attr('src', '<?php echo asset("assets/images/document_icon_yellow.png"); ?>')
                },
                error: function (errorMsg) {
                    
                    $html = '<div class="alert alert-warning"><strong>Warning!</strong>';
                    errorMsgArr = JSON.parse(errorMsg.responseText);
                    
                    $.each(errorMsgArr, function (ind, val) {
                     
                        $html += '<p>' + val + '</p>';
                    })
                    $html += '</div>';
                    $('#kyc_MSG').html($html);
                    $("#kycBtn").prop('disabled', false);
                    $("html, body").animate({scrollTop: 0}, "slow");
                }
            })
        })
    </script>
     <script>

        $(function () {

            //file input field trigger when the drop box is clicked
            $("#dropBox").click(function () {
                $("#fileInput").click();
            });

            //prevent browsers from opening the file when its dragged and dropped
            $(document).on('drop dragover', function (e) {
                e.preventDefault();
            });

            //call a function to handle file upload on select file
            $('#kyc_photo').on('change', photoUpload);
            $('#kyc_nic').on('change', nicUpload);
            $('#kyc_bill').on('change', billUpload);
        });

        function photoUpload(event) {

            event.preventDefault()
            //$("#Photo_file").html('File has been uploaded successfully');
            //get selected file
            files = event.target.files;

            if (files.length == 0) {
                $("#Photo_file").html("{{ trans('message.No_file_selected') }}");
                $("#kyc_photo_link").val('');
                $("#kyc_photo_name").html('Official ID including your photograph (i.e. driving license, passport)');
                //  alert(files.length);
                return;
            }
            // $("#kycBtn").prop('disabled', true);

            //form data check the above bullet for what it is
            var data = new FormData();

            //file data is presented as an array
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                if (!file.type.match('image.*')) {
                    //check file type
                    $("#Photo_file").html("{{ trans('message.choose_image_file') }}");
                } else if (file.size > 1048576) { //1048576 = 1Mb
                    //check file size (in bytes)
                    $("#Photo_file").html("{{ trans('message.file_is_too_large') }}");

                } else if (file.size < 300000) { //1048576 = 1Mb
                    //check file size (in bytes)
                    $("#Photo_file").html("File size should be > 300Kb.");
                } else {
                    //append the uploadable file to FormData object
                    data.append('file', file, file.name);
                    data.append('_token', '{{ csrf_token() }}');
                    $("#kyc_photo_name").html(file.name);
                    $("#Photo_file").html('<span class="tag">Loading..</span>');
                    //create a new XMLHttpRequest
                    var xhr = new XMLHttpRequest();

                    //post file data for upload
                    xhr.open('POST', '{{ route("doUpload") }}', true);
                    xhr.send(data);
                    xhr.onload = function () {
                        //get response and show the uploading status
                        var response = JSON.parse(xhr.responseText);
                        if (xhr.status === 200 && response.status == 'ok') {
                            $("#Photo_file").html("{{ trans('message.file_uploaded_successfully') }}");
                            $("#kyc_photo_link").val(response.kycfile);

                            if (kycProfile.kyc_photo_link.value.length != 0
                                && kycProfile.contribute.value != 1) {

                                $("#kycBtn").prop('disabled', false);
                            }
                            // if (kycProfile.kyc_photo_link.value.length != 0
                            //     && kycProfile.kyc_bill_link.value.length != 0
                            //     && kycProfile.kyc_nic_link.length != 0
                            //     && kycProfile.contribute.value != 0) {
                            //     $("#kycBtn").prop('disabled', false);
                            // }


                        } else if (response.status == 'type_err') {
                            $("#Photo_file").html("{{ trans('message.choose_image_file') }}");
                            //	$("#kyc_photo_link").val(response.kycfile);
                        } else {
                            $("#Photo_file").html("{{ trans('message.file_problem_occured') }}");
                            //	$("#kyc_photo_link").val(response.kycfile);
                        }

                    };
                }
            }
        }


        function nicUpload(event) {

            // $("#nic_file").html('File has been uploaded successfully');
            //get selected file
            files = event.target.files;

            if (files.length == 0) {
                $("#nic_file").html("{{ trans('message.No_file_selected') }}");
                $("#kyc_nic_link").val('');
                $("#kyc_nic_name").html('National Identity Card OR Passport ID (Front Side)');
                return;
            }

            //  $("#kycBtn").prop('disabled', true);
            //form data check the above bullet for what it is
            var data = new FormData();

            //file data is presented as an array
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                if (!file.type.match('image.*')) {
                    //check file type
                    $("#nic_file").html("{{ trans('message.choose_image_file') }}");
                } else if (file.size > 1048576) {
                    //check file size (in bytes)
                    $("#nic_file").html("{{ trans('message.file_is_too_large') }}");

                } else if (file.size < 300000) { //1048576 = 1Mb
                    //check file size (in bytes)
                    $("#nic_file").html("File size should be > 300Kb.");

                } else {
                    //append the uploadable file to FormData object
                    data.append('file', file, file.name);
                    data.append('_token', '{{ csrf_token() }}');
                    $("#kyc_nic_name").html(file.name);

                    $("#nic_file").html('<span class="tag">Loading..</span>');
                    //create a new XMLHttpRequest
                    var xhr = new XMLHttpRequest();

                    //post file data for upload
                    xhr.open('POST', '{{ route("doUpload") }}', true);
                    xhr.send(data);
                    xhr.onload = function () {

                        //get response and show the uploading status
                        var response = JSON.parse(xhr.responseText);
                        if (xhr.status === 200 && response.status == 'ok') {
                            $("#nic_file").html("{{ trans('message.file_uploaded_successfully') }}");
                            $("#kyc_nic_link").val(response.kycfile);

                        } else if (response.status == 'type_err') {
                            $("#nic_file").html("{{ trans('message.choose_image_file') }}");
                            //$("#kyc_nic_link").val(response.kycfile);
                        } else {
                            $("#nic_file").html("{{ trans('message.file_problem_occured') }}");
                            //	$("#kyc_nic_link").val(response.kycfile);
                        }
                    };
                }
            }
        }


        function billUpload(event) {

            // $("#bill_file").html('File has been uploaded successfully');
            //get selected file
            files = event.target.files;
            if (files.length == 0) {
                //lang('No_file_selected')
                $("#bill_file").html("{{ trans('message.No_file_selected') }}");
                $("#kyc_bill_link").val('');
                $("#kyc_bill_name").html('Utility Bill (Back Side)');
                return;
            }

            //form data check the above bullet for what it is
            var data = new FormData();

            //file data is presented as an array
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                if (!file.type.match('image.*')) {
                    //check file type
                    $("#bill_file").html("{{ trans('message.choose_image_file') }}");
                } else if (file.size > 1048576) {
                    //check file size (in bytes)
                    $("#bill_file").html("{{ trans('message.file_is_too_large') }}");
                } else if (file.size < 300000) { //1048576 = 1Mb
                    //check file size (in bytes)
                    $("#bill_file").html("File size should be > 300Kb.");

                } else {
                    //append the uploadable file to FormData object
                    data.append('file', file, file.name);
                    data.append('_token', '{{ csrf_token() }}');

                    $("#bill_file").html('<span class="tag">Loading..</span>');
                    $("#kyc_bill_name").html(file.name);
                    //create a new XMLHttpRequest
                    var xhr = new XMLHttpRequest();

                    //post file data for upload
                    xhr.open('POST', '{{ route("doUpload") }}', true);
                    xhr.send(data);
                    xhr.onload = function () {

                        //get response and show the uploading status
                        var response = JSON.parse(xhr.responseText);
                        if (xhr.status === 200 && response.status == 'ok') {
                            $("#bill_file").html("{{ trans('message.file_uploaded_successfully') }}");
                            $("#kyc_bill_link").val(response.kycfile);

                        } else if (response.status == 'type_err') {
                            $("#bill_file").html("{{ trans('message.choose_image_file') }}");
                            //$("#kyc_bill_link").val(response.kycfile);
                        } else {
                            $("#bill_file").html("{{ trans('message.file_problem_occured') }}");
                            //	$("#kyc_bill_link").val(response.kycfile);
                        }

                    };
                }
            }
        }


    </script>