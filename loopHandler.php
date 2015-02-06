<?php
header('Access-Control-Allow-Origin: *');

// Our include
define( 'WP_USE_THEMES', false );
require_once '../../../wp-load.php';

// Our variables
$numPosts = ( isset( $_GET['numPosts'] ) ) ? $_GET['numPosts'] : 0;
$page = ( isset( $_GET['pageNumber'] ) ) ? $_GET['pageNumber'] : 0;
$the_category = ( isset( $_GET['category'] ) ) ? $_GET['category'] : '';
$the_tag = ( isset( $_GET['tag'] ) ) ? $_GET['tag'] : '';
$the_author = ( isset( $_GET['author'] ) ) ? $_GET['author'] : '';

$pargs = array(
	'posts_per_page' => $numPosts,
	'paged'          => $page
	);

if ( $the_category != '' ) {
	$catarg = array( 'category_name' => $the_category );
	$qargs = array_merge( $pargs, $catarg );
}
else if ( $the_tag != '' ) {
	$tagarg = array( 'tag' => $the_tag );
	$qargs = array_merge( $pargs, $tagarg );
}
else if ( $the_author != '' ) {
	$authorarg = array( 'author' => $the_author );
	$qargs = array_merge( $pargs, $authorarg );
}
else
	$qargs = $pargs;

query_posts( $qargs );

if ( have_posts() ) : ?>
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
	<div class="postcontent"><?php the_content(); ?></div>
	<p class="postmetadata byline">
		<?php _e("By","outsystems_blog");?> <?php  the_author_posts_link(); ?> <?php _e("on","outsystems_blog");?> <?php echo get_the_date(); ?>
	</p>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
