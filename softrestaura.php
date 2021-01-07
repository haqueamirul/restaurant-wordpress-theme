<?php 
/*
Template Name: Home Page
*/
get_header(); 

//For Slider
get_template_part( 'template-parts/homepage/softrestaura', 'slider' );
get_template_part( 'template-parts/homepage/softrestaura', 'about' );

?>

    
    
    <!-- =========================
        Home Chef SECTION
    ========================= -->
    <?php if ( cs_get_option('softrestaura_chefs_title') ): ?>
    <section class="home_chef_section sec_padding">        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header_title">
                        <h2><?php echo esc_html(cs_get_option('softrestaura_chefs_title')); ?></h2>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row --> 

            <div class="chef_slider_active owl-carousel owl-theme">

                <?php

                  $softr_chefs = cs_get_option('shefs_section_group');

                    if ( !empty($softr_chefs) ) {

                    foreach ( $softr_chefs as $single_chefs ) {
                  
                  ?>

                <div class="item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="slider_thumbnail">
                                <img src="<?php echo esc_url($single_chefs['chefs_image']); ?>" alt="slider">
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-8 col-md-offset-1">
                            <div class="chef_slider_content">
                                <div class="chef_name">
                                    <h3><?php echo esc_html($single_chefs['chef_name']); ?></h3>
                                </div><!-- /.chef_name -->
                                <div class="chef_details">
                                    <p><?php echo esc_html($single_chefs['chefs_content']); ?></p>
                                    <ul>
                                    <?php if ( $single_chefs['facebook_chefs_link'] ): ?>
                                        <li><a href="<?php echo esc_html($single_chefs['facebook_chefs_link']); ?>"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <?php endif; 
                                        if ( $single_chefs['twitter_chefs_link'] ) :
                                    ?>
                                        <li><a href="<?php echo esc_html($single_chefs['twitter_chefs_link']); ?>"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <?php endif; 
                                        if ( $single_chefs['google_chefs_link'] ) :
                                    ?>
                                        <li><a href="<?php echo esc_html($single_chefs['google_chefs_link']); ?>"><i class="icofont icofont-social-google-plus"></i></a></li>
                                    <?php endif; ?>
                                    </ul>
                                </div><!-- /.chef_details -->
                            </div><!-- /.chef_slider_content -->
                        </div><!-- /.col-md-8 -->
                    </div><!-- /.row -->
                </div><!-- /.item -->

                <?php } } ?>


            </div><!-- /.chef_slider_active -->
        </div><!-- /.container -->
    </section><!-- /.home_chef_slider -->
    <?php endif ?>
<?php get_footer(); ?>