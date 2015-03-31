<?php $selected_category = '' ?>
<?php
/* if we need to load specific scripts or code depending on locale use WPLANG option to check
 * get_option('WPLANG');
 */


?>

<?php 
	$platform_in_action_cat = get_category_by_slug( 'platform-in-action' );
	$perspectives_cat = get_category_by_slug( 'perspectives' );
	$tech_zone_cat = get_category_by_slug( 'tech-zone' );
?>

<?php
if ( is_mobile() ) :
	get_header( 'mobile' );
else :
	get_header();
endif;
?>

<?php
if ( is_mobile() == false ) {
	?>
	<div class="container">
		<div class="feeds_home"><a href="<?php bloginfo( 'rss2_url' ); ?>"><i class="rss">&nbsp;</i> <?php _e("Subscribe RSS","outsystems_blog");?></a></div>
		<h1><a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="header_top">
			<div class="categories">

				<?php if(is_rtl()) : ?>
					
					<?php
					$categories = get_categories( '' );
					$i = 0;
					foreach ( $categories as $category ) {
						if ( $category->slug != "uncategorized" ) {
							if ($i == 0) {
						        echo "<div class='toggle"
								.( $selected_category == strtolower( $category->name ) ? " active" : "" )
								."'><a href='"
								.get_category_link( $category->term_id )
								."'>"
								."<i class='"
								.$category->slug
								."'>&nbsp;</i>&nbsp;"
								.$category->name.
								"</a></div>";
						    } else {
						        echo "<div class='toggle noleftborder"
								.( $selected_category == strtolower( $category->name ) ? " active" : "" )
								."'><a href='"
								.get_category_link( $category->term_id )
								."'>"
								."<i class='"
								.$category->slug
								."'>&nbsp;</i>&nbsp;"
								.$category->name.
								"</a></div>";
						    }
							$i++;
						}
					}
					?>
					<div class="toggle <?php ( $selected_category == '' ? print " noleftborder active" : "" ) ?>"><a href="<?php bloginfo( 'url' ); ?>"><?php _e("All posts","outsystems_blog");?></a></div>

				<?php else: ?>

					<div class="toggle <?php ( $selected_category == '' ? print " active" : "" ) ?>"><a href="<?php bloginfo( 'url' ); ?>"><?php _e("All posts","outsystems_blog");?></a></div>


					<?php
					$categories = get_categories( '' );
					foreach ( $categories as $category ) {
						if ( $category->name != "Uncategorized" ) {
							echo "<div class='toggle noleftborder"
							.( $selected_category == strtolower( $category->name ) ? " active" : "" )
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

				<?php endif; ?>

			</div>
			<?php include_once("subscription_area.php"); ?>
		</div>
	</div>

	<?php
} else {
	?>

	<div class="container">
		<h1><a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="feeds_home" style="float: none;">
			<a href="/blog/subscribe-our-posts"><?php _e("Subscribe our posts with","outsystems_blog");?> <span class="osicon-mail" style="margin-right: -3px; font-size: 12.5px;">&nbsp;</span><?php _e("or","outsystems_blog");?> <i class="rss">&nbsp;</i>&nbsp;</a>
		</div>
		<div class="header_top">
			<div class="categories">

				<div class="toggle <?php ( $selected_category == '' ? print " active" : "" ) ?>" style="margin:4px; <?php
				 ( is_rtl() ? print "float: right;" : "")			
				 ?>">
					<a href="<?php bloginfo( 'url' ); ?>"><?php _e("All posts","outsystems_blog");?></a></div>

				<div class="toggle <?php ( $selected_category == strtolower( $platform_in_action_cat->name ) ? print " active" : "" ) ?>" style="margin: 4px;<?php
				 ( is_rtl() ? print "float: right;" : "")			
				 ?>">
					<a href="<?php print get_category_link( $platform_in_action_cat->term_id ) ?>">
						<i class="<?php print $platform_in_action_cat->slug ?>">&nbsp;</i>&nbsp;<?php echo $platform_in_action_cat->name; ?></a>
				</div>

				<div class="toggle <?php ( $selected_category == strtolower( $perspectives_cat->name ) ? print " active" : "" ) ?>" style="margin: 4px;<?php
				 ( is_rtl() ? print "float: right;" : "")			
				 ?>">
					<a href="<?php print get_category_link( $perspectives_cat->term_id ) ?>">
						<i class="<?php print $perspectives_cat->slug ?>">&nbsp;</i>&nbsp;<?php echo $perspectives_cat->name; ?></a>
				</div>

				<div class="toggle <?php ( $selected_category == strtolower( $tech_zone_cat->name ) ? print " active" : "" ) ?>" style="margin: 4px;<?php
				 ( is_rtl() ? print "float: right;" : "")			
				 ?>">
					<a href="<?php print get_category_link( $tech_zone_cat->term_id ) ?>">
						<i class="<?php print $tech_zone_cat->slug ?>">&nbsp;</i>&nbsp;<?php echo $tech_zone_cat->name; ?></a>
				</div>

				
				<?php
				/*
					$categories = get_categories( '' );
					foreach ( $categories as $category ) {
						if ( $category->slug != "uncategorized" ) {
						        echo "<div class='toggle"
								.( $selected_category == strtolower( $category->name ) ? " active" : "" )
								if(is_rtl()){
									."' style='margin: 5px; float: right;'"
								}
								else{
									."' style='margin: 5px;'"
								}
								."><a href='"
								.get_category_link( $category->term_id )
								."'>"
								."<i class='"
								.$category->slug
								."'>&nbsp;</i>&nbsp;"
								.$category->name
								."</a></div>";
						}
					}
					*/
					?>
				
			</div>	
		</div>
	</div>

	<?php
}
?>

<div class="container">
	<?php if ( have_posts() ) : ?>
	<div class="posts row">
		<?php
		$idx = 0;
		while ( have_posts() ) : the_post(); ?>
		<div class="post span4" onclick="location.href='<?php the_permalink(); ?>'">
			<?php if ( has_post_thumbnail() or ( has_category() and !( has_category( get_term_by( 'slug', 'uncategorized', 'category' )->term_id ) ) ) ) : ?>
			<div class="header">
				<?php the_post_thumbnail(); ?>
				<?php
				$postcats = get_the_category();
				if ( $postcats ) {
					foreach ( $postcats as $postcat ) {
						if ( $postcat->slug != "uncategorized" ) {
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
			<div class="postcontent">
			<?php post_intro($post); ?>
			</div>
			<p class="postmetadata byline">
				<?php _e("By","outsystems_blog");?> <?php  the_author_posts_link(); ?> <?php _e("on","outsystems_blog");?> <?php echo get_the_date(); ?>
			</p>
		</div>
	</div>
	<?php
	$idx++;
	endwhile; ?>
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
