<?php
header( "Access-Control-Allow-Origin: *" );
session_start();

if ( is_mobile() == false ) {
	$a =curPageURL();
	if ( strpos( $a, 'subscribe-our-posts' ) !== false ) {
		header( "Location: ".get_option( 'home' ) ); /* Redirect browser */
	}
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=1100" scheme=""/>
	<meta name="google-site-verification" content="Tcjl9wQk3soINMQie6D-9-K8lR7KS8s1GruZx0s2sgw" scheme=""/>
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" scheme=""/>

	<meta class='swiftype' name='type' data-type='enum' content='blog' />

	<title><?php bloginfo( 'name' ); ?> <?php wp_title (); ?></title>

	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=font-css.css&v=20141008115802" charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=bootstrapbase&v=20141008115802" charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-css.min.css&v=20141008115802" charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-header-css.min.css&v=20141008115802" charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-footer-css.min.css&v=20141008115802" charset="UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />




	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
	/** dropdown menus **/
	var currentActive;

	function hideDropDown(_elem) {
		$('.navigation-bar li[class=active]').removeClass('active');
		$('[data-dropdown-wrapper]').hide();
	}

	function toggleDropdowMenu(_elem) {
		$('.navigation-bar li[class=active]').removeClass('active');
		$('[data-dropdown-wrapper]').hide();
		$("[data-dropdown-wrapper='" + $(_elem).attr('data-name') + "']").toggle();

		if (_elem.parent().hasClass('active')) {
			_elem.parent().removeClass('active');
			currentActive.addClass('active');
		} else {
			_elem.parent().addClass('active');
			currentActive.removeClass('active');
		}
	}
	$(document).ready(function() {
		currentActive = $('.navigation-bar li[class=active]');
		$('[data-option=dropdown]').click(function(e) {
			e.preventDefault();
			e.stopPropagation();

			clicked = $(this);

			if ($("[data-dropdown-wrapper='" + $(clicked).attr('data-name') + "']").is(":visible")) {
				hideDropDown(clicked);
			} else {
				toggleDropdowMenu(clicked);
			}


			$('[data-dropdown-wrapper]').click(function(event) {
				event.stopPropagation();
			});

			$(document).on('click', function(e) {
				hideDropDown(clicked);
			});
		});
	});
	</script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.waitforimages.js"></script>


	<?php
/*
	 * 	Add this to support sites with sites with threaded comments enabled.
	 */
if ( is_singular() /*&& get_option( 'thread_comments' )*/ )
	wp_enqueue_script( 'comment-reply' );

wp_head();

wp_get_archives( 'type=monthly&format=link' );
?>
</head>
<body>
	<div id="wrapper" data-swiftype-index="false">
		<div class="header-hero-wrapper home">
			<div class="navigation-outter">
				<div class="navigation-inner container">
					<div id="wt29_wtheader" class="row">
						<style>.submenuhover{top: 80px;}.navigation-inner{position: inherit;}</style>
						<div data-swiftype-index="false" class="swiftype-bar" >
							<style>.header-hero-wrapper{padding-top: 0;}.navigation-inner{height: 80px;}.navigation-outter.navigation-wrapper{padding-top: 0px;}</style>
							<span class="header-contacts">Call us at  404-719-5100</span>
							<a title="Contact us" alt="Contact us" class="popup_link header-contact-us" href="/company/contact-us/">Contact Us</a>
							<a href="https://www.outsystems.com/home/login.aspx" class="header-login" title="Login" alt="Login">Login</a>
						</div>
						<div class="navigation-longtail" data-swiftype-index="false">
							<div class="span1"></div>
							<div class="navigation-bar-section navigation-bar-tail-spacer">
								<a href="/">
									<img class="navigation-bar-tail-logo" alt="" src="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=logo-outsystems_glow">
								</a>
							</div>
							<div class="navigation-items">
								<ul class="navigation-bar">
									<span>
										<li>
											<a data-name="platform" data-option="dropdown" href="/platform/">
												<span class="">Platform</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li>
											<a data-name="solutions" data-option="dropdown" href="/solutions/">
												<span class="solutions">Solutions</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li>
											<a data-name="customers" data-option="" href="/customers/">
												<span class="customers">Customers</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li>
											<a data-name="get-started" data-option="" href="/get-started/">
												<span class="">Get Started</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li class="active">
											<a data-name="company" data-option="" href="/company/">
												<span class="">About</span>
											</a>
										</li>
										<li class="spacer"></li>
									</span>
								</ul>
								<div class="navigation-search-outter navigation-bar-section">
									<div class="search_field">
										<form name="WebForm1" method="post" action="/blog/wp-content/plugins/kwordpress-mkto/k-wordpress-search-redirect.php" id="WebForm1">
											<input class="search" name="SearchQuery" type="search" maxlength="256" size="30">
											<input class="button" type="submit" name="" value=" ">
										</form>
									</div>
								</div>
							</div>
							<span id="">
								<div data-swiftype-index="false" data-dropdown-wrapper="platform">
									<style type="text/css">body.landing-no-top {
										background: white;
									}
									.submenuhoverbox.product {
										background-image: none;
										padding-top: 0;
									}
									.light-back {
										background: url("http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=menu-hover-lamp&v=20140924100349") no-repeat;
										background-position: 25px 0;
										margin-left: 0;
										padding-left: 200px;
										padding-top: 30px;
										padding-bottom: 10px;
									}
									.mobile-back {
										background: url("http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=menu-hover-mobile&v=20140924100349") no-repeat;
										background-position: 5px 0;
										margin-left: 0;
										padding-left: 140px;
										padding-top: 30px;
										padding-bottom: 10px;
									}

									.h3-product-tab {
										font-size: 24px;
										line-height: 28px;
										font-weight: 600;
										color: #333;
										margin-top: 0;
										margin-bottom: 10px;
										display: block;
									}

									.h6-product-tab {
										font-size: 16px;
										line-height: 22px;
										font-weight: 400;
										margin-bottom: 10px;
										margin-bottom: 10px;
										display: block;
									}

									.submenuhoverbox-firstcontent.light-back a,
									.submenuhoverbox-secondcontent.mobile-back a {
										text-decoration: none;
										display: block;
										font-family: 'myriad-pro',Helvetica,Arial,sans-serif;
									}

									a:hover span.h6-product-tab {
										text-decoration: underline;
									}

									@media screen and (max-width: 767px) {
										.header-hero-wrapper {

										}
										.light-back {
											background: url("http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=menu-hover-lamp&v=20140924100349") no-repeat;
											background-position: -15px 22px;
											background-size: 40%;
											margin-left: 0;
											padding-left: 0;
										}
										.mobile-back {
											background: url("http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=menu-hover-mobile&v=20140924100349") no-repeat;
											padding-top: 30px;
											background-position: -12px 13px;
											background-size: 40%;
											margin-left: 0;
											padding-left: 0;
											padding-bottom: 10px;
										}

										.submenuhoverbox-firstcontent.light-back a,
										.submenuhoverbox-secondcontent.mobile-back a {
											padding-left: 100px;
										}


										.submenuhoverbox-firstcontent {
											display: inline-block;
											text-align: left;
											width: 100%;
											margin-left: 0;
											float: none;
											margin-top: 0;
											background-position: 0px 33px;
											background-size: 90px auto;
											margin-top: -30px;
											padding-bottom: 0;
											margin-bottom: -20px;
										}

										.submenuhoverbox-secondcontent {
											display: inline-block;
											text-align: left;
											width: 100%;
											margin-left: 0;
											float: none;
											margin-top: 0;
											background-position: -2px 16px;
											background-size: 95px auto;
										}
									}
									</style>
									<div class="magiccontainer">
										<div class="submenuhover">
											<div class="container">
												<div class="row">
													<div class="span12 align-center submenuhoverbox product">
														<div class="row">
															<div class="span6">
																<div class="submenuhoverbox-firstcontent light-back"> <a href="/platform/"> <span class="h3-product-tab"> Enterprise Rapid App Delivery Platform </span> <span class="h6-product-tab" style="display: block; color: #0088cc;">Learn More...</span> </a>  </div>
															</div>

															<div class="span6">
																<div class="submenuhoverbox-secondcontent mobile-back"> <a href="/platform/madp"> <span class="h3-product-tab"> Mobile Application Delivery Platform </span> <span class="h6-product-tab" style="display: block;color: #0088cc;">Learn More...</span> </a>  </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									</div><div data-swiftype-index="false" data-dropdown-wrapper="solutions"><style type="text/css">
									body.landing-no-top {

									}
									@media screen and (max-width: 767px) {
										.header-hero-wrapper {

										}
									}
									</style>
									<div class="magiccontainer">
										<div class="submenuhover" id="submenu-solutions">
											<div class="container">
												<div class="row">
													<div class="span12 align-center submenuhoverbox">
														<div class="row">
															<div class="span4">
																<div class="submenuhoverbox-firstcontent" style="margin-left:100px">
																	<h1>
																		Solutions
																	</h1>
																	<h5>
																		Hundreds of companies
																		<br>
																		in 22 industries use
																		<br>
																		OutSystems Platform to
																		<br>
																		deliver innovative
																		<br>
																		business solutions.
																	</h5>
																</div>
															</div>
															<div class="span4" style="">
																<div class="submenuhoverbox-line" style="
																position: absolute;
																margin-left: -15px;
																">
																&nbsp;
															</div>
															<div class="submenuhoverbox-secondcontent">
																<h6 class="submenuhoverbox-contentheading">
																	See what our customers have built in industries like:
																</h6>
																<ul class="list" style="list-style-type: none; font-size:16px">
																	<li><span class="osicon-home-banking" style="color: #808080;">&nbsp;</span> <a href="/solutions/banking/">Banking</a></li>
																	<li><span class="osicon-insurance" style="color: #808080;">&nbsp;</span> <a href="/solutions/insurance/">Insurance</a></li>
																	<li><span class="osicon-healthcare" style="color: #808080;">&nbsp;</span> <a href="/solutions/healthcare/">Healthcare</a></li>
																	<li><span class="osicon-science" style="color: #808080;">&nbsp;</span> <a href="/solutions/pharmaceutical-and-biotech/">Pharma &amp; Biotech</a></li>
																	<li><span class="osicon-transportation" style="color: #808080;">&nbsp;</span> <a href="/solutions/retail/">Retail &amp; Consumer Goods</a></li>
																	<li style="margin-top: 16px; padding-left: 28px;"><a href="/solutions/all-industries/" style="display: block;">All industries »</a></li>
																</ul>
															</div>
														</div>
														<div class="span4">
															<div class="submenuhoverbox-line" style="
															position: absolute;
															margin-left: -15px;
															">
															&nbsp;
														</div>
														<div class="submenuhoverbox-secondcontent" style=" ">
															<h6 class="submenuhoverbox-contentheading">
																<span style="color: rgb(128, 128, 128); font-family: myriad-pro, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 600; line-height: 22px; background-color: rgb(255, 255, 255);">Kick-start your next app project with our sample apps</span>:
															</h6>
															<ul class="innovationlist" style="font-size:16px; color:#808080;">
																<li><a href="/apps/field-services-app/">Field Services</a></li>
																<li><a href="/apps/mobile-order-management-app/">Mobile Order Management</a></li>
																<li><a href="/apps/executive-dashboard-app/">Executive Dashboard</a></li>
																<li><a href="/apps/customer-portal-app/">Customer Portal</a></li>
																<li><a href="/apps/accident-reporting-app/">Car Accident Reporting</a></li>
																<li style="margin-top: 16px;  list-style-type: none; "><a href="/apps/" style="display: block;">More apps »</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div></span>
						<div class="navigation-longtail-end">

						</div>
					</div>
					<div align="right">
						<ul class="sub-navigation-bar">
							<span id="wt29_wtheader_wt18_wt34_wtListSections">
								<li>
									<a href="/company/about/">
										<span class="class">Overview</span>
									</a>
								</li>
								<li>
									<a href="/company/news/">
										<span class="class">News</span>
									</a>
								</li>
								<li>
									<a href="/company/events/">
										<span class="class">Events</span>
									</a>
								</li>
								<li>
									<a href="/company/management-team/">
										<span class="class">Management Team</span>
									</a>
								</li>
								<li>
									<a href="/company/careers/">
										<span class="class">Careers</span>
									</a>
								</li>
								<li>
									<a href="/company/investors/"><span class="class">Investors</span></a>
								</li>
								<li class="active">
									<a href="/company/blog/"><span class="class">Blog</span></a>
								</li>
								<li>
									<a href="/company/contact-us/"><span class="class">Offices</span></a>
								</li>
							</span>
						</ul>
					</div>
					<script type="text/javascript" src="//use.typekit.net/jlz7hji.js"></script>
					<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
				</div>
			</div>
		</div>
	</div>