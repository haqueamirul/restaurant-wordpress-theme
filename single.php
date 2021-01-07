<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			<div class="col-md-8">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single' ); 
					?>
					<div class="single_page_share">
                    	<div class="share_header">
                    		<h5>you can share it</h5>
                    	</div><!-- /.share_header -->
                        <div class="single_page_nav">
                            <ul>
                                <li>
                                    <a href="http://www.facebook.com/sharer.php"><i class="icofont icofont-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="http://twitter.com/home/?status=<?php the_title()?>-<?php the_permalink(); ?>"><i class="icofont icofont-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="http://pinterest.com/pin/create/button/?url=/node/[nid]&description=[title]"><i class="icofont icofont-social-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="icofont icofont-social-google-plus"></i></a>
                                </li>
                            </ul>
                        </div><!-- single_page_nav -->
                    </div><!-- /.single_page_share -->
					<?php

					the_post_navigation(); ?>

					<div class="related_post">
		              <div class="row">


		              	<?php
					  		$args = array(
					  			'category__in' => wp_get_post_categories( $post->ID ),
					  			'posts_per_page'   => 3
					  		);

					  		$relatedpost = get_posts( $args );

					  		if( $relatedpost ) : 
					  			setup_postdata( $post );

					  			foreach ( $relatedpost as $post ) :
					  	?>


		                <div class="col-md-4 col-sm-4">
		                  <div class="related_box">
		                    <div class="related_thumbnail">
		                      <?php the_post_thumbnail(); ?>
		                    </div><!-- related_thumbnail -->
		                    <div class="related_content">
		                      <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		                      <span><i class="icofont icofont-ui-calendar"></i><?php the_time('M d, Y'); ?></span>
		                    </div><!-- /.related_content -->
		                  </div><!-- related_box -->
		                </div><!-- col-md-4 -->

			                <?php endforeach; ?>
		     			<?php endif; ?> 


		              </div><!-- row -->
		            </div><!-- related_post -->

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php
get_footer();
