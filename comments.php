
<div id="comments">
	<?php if ( have_comments() ) : ?>
		<h3>Comments</h3>
		<div class="commentlist">
			<?php wp_list_comments(
					array(
						'style'             => 'div',
						'avatar_size'       => 0,
						'callback'			=> 'ostheme_comment'
					)
				); 
			?>
		</div>
	<?php endif; // end have_comments() ?>
<?php 
$fields =  array(
  'author' =>
    '<div class="comment-form-author"><div class="formlabel"><label for="author">' . __( 'Name', 'domainreference' ) . '</label></div>' .
    ( $req ? '' : '' ) .
    '<div class="forminput"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' /></div></div>',

  'email' =>
    '<div class="comment-form-email"><div class="formlabel"><label for="email">' . __( 'E-mail', 'domainreference' ) . '</label></div>' .
    ( $req ? '' : '' ) .
    '<div class="forminput"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></div></div>',

  'url' =>
    '<div class="comment-form-url"><div class="formlabel"><label for="url">' . __( 'URL', 'domainreference' ) . '</label></div>' .
    '<div class="forminput"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" /></div></div>',
);

comment_form(
		array(
			'id_form'           	=> 'commentform',
			'id_submit'         	=> 'submit',
			'title_reply'			=> __( 'Leave Your Comment' ), 
			'title_reply_to'	    => __( 'Leave a Reply to %s' ),
			'label_submit'			=> __( 'Submit' ),
			'comment_notes_before'	=> '',
			'comment_notes_after'	=> '',
			'comment_field' 		=>  '<div class="comment-form-comment"><div class="formlabel"><label for="comment">' . _x( 'Comment', 'noun' ) .
										'</label></div><div class="forminput"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
										'</textarea></div></div>',
			'fields' 				=> apply_filters( 'comment_form_default_fields', $fields ) 
		)
	); 
?>

</div>