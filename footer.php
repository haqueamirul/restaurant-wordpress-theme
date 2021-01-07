<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softretaura
 */

?>

	<footer>
        <div class="footer_top"> 
            <div class="box">
                <div class="box-row">
                    <?php if ( cs_get_option('footer_left_title') ): ?>
                        
                        <div class="box-cell sec_padding box_left">
                            <div class="footer_header">
                                <h2><?php echo esc_html(cs_get_option('footer_left_title')); ?></h2>
                            </div><!-- /.footer_header -->
                            <div class="address_details">
                                <ul>
                                <?php

                                  $softr_adress = cs_get_option('footer_left_group');

                                    if ( !empty($softr_adress) ) {

                                    foreach ( $softr_adress as $single_addss ) {
                                  
                                  ?>

                                    <li><?php echo esc_html($single_addss['adress_footer']); ?></li>

                                  <?php } } ?>
                                </ul>
                            </div><!-- /.adress_details -->
                        </div><!-- /.box-cell -->

                    <?php endif;
                        if ( cs_get_option('footer_right_title') ) :
                     ?>

                    <div class="box-cell sec_padding box_right">
                        <div class="footer_header">
                            <h2><?php echo esc_html(cs_get_option('footer_right_title')); ?></h2>
                            <p><?php echo esc_html(cs_get_option('footer_right_subtitle')); ?></p>
                        </div><!-- /.footer_header -->
                        <div class="follow_social">
                            <ul>
                                <?php if ( cs_get_option('footer_fb_link') ): ?>
                                <li><a href="<?php echo esc_html(cs_get_option('footer_fb_link')); ?>"><i class="icofont icofont-social-facebook"></i></a></li>
                                <?php endif;
                                    if ( cs_get_option('footer_twitter_link') ) :
                                 ?>
                                <li><a href="<?php echo esc_html(cs_get_option('footer_twitter_link')); ?>"><i class="icofont icofont-social-twitter"></i></a></li>
                                <?php endif;
                                    if ( cs_get_option('footer_google_link') ) :
                                 ?>
                                <li><a href="<?php echo esc_html(cs_get_option('footer_google_link')); ?>"><i class="icofont icofont-social-google-plus"></i></a></li>
                                <?php endif;
                                    if ( cs_get_option('footer_linkedin_link') ) :
                                 ?>
                                <li><a href="<?php echo esc_html(cs_get_option('footer_linkedin_link')); ?>"><i class="icofont icofont-social-linkedin"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div><!-- /.follow_social -->
                    </div><!-- /.box-cell -->
                <?php endif; ?>
                </div><!-- /.box-row -->
            </div><!-- /.box -->
        </div><!-- /.footer_top -->
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright">
                            <p><?php echo esc_html(cs_get_option('copyright_text')); ?> <a href="<?php echo esc_html(cs_get_option('company_link')); ?>"><?php echo esc_html(cs_get_option('company_name')); ?></a></p>
                        </div><!-- /.copyright -->                      
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.conatiner -->
        </div><!-- /.footer_bottom -->
    </footer><!-- /.footer -->
    <!-- =========================
                  SCRIPTS 
    ============================== --> 
    <?php wp_footer(); ?>
  </body>
</html>
