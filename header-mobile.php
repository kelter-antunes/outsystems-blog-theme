<?php
header( "Access-Control-Allow-Origin: *" );
session_start();

if ( $_SESSION['IgnoreMobileDeviceCheck'] == false ) {
	//do mobile proxy
	$_SESSION['currentPageURL'] = curPageURL();
//	header( "Location: http://wwwpp.outsystems.net/blog/wp-content/themes/outsystems-blog-theme/mobileproxy.php" ); /* Redirect browser */
	header( "Location: ".get_template_directory_uri()."/mobileproxy.php" ); /* Redirect browser */
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
	<meta name="apple-mobile-web-app-capable" content="yes">

	<meta name="google-site-verification" content="Tcjl9wQk3soINMQie6D-9-K8lR7KS8s1GruZx0s2sgw"/>
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>

	<title>
		<?php bloginfo( 'name' ); ?> <?php wp_title (); ?>
	</title>

	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=font-css.css&v=20141008115802" charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=bootstrapbase-responsive&v=20141008115802" charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-css&v=20141008115802" charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-header-css&v=20141008115802" charset="UTF-8">

	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-medias-css.css&v=20141008115802" charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-footer-responsive-css&v=20141008115802" charset="UTF-8">


	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<script src="/_osjs.js?8_0_1_10" type="text/javascript" charset="UTF-8"></script>
	<script src="/_jquery-1-4-2.js?8_0_1_10" type="text/javascript" charset="UTF-8"></script>
	<script src="/Blocks/CorporateSite/simplify_responsive/DropDownMenu.js?18547" type="text/javascript" charset="UTF-8"></script>
	<script src="/Blocks/CorporateSite/simplify_responsive/MenuSlider.js?18547" type="text/javascript" charset="UTF-8"></script>

	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.waitforimages.js"></script>

	<script type="text/javascript" src="//use.typekit.net/jlz7hji.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<style>
		body {
			background: none;
			background-color: #e6e6e6;
		}

		h1 {
			text-align: center;
		}

		#footer-wrapper ul[class*="span"] {
			margin-left: 0;
		}

		.header-hero-wrapper.home {
			height: 60px;
			background: none;
		}

		.comment-form {
			width: 100%;
		}
		.comment-form > div, .comment-form > p {
			width: 100%;
		}
		.forminput {
			margin-left: 0;
			width: 100%;
		}
		.forminput textarea {
			width: 100%;
		}

		.forminput input[type="text"] {
			width: 100%;
		}

		.author_data {
			margin-left: 0px;
		}
		.author_photo {
			margin-right: 10px;
		}

		.mobile-search-input {
			margin-top: 0 !important;
		}

		.mobile-search-cancel a {
			color: #CCC !important;
		}

		.feeds_home {
			float: none;
			text-align: center;
		}
		.header_top {
			height: auto;
			margin-top: 15px;
			text-align: center;
		}
		.categories {
			width: 285px;
			margin: 0 auto;
			height: auto;
		}
		.categories .toggle {
			padding: 5px 10px;
		}
	</style>


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

	<div class="header-hero-wrapper home">
		<div class="navigation-outter">
			<div class="navigation-inner container">
				<div id="wt4_wtheader" class="row">
					<span id="wt4_wtheader_wt2_wtListSubMenuHoveSections"></span>
					<div class="navigation-longtail">
						<div class="span1"></div>
						<div class="navigation-bar-section navigation-bar-tail-spacer">
							<a id="wt4_wtheader_wt2_wt66" href="/">
								<img class="navigation-bar-tail-logo" alt="" src="http://www.outsystems.com/CMS_BackOffice/ResourceLink.aspx?ResourceName=logo-outsystems_glow">
							</a>
							<div class="Application_Menu">
								<div class="MenuSlider_Toggler_Overlay2"></div>
								<div class="MenuSlider_Toggler menu-close">
									<span class="osicon-menu"></span>
								</div>
								<div class="menu-back">
									<div class="Menu_TopMenus">
										<div id="wt4_wtheader_wt2_wt41_wt1_wt2_wtDropDownButtonRoot" class="Menu_DropDownButton">
											<div id="wt4_wtheader_wt2_wt41_wt1_wt2_wtDropDownButtonElement" class="Menu_TopMenu">
												<span class="menu-active-marker"></span>
												<div id="wt4_wtheader_wt2_wt41_wt1_wt2_wtMenuItem">
													<a id="wt4_wtheader_wt2_wt41_wt1_wt2_wtMenuItem_wtmenu_link2" href="/">Home</a>
												</div>
											</div>
										</div>
										<span id="wt4_wtheader_wt2_wt41_wt1_wtListSections">
											<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl00_wt10_wtDropDownButtonRoot" class="Menu_DropDownButton">
												<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl00_wt10_wtDropDownButtonElement" class="Menu_TopMenu">
													<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl00_wt10_wtMenuItem">
														<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl00_wt10_wtMenuItem_wtmenu_link" href="/platform/">Platform</a>
													</div>
												</div>
											</div>
											<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl02_wt10_wtDropDownButtonRoot" class="Menu_DropDownButton">
												<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl02_wt10_wtDropDownButtonElement" class="Menu_TopMenu">
													<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl02_wt10_wtMenuItem">
														<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl02_wt10_wtMenuItem_wtmenu_link" href="/solutions/">Solutions</a>
													</div>
												</div>
											</div>
											<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl04_wt10_wtDropDownButtonRoot" class="Menu_DropDownButton">
												<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl04_wt10_wtDropDownButtonElement" class="Menu_TopMenu">
													<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl04_wt10_wtMenuItem">
														<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl04_wt10_wtMenuItem_wtmenu_link" href="/customers/">Customers</a>
													</div>
												</div>
											</div>
											<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl06_wt10_wtDropDownButtonRoot" class="Menu_DropDownButton">
												<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl06_wt10_wtDropDownButtonElement" class="Menu_TopMenu">
													<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl06_wt10_wtMenuItem"><a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl06_wt10_wtMenuItem_wtmenu_link" href="/get-started/">Get Started</a>
													</div>
												</div>
											</div>
											<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtDropDownButtonRoot" class="Menu_DropDownButton">
												<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtDropDownButtonElement" class="Menu_TopMenu">
													<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtMenuItem">
														<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtMenuItem_wtmenu_link" href="/company/">About</a>
													</div>
												</div>
												<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtDropDownPanel" class="Menu_DropDownPanel">
													<div id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtMenuSubItems" class="Menu_SubItemsPlaceholder">
														<span id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtListSections" class="ListRecords">
															<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtListSections_ctl00_wt11" href="/company/about/">
																<span class="class">Overview</span>
															</a>
															<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtListSections_ctl02_wt11" href="/company/events/">
																<span class="class">Events</span>
															</a>
															<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtListSections_ctl04_wt11" href="/company/news/">
																<span class="class">News</span>
															</a>
															<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtListSections_ctl06_wt11" href="/company/management-team/">
																<span class="class">Management Team</span>
															</a>
															<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtListSections_ctl08_wt11" href="/company/careers/">
																<span class="class">Careers</span>
															</a>
															<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtListSections_ctl10_wt11" href="/company/investors/">
																<span class="class">Investors</span>
															</a>
															<a id="wt2_wtheader_wt14_wt41_wt1_wtListSections_ctl08_wt10_wtListSections_ctl02_wt16" class="active" href="/company/events/">
																<span class="menu-active-marker-sub"></span>
																<span class="class">Blog</span>
															</a>
															<script>$(function(){$('.Menu_DropDownArrow.osicon-arrow-down').siblings()[0].click();});</script>
															<a id="wt4_wtheader_wt2_wt41_wt1_wtListSections_ctl08_wt10_wtListSections_ctl14_wt11" href="/company/contact-us/">
																<span class="class">Offices</span>
															</a>
														</span>
													</div>
												</div>
											</div>
										</span>
									</div>
								</div>
							</div>
							<div class="mobile-menu-items">
								<span class="osicon-search"></span>
							</div>
							<div class="MenuSlider_Toggler">
								<span class="osicon-menu"></span>
							</div>
							<script>
								$(document).ready(function(){
									setTimeout(function(){
										$('.osicon-search').bind('click', function(){
											$('.search-overlay').fadeToggle( 'fast' );
										});
										$('.mobile-search-cancel a').bind('click', function(){ $('.search-overlay').fadeToggle(); });
									}, 500);
									var toggleMenu = function toggleMenu(e) {
										$('body').toggleClass('MenuSlider_IsOpen');
										if (RichWidgets.MenuSlider.onMenuStateChanged) {
											RichWidgets.MenuSlider.onMenuStateChanged();
										}
										e.stopPropagation()
									};
									$( '.Application_Menu' ).on( 'swiperight', toggleMenu );
								});
							</script>
						</div>
						<div class="navigation-items">
							<ul class="navigation-bar">
								<span id="wt4_wtheader_wt2_wtListSections">
									<li>
										<a id="wt4_wtheader_wt2_wtListSections_ctl00_wt43" href="/platform/">
											<span class="">How it Works</span>
										</a>
									</li>
									<li class="spacer"></li>
									<li>
										<a id="wt4_wtheader_wt2_wtListSections_ctl02_wt43" href="/solutions/">
											<span class="solutions">Solutions</span>
										</a>
									</li>
									<li class="spacer"></li>
									<li>
										<a id="wt4_wtheader_wt2_wtListSections_ctl04_wt43" href="/customers/">
											<span class="customers">Customers</span>
										</a>
									</li>
									<li class="spacer"></li>
									<li>
										<a id="wt4_wtheader_wt2_wtListSections_ctl06_wt43" href="/get-started/">
											<span class="">Get Started</span>
										</a>
									</li>
									<li class="spacer"></li>
									<li>
										<a id="wt4_wtheader_wt2_wtListSections_ctl08_wt43" href="/company/">
											<span class="">About</span>
										</a>
									</li>
									<li class="spacer"></li>
								</span>
							</ul>
							<div class="navigation-search-outter navigation-bar-section">
							</div>
						</div>
						<div class="navigation-longtail-end"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
