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