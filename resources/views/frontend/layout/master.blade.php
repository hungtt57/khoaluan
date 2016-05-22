<!doctype html>
<html  lang="en">

<head>
	<meta charset="utf-8">

	<title>Tiệm thuốc</title>
	<meta name="description" content="Nơi mua hàng của mọi nhà">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="HTMLCooker">

	<!-- ================= Favicon ================== -->


	<!-- ================= Google Fonts ================== -->
	<link href='http://fonts.googleapis.com/css?family=Lato:200,300,400,500,600,700,800&amp;subset=latin,cyrillic-ext,cyrillic,greek-ext,greek,vietnamese,latin-ext' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Lora:200,300,400,500,600,700,800&amp;subset=latin,cyrillic-ext,cyrillic,greek-ext,greek,vietnamese,latin-ext' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800&amp;subset=latin,cyrillic-ext,cyrillic,greek-ext,greek,vietnamese,latin-ext' rel='stylesheet' type='text/css' />

	<link rel="stylesheet" type="text/css'" href="{{asset('public/frontend/css/menu.css')}}" media="all" />
	<!-- Menu CSS -->

	<!-- Mega Menu CSS -->
	<link rel="stylesheet" type="text/css'" href="{{asset('public/frontend/css/megamenu.css')}}" media="all" />


	<!-- Default CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/styles.css')}}" media="all" />
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/font-awesome.css')}}" media="all" />
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/owl.carousel.css')}}" media="all" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/responsive.css')}}" media="all" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/bootstrap.css')}}" media="all" />


	<!-- Blog Style CSS -->
	<link rel="stylesheet" type="text/css')}}" href="{{asset('public/frontend/css/blog-styles.css')}}" media="all" />


	<!-- Product Labels CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/em_productlabels.css')}}" media="all" />


	<!-- Fancybox CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/jquery.fancybox.css')}}" media="all" />

	<!-- Responsive Tab CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/responsive-tabs.css')}}" media="all" />
	<!-- Print CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/print.css')}}" media="print" />
	<!-- Fashion CSS -->
	<link rel='stylesheet' type='text/css' media='all' href="{{asset('public/frontend/css/style_fashion.css')}}" />
	<!-- Fashion CSS -->
	<link rel='stylesheet' type='text/css' media='all' href="{{asset('public/frontend/css/color1.css')}}" />
	@yield('css')

	<!-- Jquery Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/jquery-1.11.3.min.js')}}"></script>
	<!-- Bootstrap Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<!-- Lazy Load Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/jquery.lazyload.min.js')}}"></script>
	<!-- Owl Carousel Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/owl.carousel.js')}}"></script>
	<!-- Ios Orientation Change Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/ios-orientationchange-fix.js')}}"></script>
	<!-- Hover Intent Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/jquery.hoverIntent.js')}}"></script>
	<!-- Select UI Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/selectUl.js')}}"></script>
	<!-- Throttle Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/jquery.ba-throttle-debounce.js')}}"></script>
	<!-- EM Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/em0131.js')}}"></script>
	<!-- MegaMenu Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/megamenu.js')}}"></script>
	<!-- Responsive Tab Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/jquery.custom.responsiveTabs.js')}}"></script>
	<!-- Fancybox Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/jquery.fancybox.js')}}"></script>
	<!-- Custom Js -->
	<script type="text/javascript" src="{{asset('public/frontend/js/custom.js')}}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.20.1/mediaelement-and-player.min.js"></script>
	<!-- Piwik -->
	<script type="text/javascript">
		var _paq = _paq || [];
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
			var u="//thuocre.net/piwik/";
			_paq.push(['setTrackerUrl', u+'piwik.php']);
			_paq.push(['setSiteId', 1]);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
		})();
	</script>
	<noscript><p><img src="//thuocre.net/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
	<!-- End Piwik Code -->
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '956687311076326',
				xfbml      : true,
				version    : 'v2.5'
			});
		};

		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
</head>

<body class="cms-index-index">
	<div class="wrapper ">
		<noscript>
			<div class="global-site-notice noscript">
				<div class="notice-inner">
					<p> <strong>JavaScript seems to be disabled in your browser.</strong>
						<br /> You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
					</div>
				</div>
			</noscript>
			<div class="page two-columns-left">
				@include('frontend.includes.header')
				@yield('content')
				@include('frontend.includes.footer')
				<p id="back-top" style="display: none;"><a title="Top" href="#top">Top</a></p>
			</div><!-- /.page -->

		</div><!-- /.wrapper -->

	<!-- 	<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<style>#cfacebook{position:fixed;bottom:0px;right:100px;z-index:999999999999999;width:250px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}#cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}#cfacebook .fchat .fb-page{margin-top:-130px;float:left;}#cfacebook a.chat_fb{float:left;padding:0 25px;width:250px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}#cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}</style>
		<script>
			jQuery(document).ready(function () {
				jQuery(".chat_fb").click(function() {
					jQuery('.fchat').toggle('slow');
				});
			});
		</script>
		<div id="cfacebook">
			<a href="javascript:;" class="chat_fb" onclick="return:false;"><i class="fa fa-facebook-square"></i> Phản hồi của bạn</a>
			<div class="fchat">
			<div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/Ti%E1%BB%87m-thu%E1%BB%91c-1553076551658536" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
			</div>
		</div> -->
		@yield('js')
	</body>

	</html>