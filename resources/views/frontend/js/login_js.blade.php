            <script src="https://www.google.com/recaptcha/api.js"></script>
<script>

    function loginvalidation()
    {
       $('#regMGS').html('');
        if (userReg.r_email.value == "") {
            $('#regMGS').html('<div class="alert alert-warning">\n\
						 <strong>Warning! </strong> <?php echo 'Please enter the Email.'; ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return false;
                }
            
                if (userReg.r_password.value == "") {
                    $('#regMGS').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong> <?php echo 'Please enter the Password.'; ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return false;
        }
    }


    function registervalidation(){

        $('#regMGS').html('');

            if (userReg.firstname.value == "") {
                    $('#regMGS').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong><?php echo 'Please enter the First Name.'; ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                   return false;
                }

                if (userReg.lastname.value == "") {
                    $('#regMGS').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong> <?php echo 'Please enter the last Name.'; ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return false;
                }

                if (userReg.r_email.value == "") {
                    $('#regMGS').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong> <?php echo 'Please enter the Email.'; ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return false;
                }
            
                if (userReg.r_password.value == "") {
                    $('#regMGS').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong> <?php echo 'Please enter the Password.'; ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return false;
                }

                if (userReg.cpassword.value == "") {
                    $('#regMGS').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong> <?php echo 'Please enter the Confirm Password.'; ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return false;
                }

                 if (userReg.r_password.value != userReg.cpassword.value) {
                    $('#regMGS').html('<div class="alert alert-warning">\n\
									  <strong>Warning! </strong> <?php echo 'The Password field does not match the Confirm Password field.'; ?>\n\
									</div>');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    return false;
                }
                
                response = grecaptcha.getResponse();
                if (response.length == 0) {
                        $('#regMGS').html('<div class="alert alert-warning">\n\
			 					<strong>Warning! </strong><?php echo 'Please mark the reCAPTCHA.'; ?>\n\
							   </div>');

								$("html, body").animate({ scrollTop: 0 }, "slow");
	              	return false;
                } 


    }

    </script>