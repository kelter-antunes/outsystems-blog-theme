<?php
//Some simple code for our widget-enabled sidebar
/*if ( function_exists('register_sidebar') )
    register_sidebar();*/

//Add support for WordPress 3.0's custom menus
//add_action( 'init', 'register_my_menu' );

//Register area for custom menu
/*function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}*/

//Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(306, 250, true);

// Comments callback
function ostheme_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-author vcard">
		<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		<?php printf(__('<h6><span class="fn">%s<span></h6>'), get_comment_author_link()) ?>
		</div>
<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
		<br />
<?php endif; ?>

		<div class="comment-meta commentmetadata">
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
				<?php
					/* translators: 1: date, 2: time */
					printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
				?>
			&nbsp;|&nbsp;
			<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>

		<?php comment_text() ?>
		
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>
<?php
        }
		
		
		
// Post published callback
function callPardotApi($url, $data, $method = 'GET')
{
    // build out the full url, with the query string attached.
    $queryString = http_build_query($data, null, '&');
    if (strpos($url, '?') !== false) {
        $url = $url . '&' . $queryString;
    } else {
        $url = $url . '?' . $queryString;
    }

    $curl_handle = curl_init($url);

    // wait 5 seconds to connect to the Pardot API, and 30
    // total seconds for everything to complete
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($curl_handle, CURLOPT_TIMEOUT, 30);

    // https only, please!
    //curl_setopt($curl_handle, CURLOPT_PROTOCOLS, CURLPROTO_HTTPS);

    // ALWAYS verify SSL - this should NEVER be changed. 2 = strict verify
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, 2);

    // return the result from the server as the return value of curl_exec instead of echoing it
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);

    if (strcasecmp($method, 'POST') === 0) {
        curl_setopt($curl_handle, CURLOPT_POST, true);
    } elseif (strcasecmp($method, 'GET') !== 0) {
        // perhaps a DELETE?
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, strtoupper($method));
    }

    $pardotApiResponse = curl_exec($curl_handle);
    if ($pardotApiResponse === false) {
        // failure - a timeout or other problem. depending on how you want to handle failures,
        // you may want to modify this code. Some folks might throw an exception here. Some might
        // log the error. May you want to return a value that signifies an error. The choice is yours!

        // let's see what went wrong -- first look at curl
        $humanReadableError = curl_error($curl_handle);

        // you can also get the HTTP response code
        $httpResponseCode = curl_getinfo($curl_handle, CURLINFO_HTTP_CODE);

        // make sure to close your handle before you bug out!
        curl_close($curl_handle);
        
        throw new Exception("Unable to successfully complete Pardot API call to $url -- curl error: \"".
                                "$humanReadableError\", HTTP response code was: $httpResponseCode");
    }

    // make sure to close your handle before you bug out!
    curl_close($curl_handle);

    return $pardotApiResponse;
}

function email_friends($post_ID)  {
try {
/*error_log(callPardotApi('http://pi.pardot.com/api/login/version/3', 
    array(
        'email' => 'joselramalho@gmail.com',
        'password' => 'outsystems1!',
        'user_key' => '9ae86719da79685ca418d3187f208f0b' //available from https://pi.pardot.com/account
    )
));*/

/*error_log(callPardotApi('http://pi.pardot.com/api/email/version/3/do/send', 
    array(
        'user_key' => '9ae86719da79685ca418d3187f208f0b',
		'api_key' 	=> '7f4006d39c70185d9f27096ce2559191',
		'campaign_id' => 851,
		'list_ids'	=> array(110886),
		'text_content' => 'hello %%unsubscribe%%',
		'name' => 'jose ramalho',
		'subject' => 'test',
		'from_email' => 'jose.ramalho@outsystems.com',
		'from_name' => 'Blog'
    )
));*/

/*error_log(callPardotApi('http://pi.pardot.com/api/list/version/3/do/read/id/110886', 
    array(
        'user_key' => '9ae86719da79685ca418d3187f208f0b',
		'api_key' 	=> '7f4006d39c70185d9f27096ce2559191',
		'id'		=> '110886'
    )
));*/
} catch (Exception $e) {
error_log($e->getMessage());
}
    return $post_ID;
}
add_action('publish_post', 'email_friends');
		
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