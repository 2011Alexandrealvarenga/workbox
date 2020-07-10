<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php geraTitle(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/fontello.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
 
</head>
<style>

</style>
<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="content-contact">
            <div class="content-phone">
              <div class="item-phone">
                <i class="icon-phone"></i>
                <p>(11) 1234-1234</p>
              </div>
              <div class="item-zap">
                <i class="icon-whatsapp"></i>
                <p>(11) 1234-1234</p>
              </div>
              <div class="item-email">
                <i class="icon-mail"></i>
                <p>2011@gmail</p>
              </div>
            </div>
            <div class="content-social-media">
              <div class="social-media">
                <i class="icon-facebook"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
    <div class="container">
      <div class="row">
        <div class="col">
          <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
              <i class="fas fa-bars"></i>
            </label>
          <label class="logo">Logo</label>
          <?php  
            wp_nav_menu(
              $args = array(
                'theme_location' => 'header_menu'
              )
            );
          ?>   

        </div>
      </div>
    </div>
    -->
  </header>
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="content-all-banner">
            <div class="content-title">
              <h2>SERRALHERIA - INDUSTRIAL</h2>
              <h4>trabalhamos com</h4>
              <h3>FERRO e ALUMÍNIO</h3>
            </div>
            <div class="content-banner"><!--banner -->
              <div id="carouselBSWP" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
                
                  <?php 
                  // args
                  $my_args_banner = array(
                    'post_type' => 'banners',
                    'posts_per_page' => 3,
                  );

                  // query
                  $my_query_banner = new WP_Query ( $my_args_banner );
                  ?>

                  <?php if( $my_query_banner->have_posts()) : 
                    $banner = $banners[0];
                    $c = 0;
                    while( $my_query_banner->have_posts() ) : 
                    $my_query_banner->the_post(); 
                  ?>

                    <div class="carousel-item <?php $c++; if($c == 1) { echo ' active'; } ?>">
                      <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img-carousel rounded')) ?>
                      <div class="carousel-caption d-none d-md-block">
                        <h5>
                          <?php the_title(); ?>
                        </h5>
                      </div>
                    </div>

                  <?php endwhile; endif; ?>

                  <?php wp_reset_query(); ?>
                
                </div>

                <a class="carousel-control-prev" href="#carouselBSWP" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  <span class="sr-only">Anterior</span>
                </a>

                <a class="carousel-control-next" href="#carouselBSWP" role="button" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              
              </div>
            </div>
          </div>
            
        </div>
      </div>
    </div>
  </section>
  <section class="fazemos">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="content">
            <div class="content-title">
              <h3>fazemos</h3>
            </div>
            <div class="content-box">
              <div class="item-1">
                <h5>portão</h5>
              </div>
              <div class="item-1">
                <h5>porta</h5>
              </div>
              <div class="item-1">
                <h5>janela</h5>
              </div>
            </div>
          </div>
          
          
        </div>
      </div>

      
    </div>
  </section>
  <section class="empresa">
    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="content">
            <h3>WORKBOX</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, nemo, quas! Libero voluptates quis, neque quam ratione ipsa labore earum.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="content-gallery">
            <div class="title">
              <h3>Confira alguns trabalhos realizados</h3>
            </div>
            <div class="image">
              <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
              <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
              <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
              <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


<footer>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="contact">
          <div class="content-phone">
            <div class="item-phone">
              <i class="icon-phone"></i>
              <p>(11) 1234-1234</p>
            </div>
            <div class="item-zap">
              <i class="icon-whatsapp"></i>
              <p>(11) 1234-1234</p>
            </div>
            <div class="item-email">
              <i class="icon-mail"></i>
              <p>2011@gmail</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>






  <!-- MENU -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/popper.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/bootstrap.js"></script>

</body>
</html>