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
	<h2>Page not found!</h2>
	<p>Oops! It seems that the page you're looking for is not here anymore!</p>
	<p>It might have moved or the URL you typed is not correct.</p>
	<p>
		Were you hoping to find anything here? <a style="color: #0088cc;" href="mailto:webteam@outsystems.com">Drop us a message to let us know...</a></p>
	</div>
	<?php
if ( is_mobile() ) :
	get_footer( 'mobile' );
else :
	get_footer();
endif;
?>