<?php
if ( is_mobile() ) :
	get_header( 'mobile' );
else :
	get_header();
endif;
?>

<div class="container">
	<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
</div>
<div class="container">
	<h2><?php _e("Page not found!","outsystems_blog");?></h2>
	<p><?php _e("Oops! It seems that the page you're looking for is not here anymore!","outsystems_blog");?></p>
	<p><?php _e("It might have moved or the URL you typed is not correct.","outsystems_blog");?></p>
	<p>
		<?php _e("Were you hoping to find anything here?","outsystems_blog");?> <a style="color: #0088cc;" href="mailto:webteam@outsystems.com"><?php _e("Drop us a message to let us know...","outsystems_blog");?></a></p>
	</div>
	<?php
if ( is_mobile() ) :
	get_footer( 'mobile' );
else :
	get_footer();
endif;
?>