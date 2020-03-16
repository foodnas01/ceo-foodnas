        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta property="og:url"           content="{{ url('') }}">
        <meta property="og:type"          content="article">
        <meta property="og:title"         content="Terra Virtua">
        <meta property="og:image"         content="{{ asset('assets/images/whitepapercover.jpg') }}">
        <meta property="og:image:width"   content="100">
        <meta property="og:image:height"  content="100">
        <title>Terra Virtua</title>
        <link rel="shortcut icon" type="image/png" href="{!! asset('assets/images/fav_icon.png') !!}">
        <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('assets/css/all.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('assets/css/slick.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('assets/css/slick-theme.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('assets/css/animation.min.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('assets/css/font-awesome.css') !!}" rel="stylesheet" type="text/css">
        <link href="{!! asset('assets/js/plugins/iCheck/skins/all.css?v=1.0.2') !!}" rel="stylesheet">
        <link href="{!! asset('assets/js/plugins/iCheck/skins/flat/purple.css') !!}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.css" rel="stylesheet">
       
        <script type="text/javascript" src="{!! asset('assets/js/node_modules/web3/dist/web3.min.js') !!}" ></script>
	    <script type="text/javascript" src="{!! asset('assets/js/jquery.min.js') !!}" ></script>
        <script type="text/javascript" src="{!! asset('assets/js/plugins/iCheck/icheck.min.js?v=1.0.2') !!}"></script>
        <script type="text/javascript" src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
        <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
        <script type="text/javascript">
        window.$crisp=[];window.CRISP_WEBSITE_ID="4865caa0-4b46-4cc8-bf1b-1b3335b7da96";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
        </script>
		<meta name="csrf-token" content="{{ csrf_token() }}" />
        <script type="text/javascript">
           $.ajaxSetup({
               headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
            });
        </script>
        <script type="text/javascript">window.$crisp = [];
            window.CRISP_WEBSITE_ID = "4865caa0-4b46-4cc8-bf1b-1b3335b7da96";
            (function () {
                d = document;
                s = d.createElement("script");
                s.src = "https://client.crisp.chat/l.js";
                s.async = 1;
                d.getElementsByTagName("head")[0].appendChild(s);
            })();</script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115747690-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-115747690-1');
        </script>
        <script>
                // Our future code here..
                if (typeof web3 !== 'undefined') {
                   web3 = new Web3(web3.currentProvider);
                } else {
                   // set the provider you want from Web3.providers
                   web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
                }
                //alert( web3.isAddress('0x2467d18229dcf98beb72bf4e24f2c1caf84fc33a'));
        </script> 
        
<style>
            
.applied .terra_message_popup{
	opacity:1;
	padding:0 15px;
	pointer-events:inherit;
}
.terra_message_popup{
	
}
.terra_message_popup .block{
	font-size:18px;
	line-height:24px;
	color:#000 !important;
	max-width:400px;
	margin:0 auto;
	position:relative;
	background:#f3f3f3;
	padding:60px 30px;
	border-radius:12px;
	text-align:center;
}
.terra_message_popup .response_title{
	display:block;
	color:#a74c9d;
	font-size:18px;
	line-height:24px;
	margin:0 0 20px;
}
.terra_message_popup .email_message{
	font-weight:400;
}
.terra_message_popup .center_btn{
	margin:0 0 30px;
}
.terra_message_popup .btn{
	color:#fff;
	font-size:14px;
	background:#a84ca2;
	border-color:#a84ca2;
	border-radius:30px;
}
.terra_message_popup .btn:hover{
	color:#a84ca2;
	background:none;
}

</style>      