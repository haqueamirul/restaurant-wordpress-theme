<!-- ========================= 
            About SECTION
========================= -->
<?php if ( cs_get_option('about_section_group') ): ?>
<section class="home_about_section sec_padding">
    <div class="container">
        <div class="row">

        <?php

          $softr_about = cs_get_option('about_section_group');

            if ( !empty($softr_about) ) {

            foreach ( $softr_about as $single_about ) {
          
          ?>

            <div class="col-md-4">
                <div class="about_details">
                    <div class="about_header">
                        <h3><?php echo esc_html($single_about['about_sec_title']); ?></h3>
                    </div><!-- /.about_header -->
                    <div class="about_content text-center">
                        <?php if ( $single_about['about_sec_content'] ): ?>
                        <p><?php echo esc_html($single_about['about_sec_content']); ?></p>
                        <?php endif ?>
                        <?php if ( $single_about['about_button_text'] ): ?>
                        <a href="<?php echo esc_html($single_about['about_button_link']); ?>" class="btn btn-default btn-about"><?php echo esc_html($single_about['about_button_text']); ?></a>
                        <?php endif ?>
                    </div><!-- /.about_content -->
                    <?php if ( $single_about['form_shortcode_swicher'] ): ?>
                    <?php echo do_shortcode('[contact-form-7 id="325" title="Contact form 1"]'); ?>
                    <?php endif ?>

                </div><!-- /.about_details -->
            </div><!-- /.col-md-4 -->

        <?php } } ?>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.home_about_section -->
<?php endif ?>