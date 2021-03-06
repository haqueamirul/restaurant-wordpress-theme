<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softretaura
 */

get_header(); ?>

<section class="banner_section" style="background: url('<?php echo get_template_directory_uri(); ?>/images/banner_bg.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; height: 350px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_table">
                        <div class="banner_header">
                            <h2>events</h2>
                        </div><!-- /.banner_header -->
                    </div><!-- /.banner_table -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.banner_section -->
    <!-- =========================
            Events SECTION
    ========================= -->
    <section class="events_section sec_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile; ?>

					<div class="blog_pagination">
                        <div class="pagination_content text-center">
                            <div class="pagination">
                            	
                              <?php 
	                            the_posts_pagination(array(
	                                'show_all' => false,
	                                'prev_text' => '&laquo;',
	                                'next_text' => '&raquo;',
	                                'screen_reader_text' => ' '

	                                ));

			                    ?>
                            </div>
                        </div><!-- /.pagination_content -->
                    </div><!-- /.blog_pagination -->

			<?php	else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php
get_footer();
