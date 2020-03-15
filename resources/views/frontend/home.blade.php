@extends('layouts.main')
@section('style')
<style type="text/css">
        video#bgvid {
            position: relative;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            background-size: cover;
            -webkit-transition: 1s opacity;
            transition: 1s opacity;
        }
</style>
@stop

@section('content')
<div class="main_section">
                <div class="img_holder visible-xs">
                    <img src="assets/images/bg_main_header_img.jpg" alt="main header image" class="img-responsive">
                </div>
                <div class="cover">
                    <div class="table">
                        <div class="table_cell">
                            <div class="container">
                                <div class="main_carousel slider">
                                    <div>
                                        <blockquote>
                                            <q>
                                                <span class="quote_open"><img src="assets/images/quote_open.png" class="img-responsive"></span>
                                                Terra Virtua’s ‘Netflix for VR’ pitch is <span class="fw_700">great,</span> but its blockchain economy could be <span class="fw_700">brilliant.</span>
                                                <span class="quote_close"><img src="assets/images/quote_close.png" class="img-responsive"></span>
                                            </q>
                                            <cite>John Moore, Crypto News Review</cite>
                                        </blockquote>
                                    </div>
                                    <div>
                                        <blockquote>
                                            <q>
                                                <span class="quote_open"><img src="assets/images/quote_open.png" class="img-responsive"></span>
                                                The most <span class="fw_700">striking aspect</span> of stepping into the Terra Virtua world in VR for the first time is the 3D setting – like a massive shopping arcade – which acts as the central community hub.
                                                <span class="quote_close"><img src="assets/images/quote_close.png" class="img-responsive"></span>
                                            </q>
                                            <cite>Jon Jordan, Blockchaingamer.biz</cite>
                                        </blockquote>
                                    </div>
                                    <div>
                                        <blockquote>
                                            <q>
                                                <span class="quote_open"><img src="assets/images/quote_open.png" class="img-responsive"></span>
                                                Think of a condensed version of <span class="fw_700">Ready Player One’s</span> OASIS, and you’re <span class="fw_700">halfway there.</span>
                                                <span class="quote_close"><img src="assets/images/quote_close.png" class="img-responsive"></span>
                                            </q>
                                            <cite>Kieran McLoone, Culturedvultures.com</cite>
                                        </blockquote>
                                    </div>
                                    <div>
                                        <blockquote>
                                            <q>
                                                <span class="quote_open"><img src="assets/images/quote_open.png" class="img-responsive"></span>
                                                I'm very, <span class="fw_700">very excited,</span> professionally and personally... this is the <span class="fw_700">seed</span> of something that will become very much <span class="fw_700">bigger.</span>
                                                <span class="quote_close"><img src="assets/images/quote_close.png" class="img-responsive"></span>
                                            </q>
                                            <cite>Mike Gamble, Epic Games</cite>
                                        </blockquote>
                                    </div>
                                    <div>
                                        <blockquote>
                                            <q>
                                                <span class="quote_open"><img src="assets/images/quote_open.png" class="img-responsive"></span>
                                                Creating the Netflix of virtual and augmented realities is a fantastic mission. <span class="fw_700">It can truly change the gaming industry.</span>
                                                <span class="quote_close"><img src="assets/images/quote_close.png" class="img-responsive"></span>
                                            </q>
                                            <cite>Nick Button-Brown, BAFTA</cite>
                                        </blockquote>
                                    </div>
                                    <div>
                                        <blockquote>
                                            <q>
                                                <span class="quote_open"><img src="assets/images/quote_open.png" class="img-responsive"></span>
                                                目前看来这个VR订阅平台功能全面，而且内容涵盖了从VR到AR等各个方面，十分丰富。同时其订阅模式也很新颖，为用户提供了更多看点，未来还将不断推出新的内容，有望成为一个全新的VR内容平台。
                                                <span class="quote_close"><img src="assets/images/quote_close.png" class="img-responsive"></span>
                                            </q>
                                            <cite>www.dyjrxw.com</cite>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="holder">
                                    <p class="tr video_text">
                                        <span class="tr" key="pre-ico-open">Pre-ICO is open! Contribute now with 50% bonus!</span>
                                        <!--<br>
                                        <span class="tr" key="rgtr-lock-bonus">Register and lock in your 50% bonus now!</span>-->
                                    </p>
                                    <a href="login" class="tr btn btn-default register" key="rgtr-token-sale">REGISTER FOR TOKEN SALE NOW!</a>
                                    <ul class="list-inline social_icons">
                                        <li>
                                            <a href="https://www.facebook.com/Terra-Virtua-2000931300180443" target="_blank">
                                                <img src="assets/images/facebook_icon.png" alt="Facebook" class="img-responsive">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/terra_virtua" target="_blank">
                                                <img src="assets/images/twitter_icon.png" alt="Twitter" class="img-responsive">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/company/terravirtua/" target="_blank">
                                                <img src="assets/images/linkedin_icon.png" alt="linkedin" class="img-responsive">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.reddit.com/user/terravirtua" target="_blank">
                                                <img src="assets/images/reddit_social_icon.png" alt="Reddit" class="img-responsive">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCi2y4UBnoMzjjQU411jjY9A/featured" target="_blank">
                                                <img src="assets/images/youtube_icon.png" alt="Youtube" class="img-responsive">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://medium.com/terravirtua" target="_blank">
                                                <img src="assets/images/medium_social_icon.png" alt="Medium" class="img-responsive">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://t.me/TerraVirtua" target="_blank">
                                                <img src="assets/images/telegram_social_icon.png" alt="Telegram" class="img-responsive">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://bitcointalk.org/index.php?topic=3157913.0" target="_blank">
                                                <img src="assets/images/bitcoin_icon_blue.png" alt="Bit Coin" class="img-responsive">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Whitepaper -->

            <section id="whitepaper" class="section_info">
                <div class="holder">
                    <div class="container_info">
                        <div class="column img_holder">
                            <a href="assets/images/Terra_Virtua_Whitepaper_eng.pdf" target="_blank">
                                <img src="assets/images/whitepapercover.jpg" alt="Whitepaper" class="img-responsive">
                                <!--<img src="assets/images/whitepaper_img_mobile.jpg" alt="Whitepaper" class="img-responsive visible-xs">-->
                            </a>
                        </div>
                        <div class="column text_holder">
                            <div class="table">
                                <div class="table_cell">
                                    <h1 class="tr" key="s2-h1">Whitepaper</h1>
                                    <p class="tr" key="s2-h2">Download our whitepaper in your preferred language.</p>
                                    <ul class="list-inline flags">
                                        <li>
                                            <a href="assets/images/Terra_Virtua_Whitepaper_eng.pdf" target="_blank">
                                                <img src="assets/images/english_flag.png" alt="Flag" class="img-responsive">
                                                <span key="s2-p1" class="tr title">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="assets/images/russian_flag.png" alt="Flag" class="img-responsive">
                                                <span key="s2-p2" class="tr title">Russian</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="assets/images/Terra_Virtua_Whitepaper_kor.pdf" target="_blank">
                                                <img src="assets/images/korean_flag.png" alt="Flag" class="img-responsive">
                                                <span key="s2-p3" class="tr title">Korean</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="assets/images/Terra_Virtua_Whitepaper_jpn.pdf" target="_blank">
                                                <img src="assets/images/japanese_flag.png" alt="Flag" class="img-responsive">
                                                <span key="s2-p4" class="tr title">Japanese</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="assets/images/Terra_Virtua_Whitepaper_cn.pdf" target="_blank">
                                                <img src="assets/images/chinese_flag.png" alt="Flag" class="img-responsive">
                                                <span class="title">Simplified Chinese</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="assets/images/Terra_Virtua_Whitepaper_tr_cn.pdf" target="_blank">
                                                <img src="assets/images/taiwan_flag.png" alt="Flag" class="img-responsive">
                                                <span  key="s2-p5" class="tr title">Traditional Chinese</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About -->

            <section id="about" class="about_section">
                <div class="holder">
                    <div class="head">
                        <h1 key="s3-h1" class="tr fc_white">Vision</h1>
                        <p key="s3-h2-1" class="tr fc_white text-center">Terra Virtua is the first fully immersive, blockchain-driven VR entertainment Platform.<br> <span key="s3-h2-2" class="tr">Welcome to the future. Welcome to Terra Virtua.</span></p>
                    </div>
                    <div class="text_container">
                        <div class="column">
                            <p class="tr" key="s3-h2-3">Terra Virtua is a unique virtual platform, focusing entirely on immersive VR entertainment, built around a strong community and social connection. </p>
                            <p class="tr" key="s3-h3">Supported by developers, run by industry leaders and secured by blockchain, Terra Virtua is the platform for the next generation and dimension in entertainment and engagement.</p>
                        </div>
                        <div class="column">
                            <p class="tr" key="s3-h4">Terra Virtua will have its own robust, secure blockchain based economy. Zones, in-game items, skins, upgrades and unique experiences can be bought and sold within Terra Virtua, driven by our token, the Terra Virtua TERRA (TVT). TVT owners will be a vital part of the ecosystem, kickstarting the Terra Virtua economy.</p>
                            <div class="eko_logo">
                                <img src="assets/images/eko_img.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Team Section -->

            <section id="team" class="team_section">
                <div class="holder">
                    <h1 key="s4-h1" class="tr fc_blue">The Team</h1>
                    <div class="team_wrap">
                        <div class="block tmColumn">
                            <div class="img_wrap">
                                <div class="img_holder">
                                    <img src="assets/images/team/team_img1.jpg" class="img-responsive" alt="Team image">
                                </div>
                                <a href="https://www.linkedin.com/in/garybracey/" target="_blank" class="sc_icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="text">
                                <h2>Gary Bracey <span class="tr" key="s4-h2-2">Chief Executive Officer</span></h2>
                                <div class="description">
                                    <span class=" moreSign"><span key="s4-h3-1" class="tr">A BAFTA-nominated games industry veteran of 35+ years, has been active in all aspects of the business from... </span><span key="s4-h3-2" class="tr link readMore">read more</span></span>
                                    <div class=" more_content">
                                        <span key="s4-h4-1" class="tr">A BAFTA-nominated games industry veteran of 35+ years, has been active in all aspects of the business from Head of Development at Ocean Software in the 80’s/90’s to Founder of tech company Digimask in 2000. Having been involved in every transition of the videogames cycle, from home computer to console to mobile to VR, Bracey has demonstrated an ability to identify and bring to market successful games, not only for the Western territories but also for Asia. Success in both the development and commercial aspects of the industry has lent him a unique and rounded perspective of the business. Bracey is an active member of both BAFTA and UKIE </span><br><span key="s4-h4-2" class="tr link_less">read less</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block tmColumn">
                            <div class="img_wrap">
                                <div class="img_holder">
                                    <img src="assets/images/team/team_img2.jpg" class="img-responsive" alt="Team image">
                                </div>
                                <a href="https://www.linkedin.com/in/peterbergstrom/" target="_blank" class="sc_icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="text">
                                <h2>Peter Bergstrom <span key="s4-h5-2" class="tr">Chief Strategy Officer</span></h2>
                                <div class="description"><span class=" moreSign"><span key="s4-h6-1" class="tr">Peter is an honorary lifetime member of the Bitcoin Foundation (US) and has had a career spanning more than 25... </span><span key="s4-h6-2" class="tr link readMore">read more</span></span>
                                    <div class=" more_content">
                                        <p class="tr" key="s4-h7-1">Peter is an honorary lifetime member of the Bitcoin Foundation (US) and has had a career spanning more than 25 years working as a senior game software executive for, among others, Microsoft (HQ), Sony Europe and as founder/CEO of his own games publisher.</p>
                                        <span class="tr" key="s4-h7-2">An early enthusiast and investor in the Bitcoin eco-system since 2011. Founded BitBlock Ventures in 2014, a blockchain, ICO and smart contract enterprise development firm based in Singapore and Europe. </span><br><span key="s4-h7-3" class="tr link_less">read less</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block tmColumn">
                            <div class="img_wrap">
                                <div class="img_holder">
                                    <img src="assets/images/team/team_img3.jpg" class="img-responsive" alt="Team image">
                                </div>
                                <a href="https://www.linkedin.com/in/khirani/" target="_blank" class="sc_icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="text">
                                <h2>Kish Hirani <span class="tr" key="s4-h8-2-1">Chief Technology Officer</span></h2>
                                <div class="description"><span class=" moreSign"><span key="s4-h8-1" class="tr">20+ years career in the games industry. Former Head of Developer services for Sony PlayStation VR from early... </span><span key="s4-h8-2" class="tr link readMore">read more</span></span>
                                    <div class="more_content">
                                        <p><span class="tr" key="s4-h9-1">20+ years career in the games industry. Former Head of Developer services for Sony PlayStation including PlayStation VR from early concept to launch. Also was technical director for development studios and publishing houses including Acclaim, THQ and Microsoft. Kish’s experience has included running divisions developing and managing resources for all developer-facing technical </span><strong class="tr" key="s4-h9-2">activities</strong>.</p>
                                        <span class="tr" key="s4-h10-1">Recently as tech consultant, mentor and advisor, mainly still in the games industry, he has been shaping the VR and AR scene via talks and panels at notable videogames conferences as well as through the BAFTA VR advisory group and UKIE Mixed Reality Subgroup.</span> <br><span key="s4-h10-2" class="tr link_less">read less</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block tmColumn">
                            <div class="img_wrap">
                                <div class="img_holder">
                                    <img src="assets/images/team/team_img7.jpg" class="img-responsive" alt="Team image">
                                </div>
                                <a href="https://www.linkedin.com/in/dougdyer" target="_blank" class="sc_icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="text">
                                <h2>Doug Dyer <span class="tr" key="s4-h11-2">Chief Operating Officer</span></h2>
                                <div class="description"><span class="moreSign"><span key="s4-h12-1" class="tr">A PC, console and mobile industry veteran having worked at Microsoft Game Studios and is the founder of...</span><span key="s4-h11-2" class="tr link readMore">read more</span></span>
                                    <div class="more_content">
                                        <span class="tr" key="s4-h13-1">A PC, console and mobile industry veteran having worked at Microsoft Game Studios and is the founder of Warner Bros. and THQ’s mobile games divisions. During his career he has helped produce more than 300 different game titles, design games and negotiate publishing deals. As an experienced entrepreneur he has also helped create and build 3 successful international entertainment software companies. </span><br><span key="s4-h13-2" class="tr link_less">read less</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block tmColumn">
                            <div class="img_wrap">
                                <div class="img_holder">
                                    <img src="assets/images/team/team_img4.jpg" class="img-responsive" alt="Team image">
                                </div>
                                <a href="https://www.linkedin.com/in/jawad-ashraf-7532315a/" target="_blank" class="sc_icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="text">
                                <h2>Jawad Ashraf <span class="tr" key="s4-h14-2">Founder</span></h2>
                                <div class="description"><span class="moreSign"><span key="s4-h15-1" class="tr">Jawad Ashraf is a successful enterpreneur focused on technology innovation over a period of thirty... </span><span key="s4-h15-2" class="tr link readMore">read more</span></span>
                                    <div class="more_content">
                                        <span class="tr" key="s4-h16-1">Jawad Ashraf is a successful enterpreneur focused on technology innovation over a period of thirty years. Currently Head of Technology at the Entertainer Dubai working on the most successful mobile application in the Middle East. Investor in successful mobile application companies and has been in the VR space since its inception, releasing titles on every platform.</span> <br><span key="s4-h16-2" class="tr link_less">read less</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block tmColumn">
                            <div class="img_wrap">
                                <div class="img_holder">
                                    <img src="assets/images/team/team_img5.jpg" class="img-responsive" alt="Team image">
                                </div>
                                <a href="https://www.linkedin.com/in/sabrina-gasson-0078a14/" target="_blank" class="sc_icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="text">
                                <h2>Sabrina Gasson <span class="tr" key="s4-h17-2">Head of Marketing</span></h2>
                                <div class="description"><span class="moreSign"><span class="tr" key="s4-h18-1">Fintech, blockchain ICO and video games marketing professional with 14 years managing in-game revenue, online...</span> <span key="s4-h18-2" class="tr link readMore">read more</span></span>
                                    <div class="more_content">
                                        <span class="tr" key="s4-h19-1">Fintech, blockchain ICO and video games marketing professional with 14 years managing in-game revenue, online digital sales, defining KPIs, executing media plans, measuring data, reporting results, analysing online behavior, engaging users and monetizing users! All within free-to-play/micro-transactions based economies to the large budget hit driven market. </span><br><span key="s4-h19-2" class="tr link_less">read less</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block tmColumn">
                            <div class="img_wrap">
                                <div class="img_holder">
                                    <img src="assets/images/team/team_img6.jpg" class="img-responsive" alt="Team image">
                                </div>
                                <a href="https://www.linkedin.com/in/keithramsdale/" target="_blank" class="sc_icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="text">
                                <h2>Keith Ramsdale <span class="tr" key="s4-h20-2">Director</span></h2>
                                <div class="description"><span class="moreSign"><span class="tr" key="s4-h21-1">A Games Industry veteran of 25+ years, Keith was Vice President of the Major Markets in Europe at Electronic Arts until... </span><span key="s4-h21-2" class="tr link readMore">read more</span></span>
                                    <div class="more_content">
                                        <p class="tr" key="s4-h22-1">A Games Industry veteran of 25+ years, Keith was Vice President of the Major Markets in Europe at Electronic Arts until 2015. As a key executive, he held responsibility for the P&L delivery across the region, working alongside EA’s Studios, Country teams and external partners. Directly after leaving EA, he took an non-executive director role advising an Esports start up. Keith joined Testronic Laboratories, the QA and localization specialists as Chief Operating Officer in early 2016. During his time there he has overseen the on boarding of the world largest games and film companies.</p>
                                        <p><strong class="tr" key="s4-h22-2">Industry Support:</strong></p>
                                        <span class="tr" key="s4-h22-3">Recognised in PCR’s 2014 “50 Most Influential People in Tech.” Board member at UKIE – the trade body for the UK's games and interactive entertainment industry. Chairman of The London Games Festival Industry. Figurehead for the Government’s 2008 Byron Review negotiating with UK Government to re-define the Video Games Age Rating system.</span> <br><span key="s4-h22-4" class="tr link_less">read less</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block tmColumn">
                            <div class="img_wrap">
                                <div class="img_holder">
                                    <img src="assets/images/team/team_img8.jpg" class="img-responsive" alt="Team image">
                                </div>
                                <a href="https://www.linkedin.com/in/sergeykhandogin/" target="_blank" class="sc_icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="text">
                                <h2>Sergiy Khandogin <span key="s4-h23-2" class="tr">Blockchain Advisor</span></h2>
                                <div class="description"><span class="moreSign"><span class="tr" key="s4-h24-1">Sergiy Khandogin is TerraVirtua's resident expert blockchain and cryptocurrency advisor.  Sergiy has been working in the...</span> <span key="s4-h24-2" class="tr link readMore">read more</span></span>
                                    <div class="more_content">
                                        <p class="tr" key="s4-h25-1">Sergiy Khandogin is Terra Virtua's resident expert blockchain and cryptocurrency advisor.  Sergiy has been working in the IT industry since 1997, primarily serving as a senior programmer and architect for a number of leading development companies.</p>
                                        <span class="tr" key="s4-h25-2">As the current CTO of Innovecs, Ukraine's top tech outsourcing company, Sergiy has taken the company to a leadership position in the design, strategy and development of blockchain platforms and technologies.   Having led multiple crypto-based development efforts with focus on cross technology balance, through his experience and expertise, Sergiy has established himself as a leader in this emerging yet explosive area. </span><br><span key="s4-h25-3" class="tr link_less">read less</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block tmColumn">
                            <div class="img_wrap">
                                <div class="img_holder">
                                    <img src="assets/images/team/team_img9.jpg" class="img-responsive" alt="Team image">
                                </div>
                                <a href="https://pr.linkedin.com/in/michaelterpin" target="_blank" class="sc_icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="text">
                                <h2>Michael Terpin <span class="tr" key="s4-h26-2">Advisor</span></h2>
                                <div class="description"><span class="moreSign"><span class="tr" key="s4-h27-1">Michael Terpin is founder and CEO of Transform Group, whose divisions include Transform PR, a global public relations... </span><span key="s4-h27-2" class="tr link readMore">read more</span></span>
                                    <div class="more_content">
                                        <span class="tr" key="s4-h28-1">Michael Terpin is founder and CEO of Transform Group, whose divisions include Transform PR, a global public relations firm that has helped launch 70 ICO’s including Augur, Ethereum, Gnosis, Qtum and Neo; CoinAgenda, a conference series for cryptocurrency investors, and Transform Strategies, the company’s advisory division. He heads up the ICO investment committee in Alphabit Fund (www.alphabit.fund), a Cayman Island registered digital currency fund with an authorized $300 million assets under management. </span><br><span key="s4-h28-2" class="tr link_less">read less</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block tmColumn">
                            <div class="img_wrap">
                                <div class="img_holder">
                                    <img src="assets/images/team/team_img10.jpg" class="img-responsive" alt="Team image">
                                </div>
                                <a href="http://linkedin.com/in/philippeerwin" target="_blank" class="sc_icon">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="text">
                                <h2>Phillipe Erwin <span class="tr" key="s4-h29-2">Business Development Advisor</span></h2>
                                <div class="description"><span class="moreSign"><span class="tr" key="s4-h30-1">With a background in international and intellectual property law, Philippe has been working in the games industry for... </span><span key="s4-h30-2" class="tr link readMore">read more</span></span>
                                    <div class="more_content">
                                        <span class="tr" key="s4-h31-1">With a background in international and intellectual property law, Philippe has been working in the games industry for over 20 years in various roles, from marketing and production, to legal and business development. He has held senior executive positions at several fortune 500 companies, including Activision Blizzard, Universal Studios and Warner Bros. Working with some of the industry’s top franchises, including Batman, Harry Potter, The Matrix, Tony Hawk, Spyro and Crash Bandicoot, Philippe has developed a deep understanding of the business of making and selling video games. </span><br><span key="s4-h31-2" class="tr link_less">read less</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Entertainment -->

            <section class="ent_section">
                <div class="holder">
                    <h1 class="tr" key="s5-h1">The home of immersive entertainment</h1>
                    <div class="wrap">
                        <div class="imgs_block">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="img_holder">
                                        <img src="assets/images/ent_section_img1.jpg" alt="image description" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="img_holder">
                                        <img src="assets/images/ent_section_img2.jpg" alt="image description" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="img_holder">
                                        <img src="assets/images/ent_section_img3.jpg" alt="image description" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="img_holder">
                                        <img src="assets/images/ent_section_img4.jpg" alt="image description" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text_holder">
                            <p key="s5-h2" class="tr">A group of experienced Video Games Industry veterans have joined forces to bring together Blockchain, Entertainment and the growing VR market.</p>
                            <p key="s5-h3" class="tr">With numerous game developers already signed up, Terra Virtua combines the admission elements of Netflix (monthly subscription for all content), and pay per attraction to create a unique, immersive platform.</p>
                            <div class="btn_wrap">
                                <a href="#" key="s5-h4" class="tr btn">View Whitepaper</a>
                                <a href="#" key="s5-h5" class="tr btn">More info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Video Section -->

            <section class="video_section">
                <div class="video_wrap">
                    <img src="assets/images/bg_walkthrough.jpg" alt="image description" class="img-responsive">
                </div>
                <div class="holder">
                    <div class="table">
                        <div class="table_cell">
                            <span class="icon_play"
                                  vid_id="https://player.vimeo.com/video/262533671?autoplay=1&title=0&byline=0&portrait=0" onclick="playVideoCaller(this)">
                                <img src="assets/images/play_icon.png"
                                     class="img-responsive" alt="icon play">
                            </span>
                            <p class="tr" key="s6-h1">Watch an Introduction to Terra Virtua</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="overlaySection"> -->
                <!-- <div class="table"> -->
                <!-- <div class="table_cell"> -->
                <!-- <h1 key="s6-h2" class="tr fc_white">Coming soon - register for a sneak peak!</h1> -->
                <!-- </div> -->
                <!-- </div> -->
                <!-- </div> -->
            </section>

            <!-- Terra Virtua Videos -->

            <section id="world" class="tr_infoSection">
                <div class="holder">
                    <span class="tr_logo">
                        <img src="assets/images/terra_black_logo.png" class="img-responsive" alt="logo">
                    </span>
                    <div class="wrap_columns">
                        <div class="gridWrap">
                            <div class="column left_column">
                                <h1 class="tr" key="s7-h1">THE PLATFORM</h1>
                                <div class="gallery">
                                    <div class="vid-slider-for slider">
                                        <div>
                                            <div class="vid_frame" vid_id="https://player.vimeo.com/video/254128915?autoplay=1&title=0&byline=0&portrait=0" >
                                                <img src="assets/images/video_poster1.jpg" class="img-responsive">
                                                <!--<span class="icon_play vid1_btn"><img src="assets/images/play_icon.png" class="img-responsive" alt="icon play"></span>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vid-slider-nav slider">
                                        <div class="vid_frame" vid_id="https://player.vimeo.com/video/254129782?autoplay=1&title=0&byline=0&portrait=0">
                                            <img src="assets/images/video_poster2.jpg" class="img-responsive">
                                            <!--<span class="icon_play"><img src="assets/images/play_icon.png" class="img-responsive" alt="icon play"></span>-->
                                        </div>
                                        <div class="vid_frame" vid_id="https://player.vimeo.com/video/254129651?autoplay=1&title=0&byline=0&portrait=0">
                                            <img src="assets/images/video_poster3.jpg" class="img-responsive">
                                            <!--<span class="icon_play"><img src="assets/images/play_icon.png" class="img-responsive" alt="icon play"></span>-->
                                        </div>
                                        <div class="vid_frame" vid_id="https://player.vimeo.com/video/254130133?autoplay=1&title=0&byline=0&portrait=0">
                                            <img src="assets/images/video_poster4.jpg" class="img-responsive">
                                            <!--<span class="icon_play"><img src="assets/images/play_icon.png" class="img-responsive" alt="icon play"></span>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="text_holder">
                                    <p class="tr" key="s7-h2">Terra Virtua will be a social experience, creating new communities in addition to allowing players to form their own groups of established friends. They might form a team to compete with another group in Sports, Combat, Escape Room encounters and much more. Terra Virtua zones will include race, sports, battle, adventure and space themes. Each zone will contain games and experiences matching that theme. A Sports zone could offer a VR Golfing game to enjoy with your friends, the option to view a game or visit a stadium showing events!</p>
                                </div>
                            </div>
                            <div class="column right_column">
                                <h1 class="tr" key="s7-h3">THE MIXED REALITY APP</h1>
                                <div class="img_holder">
                                    <img src="assets/images/mobile_img.png" class="img-responsive">
                                </div>
                                <div class="text_holder">
                                    <p class="tr" key="s7-h4">Terra Virtua doesn't end when the VR headset is removed. The Terra Virtua 'mixed reality' companion app connects to Terra Virtua even when you're on the move, ensuring the user has access with 1 touch on their smartphone. Everyone in Terra Virtua has their own customisable 'Vflect' avatar that lives in the virtual world and in the app, allowing access to marketplaces for content creators, land, in game items, new experiences based upon your interests, and allows you to plan your next visit to Terra Virtua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Road Map Section -->

            <section id="roadmap" class="rdMap_section">
                <div class="holder">
                    <h1 key="s8-h1" class="tr fc_white">RoadMap</h1>
                    <div class="rdMap_img">
                        <img src="assets/images/rdMap_img.png" class="img-responsive hidden-xs">
                        <a href="assets/images/rdMap_img_2.png" target="_blank" class="visible-xs">
                            <img src="assets/images/rdMap_img.png" class="img-responsive">
                        </a>
                    </div>
                </div>
            </section>

            <!-- Partners Section -->

            <section id="partners" class="prt_section">
                <div class="holder">
                    <h1 class="tr" key="s9-h1">Partners</h1>
                    <div class="sliderWrap">
                        <!--<span class="info_alert text-center">Our exciting partners will be announced soon!</span>-->
                        <div class="regular slider">
                            <div>
                                <div class="block">
                                    <div class="table">
                                        <div class="table_cell">
                                            <img src="assets/images/epic_logo.png" alt="Partner Logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="table">
                                        <div class="table_cell">
                                            <img src="assets/images/make_real_logo.png" alt="Partner Logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="table">
                                        <div class="table_cell">
                                            <img src="assets/images/cooperative_innovations_logo.png" alt="Partner Logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="table">
                                        <div class="table_cell">
                                            <img src="assets/images/bim-logo.png" alt="Partner Logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="table">
                                        <div class="table_cell">
                                            <img src="assets/images/varrow_logo.png" alt="Partner Logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="btn_center">
                        <a href="#" class="show_btn">Show All</a>
                    </div>-->
                </div>
            </section>

            <!-- News Section -->

            <section id="news" class="news_section">
                <div class="holder">
                    <!--<h1>NEWS & EVENTS <br> Coming soon</h1>-->

                    <!-- News -->
                    <!--<div class="regular slider news">
                            <div>
                                    <div class="block">
                                            <div class="img_holder">
                                                    <img src="assets/images/news_img1.jpg" class="img-responsive" alt="news image">
                                            </div>
                                            <div class="text_holder">
                                                    <h2><a href="#">Ut nec sodales lorem</a></h2>
                                                    <p>Cras massa nulla, cursus quis purus eu, varius feugiat urna. Praesent vulputate placerat turpis, nec fringilla turpis sollicitudin at. Phasellus convallis quam eget risus ultricies dignissim.</p>
                                            </div>
                                    </div>
                            </div>
                            <div>
                                    <div class="block">
                                            <div class="img_holder">
                                                    <img src="assets/images/news_img2.jpg" class="img-responsive" alt="news image">
                                            </div>
                                            <div class="text_holder">
                                                    <h2><a href="#">Vivamus sed lacus vitae lacus cursus fringilla</a></h2>
                                                    <p>Cras massa nulla, cursus quis purus eu, varius feugiat urna. Praesent vulputate placerat turpis, nec fringilla turpis sollicitudin at. Phasellus convallis quam eget risus ultricies dignissim.</p>
                                            </div>
                                    </div>
                            </div>
                            <div>
                                    <div class="block">
                                             <div class="img_holder">
                                                    <img src="assets/images/news_img3.jpg" class="img-responsive" alt="news image">
                                             </div>
                                            <div class="text_holder">
                                                    <h2><a href="#">Ut nec sodales lorem</a></h2>
                                                    <p>Cras massa nulla, cursus quis purus eu, varius feugiat urna. Praesent vulputate placerat turpis, nec fringilla turpis sollicitudin at. Phasellus convallis quam eget risus ultricies dignissim.</p>
                                            </div>
                                    </div>
                            </div>
                            <div>
                                    <div class="block">
                                            <div class="img_holder">
                                                    <img src="assets/images/news_img1.jpg" class="img-responsive" alt="news image">
                                            </div>
                                            <div class="text_holder">
                                                    <h2><a href="#">Ut nec sodales lorem</a></h2>
                                                    <p>Cras massa nulla, cursus quis purus eu, varius feugiat urna. Praesent vulputate placerat turpis, nec fringilla turpis sollicitudin at. Phasellus convallis quam eget risus ultricies dignissim.</p>
                                            </div>
                                    </div>
                            </div>
                            <div>
                                    <div class="block">
                                            <div class="img_holder">
                                                    <img src="assets/images/news_img2.jpg" class="img-responsive" alt="news image">
                                            </div>
                                            <div class="text_holder">
                                                    <h2><a href="#">Ut nec sodales lorem</a></h2>
                                                    <p>Cras massa nulla, cursus quis purus eu, varius feugiat urna. Praesent vulputate placerat turpis, nec fringilla turpis sollicitudin at. Phasellus convallis quam eget risus ultricies dignissim.</p>
                                            </div>
                                    </div>
                            </div>
                            <div>
                                    <div class="block">
                                            <div class="img_holder">
                                                    <img src="assets/images/news_img3.jpg" class="img-responsive" alt="news image">
                                            </div>
                                            <div class="text_holder">
                                                    <h2><a href="#">Ut nec sodales lorem</a></h2>
                                                    <p>Cras massa nulla, cursus quis purus eu, varius feugiat urna. Praesent vulputate placerat turpis, nec fringilla turpis sollicitudin at. Phasellus convallis quam eget risus ultricies dignissim.</p>
                                            </div>
                                    </div>
                            </div>
                    </div>-->

                    <!-- Press -->

                    <div class="press_wrap" style="padding:0;">
                        <h1>In the press</h1>
                        <div class="press_regular slider press">
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="http://www.the-blockchain.com/2018/03/09/netflix-for-vr-terra-virtua-launches-platform-ahead-of-ico/" target="_blank">
                                                <img src="assets/images/blockchain_logo.png" class="Block Chain">
                                            </a>
                                        </div>
                                        <h2><a href="http://www.the-blockchain.com/2018/03/09/netflix-for-vr-terra-virtua-launches-platform-ahead-of-ico/" target="_blank">Netflix for VR? Terra Virtua Launches Platform Ahead of ICO</a></h2>
                                        <p>Terra Virtua, a subscription-based, virtual reality (VR) platform launched on Wednesday in London, ahead of an initial coin offering (ICO), in a bid to create a mainstream product <a href="http://www.the-blockchain.com/2018/03/09/netflix-for-vr-terra-virtua-launches-platform-ahead-of-ico/" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="https://bitcoinist.com/video-games-industry-veterans-launch-terra-virtua-first-ever-subscription-based-virtual-reality-entertainment-platform/" target="_blank">
                                                <img src="assets/images/bitcoin_logo_press.png" class="Chipin">
                                            </a>
                                        </div>
                                        <h2><a href="https://bitcoinist.com/video-games-industry-veterans-launch-terra-virtua-first-ever-subscription-based-virtual-reality-entertainment-platform/" target="_blank">Video Games Industry Veterans Launch Terra Virtua, the First-Ever...</a></h2>
                                        <p>London, 8th March 2018: Today marks the highly anticipated launch of Terra Virtua, a completely new category of virtual reality experience that brings together VR gaming <a href="https://bitcoinist.com/video-games-industry-veterans-launch-terra-virtua-first-ever-subscription-based-virtual-reality-entertainment-platform/" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="https://www.gamesindustry.biz/articles/2018-03-09-subscription-based-virtual-reality-platform-terra-virtua-launching-this-september" target="_blank">
                                                <img src="assets/images/gamesindustry_logo.png" class="Chipin">
                                            </a>
                                        </div>
                                        <h2><a href="https://www.gamesindustry.biz/articles/2018-03-09-subscription-based-virtual-reality-platform-terra-virtua-launching-this-september" target="_blank">Subscription-based virtual reality platform Terra Virtua launching...</a></h2>
                                        <p>A new virtual reality marketplace will go live later this year, allowing users to pay a monthly fee for full access to all virtual and augmented reality content. <a href="https://www.gamesindustry.biz/articles/2018-03-09-subscription-based-virtual-reality-platform-terra-virtua-launching-this-september" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="https://www.chipin.com/terra-virtua-ico-video-games-industry-veterans-launch-terra-virtua/" target="_blank">
                                                <img src="assets/images/Chipin_logo.png" class="Chipin">
                                            </a>
                                        </div>
                                        <h2><a href="https://www.chipin.com/terra-virtua-ico-video-games-industry-veterans-launch-terra-virtua/" target="_blank">Video games industry veterans launch Terra Virtua, the first-ever...</a></h2>
                                        <p>Today marks the highly anticipated launch of Terra Virtua, a completely new category of virtual reality experience that brings together VR gaming, social experiences and spectator events <a href="https://www.chipin.com/terra-virtua-ico-video-games-industry-veterans-launch-terra-virtua/" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="https://www.vrfocus.com/2018/03/terra-virtua-launching-this-september/" target="_blank">
                                                <img src="assets/images/vr_focus_logo.png" class="Focus">
                                            </a>
                                        </div>
                                        <h2><a href="https://www.vrfocus.com/2018/03/terra-virtua-launching-this-september/" target="_blank">Terra Virtua Launching This September</a></h2>
                                        <p>A new virtual reality (VR) marketplace is set to go live later this year in the form of Terra Virtua allowing user to enjoy new content on a monthly subscription-based model. <a href="https://www.vrfocus.com/2018/03/terra-virtua-launching-this-september/" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="https://www.vrroom.buzz/node/33956" target="_blank">
                                                <img src="assets/images/vrroom_logo_chinese.jpg" class="Chinese Article Logo">
                                            </a>
                                        </div>
                                        <h2><a href="https://www.vrroom.buzz/node/33956" target="_blank">基于订阅的VR平台Terra Virtua将于今年9月发布</a></h2>
                                        <p>Terra Virtua被称为“Netflix VR”，它让Oculus Rift的用户可以享受日益增长的虚拟现实和增强现实（AR）内容库，包括视频游戏和体验。如果前期的效果良好， <a href="https://www.vrroom.buzz/node/33956" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="https://gnn.gamer.com.tw/8/160098.html" target="_blank">
                                                <img src="assets/images/chinese_logo3.jpg" class="Chinese Article Logo">
                                            </a>
                                        </div>
                                        <h2><a href="https://gnn.gamer.com.tw/8/160098.html" target="_blank">資深電玩產業人士組成團隊將推出 VR 娛樂平台 Terra Virtua</a></h2>
                                        <p>將虛擬實境（VR）遊戲、社交體驗與觀賞活動集於一身，並為玩家帶來虛擬實境體驗的娛樂平台 Terra Virtua 正式發表。 <a href="https://gnn.gamer.com.tw/8/160098.html" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="http://www.dvbcn.com/index.php?m=wap&siteid=1&a=show&catid=16&typeid=&id=159576" target="_blank">
                                                <img src="assets/images/dvbcn_logo.jpg" class="DVBCN Logo">
                                            </a>
                                        </div>
                                        <h2><a href="http://www.dvbcn.com/index.php?m=wap&siteid=1&a=show&catid=16&typeid=&id=159576" target="_blank">VR平台Terra Virtua计划在9月份推出</a></h2>
                                        <p>Terra Virtua被贴上了'Netflix for VR'的标签，让Oculus Rift的用户可以享受到日益增长的虚拟现实和增强现实(AR)内容库，<a href="http://www.dvbcn.com/index.php?m=wap&siteid=1&a=show&catid=16&typeid=&id=159576" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="https://technews.tw/2018/03/13/terra-virtua-vr-entertainment-platform/" target="_blank">
                                                <img src="assets/images/techNews_logo.jpg" class="DVBCN Logo">
                                            </a>
                                        </div>
                                        <h2><a href="https://technews.tw/2018/03/13/terra-virtua-vr-entertainment-platform/" target="_blank">資深電玩產業團隊推出 Terra Virtua──全球首個訂閱制的虛擬實境娛樂平台</a></h2>
                                        <p>全球首個將虛擬實境遊戲、社交體驗與觀賞活動集於一身，並為用戶帶來嶄新虛擬實境體驗的娛樂平台 Terra Virtua 12 日正式發表。<a href="https://technews.tw/2018/03/13/terra-virtua-vr-entertainment-platform/" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="http://t.cj.sina.com.cn/articles/view/6432558266/17f690cba0010055ql" target="_blank">
                                                <img src="assets/images/sina_logo.jpg" class="DVBCN Logo">
                                            </a>
                                        </div>
                                        <h2><a href="http://t.cj.sina.com.cn/articles/view/6432558266/17f690cba0010055ql" target="_blank">基于订阅的VR平台Terra Virtua将于今年9月发布</a></h2>
                                        <p>新的虚拟现实（VR）市场将在今年晚些时候以Terra Virtual的形式上线，允许用户以每月订购模式欣赏新内容。 Terra Virtua被贴上了 <a href="http://t.cj.sina.com.cn/articles/view/6432558266/17f690cba0010055ql" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="https://vrgeek.ru/vr-platforma-terra-virtua-vyjdet-v-sentyabre/" target="_blank">
                                                <img src="assets/images/vrgeek_logo.jpg" class="DVBCN Logo">
                                            </a>
                                        </div>
                                        <h2><a href="https://vrgeek.ru/vr-platforma-terra-virtua-vyjdet-v-sentyabre/" target="_blank">VR-платформа Terra Virtua выйдет в сентябре</a></h2>
                                        <p>Новая платформа виртуальной реальности Terra Virtua позволит всем любителям контента получать его на ежемесячной <a href="https://vrgeek.ru/vr-platforma-terra-virtua-vyjdet-v-sentyabre/" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <div class="text_holder">
                                        <div class="logo_holder">
                                            <a class="logo" href="https://m.gamer.com.tw/gnn/detail.php?sn=160098" target="_blank">
                                                <img src="assets/images/gnn_press_logo.jpg" class="GNN Logo">
                                            </a>
                                        </div>
                                        <h2><a href="https://m.gamer.com.tw/gnn/detail.php?sn=160098" target="_blank">資深電玩產業人士組成團隊將推出 VR 娛樂平台 Terra Virtua</a></h2>
                                        <p>Terra Virtua 指出，虛擬實境目前尚未完全打入主流的娛樂市場，其中的原因是當一個新型虛擬實境體驗熱潮漸退時，便沒有理由再走回頭路了；有見及此，Terra Virtua <a href="https://m.gamer.com.tw/gnn/detail.php?sn=160098" target="_blank" class="more">read article...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Faq -->

            <section id="faq" class="faq_section">
                <div class="holder">
                    <h1 class="tr" key="faq-h">Frequently Asked Questions</h1>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q1" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Terra Virtua?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="tr panel-body" key="ans-q1">
                                    Terra Virtua is an entertainment-focused VR platform combining Netflix-style subscriptions for games with payable content and Premium, pay-per-play events. All transactions are secured by our blockchain. Terra Virtua has offices in Gibraltar and UK.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q2" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Who are the people behind Terra Virtua?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="tr panel-body" key="ans-q2">
                                    Our team is comprised of top level former executives from the games and block chain industry including Sony, Microsoft and EA. See the team section on the website to learn more about our team.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q3" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What is different about Terra Virtua?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="tr panel-body" key="ans-q3">
                                    We are not ‘just another ICO’ based on ideas and no substance. Terra Virtua has a product already prototyped, and has heavily invested into its own technology. We have partnerships with market leaders in video gaming and technology in place.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q4" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What are TERRA (TVT) Tokens?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="tr panel-body" key="ans-q4">
                                    TERRA (TVT) are ERC20 tokens issued by Terra Virtua and enable users to transact, own zones, and enter experiences on the Terra Virtua platform.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q5" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        What is Terra Virtua doing now?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="tr panel-body" key="ans-q5">
                                    We are continuing to develop our VR platform and the companion AR app, and build partnerships with developers to provide world class VR content.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q6" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        How can I buy TERRA (TVT) tokens?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="tr panel-body" key="ans-q6">
                                    You need to be a registered TERRA VIRTUA website user. You can log in into your account to see our ETH or BTC address. You can make a transfer of ETH or BTC to our wallet. After receiving the confirmation you will see your tokens in your account dashboard on our website. Tokens will be transferred to your ETH wallet after the end of the ICO and all audits are completed.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q7" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Where can I buy TERRA tokens?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="tr panel-body" key="ans-q7">
                                    You can only purchase TERRA tokens during pre-ICO and ICO from the terravirtua.io website. Nowhere else, so stay safe!
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q8" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        What can I use my TVT for?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="tr panel-body" key="ans-q8">
                                    TVT can be used to own zones, enter attractions, own rare in-game items, experience one-off content, and hire developers or creators for a Terra Virtua project.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine">
                                <h4 class="panel-title">
                                    <a class="tr collapsed"  key="q-q23" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        How much does one TERRA token cost?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                <div class="tr panel-body" key="ans-q23">
                                    The cost of one TERRA token is 8 cents. Bonuses are available during pre-ICO
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEleven">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q11" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        Can I buy a coin by paying a card (VISA, MASTERCARD, USD, money order)?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                <div class="tr panel-body" key="ans-q11">
                                    Payments should be made in ETH and BTC to our wallet, we do not accept payment cards. Institutional or larger investors (minimum 25,000 USD) should contact us at info@terravirtua.io
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTen">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q10" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        What currency do you accept during ICO?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                <div class="tr panel-body" key="ans-q10">
                                    We accept ETH and BTC as a form of payment during the ICO.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwelve">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q12" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                        Can I pay with ETH directly from an exchange to participate in the ICO?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                <div class="tr panel-body" key="ans-q12">
                                    No, please do not send cryptocurrency through an exchange. Please send directly from your personal cryptocurrency wallet where you own the private keys.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThirteen">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q13" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                        When will you be listed on exchanges?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                                <div class="tr panel-body" key="ans-q13">
                                    We plan to list after the ICO.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFourteen">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q14" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                        What is the minimum purchase amount of TERRA tokens in the pre ICO and main ICO period?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                                <div class="tr panel-body" key="ans-q14">
                                    Pre ICO minimum 1 ETH.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFifteen">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q15" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                        What is the total TERRA token supply?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                                <div class="tr panel-body" key="ans-q15">
                                    Total coin supply is 1,200,000,000 TERRA tokens.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeventeen">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q17" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                        Is there a hard cap?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
                                <div class="tr panel-body" key="ans-q17">
                                    The public sale hard cap is 29 million USD.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEighteen">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q18" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                        Can US citizens buy TERRA tokens?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEighteen">
                                <div class="tr panel-body" key="ans-q18">
                                    No. The Terra Virtua token Sale will not be open to Contributors being residents or citizens of United States, People’s Republic of China, Socialist Republic of Vietnam or Singapore.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwenty">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q20" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                        When is the public token sale/ICO?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwenty">
                                <div class="tr panel-body" key="ans-q20">
                                    We will announce exact date of main sale on our website
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwentyOne">
                                <h4 class="panel-title">
                                    <a class="tr collapsed" key="q-q21" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                                        Will the Bounty only be held during the ICO or after?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwentyOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyOne">
                                <div class="tr panel-body" key="ans-q21">
                                    Only during the ICO period.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwentyTwo">
                                <h4 class="panel-title">
                                    <a class="tr collapsed"  key="q-q22" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                                        How will TERRA tokens be distributed, and when?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwentyTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyTwo">
                                <div class="tr panel-body" key="ans-q22">
                                    TERRA tokens will be distributed after the independent external ICO Audit, which will happen for approximately 3 weeks after the ICO period.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwentyThree">
                                <h4 class="panel-title">
                                    <a class="tr collapsed"  key="q-q23" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">
                                        What will happen to the unsold TERRA tokens?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwentyThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyThree">
                                <div class="tr panel-body" key="ans-q23">
                                    Tokens from the public sale which are unsold will be burned.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwentyFour">
                                <h4 class="panel-title">
                                    <a class="tr collapsed"  key="q-q24" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyFour" aria-expanded="false" aria-controls="collapseTwentyFour">
                                        How will distribute the proceeds raised through your sale of TERRA tokens?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwentyFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyFour">
                                <div class="panel-body">
                                    <ul class="list_styled">
                                        <li class="tr" key="ans-q24_1">25% acquisition of 3rd party content</li>
                                        <li class="tr" key="ans-q24_2">23% software development</li>
                                        <li class="tr" key="ans-q24_3">20% Management and Advisors</li>
                                        <li class="tr" key="ans-q24_4">20% Marketing including bounties and airdrop</li>
                                        <li class="tr" key="ans-q24_5">5% Development of blockchain infrastructure</li>
                                        <li class="tr" key="ans-q24_6">5% 12 months running costs</li>
                                        <li class="tr" key="ans-q24_7">2% Legal and Accounting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            
            <!-- Popups -->
            <div id="vid" class="video_popup">
                <div class="table">
                    <div class="table_cell">
                        <div class="vid_block">
                            <span class="btn_close">
                                <img src="assets/images/close.png" class="img-responsive">
                            </span>

                            <iframe src=""
                                    width="100%" height="350px"
                                    frameborder="0"
                                    webkitallowfullscreen
                                    mozallowfullscreen
                                    allowfullscreen>
                            </iframe>

                        </div>
                    </div>
                </div>
     </div>
@stop

@section('script')
@stop