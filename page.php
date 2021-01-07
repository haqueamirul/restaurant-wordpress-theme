<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
                        <h2>pages</h2>
                    </div><!-- /.banner_header -->
                </div><!-- /.banner_table -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner_section -->
<!-- =========================
     Page Details SECTION
========================= -->
<section class="page_details_section sec_padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
		</div>
	</div>
</section>

<?php
get_footer();
