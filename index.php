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
<div class="container-fluid d-flex justify-content-center">
    <div class="row">
        <div id="carouselBSWP" class="carousel slide" data-ride="carousel">
            
            <div class="item" >
              <div class="titulo">
                <h2>Serralheria</h2>
              </div>
              <div class="trabalhamos">
                <h5>Trabalhamos com</h5>
              </div>
              <div class="mat">
                <h3>Ferro e Alumínio</h3>
              </div>
            </div>

            <div class="carousel-inner">
            
              <?php 
              // args
              $my_args_banner = array(
                'post_type' => 'banners',
                
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



  <section class="fazemos">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="content">
            <div class="content-title">
              <h3 data-aos="fade-right">FAZEMOS</h3>
            </div>
            <div class="content-box">
              <div class="item-1 card ">
                <div class="front">
                  <h5>Portão</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/portao.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>Porta</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/porta.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>Janela</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/janela.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>Estrutura Metálica</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/estrutura-metalica.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>Cobertura</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/cobertura.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>Guarda Corpo</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/guarda-corpo.jpg">
                </div>
              </div>
              <div class="item-1 card ">
                <div class="front">
                  <h5>Corrimão</h5>
                </div>
                <div class="card-body">
                  <img class="img-galery" src="<?php bloginfo('template_url'); ?>/assets/img/corrimao.jpg">
                </div>
              </div>



            </div>
          </div>
          
          
        </div>
      </div>

      
    </div>
  </section>
  <section class="empresa">
    <div class="container-fluid">
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="content">
            <h3>Workbox Esquadrias de Alumínio</h3>
            
            <p>
              <?php 
                $sobrework = get_post_meta(
                  $post->ID,
                 
                  'sobrework', true);
                if ($sobrework) {?>

                  <p> 
                   
                    <?= $sobrework; ?>    
                  </p>
                  <?php 
                }else{
                 
                }
                ?>
            </p>
          </div>
        </div>
      </div>
      <div class="row"><!--galleria -->
        <div class="col d-flex justify-content-center">
          <div class="content-gallery">
            <div class="title">
              <h3 data-aos="fade-right">Confira alguns trabalhos realizados</h3>
            </div>
            <div class="item">
              <?php the_content(); ?>
              
            </div>

            </div>
          
          </div>
        </div>
      </div>
    </div>

  </section>



<?php get_footer(); ?>