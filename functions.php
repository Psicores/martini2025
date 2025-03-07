<?php

/**
 * Añadir hoja de estilos
 */
function martini_theme_scripts()
{
   wp_enqueue_style('style.css', get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "martini_theme_scripts");

/**
 * Configuración del tema
 */
function martini_theme_setup()
{
   add_theme_support('post-thumbnails'); // Imagen destacada

   register_nav_menus(array(
      'menu-1' => esc_html__('Header Menu', 'martini_theme'),
   ));
}
add_action("after_setup_theme", "martini_theme_setup");

/**
 * Agregar menú de administración
 */
function martini_theme_add_admin_menu()
{
   // Obtener la URL del icono SVG
   $icon_url = get_template_directory_uri() . '/assets/images/logo_admin.svg';

   add_menu_page(
      "Opciones de tema",         // Título de la página
      "Opciones de tema",         // Título del menú
      "manage_options",           // Capacidad requerida
      "martini_theme_options",    // Slug del menú
      "martini_theme_options_page", // Función que renderiza la página
      $icon_url,                  // URL del icono personalizado
      6                          // Posición en el menú
   );
}
add_action('admin_menu', 'martini_theme_add_admin_menu');


/**
 * Cargar estilos en el panel de administración
 */
function martini_theme_admin_styles()
{
   wp_enqueue_style(
      'martini-theme-admin-styles', // Identificador único
      get_template_directory_uri() . '/assets/css/admin-styles.css', // Ruta correcta
      array(), // Dependencias (ninguna en este caso)
      '1.0.0' // Versión del archivo
   );
}
add_action('admin_enqueue_scripts', 'martini_theme_admin_styles');