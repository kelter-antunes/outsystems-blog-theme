<?php

//Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 306, 250, true );

// Comments callback
function ostheme_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	extract( $args, EXTR_SKIP );

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
	?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
		<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		<?php printf( __( '<h5><span class="fn">%s<span></h5>' ), get_comment_author_link() ) ?>
	</div>
	<?php if ( $comment->comment_approved == '0' ) : ?>
	<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ) ?></em>
	<br />
<?php endif; ?>

<div class="comment-meta commentmetadata">
	<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
		/* translators: 1: date, 2: time */
		printf( __( '%1$s at %2$s' ), get_comment_date(),  get_comment_time() ) ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
		?>
		&nbsp;|&nbsp;
		<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) ?>
	</div>

	<?php comment_text() ?>

	<?php if ( 'div' != $args['style'] ) : ?>
</div>
<?php endif; ?>
<?php
}

function ostheme_comment_rss_link($output, $show)
{
	if (in_array($show, array('rss_url', 'rss2_url', 'rss', 'rss2', '')))
		$output = 'http://feedpress.me/outsystems-blog';
 
	return $output;
}
add_filter('bloginfo_url', 'ostheme_comment_rss_link', 10, 2);
add_filter('feed_link', 'ostheme_comment_rss_link', 10, 2);


// Widgets part
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {
	register_sidebar( array(
		'name' => '',
		'id' => '',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
		) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
