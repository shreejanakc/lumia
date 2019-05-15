<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>Lumia - Multipurpose responsive bootstrap website template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
 
  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri();?>/a<?php echo get_template_directory_uri();?>/ssets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Lumia
    Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->

<?php wp_head(); ?>
</head>


<body>
  <div id="wrapper">
    <header>
      <!-- Navbar
    ================================================== -->
      <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- logo -->
            <div class="logo">
              <a href="<?php echo get_site_url(); ?>"><?php the_custom_logo();?></a>
            </div>
            <!-- end logo -->

            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">

                   
                    <?php wp_nav_menu( array(
                    'theme_location' => 'header-menu', 
                    'menu_class'     => 'nav navbar-nav', 
                    'walker'         => new custom_nav_walker(),
                    )); ?>
                      
                  

                </ul>
                <!-- <ul class="nav topnav">
                  <li class="active">
                    <a href="index.html"><i class="icon-home"></i> Home </a>
                  </li>
                  <li class="dropdown">
                    <a href="#"><i class="icon-cog"></i> Features <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="media.html">Media</a></li>
                      <li><a href="color-scheme.html">10 Theme colors</a></li>
                      <li><a href="buttons.html">Buttons</a></li>
                      <li><a href="components.html">Components</a></li>
                      <li><a href="animations.html">56 Animations</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="icon-variations.html">Icon variations</a></li>
                      <li class="dropdown"><a href="#">3rd level <i class="icon-angle-right"></i></a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#">Example menu</a></li>
                          <li><a href="#">Example menu</a></li>
                          <li><a href="#">Example menu</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#"><i class="icon-leaf"></i> Pages <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="about.html">About us</a></li>
                      <li><a href="pricingbox.html">Pricing boxes</a></li>
                      <li><a href="testimonials.html">Testimonials</a></li>
                      <li><a href="404.html">404</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#"><i class="icon-briefcase"></i> Portfolio <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                      <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                      <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                      <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#"><i class="icon-book"></i> Blog <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                      <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                      <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                      <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="contact.html"><i class="icon-envelope-alt"></i> Contact</a>
                  </li>
                </ul> -->
              </nav>
            </div>


          <!--  <div id="main-nav">
              <?php //wp_nav_menu(array('theme_location' => 'header-menu', 'container' => '')); ?>
          </div> -->
            <!-- end menu -->

          </div>
        </div>
      </div>
    </header>