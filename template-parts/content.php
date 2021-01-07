<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softretaura
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="upcoming_events margin-bottom">
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="upcoming_date_meta">
			<span><?php the_time('M d, Y'); ?></span>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>

		<div class="upcoming_content">
			<?php
			if ( is_singular() ) :
				the_title( '<h3>', '</h3>' );
			else :
				the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif;

			if ( the_post_thumbnail() ) :
				the_post_thumbnail(); 
			endif; ?>
			<p>
				<?php echo cExcerpt('40');( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'softrestaura' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'softrestaura' ),
						'after'  => '</div>',
					) );
				?>
			</p>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
