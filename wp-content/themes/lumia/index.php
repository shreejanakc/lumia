<?php

get_header();

?>

<section id="intro">

      <div class="container">
        <div class="row">
          <div class="span12">
            <!-- Place somewhere in the <body> of your page -->
            <div id="mainslider" class="flexslider">
              <ul class="slides">
                <?php 
                $slider = get_theme_mod( 'slider_no_setting', 3 );
                for ( $i=1; $i <= $slider; $i++ ) { 
                ?>
                  <li data-thumb="<?php echo get_theme_mod( 'slider_image_setting' .$i )?>">
                    <img src="<?php echo get_theme_mod( 'slider_image_setting' .$i )?>" alt="" />
                    <div class="flex-caption primary">
                      <h2><?php echo get_theme_mod('slider_text_setting' .$i); ?></h2>
                      <p><?php echo get_theme_mod('slider_subtext_setting' .$i); ?></p>
                    </div>
                  </li>
                <?php
                } ?>
                <!-- <li data-thumb="<?php //echo get_template_directory_uri();?> /assets/img/slides/flexslider/img2.jpg">
                  <img src="<?php echo get_template_directory_uri();?> /assets/img/slides/flexslider/img2.jpg" alt="" />
                  <div class="flex-caption warning">
                    <h2>Responsive layout</h2>
                    <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                  </div>
                </li>
                <li data-thumb="<?php //echo get_template_directory_uri();?> /assets/img/slides/flexslider/img3.jpg">
                  <img src="<?php echo get_template_directory_uri();?> /assets/img/slides/flexslider/img3.jpg" alt="" />
                  <div class="flex-caption success">
                    <h2>Rich of features</h2>
                    <p>Lorem ipsum dolor sit amet vix ceteros noluisse intellegat</p>
                  </div>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section id="maincontent">
      <div class="container">

        <div class="row">
          <div class="span12">
              <?php if (is_active_sidebar( 'Sidebar' ))
              {
              dynamic_sidebar('Sidebar');

              }
              ?>
           <!--  <div class="call-action">

              <div class="text">
                <h2>You should love this stand out call action</h2>
                <p>
                  Hover this call action box and see the call action button play nice animation to seek attention
                </p>
              </div>
              <div class="cta">
                <a class="btn btn-large btn-theme" href="#">
							<i class="icon-plane icon-white"></i> Get a quote </a>
              </div>
            </div> -->
            <!-- end tagline -->
          </div>
        </div>

        <div class="row">

          <?php if (is_active_sidebar( 'service-sidebar' ))
              {
              dynamic_sidebar( 'service-sidebar' );

              }
              ?>
          <!-- <div class="span3 features e_pulse">
            <img src="<?php echo get_template_directory_uri();?> /assets/img/dummies/img1.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="#"><i class="icon-circled icon-48 icon-magic active icon"></i></a>
                <h4>Responsive <br />twitter bootstrap</h4>
              </div>
            </div>
          </div>

          <div class="span3 features e_pulse">
            <img src="<?php echo get_template_directory_uri();?> /assets/img/dummies/img2.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="#"><i class="icon-circled icon-48 icon-briefcase icon"></i></a>
                <h4>Unparalleled <br />premium support</h4>
              </div>
            </div>
          </div>

          <div class="span3 features e_pulse">
            <img src="<?php echo get_template_directory_uri();?> /assets/img/dummies/img3.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="#"><i class="icon-circled icon-48 icon-cogs icon"></i></a>
                <h4>Valid <br />HTML code</h4>
              </div>
            </div>
          </div>

          <div class="span3 features e_pulse">
            <img src="<?php echo get_template_directory_uri();?> /assets/img/dummies/img4.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="#"><i class="icon-circled icon-48 icon-bullhorn icon"></i></a>
                <h4>Flexible <br />multi usage</h4>
              </div>
            </div>
          </div> -->
        </div>

        <div class="row">
          <div class="span12">
              <?php if (is_active_sidebar( 'recent-work-sidebar' ))
              {
              dynamic_sidebar( 'recent-work-sidebar' );

              }
              ?>
       

              <div class="span9">
                <div id="latest-work" class="carousel btleft">
                  <div class="carousel-wrapper">
                    <ul class="da-thumbs">
                      <?php
                      $args= array(
                          'post_type'=> 'page',
                            );
                      $query = new WP_Query( $args );
                      if ( $query->have_posts() ) : 
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                      ?>
                          <li>
                              <?php if( has_post_thumbnail() ) {
                                 the_post_thumbnail();
                              }
                              ?>
                              <article class="da-animate da-slideFromRight">
                              <a class="zoom" data-pretty="prettyPhoto" href=<?php the_post_thumbnail();?>
                                <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                              </a>
                              <a href="portfolio-detail.html">
                                <i class="icon-link icon-rounded icon-48 active"></i>
                              </a>
                              <div class="hidden-tablet">
                                <p><?php the_title(); ?></p>
                              </div>
                            </article>
                          </li>
                        <?php
                      endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

                          <!-- <li>
                            <img src="<?php //echo get_theme_mod( 'latest_work_slider_image_setting' .$i );?>" alt="" />
                            <article class="da-animate da-slideFromRight">
                              <a class="zoom" data-pretty="prettyPhoto" href="<?php //echo get_theme_mod( 'latest_work_slider_image_setting' .$i);?>">
    														<i class="icon-zoom-in icon-rounded icon-48 active"></i>
    													</a>
                              <a href="portfolio-detail.html">
    														<i class="icon-link icon-rounded icon-48 active"></i>
    													</a>
                              <div class="hidden-tablet">
                                <p><?php //echo get_theme_mod( ' latest_work_slider_text_setting' .$i );?></p>
                              </div>
                            </article>
                          </li> -->
                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

<?php get_footer(); ?>