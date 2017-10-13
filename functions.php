<?php
// entrar las hojas de estilo y bootstrap
function enqueue_portafoliotheme_styles(){
    wp_enqueue_style( "bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css");
    wp_enqueue_style( "portafoliotheme-style", get_stylesheet_uri() );
}
add_action("wp_enqueue_scripts", "enqueue_portafoliotheme_styles");
// add scripts
function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_enqueue_script( 'popper-js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' );
    wp_enqueue_script( 'boostrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js');

}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


// registar el menu principal
function register_my_menu() {
    register_nav_menu('Menu-Principal',__( 'Principal Menu' ));
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
  }
  add_action( 'init', 'register_my_menu' );

  