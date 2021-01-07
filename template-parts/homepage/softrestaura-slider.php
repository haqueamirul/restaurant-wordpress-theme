<!-- =========================
        Banner Slider SECTION
========================= -->
<?php if ( cs_get_option('slider_group_section') ): ?>
<section class="banner_slider_section">
    <div class="banner_slider_active owl-carousel owl-theme">

        <?php

          $softr_slider = cs_get_option('slider_group_section');

            if ( !empty($softr_slider) ) {

            foreach ( $softr_slider as $single_slider ) {
          
          ?>

        <div class="single_slider" style="background-image: url(<?php echo esc_url($single_slider['slider_image']); ?>);">
            <div class="slider-content">
                <div class="table-cell">
                    <h2><?php echo esc_html($single_slider['slider_title']); ?></span></h2>
                    <p><?php echo esc_html($single_slider['slider_address']); ?></p>
                    <?php if ( $single_slider['slider_booking_link'] ): ?>
                    <a href="<?php echo esc_html($single_slider['slider_booking_link']); ?>" class="btn btn-default btn-book"><?php _e('book table','softretaura'); ?></a>
                     <?php endif ?>
                </div><!-- /.table-cell -->
            </div><!-- /.slider-content -->
        </div><!-- /.single_slider -->

        <?php } } ?>

    </div><!-- /.banner_slider_active -->
</section><!-- /.banner_slider_section -->
<?php endif ?>