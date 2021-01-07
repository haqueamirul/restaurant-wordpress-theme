<?php 
/*
Template Name: Softrestaura Menu
*/
get_header(); ?>

<!-- =========================
       Banner SECTION
========================= -->
<section class="banner_section" style="background: url(' <?php echo get_template_directory_uri(); ?>/images/banner_bg.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; height: 350px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_table">
                    <div class="banner_header">
                        <h2>about us</h2>
                    </div><!-- /.banner_header -->
                </div><!-- /.banner_table -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.banner_section -->
<!-- =========================
        Menu SECTION
========================= -->
<section class="menu_section sec_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header_title">
                    <h2>choose your menu</h2>
                </div><!-- /.header_title -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="menu_tab_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab_menu">
                        <ul  class="nav nav-pills nav-justified">

            	<?php 
                    $all_terms = get_terms('menucategory', array(
                        'hide_empty' => false
                    ));

                    $x = 0;
                    foreach ($all_terms as $single_term) {

                    	 	$x++; 
                     ?>
 
                   

               			<li class="<?php if($x==1){echo 'active'; } ?>"><a  href="#<?php echo $single_term->slug; ?>" data-toggle="tab"><?php echo $single_term->name; ?></a></li>


                  <?php  }
                ?>	

                        </ul>
                    </div><!-- /.tab_menu -->
                </div><!-- /.col-md-12 -->
                
                <div class="tab-content">
                    <!-- Tab Pane 1 -->

                    <?php 
	                  $filtering_post = null;
	                  $filtering_post = new WP_Query(array(
	                      'post_type' => 'ourmenu',
	                      'posts_per_page' => -1
	                  ));

	                  while ( $filtering_post->have_posts() ) : $filtering_post->the_post(); 

	                  $post_terms = get_the_terms(get_the_ID(), 'menucategory');
	                  
	              ?> 

                    
                    <div class="tab-pane  fade" id="<?php foreach ($post_terms as $post_term) {
                           echo $post_term->slug . ' ';
                        } ?>">



                        <div class="col-md-6 col-sm-6">
                            <div class="menu_item">
                                <div class="menu_thumbnail">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/images/menu-1.jpg" alt="menu">
                                </div><!-- /.menu-thaumnail -->
                                <div class="menu_content">
                                    <div class="menu_title_price">
                                        <h4>breakfast one</h4>
                                        <span>$20.00</span>
                                    </div><!-- /.menu_title_price -->
                                    <div class="menucard_content">
                                       <p>there is a rich diversity in food</p>
                                       <span><a href="#">order now</a></span>
                                    </div><!-- /.menucard_content -->
                                </div><!-- /.menu_content -->
                            </div><!-- /.menu_item -->
                        </div><!-- /.col-md-6 -->


                       
                    </div><!-- /.tab-pane One -->

                    <?php endwhile; 
	                  wp_reset_postdata(); 
	              ?>           
	                

                </div><!-- Tab-Content -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.menu_tab_section -->
</section><!-- /.menu_section -->
<!-- =========================
        Delicious SECTION
========================= -->
<section class="delicious_section sec_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header_title">
                    <h2>most delicious</h2>
                </div><!-- /.header_title -->
            </div><!-- /.col-md-12 -->

            <div class="delicious_warp">
                <!-- Item 1 -->
                <div class="delicious_item">
                    <div class="delicious-img">
                        <img src=" <?php echo get_template_directory_uri(); ?>/images/menu-1.jpg" alt="menu" />
                    </div><!-- /.delicious-img -->
                    <div class="delicious-content">
                        <div class="delicious_menu_title">
                            <h4>blue cheese creckers with grapes</h4>
                            <span>$25.00</span>
                        </div><!-- /.delicious_menu_title -->
                        <div class="delicious_menu_details">
                            <p>italian sausage soup with torleni</p>
                        </div><!-- /.delicious_menu_details -->
                    </div><!-- /.delicious-content -->
                </div><!-- /.delicious_item -->

                <!-- Item 2 -->
                <div class="delicious_item">
                    <div class="delicious-img">
                        <img src=" <?php echo get_template_directory_uri(); ?>/images/menu-2.jpg" alt="menu" />
                    </div><!-- /.delicious-img -->
                    <div class="delicious-content">
                        <div class="delicious_menu_title">
                            <h4>blue cheese creckers with grapes</h4>
                            <span>$25.00</span>
                        </div><!-- /.delicious_menu_title -->
                        <div class="delicious_menu_details">
                            <p>italian sausage soup with torleni</p>
                        </div><!-- /.delicious_menu_details -->
                    </div><!-- /.delicious-content -->
                </div><!-- /.delicious_item -->

                <!-- Item 3 -->
                <div class="delicious_item">
                    <div class="delicious-img">
                        <img src=" <?php echo get_template_directory_uri(); ?>/images/menu-3.jpg" alt="menu" />
                    </div><!-- /.delicious-img -->
                    <div class="delicious-content">
                        <div class="delicious_menu_title">
                            <h4>blue cheese creckers with grapes</h4>
                            <span>$25.00</span>
                        </div><!-- /.delicious_menu_title -->
                        <div class="delicious_menu_details">
                            <p>italian sausage soup with torleni</p>
                        </div><!-- /.delicious_menu_details -->
                    </div><!-- /.delicious-content -->
                </div><!-- /.delicious_item -->

                <!-- Item 4 -->
                <div class="delicious_item">
                    <div class="delicious-img">
                        <img src=" <?php echo get_template_directory_uri(); ?>/images/menu-4.jpg" alt="menu" />
                    </div><!-- /.delicious-img -->
                    <div class="delicious-content">
                        <div class="delicious_menu_title">
                            <h4>blue cheese creckers with grapes</h4>
                            <span>$25.00</span>
                        </div><!-- /.delicious_menu_title -->
                        <div class="delicious_menu_details">
                            <p>italian sausage soup with torleni</p>
                        </div><!-- /.delicious_menu_details -->
                    </div><!-- /.delicious-content -->
                </div><!-- /.delicious_item -->

            </div><!-- /.delicious_warp -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.delicious_section -->

<?php get_footer(); ?>
