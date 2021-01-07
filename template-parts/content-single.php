<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softretaura
 */

?>

<div class="single_page_one_content">
    <div class="single_page_post">
        <div class="single_page_thumb">
        <?php if ( the_post_thumbnail() ) :
				the_post_thumbnail(); 
			endif; ?>
        </div><!-- /.single_page_thumb -->
        <ul>
            <li><i class="icofont icofont-user-alt-2"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"><?php the_author(); ?></a></li>
            <li><i class="icofont icofont-ui-text-chat"></i><?php comments_popup_link('No Comment','One Comment','% Comments','author name','comment off'); ?></li>
            <li><i class="icofont icofont-ui-calendar"></i><?php the_time('d M, 2018'); ?></li>
        </ul>
        <?php
			if ( is_singular() ) :
				the_title( '<h3>', '</h3>' );
			else :
				the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif; ?>

       <p>
		<?php the_content( sprintf(
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
    </div><!-- /.single_page_post -->
</div><!-- /.single_page_one_content -->