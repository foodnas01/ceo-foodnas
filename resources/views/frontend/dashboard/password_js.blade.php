<script>  
$('.changePasswordForm').bind('submit', function (event) {
            $this = $(this);
            event.preventDefault();
            $.ajax({
                type: "POST",
                data: $this.serialize() + '&_token={{ csrf_token() }}',
                url: "{{ route('submitChangePassword') }}",
                success: function () {
                    $this.find('.MSG').html('<div class="alert alert-success">\n\
							  <strong>Success!</strong><?php echo trans('messages.password_changed_successfully'); ?>\n\
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
                    $("html, body").animate({scrollTop: 0}, "slow");
                }
            })
        })
</script>