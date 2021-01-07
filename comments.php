<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softretaura
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
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comment_count = get_comments_number();
			if ( '1' === $comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'softrestaura' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s Comments on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'softrestaura' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->
		<div class="single_comment_section">
            <div class="comment_part">
                <div class="comment_warp">
						<?php
							wp_list_comments( array(
								'style'      => 'div',
								'short_ping' => true,
							) );
						?>
				</div>
			</div>
		</div>


		<div class="blog_pagination">
            <div class="pagination_content text-center">
                <div class="pagination">
                	
                  <?php the_comments_pagination( array(
						'prev_text' =>  '<span class="screen-reader-text">' . __( 'Prev', 'softrestaura' ) . '</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'softrestaura' ) . '</span>' 
					) );

				
                    ?>
                </div>
            </div><!-- /.pagination_content -->
        </div><!-- /.blog_pagination -->
        <?php

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'softrestaura' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().
	 $comment_args = array( 'title_reply'=>'Got Something To Say:',

		'fields' => apply_filters( 'comment_form_default_fields', array(

		'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Your Good Name' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .

		        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   

		    'email'  => '<p class="comment-form-email">' .

		                '<label for="email">' . __( 'Your Email Please' ) . '</label> ' .

		                ( $req ? '<span>*</span>' : '' ) .

		                '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

		    'url'    => '' ) ),

		    'comment_field' => '<p>' .

		                '<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .

		                '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .

		                '</p>',

		    'comment_notes_after' => '',

		);

		comment_form($comment_args);
	?>

</div><!-- #comments -->
