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
	<link type="text/css" rel="stylesheet" href="/CMS_BackOffice/ResourceLink.aspx?ResourceName=font-css.css&v=<?php echo esc_attr( get_option('last_update_date') ); ?>" charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="/CMS_BackOffice/ResourceLink.aspx?ResourceName=bootstrapbase&v=<?php echo esc_attr( get_option('last_update_date') ); ?>" charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-css.min.css&v=<?php echo esc_attr( get_option('last_update_date') ); ?>" charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-header-css.min.css&v=<?php echo esc_attr( get_option('last_update_date') ); ?>" charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="/CMS_BackOffice/ResourceLink.aspx?ResourceName=simplify-footer-css.min.css&v=<?php echo esc_attr( get_option('last_update_date') ); ?>" charset="UTF-8" />
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
	<script type="text/javascript" src="/blog/wp-content/themes/outsystems-blog-theme/js/masonry.pkgd.js"></script>
	<script type="text/javascript" src="/blog/wp-content/themes/outsystems-blog-theme/js/jquery.waitforimages.js"></script>

		<script type="text/javascript" src="//use.typekit.net/jlz7hji.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>


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
			<?php
			if (file_get_contents(get_template_directory().'/menu.php')==""){
				include_once( 'menu_backup.php' );
			} else {
				include_once( 'menu.php' );
			}
			?>
		</div>
	</div>