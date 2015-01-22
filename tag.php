<?php $selected_category = '';
$sel_cat = single_tag_title( '', false );
$tag = get_term_by( 'name', $sel_cat, 'post_tag' );
//echo $tag;
$selected_category = $tag->slug;
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
	<div class="feeds_home"><a href="<?php bloginfo( 'rss2_url' ); ?>"><i class="rss">&nbsp;</i> <?php _e("Subscribe RSS","outsystems_blog");?></a></div>
	<h1><a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<div class="header_top">
		<div style="float:left;" class="tags">
			<h3><i></i> <?php _e("Posts tagged with","outsystems_blog");?> <a href="<?php echo get_tag_link( $tag->ID ); ?>"><?php echo $sel_cat; ?></a></h3>
		</div>
		<div class="subscription_area">
			<?php
			$success = $_GET['aliId'];
			if( $success != "" )
				echo '<div class="subscribed">'.__("Thank you for subscribing to our blog!","outsystems_blog").'</div>';
			else {
				echo '<script src="//app-sj03.marketo.com/js/forms2/js/forms2.js"></script>
				<form id="mktoForm_1119"></form>
				<script>MktoForms2.loadForm("//app-sj03.marketo.com", "338-PNW-019", 1119);</script>';
			}
			?>
		</div>
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
			<div class="tags">
				<h3><i></i> <?php _e("Posts tagged with","outsystems_blog");?> <a href="<?php echo get_tag_link( $tag->ID ); ?>"><?php echo $sel_cat; ?></a></h3>
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
								echo '<div class="category '
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
				<div class="postcontent"><?php the_content(); ?></div>
				<p class="postmetadata byline">
					By <?php  the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
				</p>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php //todo move repeated code to separate file ?>
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
