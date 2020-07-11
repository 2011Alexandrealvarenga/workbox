<?php get_header(); ?>
<body>
  
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="content-all-banner">
            <!--
            <div class="content-title">
              <h2>Workbox Serralheria</h2>
              <p>Trabalhamos com</p>
              <h3>FERRO e ALUMÍNIO</h3>
            </div>
          -->
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
                      <div class="item">
                        <div class="titulo">
                          <h2>Workbox Serralheria</h2>
                        </div>
                        <div class="trabalhamos">
                          <h5>Trabalhamos com</h5>
                        </div>
                        <div class="mat">
                          <h3>Ferro e Alumínio</h3>
                        </div>
                      </div>
                        
                      


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
              <div class="item-1 card ">
                <div class="front">
                  <h5>porta</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>porta</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>porta</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>porta</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>porta</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>porta</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>porta</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
                </div>
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
            <?php 

            $my_args = array(
                'post_type' => 'post',
                'category_name' => 'galeria'
            );

            $my_query = new WP_Query($my_args);
            ?>
            
           
            <div class="image">
             <?php if($my_query->have_posts())
              :while($my_query->have_posts())
              :$my_query->the_post();
             ?>
        
              <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-galery')); ?>


              <!-- 
             
              <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
              <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
              <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
              <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
              <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
              <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
              -->

               <?php endwhile; ?>
              <?php else : get_404_template();  endif; ?>

            </div>
             
          </div>
        </div>
      </div>
    </div>

  </section>


<?php get_footer(); ?>