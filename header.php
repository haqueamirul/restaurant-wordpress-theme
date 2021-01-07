<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softretaura
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="header_logo">
                        <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_html(cs_get_option('softrestaura_logo')); ?>" alt="logo"></a>
                    </div><!-- /.header_logo -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-9 col-sm-9">
                    <div class="header_right_side">
                        <div class="mainmenu">
                           
                            <?php
								wp_nav_menu( array(
								    'theme_location'    => 'main-menu',
								    'depth'             => 3,
								    'container'         => 'div',
								    'container_class'   => 'menu',
								    'menu_class'        => 'navigation',
								    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								    'walker'            => new WP_Bootstrap_Navwalker(),
								) );
							?>
							
                        </div><!-- /.mainmenu -->
                        <div class="cart_section">
                            <?php if ( cs_get_option('softrestaura_cart_link') ): ?>
                            <a href="<?php echo esc_html(cs_get_option('softrestaura_cart_link')); ?>"><i class="icofont icofont-cart-alt"></i></a>
                            <?php endif ?>
                        </div><!-- /.cart_section -->
                    </div><!-- /.header_right_side -->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header>