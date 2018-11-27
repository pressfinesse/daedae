<?php
/**
 * Template for comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage DaeDae
 */
if ( post_password_required() ) {return;}
?>

<p>
<?php if ( have_comments() ) : ?>
  <a class="btn btn-dark" data-toggle="collapse" href="#loadcomments1" aria-expanded="false" aria-controls="loadcomments1">Load Comments</a>
<?php endif; ?>
  <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#loadform2" aria-expanded="false" aria-controls="loadform2">Leave Comment</button>
</p>


<div class="collapse" id="loadcomments1">
	<div class="card card-body p-3 bg-light w-100">
		<div id="comments" class="comments-area">
		<?php if ( have_comments() ) : ?>
			<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on “%s”', 'comments title', 'daedae' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s thought on “%2$s”',
							'%1$s thoughts on “%2$s”',
							$comments_number,
							'comments title',
							'daedae'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol>

		<?php the_comments_navigation(); ?>

		<?php endif; ?>

			<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
				<div class="alert alert-warning"><p><?php _e( 'Comments are closed.', 'daedae' ); ?></p></div>
			<?php endif; ?>

		</div>
	</div>
</div>


<div class="collapse" id="loadform2">
	<div class="card card-body p-3 bg-light w-100">

	<?php $fields =  array(
	  'author' =>
	    '<div class="form-group"><label for="author">' . __( 'Name', 'daedae' ) . '</label> ' .
	    ( $req ? '<span class="required">*</span>' : '' ) .
	    '<input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) .
	    '" size="30"' . $aria_req . ' /></div>',

	  'email' =>
	    '<div class="form-group"><label for="email">' . __( 'Email', 'daedae' ) . '</label> ' .
	    ( $req ? '<span class="required">*</span>' : '' ) .
	    '<input id="email" name="email" type="text" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	    '" size="30"' . $aria_req . ' /></div>',

	  'url' =>
	    '<div class="form-group"><label for="url">' . __( 'Website', 'daedae' ) . '</label>' .
	    '<input id="url" name="url" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) .
	    '" size="30" /></div>',
	);

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$commargs = array(
	  'id_form'           => 'bamcomment',
	  'class_form'      => 'comment-form',
	  'id_submit'         => 'submit',
	  'class_submit'      => 'btn btn-success',
	  'name_submit'       => 'submit',
	  'title_reply'       => __( 'Post Reply' ),
	  'title_reply_to'    => __( 'Reply to %s' ),
	  'cancel_reply_link' => __( 'Cancel' ),
	  'label_submit'      => __( 'Post Comment' ),
	  'format'            => 'xhtml',

	  'fields' => apply_filters( 'comment_form_default_fields', $fields ),

	  'comment_field' =>  '<div class="form-group"><p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
	    '</label><textarea id="comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true">' .
	    '</textarea></p></div>',

	  'must_log_in' => '<p class="alert alert-warning must-log-in">' .
	    sprintf(
	      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
	      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
	    ) . '</p>',

	  'logged_in_as' => '<p class="logged-in-as">' .
	    sprintf(
	    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
	      admin_url( 'profile.php' ),
	      $user_identity,
	      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
	    ) . '</p>',

	  'comment_notes_after' => '<p class="form-allowed-tags">' .
	    sprintf(
	      __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
	      ' <code>' . allowed_tags() . '</code>'
	    ) . '</p>',


	);

	comment_form($commargs); ?>

	</div>
</div>
