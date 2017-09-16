<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en" ng-app="app" data-page="@{{ mainUrl }}">
<head>
  <!-- Basic -->
  <title ng-bind="title"></title>
  <!-- Define Charset -->
  <meta charset="utf-8">
  <base href="/">
  <!-- Responsive Metatag -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="<?= asset('/css/bootstrap.min.css') ?>" type="text/css" media="screen">
  <link rel="stylesheet" href="<?= asset('/css/bootstrap.offcanvas.css') ?>"/>
  <link rel="stylesheet" type="text/css" href="<?= asset('/css/responsive.css') ?>" media="screen">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?= asset('/css/font-awesome.min.css') ?>" type="text/css" media="screen">
    <!-- Animated CSS Styles  -->
	<script type="text/javascript" src="<?= asset('/js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?= asset('/js/bootstrap.min.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?= asset('/css/ionicons.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= asset('/css/owl.carousel.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= asset('/css/owl.theme.css') ?>">
	
	
	{{--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>--}}
    
 
	
	<link rel="stylesheet" type="text/css" href="<?= asset('/css/main.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= asset('/css/about.css') ?>">
	<link rel="stylesheet" href="<?= asset('/css/animate.css') ?>"/>
	
	<link rel="stylesheet" type="text/css" href="<?= asset('/css/animate.css') ?>">
	  <!-- CSS Styles  -->
	  <link rel="stylesheet" type="text/css" href="<?= asset('/css/style.css') ?>" media="screen">
	  <!-- Responsive CSS Styles  -->
	  <link rel="stylesheet" type="text/css" href="<?= asset('/css/section.css') ?>">
 
	
	
	<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-51563265-1', 'upmelab.com');
        ga('send', 'pageview');
    </script>
</head>
<body>
<header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">Your Logo</a>
                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas" style="float:left;">
                        <span class="sr-only">Toggle navigation</span>
                        <span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </span>
                    </button>
                </div>
                <div class="navbar-offcanvas navbar-offcanvas-touch" id="js-bootstrap-offcanvas">
                    <ul class="nav navbar-nav navbar-right" id="navi">
                          <li><a class="<?php activem(''); ?>" href="{{ url('/') }}">Our Psychics</a></li>               
						  <li><a class="<?php activem('foradvisors'); ?>" href="{{ url('/foradvisors') }}">For Advisors</a></li>
						  <li><a class="<?php activem('about'); ?>" href="{{ url('/about') }}">About</a></li>
						  <li><a class="<?php activem('blog'); ?>" href="{{ url('/blog') }}">Blog</a></li>
						  <li><a class="<?php activem('contact'); ?>" href="{{ url('/contact') }}">Contact</a></li>
						  <li><a class="<?php activem('faq'); ?>" href="{{ url('/faq') }}">FAQ</a></li>
						  @if (Auth::guest())
						  <li><a href="#" data-toggle="modal" data-target="#LoginModal">Login</a></li>
						  <li><a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a></li>
						  @else
						   <li><a href="{{ url('/admin/dashboard') }}">My Account</a></li>
						   <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
							<ul class="dropdown-menu" role="menu">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
												{{ Auth::user()->name }} <span class="caret"></span>
								 </a>
							</ul>
							</li>		 
						   @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<!---Header Section End Here-->
<?php
function activem($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array); 
  if($currect_page == $url){ 
      echo 'active'; //class name in css 
  } return;
}
?>
<script type="text/javascript" src="<?= asset('/js/sidenav.min.js') ?>"></script>
<link rel="stylesheet" type="text/css" href="<?= asset('/css/sidenav.min.css') ?>">