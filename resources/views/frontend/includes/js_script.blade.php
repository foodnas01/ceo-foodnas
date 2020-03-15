        <script type="text/javascript" src="{!! asset('assets/js/jquery.easing.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('assets/js/slick.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('assets/js/scrollClass.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('assets/js/jquery.smoothScroll.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('assets/js/jquery.syotimer.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('assets/js/counter.js') !!}"></script>
        <script  src="{!! asset('assets/js/translations.js') !!}"></script>
        <script type="text/javascript">
                                      if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                                          var msViewportStyle = document.createElement('style')
                                          msViewportStyle.appendChild(
                                                  document.createTextNode(
                                                          '@-ms-viewport{width:auto!important}'
                                                          )
                                                  )
                                          document.querySelector('head').appendChild(msViewportStyle)
                                      }
        </script>

        <script>
            $('a.smooth_scroll').SmoothScroll({
                duration: 1000,
                offset: 50,
                easing: 'easeOutQuint'
            });
        </script>
        <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
        <script type="text/javascript">
            function show_popup(msg, title_text, color) {
                $('.email_message').text("");
                $('.response_title').text("");

                $('.subscripton_popup').hide();
                $('.email_message').html(msg);
                $('.response_title').css('color', color);
                $('.response_title').text(title_text);
                $('.subscripton_popup').show();

            }

            function hide_popup() {
                $('.email_message').html('<img src="assets/images/loader.gif" alt="loading..." >');
                $('.response_title').css('color', '#000');
                $('.response_title').text("Please wait...");

            }
            function subscribe_email() {
                hide_popup();







                var email = $('#user_email').val();
                if (email) {
                    var valid_email = validateEmail(email);
                    if (!valid_email) {
                        var error = "";
                        //var error = "<h1 style='font-family:arial; margin:0;'>ERROR OCCURED!</h1>";
                        //error += "<img src='assets/images/cross.png' height='100' >";
                        error += "<p>Invalid email - please try again!</p>";

                        show_popup(error, '', 'red');

                        return false;
                    } else {

                        $.ajax({
                            dataType: "json",
                            type: "POST",
                            url: "add_user.php",
                            data: {
                                email: email
                            },
                            success: function (resp) {
                                if (resp.status === 1) {
                                    console.log(resp);
                                    var thanks = "<h1 style='font-family:arial; margin:0;'>THANK YOU!</h1>";
                                    thanks += "<img src='assets/images/ticker.png' height='100' >";
                                    thanks += "<p>" + resp.msg + "</p>";

                                    show_popup(thanks, '', '#a74c9d');
                                } else {
                                    var error = "";

                                    //var error = "<h1 style='font-family:arial; margin:0;'>ERROR OCCURED!</h1>";
                                    //error += "<img src='assets/images/cross.png' height='100' >";
                                    error += "<p>" + resp.msg + "</p>";

                                    show_popup(error, '', 'red');
                                }

                            }
                        });
                    }
                } else {
                    var error = "";

                    //var error = "<h1 style='font-family:arial; margin:0;'>ERROR OCCURED!</h1>";
                    //error += "<img src='assets/images/cross.png' height='100' >";
                    error += "<p>Invalid email - please try again!</p>";

                    show_popup(error, '', 'red');

                    return false;
                }
            }


            function validateEmail(elementValue) {
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return emailPattern.test(elementValue);
            }

            function playVideoCaller(el) {

                video_id = el.getAttribute('vid_id')
                $("#vid iframe").attr('src', video_id);
                $('.video_popup').addClass('active');
                setTimeout(function () {
                    $("#vid").show();
                }, 800);

            }




            $(document).on('ready', function () {

                $(window).scroll(function () {
                    var scrollPos = $(window).scrollTop(),
                            navbar = $('#header');

                    //console.log(scrollPos);
                    if (scrollPos > 10) {
                        navbar.addClass('fix_header');
                    } else {
                        navbar.removeClass('fix_header');
                    }
                });



                $('.menuBtn').click(function () {
                    $('body').toggleClass('active_menu');
                });
                $('.main_nav li a').click(function () {
                    $('body').removeClass('active_menu');
                    $('.main_nav li a').removeClass('active');
                    $(this).addClass('active');
                });
                
                $('.checkLabel').click(function () {
                    $('.checkLabel').toggleClass('checked');
                });
                //$("#submit_btn").click(function () {
                //    $("body").addClass("applied").delay(3000).queue(function () {
                //        $(this).removeClass("applied").dequeue();
                //    });
                //});
                $("#submit_btn").click(function () {
                    $('body').addClass("applied");
                });
                $(".popup_Close").click(function () {
                    $('body').removeClass("applied");
                });
                $('.btn_close').click(function () {
                    $('.video_popup').removeClass('active');
                    $("#vid iframe").attr('src', '');
                    $('#vid').hide();
                });
                $('.tmColumn .link').click(function () {
                    $('.more_content').hide();
                    $(".description").removeClass("active");
                    var obj = $(this).parent().parent().find(".more_content");
                    obj.slideDown();
                    obj.parent().addClass("active");
                });

                $('.tmColumn .link_less').click(function () {
                    var readMore = $(this).parent().parent().find('.readMore');

                    readMore.fadeOut(0);
                    //readMore.css('visibility', 'hidden');
                    $(this).parent().slideUp();
                    $(this).parent().parent().removeClass("active");
                    readMore.fadeIn(3000);
                    //setTimeout(,5000);
                });



                $('.animated').scrollClass({
                    delay: 0.5, //set class after 1 milliseconds delay
                });


                $(".vid-slider-for1").slick({
                    slidesToShow: 1,
                    infinite: false,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    asNavFor: '.vid-slider-nav'
                });
                $(".vid-slider-nav1").slick({
                    ltr: true,
                    arrows: true,
                    infinite: false,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: '.vid-slider-for',
                    dots: false,
                    centerMode: false,
                    focusOnSelect: true,
                });
                $(".main_carousel").slick({
                    dots: true,
                    ltr: true,
                    arrows: false,
                    autoplay: true,
                    infinite: true,
                    fade: true,
                    adaptiveHeight: true,
                    autoplaySpeed: 5000,
                    speed: 1000,
                    slidesToShow: 1,
                    slidesToScroll: 1

                });
                $(".regular").slick({
                    dots: false,
                    ltr: true,
                    arrows: true,
                    autoplay: true,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        }
                    ]

                });
                $(".press_regular").slick({
                    dots: false,
                    ltr: true,
                    arrows: true,
                    infinite: true,
                    autoplay: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                dots: true,
                                arrows: false
                            }
                        },
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]

                });
                $(".menu_coun_sel_outer").on('click', function () {
                    $(".count_list").slideToggle();
                });
            });
</script>