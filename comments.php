<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Grypas
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		$grypas_comment_count = get_comments_number();
		?>
		<h6 class="comments-title pt-15 pb-15">
			<?php	printf( esc_html( 'Commment : '. $grypas_comment_count )); ?>
		</h6><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ul class="commentlist">
			<?php wp_list_comments( 'type=comment&callback=grypas_comment' ); ?>
		</ul>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.','grypas' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

$post = get_post( $post );
$post_id       = $post->ID;
$commenter     = wp_get_current_commenter();
$user          = wp_get_current_user();
$user_identity = $user->exists() ? $user->display_name : '';
$required_text      = ' ' . wp_required_field_message();

//Declare Vars
$comment_send = 'Submit';
$comment_reply = 'Add Comment';
$comment_reply_to = 'Reply';

$comment_author = 'Your Name';
$comment_email = 'Your Email';
$comment_body = 'Comment';
$comment_url = 'Website';

$comment_cookies_1 = ' By commenting you accept the';
$comment_cookies_2 = ' Privacy Policy';

$comment_before = 'Registration isn\'t required.';

$comment_cancel = 'Cancel Reply';

//Array
$comments_args = array(
	//Define Fields
    'fields' => array(
		'author' =>'<div class="col-md-6"><div class="form-group"><input id="author" name="author" aria-required="true" type="text" placeholder="'.$comment_author.'"></div></div>',
		'email' =>'<div class="col-md-6"><div class="form-group"><input type="email" id="email" name="email"  placeholder="'.$comment_email.'"></div></div>',
		'cookies' => '<div class="row"><div class="col-md-12"><input class="" type="hidden" required><div class="d-none form-group">' . $comment_cookies_1 . '<a style="padding-left:5px" href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a></div></div></div>',
         ),
    // Change the title of send button
    'label_submit' => __( $comment_send,'grypas' ),
    // Change the title of the reply section
    'title_reply' => '<h5>'. __( $comment_reply,'grypas' ).'</h5>',
    // Change the title of the reply section
    'title_reply_to' => __( $comment_reply_to,'grypas' ),
    //Cancel Reply Text
    'cancel_reply_link' => __( $comment_cancel,'grypas' ),
    // Redefine your own textarea (the comment body).
    'comment_field' => '<div class="row"><div class="col-12"><div class="form-group"><textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></div></div>',
    //Message Before Comment
    'comment_notes_before' => '<h6 class="pb-20">'.__( $comment_before,'grypas' ).'</h6>',
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    //Submit Button ID
    'id_submit' => __( 'comment-submit','grypas' ),
    //Submit Button ID
    'submit_button' => '<div class="col-12"><div class="form-group"><button id="submit" name="submit" class="btn-curve btn-color btn-lg"><span>'.$comment_send.'</span></button></div></div></div>',
	//Logged in as
	'logged_in_as'         => sprintf(
		'<p class="logged-in-as pb-15">%s%s</p>',
		sprintf(
			/* translators: 1: User name, 2: Edit user link, 3: Logout URL. */
			__( 'Logged in as %1$s. <a href="%2$s">Edit your profile</a>. <a href="%3$s">Log out?</a>','grypas' ),
			$user_identity,
			get_edit_user_link(),
			/** This filter is documented in wp-includes/link-template.php */
			wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
		),
		$required_text
	),
);
comment_form( $comments_args );

?>

</div><!-- #comments -->
