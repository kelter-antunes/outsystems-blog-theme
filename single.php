<?php
if ( is_mobile() ) :
	get_header( 'mobile' );
else :
	get_header();
endif;
?>
<?php 
global $the_author_name;
global $the_author_description;
global $the_author_id;
global $the_category;
global $the_post_id;
?>

<?php if ( is_mobile() ) {?>

<div class="container">
	<h1><a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<div class="feeds_home">
		<a href="/blog/subscribe-our-posts"><?php _e("Subscribe our posts","outsystems_blog");?> <i class="rss">&nbsp;</i>&nbsp;<span class="osicon-mail">&nbsp;</span></a>
	</div>
	<div class="header_top">
	</div>

	<?php 
}
?>

<div class="container">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<?php 
						// data for side bar
			$the_post_id = get_the_ID();
			$the_author_name = get_the_author_meta('display_name');
			$the_author_description = get_the_author_meta('description');
			$the_author_id = get_the_author_meta('ID');
			$allcategories = get_the_category($the_post_id);
			if( $allcategories )
				$category = $allcategories[0];
			if( $category )
				$the_category = $category->cat_name;
			?>

			<?php if ( is_mobile() == false ) {?>
			<div class="category">

				<a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>	

				<?php if( $category ) : ?>
						<?php echo (' › ') ?>
						<a href="<?php echo ($category ? get_category_link( $category->term_id ) : '#'); ?>"><?php echo $the_category ?></a>
				<?php endif; ?>
	
			</div>

			<?php 
		}
		?>

		<div class="row">
			<div class="leftbar span8">
				<div class="fullpost">
					<h2><?php the_title(); ?></h2>
					<p class="postmetadata byline">
						<?php _e("By","outsystems_blog");?> <?php  the_author_posts_link(); ?> <?php _e("on","outsystems_blog");?> <?php echo get_the_date(); ?>
					</p>
					<div class="postcontent"><?php post_intro($post); ?></div>
					<?php
					echo get_the_tag_list('<div class="tags"><i></i> ','','</div>');
					?>

					<div class="author_info">
						<div class="author_photo">
							<style>
								.author_photo { 
									background-image	: url("<?php $userdata = get_userdata($the_author_id); $updir = wp_upload_dir(); echo $updir['baseurl'] . '/userphoto/' . $userdata->userphoto_thumb_file; ?>"); 
								}
							</style>
						</div>
						<div class="author_data">
							<div class="author_about"><?php _e("About the author","outsystems_blog");?></div>
							<div class="author_name"><h4><?php echo $the_author_name; ?></h4></div>
							<div class="author_bio"><?php echo $the_author_description; ?></div>
							<?php if ( get_the_author_meta( 'twitter' ) ) { ?>
							<p class="twitter clear" style="margin-top: 10px;">
								<a href="https://twitter.com/<?php the_author_meta( 'twitter' ); ?>" class="twitter-follow-button" data-show-count="false">Follow @<?php the_author_meta( 'twitter' ); ?></a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</p>
							<?php } // End check for twitter ?>
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				<div class="comments-template">
					<?php comments_template('/comments.php'); ?>
				</div>				
			</div>
		<?php endwhile; ?>	
		<?php get_sidebar(); ?>	
	<?php endif; ?>
</div>
</div>

<?php
if ( is_mobile() ) :
	get_footer( 'mobile' );
else :
	get_footer();
endif;
?>