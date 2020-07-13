<?php 
/*
Template name: indexhome
Theme Name: THEMA WORKBOX
Theme URI: https://wordpress.org/themes/twentytwenty/
Author: Alexandre Alvarenga
Author URI: 
Description: 
Tags: site serralheria industrial, janelas, portas, portao, estrutura metálica, cobertura, guarda corpo, corrimão
Version: 1
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: THEMA WORKBOX
*/


 ?>
<?php get_header(); ?>
<body>
<div class="container">
    <div class="row ">
        
          <div class="col">
          
            <div id="carouselBSWP" class="carousel slide" data-ride="carousel">
            
              <div class="carousel-inner mt-3 mb-3">
              
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
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')) ?>
                    <div class="carousel-caption d-none d-md-block">
                      <a href="<?php the_permalink(); ?> ">
                        <h2>
                          <?php the_title(); ?>
                        </h2>
                        <p>Leia mais</p>
                        

                      </a>
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
                  <h5>PORTÃO</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>PORTA</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/2.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>JANELA</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/3.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>ESTRUTURA METÁLICA</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/4.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>COBERTURA</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>GUARDA CORPO</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/5.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>CORRIMÃO</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/6.jpg">
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

            
            
           
            <div class="image">
              <?php if(have_posts()) : while (have_posts()) : the_post();?>

                <?php the_content(); ?>


              <?php endwhile; ?>
              <?php else : get_404_template(); endif;?> 
            </div>
                

            <!-- 
              <div class="conteudo-item">

              
              <?php if(have_posts()) : while (have_posts()) : the_post();?>
                <div class="item">
                  <?php the_content(); ?>
                  
                </div>

               <?php endwhile; ?>
                <?php else : get_404_template(); endif;?> 

              </div>
             -->
          </div>
        </div>
      </div>
    </div>

  </section>



<?php get_footer(); ?>