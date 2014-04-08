<?php $selected_category = '' ?>
<?php get_header(); ?>

<div class="container">
	<div class="feeds_home"><a href="<?php bloginfo( 'rss2_url' ); ?>"><i class="rss">&nbsp;</i> Subscribe RSS</a></div>
	<h1><a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<div class="header_top">
		<div class="categories">
			<div class="toggle <?php ( $selected_category == '' ? print " active" : "" ) ?>"><a href="<?php bloginfo( 'url' ); ?>">All posts</a></div>
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
		</div>
		<div class="subscription_area">
			<?php
			$success = $_GET['aliId'];
			if( $success != "" )
				echo '<div class="subscribed">Thank you for subscribing to our blog!</div>';
			else {
				echo '<script src="//app-sj03.marketo.com/js/forms2/js/forms2.js"></script>
				<form id="mktoForm_1119"></form>
				<script>MktoForms2.loadForm("//app-sj03.marketo.com", "338-PNW-019", 1119);</script>';
			}
			?>
		</div>
	</div>
</div>
<div class="container">
	<?php if ( have_posts() ) : ?>
	<div class="posts">
		<?php
		$idx = 0;
		while ( have_posts() ) : the_post(); ?>
		<div class="post <?php  ( $idx == 0  || ( $idx % 3 ) == 0 ? print " first" : "" ) ?>" onclick="location.href='<?php the_permalink(); ?>'">
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
				By <?php  the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
			</p>
		</div>
	</div>
	<?php
	$idx++;
	endwhile; ?>
</div>

<div class="LoadBox">
	<div id="LoadMoreDiv" ><a href="javascript:load_posts();">Load more...</a></div>
	<div id="LoadingDiv" style="display: none;">Loading</div>
	<div id="LoadingError"  style="display: none;">Error loading more posts.</div>
</div>
<?php endif; ?>
</div>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	$('.posts').masonry({
		columnWidth: 306,
		itemSelector: '.post',
		gutter: 30
	});

	$content.waitForImages( function () {
		$('.posts').masonry();
	});
});
</script>
<script language="javascript" type="text/javascript">
var page = 1;
var loading = false;
var moreToLoad = true;
var $window = $(window);
var $content = $('body .posts');
var load_posts = function(){
	if( !moreToLoad ) {
		$('#LoadMoreDiv').hide();
		$('#LoadingDiv').hide();

		return;
	}

	loading = true;
	$('#LoadMoreDiv').hide();
	$('#LoadingDiv').show();
	page++;
	$.ajax({
		type       : "GET",
		data       : {pageNumber: page},
		dataType   : "html",
		url        : "<?php bloginfo( 'url' ); ?>/wp-content/themes/outsystems-blog-theme/loopHandler.php",
		beforeSend : function(){
		},
		success    : function(data){
			if (data == null || data == "") {
				loadMore = false;
				$('#LoadMoreDiv').hide();
				$('#LoadingDiv').hide();

				return ;
			}
			$data = jQuery(data);
			$content.append($data);
			$content.masonry( 'appended', $data, false);
			$content.waitForImages( function () {
				$content.masonry();
			});
			loading = false;
			$('#LoadingDiv').hide();
			$('#LoadMoreDiv').show();
		},
		error     : function(jqXHR, textStatus, errorThrown) {
			loading = false;
			$('#LoadingDiv').hide();
			$('#LoadingError').show();
		}
	});
}

$window.scroll(function() {
	var content_offset = $content.offset();
	if(!loading && ($window.scrollTop() + $window.height()) > ($content.scrollTop() + $content.height() + content_offset.top)) {
		load_posts();
	}
});
</script>
<?php get_footer(); ?>