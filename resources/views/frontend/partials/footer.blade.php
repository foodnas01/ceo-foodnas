 <footer>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-5 col-md-12 p-r-5" style="text-align: right;"> 
                    <p><img src="{{asset('frontend/img/Group130.png')}}" width="150" height="36" alt=""></p>
                    <p>{{ __('messages.LoremIpsam') }}</p>
                    <div class="follow_us">
                        <ul>
                            <li style="font-size:1.8125rem">{{ __('messages.FollowUs')}}</li>
                            <li><a href="https://facebook.com/foodnasarabia"><i class="ti-facebook"></i></a></li>
                            <li><a href="https://twitter.com/foodnasarabia"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href=" https://instagram.com/foodnasarabia"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ml-lg-auto" style="text-align: right;">
                    <h5>{{ __('messages.UsefulLinks') }}</h5>
                    <ul class="links">
                        <li><a href="{{URL('about')}}">{{ __('messages.AboutFoodnas') }}</a></li>
                        <li><a href="about.html">{{ __('messages.HowItWorks') }}</a></li>
                        <li><a href="about.html">{{ __('messages.JoinAsHost') }}</a></li>
                        <li><a href="about.html">{{ __('messages.TermsConditions') }}</a></li>
                        <li><a href="about.html">{{ __('messages.PrivacySafetyPolicy') }}</a></li>
                        <li><a href="about.html">{{ __('messages.ContactUs') }}</a></li>
                        <li><a href="about.html">{{ __('messages.Trust') }}</a></li>
                        <li><a href="about.html">{{ __('messages.Jobs') }}</a></li>
                        <li><a href="about.html">{{ __('messages.FAQ') }}</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6" style="text-align: right;">
                    <h5>{{ __('messages.ContactUs') }}</h5>
                    <ul class="contacts">
                        <li><a href="tel://61280932400"><i class="ti-mobile"></i>  +966547475047</a></li>
                        <li><a href="mailto:info@Panagea.com"><i class="ti-email"></i>info@foodnas.com</a></li>
                    </ul>
                    <div id="newsletter">
                    <h6>{{ __('messages.Newsletter') }}</h6>
                    <div id="message-newsletter"></div>
                    <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="{{__('messages.YourEmail')}}">
                            <input type="submit" value="{{__('messages.Submit')}}" id="submit-newsletter">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!--/row-->
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <ul id="footer-selector">
                        <li>
                            <div class="styled-select" id="lang-selector">
                                <select>
                                    <option value="English" selected>English</option>
                                    <option value="French">French</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Russian">Russian</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="styled-select" id="currency-selector">
                                <select>
                                    <option value="US Dollars" selected>US Dollars</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="{{asset('frontend/img/cards_all.svg')}}" alt=""></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul id="additional_links">
                        <li><a href="#0">{{__('messages.TermsConditions')}} </a></li>
                        <li><a href="#0">{{__('messages.Privacy')}}</a></li>
                        <li><span>{{__('messages.Foodnas2020')}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>