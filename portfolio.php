<?php 
/*
Template name: portfolio
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
<section class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="title">
          <h2>PORTFOLIO</h2>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
      <?php 
        // args
        $my_args = array(
          'post_type' => 'post',          
          'category_name' => 'cliente'
        );

        // query
        $my_query = new WP_Query ( $my_args );
      ?>

    <div class="content">   
    <?php if( $my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
      <div class="content-box">
        <div class="texto">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
          
        
        </div> 
        <!--
          <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/1.jpg">
        -->
      </div>
    <?php endwhile; ?>
    <?php else : get_404_template();  endif; ?>
     
    </div>
 
  </div>


</section>
<?php get_footer(); ?>
