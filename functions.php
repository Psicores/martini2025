<?php

/**
 * Añado hoja de estilos
 */

function martini_theme_scripts()
{
   wp_enqueue_style('style.css', get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "martini_theme_scripts");

/* */
function martini_theme_setup()
{
   add_theme_support('post-thumbnails'); //Imagen destacada

   add_theme_support('custom-logo', array(
      'height' => 100, // Altura máxima del logotipo
      'width' => 250, // Ancho máximo del logotipo
      'flex-height' => true, // Permite que la altura sea flexible
      'flex-width' => true, // Permite que el ancho sea flexible
   ));

   register_nav_menus(array(
      'menu-1' => esc_html__('Header Menu', 'martini_theme'),
      'menu-2' => esc_html__('Footer Menu', 'martini_theme'),
   ));
}
add_action("after_setup_theme", "martini_theme_setup");