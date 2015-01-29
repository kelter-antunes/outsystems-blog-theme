<?php $selected_category = '';
$selected_category = get_the_author_meta( 'ID' );;
?>
<?php
if ( is_mobile() ) :
	get_header( 'mobile' );
else :
	get_header();
endif;
?>

<?php if ( is_mobile() == false ) {?>

<div class="container">
	<div class="feeds_home"><a href="<?php bloginfo( 'rss2_url' ); ?>"><i class="rss">&nbsp;</i> Subscribe RSS</a></div>
	<h1><a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<div class="header_top">
		<div style="float:left;" class="author">
			<h3><i></i> Posts by <?php the_author_posts_link(); ?></h3>
		</div>
		<?php include_once("subscription_area.php"); ?>
	</div>
</div>

<?php 
}else {
	?>

	<div class="container">
		<h1><a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="feeds_home">
			<a href="/blog/subscribe-our-posts"><?php _e("Subscribe our posts","outsystems_blog");?> <i class="rss">&nbsp;</i>&nbsp;<span class="osicon-mail">&nbsp;</span></a>
		</div>
		<div class="header_top">
			<div class="author">
				<h3><i></i> Posts by <?php the_author_posts_link(); ?></h3>
			</div>
		</div>

		<?php 
	}
	?>

	<div class="container">
		<?php if ( have_posts() ) : ?>
		<div class="posts row">
			<?php
			while ( have_posts() ) : the_post(); ?>
			<div class="post span4" onclick="location.href='<?php the_permalink(); ?>'">
				<?php if ( has_post_thumbnail() or ( has_category() and !( has_category( get_term_by( 'name', 'Uncategorized', 'category' )->term_id ) ) ) ) : ?>
				<div class="header">
					<?php the_post_thumbnail(); ?>
					<?php
					$postcats = get_the_category();
					if ( $postcats ) {
						foreach ( $postcats as $postcat ) {
							if ( $postcat->name != "Uncategorized" ) {
								echo '<div class="category byline '
								. $postcat->slug
								. '"><i>&nbsp;</i>&nbsp;'
								. $postcat->name
								. '</div>';
							}
						}
					}
					?>
				</div>

			<?php endif; ?>
			
			<div class="entry">
				<h3><a class="postlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="postcontent"><?php post_intro($post); ?></div>
				<p class="postmetadata byline">
					<?php _e("By","outsystems_blog");?> <?php  the_author_posts_link(); ?> <?php _e("on","outsystems_blog");?> <?php echo get_the_date(); ?>
				</p>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php include_once("load_box.php"); ?>
<?php endif; ?>
</div>
<?php include_once("js/infinite_load.php"); ?>
<?php
if ( is_mobile() ) :
	get_footer( 'mobile' );
else :
	get_footer();
endif;
?>
