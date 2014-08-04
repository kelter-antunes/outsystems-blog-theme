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

	<title>
		<?php bloginfo( 'name' ); ?> <?php wp_title (); ?>
	</title>

	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link type="text/css" rel="stylesheet" href="/CMS_BackOffice/ResourceLink.aspx?ResourceName=font-css.css&v=20140603115654" charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="/CMS_BackOffice/ResourceLink.aspx?ResourceName=bootstrapbase&v=20131030114746" charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-css&v=20131030114746" charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-header-css&v=20131030114746" charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-footer-css&v=20131030114746" charset="UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
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
					<div class="row">
						<span id="wt4_wtheader_wt2_wtListSubMenuHoveSections">
							<div class="magiccontainer">
								<div class="submenuhover" id="submenu-solutions">
									<div class="container">
										<div class="row">
											<div class="span12 align-center submenuhoverbox">
												<div class="row">
													<div class="span6">
														<div class="submenuhoverbox-firstcontent">
															<h1 class="align-center">
																Solutions
															</h1>
															<h5>
																Hundreds of companies in 22 industries use OutSystems Platform to deliver innovative business solutions.
															</h5>
														</div>
													</div>
													<div class="span6">
														<div class="submenuhoverbox-line" style="position: absolute;margin-left: -15px;">
															&nbsp;
														</div>
														<div class="submenuhoverbox-secondcontent" style=" ">
															<h6 class="submenuhoverbox-contentheading">
																See what our customers have built for:
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
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<script>
							var currentActive;
							function toggleSolutionsSubMenu(_elem) {
								$('#submenu-solutions').toggle();
								if (_elem.parent().parent().hasClass('active')) {
									_elem.parent().parent().removeClass('active');
									currentActive.addClass('active');
								} else {
									_elem.parent().parent().addClass('active');
									currentActive.removeClass('active');
								};
							}
							$(document).ready(function() {
								currentActive = $('.navigation-bar li[class=active]');
								$('.solutions').click(function(e) {
									e.preventDefault();
									e.stopPropagation();
									toggleSolutionsSubMenu($(this));
									var handler = function(e) {
										if ($('#submenu-solutions').is(':visible') && $('#submenu-solutions').has(e.target).length === 0) {
											toggleSolutionsSubMenu($('.solutions'));
											$('body').unbind('click', handler);
										};
									};
									$('body').bind('click', handler);
								});
							});
						</script></span>
						<style>.submenuhover{top: 80px;}.navigation-inner{position: inherit;}</style>
						<div style="position: relative; z-index: 9999;height: 30px;text-align: right;">
							<style>.header-hero-wrapper{padding-top: 0;}.navigation-inner{height: 80px;}.navigation-outter.navigation-wrapper{padding-top: 0px;}
							</style>
							<a class="header-contact-us" title="Contact us" alt="Contact us" href="/company/contact-us/">Contact Us</a>
							<a class="header-login" title="Login" alt="Login" href="/home/login.aspx">Login</a>
						</div>
						<div class="navigation-longtail">
							<div class="span1"></div>
							<div class="navigation-bar-section navigation-bar-tail-spacer">
								<a href="/">
									<img class="navigation-bar-tail-logo" alt="" src="/CMS_BackOffice/ResourceLink.aspx?ResourceName=logo-outsystems_glow" />
								</a>
							</div>
							<div class="navigation-items">
								<ul class='navigation-bar'>
									<span id="wt4_wtheader_wt2_wtListSections">
										<li>
											<a href="/platform/">
												<span class="">How it Works</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li class="">
											<a id="wt4_wtheader_wt2_wtListSections_ctl02_wt43" href="/solutions/">
												<span class="solutions">Solutions</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li>
											<a href="/customers/">
												<span class="customers">Customers</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li>
											<a href="/get-started/">
												<span class="">Get Started</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li class="active">
											<a href="/company/">
												<span class="">About</span>
											</a>
										</li>
										<li class="spacer"></li>
									</span>
								</ul>
								<div class="navigation-search-outter navigation-bar-section">
									<div class="search_field">
										<form name="WebForm1" method="post" action="/blog/wp-content/plugins/kwordpress-mkto/k-wordpress-search-redirect.php" id="WebForm1">
											<input class="search" name="SearchQuery" type="search" maxlength="256" size="30" />
											<input class="button" type="submit" name="" value=" " />
										</form>
									</div>
								</div>
							</div>
							<div class="navigation-longtail-end"></div>
						</div>

						<div align="right">
							<ul class="sub-navigation-bar">
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl00_wt11" href="/company/about/">
										<span class="class">Overview</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl02_wt11" href="/company/events/">
										<span class="class">Events</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl04_wt11" href="/company/news/">
										<span class="class">News</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl06_wt11" href="/company/management-team/">
										<span class="class">Management Team</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl08_wt11" href="/company/careers/">
										<span class="class">Careers</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl10_wt11" href="/company/investors/">
										<span class="class">Investors</span>
									</a>
								</li>
								<li class="active">
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl00_wt11" href="/blog/">
										<span class="class">Blog</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl12_wt11" href="/company/contact-us/">
										<span class="class">Offices</span>
									</a>
								</li>
							</ul>
						</div>
						<script type="text/javascript" src="//use.typekit.net/jlz7hji.js"></script>
						<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
					</div>
				</div>
			</div>
		</div>
