<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Theme Options <small>by Soft-theme</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();


// ----------------------------------------
// Softrestaura Header sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'logo_cart_section',
  'title'       => 'Logo & Cart Section',
  'icon'        => 'fa fa-bookmark',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'softrestaura_logo',
          'type'        => 'upload',
          'title'       => 'Upload Your Logo',
        ),

        array(
          'id'          => 'softrestaura_cart_link',
          'type'        => 'text',
          'title'       => 'Write Your Cart Page Link',
        ),

  ), // end: fields
);

// ----------------------------------------
// Softrestaura Slider sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'slider_section',
  'title'       => 'Slider Section',
  'icon'        => 'fa fa-slideshare',

  // begin: fields
  'fields'      => array(

        array(
          'id'              => 'slider_group_section',
          'type'            => 'group',
          'title'           => 'Slider Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Slider',
          'fields'          => array(

            array(
              'id'          => 'slider_image',
              'type'        => 'upload',
              'title'       => 'Slider Background Image',
            ),

            array(
              'id'          => 'slider_title',
              'type'        => 'text',
              'title'       => 'Slider Title',
            ),

            array(
              'id'          => 'slider_address',
              'type'        => 'text',
              'title'       => 'Slider Address',
            ),

            array(
              'id'          => 'slider_booking_link',
              'type'        => 'text',
              'title'       => 'Reservations Table Link',
            ),

          )
        ),

  ), // end: fields
);

// ----------------------------------------
// softrestaura About sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'aboout_section',
  'title'       => 'About Section',
  'icon'        => 'fa fa-address-card',

  // begin: fields
  'fields'      => array(

        array(
          'id'              => 'about_section_group',
          'type'            => 'group',
          'title'           => 'About Section Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Item',
          'fields'          => array(

            array(
              'id'          => 'about_sec_title',
              'type'        => 'text',
              'title'       => 'Title Here',
            ),

            array(
              'id'          => 'about_sec_content',
              'type'        => 'textarea',
              'title'       => 'Content Here',
            ),

            array(
              'id'          => 'about_button_text',
              'type'        => 'text',
              'title'       => 'Buttom Text Here',
            ),

            array(
              'id'          => 'about_button_link',
              'type'        => 'text',
              'title'       => 'Buttom Link Here',
            ),

            array(
              'id'          => 'form_shortcode_swicher',
              'type'        => 'switcher',
              'title'       => 'Booking Table ON or Off',
            ),

          )
        ),

  ), // end: fields
);


// ----------------------------------------
// softrestaura our chefs sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'chefs_section',
  'title'       => 'Chefs Section',
  'icon'        => 'fa fa-user',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'softrestaura_chefs_title',
          'type'        => 'text',
          'title'       => 'Chefs Title Here',
        ),

        array(
          'id'              => 'shefs_section_group',
          'type'            => 'group',
          'title'           => 'Chefs Section Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Item',
          'fields'          => array(

            array(
              'id'          => 'chefs_image',
              'type'        => 'upload',
              'title'       => 'Chefs Image Here',
            ),

            array(
              'id'          => 'chef_name',
              'type'        => 'text',
              'title'       => 'Chef Name Here',
            ),

            array(
              'id'          => 'chefs_content',
              'type'        => 'textarea',
              'title'       => 'Chefs Content Here',
            ),

            array(
              'id'          => 'facebook_chefs_link',
              'type'        => 'text',
              'title'       => 'Facebook Link Here',
            ),

            array(
              'id'          => 'twitter_chefs_link',
              'type'        => 'text',
              'title'       => 'Twitter Link Here',
            ),

            array(
              'id'          => 'google_chefs_link',
              'type'        => 'text',
              'title'       => 'Google Plus Link Here',
            ),

          )
        ),

  ), // end: fields
);


// ----------------------------------------
// softrestaura Footer sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'footer_left_section',
  'title'       => 'Footer Left Section',
  'icon'        => 'fa fa-adjust ',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'footer_left_title',
          'type'        => 'text',
          'title'       => 'Title Here',
        ),
        array(
          'id'              => 'footer_left_group',
          'type'            => 'group',
          'title'           => 'Address Fields',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Item',
          'fields'          => array(

            array(
              'id'          => 'adress_footer',
              'type'        => 'text',
              'title'       => 'Wrihe Address , Phone & Timetable Induvisual Text',
            ),
           )
        ),
        
 ), // end: fields
);

$options[]      = array(
  'name'        => 'footer_right_section',
  'title'       => 'Footer Right Section',
  'icon'        => 'fa fa-adjust ',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'footer_right_title',
          'type'        => 'text',
          'title'       => 'Title Here',
        ),
        array(
          'id'          => 'footer_right_subtitle',
          'type'        => 'text',
          'title'       => 'SubTitle Here',
        ),
        array(
          'id'          => 'footer_fb_link',
          'type'        => 'text',
          'title'       => 'Facebook Link Here',
        ),
        array(
          'id'          => 'footer_twitter_link',
          'type'        => 'text',
          'title'       => 'Twitter Link Here',
        ),
        
        array(
          'id'          => 'footer_google_link',
          'type'        => 'text',
          'title'       => 'Google Link Here',
        ),
        
        array(
          'id'          => 'footer_linkedin_link',
          'type'        => 'text',
          'title'       => 'Linkedin Link Here',
        ),
           
 ), // end: fields
);

// ----------------------------------------
// softrestaura Footer sections  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'copyright_section',
  'title'       => 'Copyright Section',
  'icon'        => 'fa fa-at ',

  // begin: fields
  'fields'      => array(

        array(
          'id'          => 'copyright_text',
          'type'        => 'text',
          'title'       => 'Copyright Text Here',
          'default'       => 'copyright © 2018. All right reserved By ',
        ),
        array(
          'id'          => 'company_name',
          'type'        => 'text',
          'title'       => 'Company Name Here',
          'default'       => 'Soft-theme',
        ),
        
        array(
          'id'          => 'company_link',
          'type'        => 'text',
          'title'       => 'Company Link Here',
          'default'       => 'http://soft-theme.com',
        ),
        
 ), // end: fields
);


CSFramework::instance( $settings, $options );
