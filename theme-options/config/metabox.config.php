<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Custom Post menu Metabox Options                    -
// -----------------------------------------

    $options[]    = array(
        'id'        => '_our_menu_list',
        'title'     => 'Menu List',
        'post_type' => 'ourmenu',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(

    array(
      'name'  => 'menu_list',
      'title' => 'Menu List',
      'icon'  => 'fa fa-cog',
      // begin: fields
      'fields' => array(
            array(
              'id'              => 'menu_list_group',
              'type'            => 'group',
              'title'           => 'Menu Field',
              'button_title'    => 'Add New',
              'accordion_title' => 'Add New Field',
              'fields'          => array(
                array(
                  'id'    => 'menu_image',
                  'type'  => 'upload',
                  'title' => 'Upload Food Image',
                ),

                array(
                  'id'    => 'food_name',
                  'type'  => 'text',
                  'title' => 'Food Name',
                ),

                array(
                  'id'    => 'food_price',
                  'type'  => 'text',
                  'title' => 'Food Price',
                ),

                array(
                  'id'    => 'delivery_text',
                  'type'  => 'text',
                  'title' => 'Delevery Text',
                ),

                array(
                  'id'    => 'order_now',
                  'type'  => 'text',
                  'title' => 'Write Order now Or Somthing',
                ),

                array(
                  'id'    => 'order_now_link',
                  'type'  => 'text',
                  'title' => 'Order Now Link',
                ),
              ),
            ),

      ), // end: fields
    ), // end: a section
  ),
);



CSFramework_Metabox::instance( $options );
