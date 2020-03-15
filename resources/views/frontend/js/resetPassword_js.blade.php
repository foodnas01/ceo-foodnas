    <script>
    jQuery(document).ready(function () {
            /*
             Form validation
             */
            $('.login-form input[type="password"]').on('keyup', function () {

                $('.login-form').removeClass('has-error');
                $('.error-message').fadeOut();
            });

            $('.login-form button[type="submit"]').on('click', function (e) {


                $('input[type="password"]').attr('disabled', true);


                var password = $('.login-form [name="password"]').val();
                var retypepassword = $('.login-form [name="retypepassword"]').val();
                var token = $('.token').val();


                if (token == '') {
                    $(this).addClass('input-error');
                    $(this).parent().addClass('has-error');
                    $('.error-message').fadeIn();
                    $('.error-message').text("You have already updated your password.");
                    $('input[type="password"], input[type="retypepassword"]').attr('disabled', true);
                    return false;
                }

                if (password.length < 8) {
                    $(this).addClass('input-error');
                    $(this).parent().addClass('has-error');
                    $('.error-message').fadeIn();
                    $('.error-message').text("Password must consist of 8 characters.");
                    $('.error-message').addClass('alert alert-warning');
                    $('input[type="password"], input[type="retypepassword"]').attr('disabled', false);
                    return false;
                }

                // var reg1 = /.*[0-9].*/;
                // var reg2 = /.*[a-zA-Z].*/;
              
                // if (reg1.test(password) != true || reg2.test(password) != true)
                // {
                //   $(this).addClass('input-error');
                //     $(this).parent().addClass('has-error');
                //     $('.error-message').fadeIn();
                //     $('.error-message').text("Password must consist of 8 alpha numeric characters.");
                //     $('.error-message').addClass('alert alert-warning');
                //     $('input[type="password"], input[type="retypepassword"]').attr('disabled', false);
                //     return false;

                // }

                if (password != retypepassword) {
                    $(this).addClass('input-error');
                    $(this).parent().addClass('has-error');
                    $('.error-message').fadeIn();
                    $('.error-message').text("Password does not match.");
                    $('.error-message').addClass('alert alert-warning');
                    $('input[type="password"], input[type="retypepassword"]').attr('disabled', false);
                    return false;
                }

                var $btn = $(this).button('loading');


                $.post('{{ url('authentication/update_password') }}', {
                    "password": password,
                    "token": token,
                    "_token": "{{ csrf_token() }}"
                }, function (result) {

                    e.preventDefault();
                    $btn.button('reset');
                    if (result == 1) {


                        $('.error-message').addClass('alert-success');
                        $('.error-message').addClass('alert');
                        $('.error-message').removeClass('alert-warning');
                        $('.error-message').removeClass('error-message');
                        $('.alert-success').fadeIn();

                        $('.alert-success').text('Password has been updated successfully.');

                        $('input[type="password"]').attr('disabled', true);
                        $('.submitbtn').remove();


                    } else {
                        $(this).addClass('input-error');
                        $(this).parent().addClass('has-error');
                        $('.error-message').fadeIn();
                        $('.error-message').addClass('alert alert-warning');
                        $('.error-message').text("Error. Kindly contact the administrator.");
                        $('input[type="text"], input[type="password"]').attr('disabled', true);

                    }


                });

                return false;


            });


        });


    </script>

    <!--[if lt IE 10]>
    <script src="assets/js/placeholder.js"></script>
    <![endif]-->