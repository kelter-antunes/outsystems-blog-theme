<?php
header( "Access-Control-Allow-Origin: *" );
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=1100" scheme=""/>
	<meta name="google-site-verification" content="Tcjl9wQk3soINMQie6D-9-K8lR7KS8s1GruZx0s2sgw" scheme=""/>
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" scheme=""/>

	<title>
		<?php bloginfo( 'name' ); ?> <?php wp_title (); ?>
	</title>

	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
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

	<div id="wrapper">
		<div class="header-hero-wrapper home">
			<div class="navigation-outter">
				<div class="navigation-inner container">
					<div class="row">
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
									<img class="navigation-bar-tail-logo" alt="" src="https://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=logo-outsystems_glow" />
								</a>
							</div>
							<div class="navigation-items">
								<ul class='navigation-bar'>
									<span id="wt4_wtheader_wt2_wtListSections">
										<li>
											<a href="https://www.outsystems.com/platform/">
												<span class="">How it Works</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li>
											<a href="https://www.outsystems.com/customers/">
												<span class="customers">Customers</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li>
											<a href="https://www.outsystems.com/get-started/">
												<span class="">Get Started</span>
											</a>
										</li>
										<li class="spacer"></li>
										<li class="active">
											<a href="https://www.outsystems.com/company/">
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
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl00_wt11" href="https://www.outsystems.com/company/about/">
										<span class="class">Overview</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl02_wt11" href="https://www.outsystems.com/company/events/">
										<span class="class">Events</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl04_wt11" href="https://www.outsystems.com/company/news/">
										<span class="class">News</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl06_wt11" href="https://www.outsystems.com/company/management-team/">
										<span class="class">Management Team</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl08_wt11" href="https://www.outsystems.com/company/careers/">
										<span class="class">Careers</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl10_wt11" href="https://www.outsystems.com/company/investors/">
										<span class="class">Investors</span>
									</a>
								</li>
								<li class="active">
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl00_wt11" href="/blog/">
										<span class="class">Blog</span>
									</a>
								</li>
								<li>
									<a id="wt7_wtheader_wt10_wt50_wtListSections_ctl12_wt11" href="https://www.outsystems.com/company/contact-us/">
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
