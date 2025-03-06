<?php

/**
 * Añado hoja de estilos
 */

 function martini_theme_scripts() {
    wp_enqueue_style( 'style.css', get_stylesheet_uri() );
 }
 add_action("wp_enqueue_scripts","martini_theme_scripts");

 /* */
 function martini_theme_setup() {
   add_theme_support('post-thumbnails'); //Imagen destacada
}
add_action("after_setup_theme","martini_theme_setup");