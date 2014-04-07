<?php get_header(); ?>
<div class="container">
	<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
</div>
<div class="container">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>

			<p class="postmetadata">
			<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
			<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
			</p>
	
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>