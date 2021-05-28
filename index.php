



<?php 

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "123455moha@";
$dbName = "contactme";

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $dbUser, $dbPassword);
} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}

$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if(empty($name) || empty($email) || empty($message)) {
    $status = "All fields are compulsory.";
  } else {
    if(strlen($name) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
      $status = "Please enter a valid name";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status = "Please enter a valid email";
    } else {

      $sql = "INSERT INTO contacinfo (name, email, message) VALUES (:name, :email, :message)";

      $stmt = $pdo->prepare($sql);
      
      $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

      $status = "Your message was sent";
      $name = "";
      $email = "";
      $message = "";
    }
  }

}

?>















<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://themes.webmasterdriver.net/carforyouwp/xmlrpc.php">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon"><title>Contact Us &#8211; CarForYou</title>
<meta name='robots' content='noindex,nofollow' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="CarForYou &raquo; Feed" href="http://themes.webmasterdriver.net/carforyouwp/feed/" />
<link rel="alternate" type="application/rss+xml" title="CarForYou &raquo; Comments Feed" href="http://themes.webmasterdriver.net/carforyouwp/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/themes.webmasterdriver.net\/carforyouwp\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.4"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<!----<link rel="stylesheet" id="wp-block-library-css" href="css/style1.css" type="text/css" media="all">
<link rel="stylesheet" id="contact-form-7-css" href="css/style2.css" type="text/css" media="all">
<link rel="stylesheet" id="carforyou-style-css" href="css/style3.css" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap-css" href="css/style4.css" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap-slider-css" href="css/style5.css" type="text/css" media="all">
<link rel="stylesheet" id="custome-style-css" href="css/style6.css" type="text/css" media="all">
<link rel="stylesheet" id="owl-carousel-slider-css" href="css/style7.css" type="text/css" media="all">
<link rel="stylesheet" id="owl-transitions-style-css" href="css/style8.css" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-css" href="css/style9.css" type="text/css" media="all">
<link rel="stylesheet" id="all-min-css" href="css/style10.css" type="text/css" media="all">



<link rel="stylesheet" id="solid-min-css" href="css/style11.css" type="text/css" media="all">
<link rel="stylesheet" id="v4-shims-css" href="css/style12.css" type="text/css" media="all">
<link rel="stylesheet" id="brand-font-css" href="css/style13.css" type="text/css" media="all">
<link rel="stylesheet" id="slick-css" href="css/style14.css" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="css/style15.css" type="text/css" media="all">
<link rel="stylesheet" id="ekko lightbox-css" href="css/style16.css" type="text/css" media="all">
<link rel="stylesheet" id="mapbox-css" href="css/style17.css" type="text/css" media="all">
<link rel="stylesheet" id="datepicker.min.css-css" href="css/style18.css" type="text/css" media="all">
<link rel="stylesheet" id="screen-css" href="css/style19.css" type="text/css" media="all">
<link rel="stylesheet" id="carforyou-fonts-css" href="css/style20.css" type="text/css" media="all">



<link rel="stylesheet" id="elementor-icons-css" href="css/style21.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-animations-css" href="css/style22.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-frontend-legacy-css" href="css/style23.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-frontend-css" href="css/style24.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-2125-css" href="css/style25.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-global-css" href="css/style26.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-81-css" href="css/style27.css" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="css/style28.css" type="text/css" media="all">-------->

<link rel="stylesheet" href="form.css">


<link rel="stylesheet" href="assets/jQueryValidator/css/screen.css">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/bootstrap-slider.css">
<link rel="stylesheet" href="assets/css/bootstrap-slider.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/brands.min.css">
<link rel="stylesheet" href="assets/css/CarForYou-style.css">
<link rel="stylesheet" href="assets/css/ekko-lightbox.css">
<link rel="stylesheet" href="assets/css/ekko-lightbox.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/home-new.css">
<link rel="stylesheet" href="assets/css/mapbox.css">
<link rel="stylesheet" href="assets/css/mo.css">
<link rel="stylesheet" href="assets/css/owl-carousel.css">
<link rel="stylesheet" href="assets/css/owl-transitions.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/solid.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/v4.shims.min.css">
<link rel="stylesheet" href="assets/datepicker-dist/css/datepicker.min.css">
<link rel="stylesheet" href="assets/jQueryValidator/css/screen.css">
<link rel="stylesheet" href="elemento-css/style1.css">
<link rel="stylesheet" href="elemento-css/style2.css">
<link rel="stylesheet" href="elemento-css/style3.css">
<script type="text/javascript">(function(a,d){if(a._nsl===d){a._nsl=[];var c=function(){if(a.jQuery===d)setTimeout(c,33);else{for(var b=0;b<a._nsl.length;b++)a._nsl[b].call(a,a.jQuery);a._nsl={push:function(b){b.call(a,a.jQuery)}}}};c()}})(window);</script><script type='text/javascript' src='http://themes.webmasterdriver.net/carforyouwp/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
<script type='text/javascript' id='carforyou_home_map-js-extra'>
/* <![CDATA[ */
var carforyou_home_map_object = {"ajaxurl":"http:\/\/themes.webmasterdriver.net\/carforyouwp\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='http://themes.webmasterdriver.net/carforyouwp/wp-content/themes/carforyou/assets/js/home-map.js?ver=5.5.4' id='carforyou_home_map-js'></script>
<script type='text/javascript' id='ajax-login-script-js-extra'>
/* <![CDATA[ */
var ajax_login_object = {"ajaxurl":"http:\/\/themes.webmasterdriver.net\/carforyouwp\/wp-admin\/admin-ajax.php","redirecturl":"http:\/\/themes.webmasterdriver.net\/carforyouwp\/contact-us\/","redirecturl2":"http:\/\/themes.webmasterdriver.net\/carforyouwp\/contact-us\/","loadingmessage":"<span class=\"alert alert-info\">Please wait...<i class=\"fa fa-spinner fa-spin\"><\/i><\/span>"};
/* ]]> */
</script>
<script type='text/javascript' src='assets/js1/araba1.js' id='ajax-login-script-js'></script>
<script type='text/javascript' src='assets/js1/araba2.js' id='jquery.min-js'></script>
<script type='text/javascript' src='assets/js1/araba3.js' id='jquery-plugin-js'></script>
<script type='text/javascript' src='assets/js1/araba4.js' id='jquery-countdown-js'></script>
<script type='text/javascript' src='assets/js1/araba5.js' id='jquery-counter-js'></script>



<link rel="https://api.w.org/" href="http://themes.webmasterdriver.net/carforyouwp/wp-json/" /><link rel="alternate" type="application/json" href="http://themes.webmasterdriver.net/carforyouwp/wp-json/wp/v2/pages/81" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://themes.webmasterdriver.net/carforyouwp/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://themes.webmasterdriver.net/carforyouwp/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.5.4" />
<link rel="canonical" href="http://themes.webmasterdriver.net/carforyouwp/contact-us/" />
<link rel='shortlink' href='http://themes.webmasterdriver.net/carforyouwp/?p=81' />
<link rel="alternate" type="application/json+oembed" href="http://themes.webmasterdriver.net/carforyouwp/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fthemes.webmasterdriver.net%2Fcarforyouwp%2Fcontact-us%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://themes.webmasterdriver.net/carforyouwp/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fthemes.webmasterdriver.net%2Fcarforyouwp%2Fcontact-us%2F&#038;format=xml" />
<meta name="framework" content="Redux 4.1.23" /><style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><style type="text/css">div.nsl-container[data-align="left"] {
    text-align: left;
}

div.nsl-container[data-align="center"] {
    text-align: center;
}

div.nsl-container[data-align="right"] {
    text-align: right;
}


div.nsl-container .nsl-container-buttons a {
    text-decoration: none !important;
    box-shadow: none !important;
    border: 0;
}

div.nsl-container .nsl-container-buttons {
    display: flex;
    padding: 5px 0;
}

div.nsl-container-block .nsl-container-buttons {
    flex-flow: column;
    align-items: center;
}

div.nsl-container-block .nsl-container-buttons a {
    flex: 1 1 auto;
    display: block;
    margin: 5px 0;
    max-width: 280px;
    width: 100%;
}

div.nsl-container-inline {
    margin: -5px;
    text-align: left;
}

div.nsl-container-inline .nsl-container-buttons {
    justify-content: center;
    flex-wrap: wrap;
}

div.nsl-container-inline .nsl-container-buttons a {
    margin: 5px;
    display: inline-block;
}

div.nsl-container-grid .nsl-container-buttons {
    flex-flow: row;
    align-items: center;
    flex-wrap: wrap;
}

div.nsl-container-grid .nsl-container-buttons a {
    flex: 1 1 auto;
    display: block;
    margin: 5px;
    max-width: 280px;
    width: 100%;
}

@media only screen and (min-width: 650px) {
    div.nsl-container-grid .nsl-container-buttons a {
        width: auto;
    }
}

div.nsl-container .nsl-button {
    cursor: pointer;
    vertical-align: top;
    border-radius: 4px;
}

div.nsl-container .nsl-button-default {
    color: #fff;
    display: flex;
}

div.nsl-container .nsl-button-icon {
    display: inline-block;
}

div.nsl-container .nsl-button-svg-container {
    flex: 0 0 auto;
    padding: 8px;
    display: flex;
}

div.nsl-container svg {
    height: 24px;
    width: 24px;
    vertical-align: top;
}

div.nsl-container .nsl-button-default div.nsl-button-label-container {
    margin: 0 24px 0 12px;
    padding: 10px 0;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: .25px;
    overflow: hidden;
    text-align: center;
    text-overflow: clip;
    white-space: nowrap;
    flex: 1 1 auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-transform: none;
    display: inline-block;
}

div.nsl-container .nsl-button-google[data-skin="dark"] .nsl-button-svg-container {
    margin: 1px;
    padding: 7px;
    border-radius: 3px;
    background: #fff;
}

div.nsl-container .nsl-button-google[data-skin="light"] {
    border-radius: 1px;
    box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .25);
    color: RGBA(0, 0, 0, 0.54);
}

div.nsl-container .nsl-button-apple .nsl-button-svg-container {
    padding: 0 6px;
}

div.nsl-container .nsl-button-apple .nsl-button-svg-container svg {
    height: 40px;
    width: auto;
}

div.nsl-container .nsl-button-apple[data-skin="light"] {
    color: #000;
    box-shadow: inset 0 0 0 1px #000;
}

div.nsl-container .nsl-button-facebook[data-skin="white"] {
    color: #000;
    box-shadow: inset 0 0 0 1px #000;
}

div.nsl-container .nsl-button-facebook[data-skin="light"] {
    color: #1877F2;
    box-shadow: inset 0 0 0 1px #1877F2;
}

div.nsl-container .nsl-button-apple div.nsl-button-label-container {
    font-size: 17px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.nsl-clear {
    clear: both;
}

/*Button align start*/
div.nsl-container-block[data-align="left"] .nsl-container-buttons {
    align-items: flex-start;
}

div.nsl-container-block[data-align="center"] .nsl-container-buttons {
    align-items: center;
}

div.nsl-container-block[data-align="right"] .nsl-container-buttons {
    align-items: flex-end;
}

div.nsl-container-inline[data-align="left"] .nsl-container-buttons {
    justify-content: flex-start;
}

div.nsl-container-inline[data-align="center"] .nsl-container-buttons {
    justify-content: center;
}

div.nsl-container-inline[data-align="right"] .nsl-container-buttons {
    justify-content: flex-end;
}


div.nsl-container-grid[data-align="left"] .nsl-container-buttons {
    justify-content: flex-start;
}

div.nsl-container-grid[data-align="center"] .nsl-container-buttons {
    justify-content: center;
}

div.nsl-container-grid[data-align="right"] .nsl-container-buttons {
    justify-content: flex-end;
}

div.nsl-container-grid[data-align="space-around"] .nsl-container-buttons {
    justify-content: space-around;
}

div.nsl-container-grid[data-align="space-between"] .nsl-container-buttons {
    justify-content: space-between;
}

/* Button align end*/</style>		<style type="text/css" id="wp-custom-css">
			.php-error #adminmenuback, .php-error #adminmenuwrap{
     margin-top: 0px !important;
}		</style>
		
</head>
<style>
.btn, 
.nav-tabs > li.active > a, 
.nav-tabs > li.active > a:focus, 
.nav-tabs > li.active > a:hover, 
.recent-tab .nav.nav-tabs li.active a, 
.fun-facts-m .vc_column-inner, .featured-icon, 
.owl-pagination .owl-page.active,
#testimonial-slider .owl-pagination .owl-page.active, 
.social-follow.footer-social a:hover, 
.back-top a, 
.team_more_info ul li a:hover, 
.tag_list ul li a:hover, 
.pagination ul li.current, 
.pagination ul li:hover,
.btn.outline:hover, 
.btn.outline:focus, 
.share_article ul li:hover, 
.nav-tabs > li a:hover, 
.nav-tabs > li a:focus, 
.label-icon, 
.navbar-default .navbar-toggle .icon-bar, 
.navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover, 
.label_icon, 
.navbar-nav > li > .dropdown-menu, 
.add_compare .checkbox, 
.search_other, 
.vs, 
.td_divider, 
.search_other_inventory, 
#other_info, 
.main_bg, 
.slider .slider-handle, .slider .slider-selection, .listing_detail_wrap .nav-tabs > li.active a, .listing_detail_wrap .nav-tabs > li:hover a, input[type="submit"], .owl-carousel .owl-dot.active {
  background: #fa2837 none repeat scroll 0 0;
  fill: #fa2837;
}
a, .btn-link, .car-title-m h6 a:hover, .featured-car-content > h6 a:hover, .footer-top ul li a:hover, .get-intouch a:hover, .blog-content h5 a:hover, .blog-info-box li a:hover, .control-label span, .angle_arrow i, .contact_detail li a:hover, .team_more_info p a:hover, .error_text_m h2, .search_btn, .popular_post_title a:hover, .categories_list ul li a:hover, .categories_list ul li a:hover::after, .article_meta ul li a:hover, .articale_header h2 a:hover, .btn.outline, .share_article ul li, .contact-info a:hover, .social-follow a:hover, .radio input[type="radio"]:checked + label::before, .checkbox input[type="checkbox"]:checked + label::before, .product-listing-content h5 a:hover, .pricing_info .price, .text-primary, .footer_widget ul li a:hover, .header_search button:hover, .header_widgets a:hover, .navbar-default .navbar-nav > li.active a, .navbar-default .navbar-nav > li:focus a, .navbar-default .navbar-nav > li:hover a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover, .my_vehicles_list ul.vehicle_listing li a:hover, .dealer_contact_info a:hover, .widget_heading i, .dealers_listing .dealer_info h5 a:hover, .main_features ul li p, .listing_detail_head .price_info p, .listing_other_info button:hover, .compare_info table td i, .compare_info table th i, #accessories i, .price, .inventory_info_list ul li i, .services_info h4 a:hover, .about_info .icon_box, .header_style2 .navbar-nav > li > .dropdown-menu a:hover, .header_style2 .navbar-default .navbar-nav li:hover .dropdown-menu li a:hover, .header_style2 .dropdown-menu > .active > a, .header_style2 .dropdown-menu > .active > a:focus, .header_style2 .dropdown-menu > .active > a:hover, .header_style2 .dropdown-menu > li > a:focus, .header_style2 .dropdown-menu > li > a:hover, a:hover, a:focus, .btn-link:hover, .sidebar_widget ul li a:hover, .sidebar_widget ul#recentcomments li a{
	
color:#fa2837;
    fill:#fa2837;	
	
	}


.btn:hover, .btn:focus, 
.search_other:hover, 
#other_info:hover {
	background-color: #c60210;
	fill: #c60210;
}

.nav-tabs > li.active > a, 
.nav-tabs > li.active > a:focus, 
.nav-tabs > li.active > a:hover, 
.social-follow.footer-social a:hover, 
.page-header, 
.tag_list ul li a:hover, 
.btn.outline, 
.share_article ul li, 
blockquote, 
.social-follow a:hover, 
.radio label:before,  
.navbar-default .navbar-toggle, 
.owl-buttons div, 
.about_info .icon_box {
	border-color: #fa2837;
}

.recent-tab .nav.nav-tabs li.active::after {
	border-color: #fa2837 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
}
.td_divider:after {
	border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0 ) rgba(0, 0, 0, 0 ) #fa2837 ;
}

.navbar-nav > li > .dropdown-menu li {
  border-bottom: 1px solid #fa2837;
}

.payment-price.form-control {
  border: 1px solid #fa2837 !important;
  color: #fa2837 !important;
}

@media (max-width:767px) {
.navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
	color:#fa2837;	
}
}
</style>
<body id="page" class="page-template page-template-vc-page page-template-vc-page-php page page-id-81 elementor-default elementor-kit-2125 elementor-page elementor-page-81" data-site-url = "http://themes.webmasterdriver.net/carforyouwp/" data-mtoken="pk.eyJ1Ijoid2VibWFzdGVyZHJpdmVyIiwiYSI6ImNrMDJldm5rbDJsaGozYnV0Z3djeGUybzEifQ.hwW9ed8BbzPOiXM0CCNErA" data-mapboxDesign="mapbox.emerald" data-mtype = "openstreet" data-maplistingby="geolocaion" data-defaultmaplat="0" data-defaultmaplot="-0" data-mstyle = "mapbox.emerald">
<!--Header-->



<header>

  <div class="default-header">

    <div class="container">

      <div class="row">

        <div class="col-sm-3 col-md-2 abc">

          <div class="logo">

            <a  href="http://themes.webmasterdriver.net/carforyouwp/" title="CarForYou" rel="home" ><img src="assets/images/logo.png" alt="image"></a>
          </div>

        </div>

        <div class="col-sm-9 col-md-10">

          <div class="header_info">

            
            <div class="header_widgets">

              
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>

              
              
              <p class="uppercase_text">For Support Mail us :</p>

              
              
              <a href="mailto:info@example.com">info@example.com</a>

              
            </div>

            
                    <div class="header_widgets">

                      
                      <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>

                      
                      
                      <p class="uppercase_text">Service Helpline Call Us:</p>

                      
                      
                      <a href="tel:+61-1234-5678-9">+61-1234-5678-9</a>

                      
                    </div>

            
                    <div class="social-follow">

                      <ul>

                        
                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

                        
                        
                        <li><a href="https://twitter.com/login"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>

                        
                        
                        <li><a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>

                        
                        
                        <li><a href="https://plus.google.com"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>

                        
                        
                        <li><a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                        
                        
                        <li><a href="https://in.pinterest.com/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>

                        
                      </ul>

                    </div>

            				
				
			
			
          </div>

        </div>

      </div>

    </div>

  </div>

  

  <!-- Navigation -->

  

  <nav id="navigation_bar" class="navbar navbar-default">

    <div class="container">

      <div class="navbar-header">

        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">

        
        </span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

      </div>
	  
	  <div class="header_wrap">
	  
	  
      <!--<div class="header_search">

        <form action="/?s" method="get" role="search">

         
          <input type="search" placeholder="" class="form-control" name="s">

          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

        </form>

      </div> -->
	  
	  </div>
	  
	  
      <div class="collapse navbar-collapse" id="navigation">
	  
	  
        <div class="menu-main-menu-container"><ul id="menu-main-menu" class="nav navbar-nav"><li id="menu-item-2126" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2126"><a href="#">Home</a>

</li>
<li id="menu-item-2127" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2127"><a href="#">Inventory</a>
<ul class="sub-menu">
	<li id="menu-item-2137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2137"><a href="http://themes.webmasterdriver.net/carforyouwp/car-listing-grid/">Grid Style</a></li>
	<li id="menu-item-2136" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2136"><a href="http://themes.webmasterdriver.net/carforyouwp/car-listing/">Classic Style</a></li>
	<li id="menu-item-2138" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2138"><a href="http://themes.webmasterdriver.net/carforyouwp/detail-page-style-1/">Detail Page Style 1</a></li>
	<li id="menu-item-2139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2139"><a href="http://themes.webmasterdriver.net/carforyouwp/detail-page-style-2/">Detail Page Style 2</a></li>
</ul>
</li>
<li id="menu-item-2128" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2128"><a href="#">Pages</a>
<ul class="sub-menu">
	<li id="menu-item-2143" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2143"><a href="http://themes.webmasterdriver.net/carforyouwp/compare-inventorys/">Compare Inventorys</a></li>
	<li id="menu-item-2142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2142"><a href="http://themes.webmasterdriver.net/carforyouwp/all-type-of-cars/">All Type Of Cars</a></li>
	<li id="menu-item-2145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2145"><a href="http://themes.webmasterdriver.net/carforyouwp/new-car/">New Car</a></li>
	<li id="menu-item-2146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2146"><a href="http://themes.webmasterdriver.net/carforyouwp/old-car/">Old Car</a></li>
	<li id="menu-item-2141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2141"><a href="http://themes.webmasterdriver.net/carforyouwp/about-us/">About Us</a></li>
	<li id="menu-item-2147" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2147"><a href="http://themes.webmasterdriver.net/carforyouwp/services/">Services</a></li>
	<li id="menu-item-2144" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2144"><a href="http://themes.webmasterdriver.net/carforyouwp/faq/">FAQ</a></li>
	<li id="menu-item-2140" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2140"><a href="http://themes.webmasterdriver.net/carforyouwp/404-page/">404 Page</a></li>
</ul>
</li>
<li id="menu-item-2129" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2129"><a href="#">Features</a>
<ul class="sub-menu">
	<li id="menu-item-2148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2148"><a href="http://themes.webmasterdriver.net/carforyouwp/header-style-1/">Header Style 1</a></li>
	<li id="menu-item-2149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2149"><a href="http://themes.webmasterdriver.net/carforyouwp/header-style-2/">Header Style 2</a></li>
	<li id="menu-item-2150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2150"><a href="http://themes.webmasterdriver.net/carforyouwp/header-style-3/">Header Style 3</a></li>
	<li id="menu-item-2151" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2151"><a href="http://themes.webmasterdriver.net/carforyouwp/home-1-with-video/">Home 1 With Video</a></li>
	<li id="menu-item-2152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2152"><a href="http://themes.webmasterdriver.net/carforyouwp/home-2-with-video/">Home 2 With Video</a></li>
	<li id="menu-item-2153" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2153"><a href="http://themes.webmasterdriver.net/carforyouwp/home-3-with-video/">Home 3 With Video</a></li>
</ul>
</li>
<li id="menu-item-2130" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2130"><a href="#">News</a>
<ul class="sub-menu">
	<li id="menu-item-2154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2154"><a href="http://themes.webmasterdriver.net/carforyouwp/blog-left-sidebar/">Blog Left Sidebar</a></li>
	<li id="menu-item-2155" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2155"><a href="http://themes.webmasterdriver.net/carforyouwp/blog-right-sidebar/">Blog Right Sidebar</a></li>
</ul>
</li>
<li id="menu-item-2132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2132"><a href="http://themes.webmasterdriver.net/carforyouwp/download-app/">Download App</a></li>
<li id="menu-item-2131" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-81 current_page_item menu-item-2131"><a href="http://themes.webmasterdriver.net/carforyouwp/contact-us/" aria-current="page">Contact Us</a></li>
</ul></div>
		
		  

		   

		  

      </div>

      

    </div>

  </nav>

  

  <!-- Navigation end --> 

  

</header>

<!-- /Header -->



<!--Page Header-->

<section class="page-header faq_page" style="background-image:url(http://themes.webmasterdriver.net/carforyouwp/wp-content/uploads/2017/01/contact-page-header-img.jpg )">

  <div class="container">

    <div class="page-header_wrap">

      <div class="page-heading">

        <h1>Contact Us</h1>

      </div>

      <ul class="coustom-breadcrumb"><li><a class="bread-link bread-home" href="http://themes.webmasterdriver.net/carforyouwp">Home</a></li><li class="separator ">&nbsp;</li><li>Contact Us</li></ul>
    </div>

  </div>

  <!-- Dark Overlay-->

  <div class="dark-overlay"></div>

</section>

<!-- /Page Header--> 
<br> 

<div class="container">
    <h1>Contact Us Here</h1>

    <form action="" method="POST" class="main-form">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" class="gt-input"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="gt-input"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>">
      </div>

      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea name="message" id="message" cols="30" rows="10"
          class="gt-input gt-text"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $message ?></textarea>
      </div>

      <input type="submit" class="gt-button" value="Submit">

      <div class="form-status">
        <?php echo $status ?>
      </div>
    </form>
  </div>
		<br><br><br><br><br> 	
<!--Footer -->
<footer>
	  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6"><h6>Top Categores</h6>
			<ul>
					<li class="cat-item cat-item-5"><a href="http://themes.webmasterdriver.net/carforyouwp/category/auto-detail/">Auto Detail</a>
</li>
	<li class="cat-item cat-item-19"><a href="http://themes.webmasterdriver.net/carforyouwp/category/car-land/">Car Land</a>
</li>
	<li class="cat-item cat-item-20"><a href="http://themes.webmasterdriver.net/carforyouwp/category/car-showrooms/">Car Showrooms</a>
</li>
	<li class="cat-item cat-item-15"><a href="http://themes.webmasterdriver.net/carforyouwp/category/motorbikes/">Motorbikes</a>
</li>
	<li class="cat-item cat-item-18"><a href="http://themes.webmasterdriver.net/carforyouwp/category/sell-your-car/">Sell your Car</a>
</li>
			</ul>

			</div><div class="col-md-3 col-sm-6"><h6>About Us</h6><div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-618" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-618"><a href="#">Privacy</a></li>
<li id="menu-item-1179" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1179"><a title="						" href="#">Hybrid Cars</a></li>
<li id="menu-item-1180" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1180"><a title="						" href="#">Cookies</a></li>
<li id="menu-item-621" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-621"><a href="#">Trademarks</a></li>
<li id="menu-item-1182" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1182"><a title="						" href="#">Terms of use</a></li>
</ul></div></div><div class="col-md-3 col-sm-6"><h6>Useful Links</h6><div class="menu-footer-menu2-container"><ul id="menu-footer-menu2" class="menu"><li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-623"><a href="#">Our Partners</a></li>
<li id="menu-item-1184" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1184"><a title="						" href="#">Careers</a></li>
<li id="menu-item-1185" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1185"><a title="						" href="#">Sitemap</a></li>
<li id="menu-item-626" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-626"><a href="#">Investors</a></li>
<li id="menu-item-1187" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1187"><a title="						" href="#">Request a Quote</a></li>
</ul></div></div>      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
                            <div class="footer_widget">
                                        <p>Connect with Us:</p>
                                        <ul>
                                                    <li><a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                                        <li><a href="https://twitter.com/login"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                                    <li><a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                                    <li><a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                    <li><a href="https://in.pinterest.com/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                          </ul>
                  </div>
                  </div>
                <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">
			Copyright © 2021 <a>CarForYou</a> All Rights Reserved          </p>
        </div>
              </div>
    </div>
  </div>
</footer>
<!-- /Footer--> 
<!--Back to top-->
<div id="back-top" class="back-top"> 
	<a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> 
</div>
<!--/Back to top--> 
<div style="display:none;">
    <div id="siderwidth1"></div>
    <div id="siderwidth2"></div>
    <div id="siderwidth3"></div>
    <div id="siderwidth4"></div>
    <div id="siderwidth5"></div>
    <div id="siderwidth6"></div>
</div>
<div id="add_model_compare">
  <form id="productCompareForm" method="post" action="http://themes.webmasterdriver.net/carforyouwp/compare-inventorys/" enctype="multipart/form-data">
    <h2>
      Compared Auto<span>(<span id="countProduct">0</span>)</span><span class="compare-close"><a onclick="javascript:closePopUp();"> × </a></span></h2>
    <ul class="removdata">
	
	       <li class="vs_model"><span class=" allID" id="im1" dat-id="" cook-id="first" ></span><a href="javascript();"><img id="pro_img_1" src="http://themes.webmasterdriver.net/carforyouwp/wp-content/themes/carforyou/assets/images/auto-img.png" alt="pro_img_1" class="img-responsive im1"></a></li>
      <li class="vs_model"><span class=" allID" id="im2" dat-id="" cook-id="second" ></span><a href="javascript();"><img id="pro_img_2" src="http://themes.webmasterdriver.net/carforyouwp/wp-content/themes/carforyou/assets/images/auto-img.png" alt="pro_img_2" class="img-responsive im2"></a></li>
      <li class="vs_model "><span class=" allID" id="im3" dat-id="" cook-id="third" ></span><a href="javascript();"><img id="pro_img_3" src="http://themes.webmasterdriver.net/carforyouwp/wp-content/themes/carforyou/assets/images/auto-img.png" alt="pro_img_3" class="img-responsive im3"></a></li>
	  
     </ul> 
    <a onclick="javascript:formSubmit();" class="compare_now_btn">
    Compare    </a>
	<a onclick="javascript:;" class="compare_now_btn resatecompare">
    Clear All    </a>
    <div class="hidden">
	
	
      <input id="p1" name="p1" value=""/>
      <input id="p2" name="p2" value=""/>
      <input id="p3" name="p3" value=""/>
	
    </div>
  </form>
</div>
	<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('.autobrand').on('change',function(){
	var autobrandID = $(this).val();
	if(autobrandID){
		jQuery.ajax({
			type:'POST',
			url:'http://themes.webmasterdriver.net/carforyouwp/wp-admin/admin-ajax.php',
			data: {
			   action:'SelectModel', 
			   security: '95fbfe5d71',
			  'autobrandName':autobrandID
	  },
			success:function(html){
				jQuery('.automodel').html(html);
			}
		}); 
	}
});
});
</script>



<style>
.img-wrap {
    position: relative;
    display: inline-block;
    border: 1px red solid;
    font-size: 0;
}

#add_model_compare ul li a{
        position : relative;
		z-index:80;
}
 .closes {
    position: absolute;
    top: 2px;
    right: 2px;
    z-index: 100;
    background-color: #000;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    text-align: center;
    font-size: 12px;
    border-radius: 50%;
    height: 18px;
    width: 18px;
    line-height: 18px;
}
.img-wrap:hover .closes {
    opacity: 1;
}

</style> 
<script> 
function productShort()
{
	document.getElementById('shortProduct').submit();
}
//document.getElementById("p1").value='';
//document.getElementById("p2").value='';
//document.getElementById("p3").value='';
   function productCompare(id){
	  	document.getElementById("add_model_compare").style.display='block';
  	var productid = id;
	jQuery.ajax({ 
      data: {
		  action:'MyAjaxFunctionProductShop', 
		  security: 'e10e6ed198',
		  'productID':productid
		  },
        type: 'post',
	 //'dataType': 'json', 
     url: "http://themes.webmasterdriver.net/carforyouwp/wp-admin/admin-ajax.php",
	  success: function(data)
	  {
		   // alert(data);
			if(data == "exist"){
			alert("This auto already exist in compare box!. Please select another auto.");
			return false;
			}
			if(data == "cooki is full"){
			alert("Your selection is full. Please clear all first.");
			return false;
			}
	if(data != "cooki is full"){
	var productData = data.split('@');
	 var product_text_one= jQuery('#p1').val();
	var product_text_two= jQuery('#p2').val();
	 var product_text_three= jQuery('#p3').val();
	
	 var countval = jQuery("#countProduct").text();
	 var countval
	 if(product_text_one=='')
		 {
			 
		  var changeProductImage = document.getElementById("pro_img_1");
		   jQuery("#im1").addClass("closes");
		   jQuery("#im1").text('X');
		   jQuery("#im1").attr('dat-id',productid);
		   //$("#p1").addClass(productData[0]);
		  changeProductImage.src = productData[1];
		  document.getElementById('p1').value=productData[0];
		  document.getElementById("countProduct").textContent='1';
		 }
		 
		 else if(product_text_two=='' && product_text_one!=productData[0])
		 {
			 jQuery("#im1").addClass("closes");
				jQuery("#im1").text('X');
			  var changeProductImage = document.getElementById("pro_img_2");
			   jQuery("#im2").addClass("closes");
		   jQuery("#im2").text('X');
		   jQuery("#im2").attr('dat-id',productid);
	      	changeProductImage.src = productData[1]; 
		  document.getElementById('p2').value=productData[0];
	    document.getElementById("countProduct").textContent='2';
			}
			

			else if(product_text_three=='' && product_text_one!=productData[0] && product_text_two!=productData[0])
			{
				jQuery("#im1").addClass("closes");
		   jQuery("#im1").text('X');
				jQuery("#im2").addClass("closes");
		   jQuery("#im2").text('X');
			  var changeProductImage = document.getElementById("pro_img_3");
			   $("#im3").addClass("closes");
		    jQuery("#im3").text('X');
			jQuery("#im3").attr('dat-id',productid);
	 			 changeProductImage.src = productData[1];
				   document.getElementById('p3').value=productData[0];
				     document.getElementById("countProduct").textContent='3';
					 //document.getElementById("productCompareForm").submit();
					 //deleteCompare();
					 
					 
				}
				
				
else{
		alert("Your selection is full. Please clear all first");
		}	
	  }
	 
	}
		});
   }
   function closePopUp(){
   document.getElementById("add_model_compare").style.display='none';
   }
   function formSubmit(){
	   //deleteCompare();
	   document.getElementById("productCompareForm").submit();
   }
   
   function deleteCompare(){
	 jQuery.ajax({ 
      data: {
		  action:'MyAjaxDelete',
		  security: '4a7b9ff931', 
		  'test':'delete'
		  },
        type: 'post',
	 url: "http://themes.webmasterdriver.net/carforyouwp/wp-admin/admin-ajax.php",
	  success: function(data)
	  {
		  
	  }
	 });	  
   }
</script>
<script>(function() {function maybePrefixUrlField() {
	if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();</script><script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/themes.webmasterdriver.net\/carforyouwp\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='assets/js2/araba1.js' id='contact-form-7-js'></script>
<script type='text/javascript' src='assets/js2/araba2.js' id='bootstrap-js-js'></script>
<script type='text/javascript' src='assets/js2/araba3.js' id='bootstrap-slider-js'></script>
<script type='text/javascript' src='assets/js2/araba4.js' id='owl-carousel-slider-js'></script>
<script type='text/javascript' src='assets/js2/araba5.js' id='carforyou-custom-js'></script>
<script type='text/javascript' src='assets/js2/araba6.js' id='slick-js'></script>
<script type='text/javascript' src='assets/js2/araba7.js' id='mapbox-js'></script>
<script type='text/javascript' src='assets/js2/araba8.js' id='leaflet-markercluster-js'></script>
<script type='text/javascript' src='assets/js2/araba9.js' id='single-map-js'></script>
<script type='text/javascript' src='assets/js2/araba10.js' id='ekko lightbox-js'></script>
<script type='text/javascript' src='assets/js2/araba11.js' id='mapbox-sdk-js'></script>
<script type='text/javascript' src='assets/js2/araba12.js' id='latitude-longitude-js'></script>
<script type='text/javascript' src='assets/js2/araba13.js' id='ckeditor-js'></script>
<script type='text/javascript' src='assets/js2/araba14.js' id='datepicker.min-js'></script>
<script type='text/javascript' src='assets/js2/araba15.js' id='datepicker.en.js-js'></script>
<script type='text/javascript' src='assets/js2/araba16.js' id='jquery.validate-js'></script>
<script type='text/javascript' src='assets/js2/araba17.js' id='custom-validation-js'></script>
<script type='text/javascript' src='assets/js2/araba18.js' id='custom-js'></script>
<script type='text/javascript' src='assets/js2/araba19.js' id='wp-embed-js'></script>
<script type='text/javascript' src='assets/js2/araba20.js' id='comment-reply-js'></script>
<script type='text/javascript' src='assets/js2/araba21.js' id='mc4wp-forms-api-js'></script>

<script type='text/javascript' src='mo.js'></script>

<script type="text/javascript" src="assets/js2/araba22.js" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="assets/js2/araba23.js" id="jquery-ui-position-js"></script>
<script type="text/javascript" src="assets/js2/araba24.js" id="elementor-dialog-js"></script>
<script type="text/javascript" src="assets/js2/araba25.js" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="assets/js2/araba26.js" id="swiper-js"></script>
<script type="text/javascript" src="assets/js2/araba27.js" id="share-link-js"></script>


<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.0.12","is_static":false,"legacyMode":{"elementWrappers":true},"urls":{"assets":"http:\/\/themes.webmasterdriver.net\/carforyouwp\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":81,"title":"Contact%20Us%20%E2%80%93%20CarForYou","excerpt":"","featuredImage":false}};
</script>
<script type="text/javascript" src="" id="elementor-frontend-js"></script>
<script type="text/javascript">(function (undefined) {var _targetWindow ="prefer-popup";
window.NSLPopup = function (url, title, w, h) {
    var userAgent = navigator.userAgent,
        mobile = function () {
            return /\b(iPhone|iP[ao]d)/.test(userAgent) ||
                /\b(iP[ao]d)/.test(userAgent) ||
                /Android/i.test(userAgent) ||
                /Mobile/i.test(userAgent);
        },
        screenX = window.screenX !== undefined ? window.screenX : window.screenLeft,
        screenY = window.screenY !== undefined ? window.screenY : window.screenTop,
        outerWidth = window.outerWidth !== undefined ? window.outerWidth : document.documentElement.clientWidth,
        outerHeight = window.outerHeight !== undefined ? window.outerHeight : document.documentElement.clientHeight - 22,
        targetWidth = mobile() ? null : w,
        targetHeight = mobile() ? null : h,
        V = screenX < 0 ? window.screen.width + screenX : screenX,
        left = parseInt(V + (outerWidth - targetWidth) / 2, 10),
        right = parseInt(screenY + (outerHeight - targetHeight) / 2.5, 10),
        features = [];
    if (targetWidth !== null) {
        features.push('width=' + targetWidth);
    }
    if (targetHeight !== null) {
        features.push('height=' + targetHeight);
    }
    features.push('left=' + left);
    features.push('top=' + right);
    features.push('scrollbars=1');

    var newWindow = window.open(url, title, features.join(','));

    if (window.focus) {
        newWindow.focus();
    }

    return newWindow;
};

var isWebView = null;

function checkWebView() {
    if (isWebView === null) {
        function _detectOS(ua) {
            if (/Android/.test(ua)) {
                return "Android";
            } else if (/iPhone|iPad|iPod/.test(ua)) {
                return "iOS";
            } else if (/Windows/.test(ua)) {
                return "Windows";
            } else if (/Mac OS X/.test(ua)) {
                return "Mac";
            } else if (/CrOS/.test(ua)) {
                return "Chrome OS";
            } else if (/Firefox/.test(ua)) {
                return "Firefox OS";
            }
            return "";
        }

        function _detectBrowser(ua) {
            var android = /Android/.test(ua);

            if (/CriOS/.test(ua)) {
                return "Chrome for iOS";
            } else if (/Edge/.test(ua)) {
                return "Edge";
            } else if (android && /Silk\//.test(ua)) {
                return "Silk";
            } else if (/Chrome/.test(ua)) {
                return "Chrome";
            } else if (/Firefox/.test(ua)) {
                return "Firefox";
            } else if (android) {
                return "AOSP";
            } else if (/MSIE|Trident/.test(ua)) {
                return "IE";
            } else if (/Safari\//.test(ua)) {
                return "Safari";
            } else if (/AppleWebKit/.test(ua)) {
                return "WebKit";
            }
            return "";
        }

        function _detectBrowserVersion(ua, browser) {
            if (browser === "Chrome for iOS") {
                return _getVersion(ua, "CriOS/");
            } else if (browser === "Edge") {
                return _getVersion(ua, "Edge/");
            } else if (browser === "Chrome") {
                return _getVersion(ua, "Chrome/");
            } else if (browser === "Firefox") {
                return _getVersion(ua, "Firefox/");
            } else if (browser === "Silk") {
                return _getVersion(ua, "Silk/");
            } else if (browser === "AOSP") {
                return _getVersion(ua, "Version/");
            } else if (browser === "IE") {
                return /IEMobile/.test(ua) ? _getVersion(ua, "IEMobile/") :
                    /MSIE/.test(ua) ? _getVersion(ua, "MSIE ")
                        :
                        _getVersion(ua, "rv:");
            } else if (browser === "Safari") {
                return _getVersion(ua, "Version/");
            } else if (browser === "WebKit") {
                return _getVersion(ua, "WebKit/");
            }
            return "0.0.0";
        }

        function _getVersion(ua, token) {
            try {
                return _normalizeSemverString(ua.split(token)[1].trim().split(/[^\w\.]/)[0]);
            } catch (o_O) {
            }
            return "0.0.0";
        }

        function _normalizeSemverString(version) {
            var ary = version.split(/[\._]/);
            return (parseInt(ary[0], 10) || 0) + "." +
                (parseInt(ary[1], 10) || 0) + "." +
                (parseInt(ary[2], 10) || 0);
        }

        function _isWebView(ua, os, browser, version, options) {
            switch (os + browser) {
                case "iOSSafari":
                    return false;
                case "iOSWebKit":
                    return _isWebView_iOS(options);
                case "AndroidAOSP":
                    return false;
                case "AndroidChrome":
                    return parseFloat(version) >= 42 ? /; wv/.test(ua) : /\d{2}\.0\.0/.test(version) ? true : _isWebView_Android(options);
            }
            return false;
        }

        function _isWebView_iOS(options) {
            var document = (window["document"] || {});

            if ("WEB_VIEW" in options) {
                return options["WEB_VIEW"];
            }
            return !("fullscreenEnabled" in document || "webkitFullscreenEnabled" in document || false);
        }

        function _isWebView_Android(options) {
            if ("WEB_VIEW" in options) {
                return options["WEB_VIEW"];
            }
            return !("requestFileSystem" in window || "webkitRequestFileSystem" in window || false);
        }

        var options = {};
        var nav = window.navigator || {};
        var ua = nav.userAgent || "";
        var os = _detectOS(ua);
        var browser = _detectBrowser(ua);
        var browserVersion = _detectBrowserVersion(ua, browser);

        isWebView = _isWebView(ua, os, browser, browserVersion, options);
    }

    return isWebView;
}

function isAllowedWebViewForUserAgent() {
    var nav = window.navigator || {};
    var ua = nav.userAgent || "";
    if (/Instagram/.test(ua)) {
        /*Instagram WebView*/
        return true;
    } else if (/FBAV/.test(ua) || /FBAN/.test(ua)) {
        /*Facebook WebView*/
        return true;
    }

    return false;
}

window._nsl.push(function ($) {

    window.nslRedirect = function (url) {
        $('<div style="position:fixed;z-index:1000000;left:0;top:0;width:100%;height:100%;"></div>').appendTo('body');
        window.location = url;
    };

    var targetWindow = _targetWindow || 'prefer-popup',
        lastPopup = false;

    $(document.body).on('click', 'a[data-plugin="nsl"][data-action="connect"],a[data-plugin="nsl"][data-action="link"]', function (e) {
        if (lastPopup && !lastPopup.closed) {
            e.preventDefault();
            lastPopup.focus();
        } else {

            var $target = $(this),
                href = $target.attr('href'),
                success = false;
            if (href.indexOf('?') !== -1) {
                href += '&';
            } else {
                href += '?';
            }
            var redirectTo = $target.data('redirect');
            if (redirectTo === 'current') {
                href += 'redirect=' + encodeURIComponent(window.location.href) + '&';
            } else if (redirectTo && redirectTo !== '') {
                href += 'redirect=' + encodeURIComponent(redirectTo) + '&';
            }

            if (targetWindow !== 'prefer-same-window' && checkWebView()) {
                targetWindow = 'prefer-same-window';
            }

            if (targetWindow === 'prefer-popup') {

                lastPopup = NSLPopup(href + 'display=popup', 'nsl-social-connect', $target.data('popupwidth'), $target.data('popupheight'));
                if (lastPopup) {
                    success = true;
                    e.preventDefault();
                }
            } else if (targetWindow === 'prefer-new-tab') {
                var newTab = window.open(href + 'display=popup', '_blank');
                if (newTab) {
                    if (window.focus) {
                        newTab.focus();
                    }
                    success = true;
                    e.preventDefault();
                }
            }

            if (!success) {
                window.location = href;
                e.preventDefault();
            }
        }
    });

    var googleLoginButton = $('a[data-plugin="nsl"][data-provider="google"]');
    if (googleLoginButton.length && checkWebView() && !isAllowedWebViewForUserAgent()) {
        googleLoginButton.remove();
    }
});})();</script><script>
$ = jQuery;
$(".resatecompare").click(function(){
	$.ajax({ 
      data: {
		  action:'MyAjaxDelete', 
		  security: '4a7b9ff931',
		  'test':'delete'
		  },
        type: 'post',
	 url: "http://themes.webmasterdriver.net/carforyouwp/wp-admin/admin-ajax.php",
	  success: function(data)
	  {
		//alert(data);  
	  }
	 });
	$("#countProduct").text("0");
	$(".removdata").html('<li class="vs_model"><span class="allID" id="im1" ></span><a href="javascript();"><img id="pro_img_1" src="http://themes.webmasterdriver.net/carforyouwp/wp-content/themes/carforyou/assets/images/auto-img.png" alt="auto-img" class="img-responsive im1"></a></li><li class="vs_model "><span class="allID" id="im2" ></span><a href="javascript();"><img id="pro_img_2" src="http://themes.webmasterdriver.net/carforyouwp/wp-content/themes/carforyou/assets/images/auto-img.png" alt="auto-img" class="img-responsive im2"></a></li><li class="vs_model "><span class="allID" id="im3" ></span><a href="javascript();"><img id="pro_img_3" src="http://themes.webmasterdriver.net/carforyouwp/wp-content/themes/carforyou/assets/images/auto-img.png" alt="auto-img" class="img-responsive im3"></a></li>');
	$(".hidden").html('<input id="p1" name="p1" value=""/><input id="p2" name="p2" value=""/><input id="p3" name="p3" value=""/>');
	//document.getElementById('#productCompareForm').reset();
	
});
$("body").delegate(".allID" ," click", function(e){
	e.preventDefault();
	
	var thisID = $(this).attr("dat-id");
	var cookid = $(this).attr("cook-id");
	
	var ctext = $("#countProduct").text();
	var ntext = ctext - 1;
	var ID = $(this).attr("id");
	$.ajax({ 
      data: {
		  action:'MYDELETEFUNCTION', 
		  'DeletID':thisID,
		  'cookid':cookid
		  },
        type: 'post',
	  
     url: "http://themes.webmasterdriver.net/carforyouwp/wp-admin/admin-ajax.php",
	  success: function(data)
	  {
		  //alert(data);
		  if(ID == "im1"){
			 $("#p1").val("");
			  
		  }else if(ID == "im2"){
			 $("#p2").val("");
			  
		  }
		  else if(ID == "im3"){
			 $("#p3").val("");
			  
		  }
		  $("#countProduct").text(ntext);
		  
		  $("."+ID).attr("src" , "http://themes.webmasterdriver.net/carforyouwp/wp-content/themes/carforyou/assets/images/auto-img.png");
		   $("#"+ID).text("");
		   $("."+ID).attr("value" , "");
		   $("#"+ID).removeClass("closes");
	  }
	});
	
});
</script>
</body>
</html>