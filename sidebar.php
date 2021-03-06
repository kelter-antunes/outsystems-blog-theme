<?php
global $the_author_name;
global $the_author_description;
global $the_author_id;
global $the_category;
global $the_category_slug;
global $the_post_id;

global $more;
$more = 0;

if (is_mobile() ) {
}else{
	?>

	<div class="sidebar span4" data-swiftype-index="false">
		<div class="social_share">
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
				<a class="addthis_button_facebook"></a>
				<a class="addthis_button_twitter"></a>
				<a class="addthis_button_google_plusone_badge"></a>
				<a class="addthis_button_linkedin"></a>
				<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<!-- AddThis Button END -->

			<?php if ( get_the_author_meta( 'twitter' ) ) { ?>
			<script type="text/javascript">
				var titleNew = document.title + "- via @<?php the_author_meta( 'twitter' ); ?>";
				addthis.update('share', 'title', titleNew);
			</script>
			<?php } ?>

		</div>
		<div class="rss_subscription">
			<?php include_once("subscription_area.php"); ?>

			<div class="feeds"><a href="<?php bloginfo( 'rss2_url' ); ?>"><i class="rss">&nbsp;</i> <?php _e("Subscribe RSS","outsystems_blog");?></a></div>
		</div>

		<div class="more_posts">
			<h4><?php _e("Explore other categories:","outsystems_blog");?></h4>
			<div class="categories">
				<!--<div class="toggle <?php ( $the_category == '' ? print " active" : "" ) ?>"><a href="<?php bloginfo( 'url' ); ?>">All Posts</a></div>-->
				<?php
				$categories = get_categories( '' );
				foreach ( $categories as $index=>$category ) {
					if ( $category->slug != "uncategorized" ) {
						echo "<div class='toggle "
						.( $index == 0 ? "" : "notopborder" )
						.( strtolower( $the_category ) == strtolower( $category->name ) ? " active" : "" )
						."'><a href='"
						.get_category_link( $category->term_id )
						."'>"
						."<i class='"
						.$category->slug
						."'>&nbsp;</i>&nbsp;"
						.$category->name.
						"</a></div>";
					}
				}
				?>
			</div>
		</div>

		<div class="more_posts_category">
			<h4><?php _e("More posts in this category:","outsystems_blog");?></h4>

			<?php
			$post_cats = get_the_category( $post_id );
			$the_category_slug = $post_cats[0]->slug;
			?>

			<?php query_posts( array ( 'category_name'=> $the_category_slug, 'posts_per_page' => 3, 'post__not_in' => array( $the_post_id )  ) );
			 while ( have_posts() ) : the_post(); ?>
			<?php /*if( get_the_ID() != $the_post_id ) : */?>

			<div class="post<?php  ( $idx == 0  || $idx % 3 == 0 ? print " first" : "" ) ?>" onclick="location.href='<?php the_permalink(); ?>'">
				<?php if ( has_post_thumbnail() or ( has_category() and !( has_category( get_term_by( 'slug', 'uncategorized', 'category' )->term_id ) ) ) ) : ?>
					<div class="header">
						<?php the_post_thumbnail(); ?>
						<?php
						$postcats = get_the_category();
						if ( $postcats ) {
							foreach ( $postcats as $postcat ) {
								if ( $postcat->slug != "uncategorized") {
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
						By <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
					</p>
				</div>
			</div>
			<?php /*endif;*/ ?>
			<?php endwhile; ?>
		</div>
</div>
<?php } ?>

