<?php 



//GALLERIA
function pexeto_add_title_to_attachment( $markup, $id ){
  $att = get_post( $id );
  return str_replace('<a ', '<a title="'.$att->post_title.'" ', $markup);
}
add_filter('wp_get_attachment_link', 'pexeto_add_title_to_attachment', 10, 5);



//GERA TITULO DA HEADER
function geraTitle(){

      bloginfo('name');
      if (!is_home()) echo ' | ';
        the_title();
      }











//ARGS DO POST
function create_post_type(){

  register_post_type('banners',
    array(
      'labels' => array(
      'name' => __('Banners'),
      'singular_name'=> __('Banners')
      ),
      'supports' => array(
        'title', 'editor','thumbnail'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-images-alt2',
      'rewrite' => array('slug'=>'banners'),
    ));
}

add_action('init','create_post_type');



// DEFINIR AS MINIATURAS DOS POSTS
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280,720,'true');//ajusta a imagem para post em rede sociais |true recorta a imagem

?>