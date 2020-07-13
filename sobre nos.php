<?php 

/*
Template name: SOBRE NOS
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
<section class="about">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2><?php the_title(); ?></h2>

           
            <div class="box-texto">

              <?php if(have_posts()) : while (have_posts()) : the_post();?>
              <div class="texto">
                <p>
                  <?php the_content(); ?>
                </p>
              </div>

              <?php endwhile; ?>
              <?php else : ; endif;?> 
            </div>
            
            
           
            
     
      </div>
    </div>
  </div>
  
</section>

<?php get_footer(); ?>