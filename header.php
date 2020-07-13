<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta <?php bloginfo('charset'); ?>>
  <!-- titulo dinamico -->
  <title><?php geraTitle(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css"> 
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <!-- caber na tela cel -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--compatibilidade -->
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <!--icones -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/fontello.css">
  <!--galeria 
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/magnific-popup.css">
  -->
  

 
  
 
</head>
<style>

</style>
<header>
  <div class="container-fluid top-social">
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
              
            </div>
            <div class="content-social-media">
              <div class="item-email">
                <i class="icon-mail"></i>
                <p>2011brunofernandes@gmail.com</p>
              </div>
              <div class="social-media">
                <i class="icon-facebook"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <div class="container">
    <div class="row">
      <div class="col">
        
        <nav>
          <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
          </label>
          <label class="logo"><a href="<?php bloginfo('home') ?> ">Logo</a></label>
          <ul>
            <li> <a href="http://localhost/SITES%20CLIENTES/WORKBOX/WP/">HOME</a></li>
            <li> <a href="http://localhost/SITES%20CLIENTES/WORKBOX/WP/index.php/portfolio/">PORTFÓLIO</a></li>
            <li> <a href="http://localhost/SITES%20CLIENTES/WORKBOX/WP/index.php/equipe/">EQUIPE</a></li>
            <li> <a href="http://localhost/SITES%20CLIENTES/WORKBOX/WP/index.php/sobre-nos/">sobre nos</a></li>
            
          </ul>
        </nav>
      </div>
    </div>
  </div>
  
</header>