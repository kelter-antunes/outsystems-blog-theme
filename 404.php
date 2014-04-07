<?php get_header(); ?>

<div class="container">
	<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
</div>
<div class="container">
	<h2>Page not found!</h2>
	<p>Oops, I screwed up and you discovered my fatal flaw. </p>
	<p>Well, we're not all perfect, but we try.  Can you try this again or maybe visit our <a title="Blog" href="<?php echo get_option('home'); ?>">Home Page</a> to start fresh.  We'll do better next time.</p>
</div>
<?php get_footer(); ?>