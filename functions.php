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

   register_nav_menus(array(
      'menu-1' => esc_html__('Header Menu', 'martini_theme'),
   ));
}
add_action("after_setup_theme", "martini_theme_setup");


function martini_theme_add_admin_menu()
{
   // Obtener la URL del icono SVG
   $icon_url = get_template_directory_uri() . '/assets/images/logo_admin.svg';

   add_menu_page(
      "Opciones de tema",
      "Opciones de tema",
      "manage_options",
      "martini_theme_options_page",
      'dashicons-admin-generic',
      $icon_url,
      60     
   );
}
add_action('admin_menu', 'martini_theme_add_admin_menu');