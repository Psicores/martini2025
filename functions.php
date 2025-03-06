<?php

/**
 * Añado hoja de estilos
 */

 function martini_theme_scripts() {
    wp_enqueue_style( 'style.css', get_stylesheet_uri() );
 }
 add_action("wp_enqueue_scripts","martini_theme_scripts");