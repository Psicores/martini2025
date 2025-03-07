<?php
/**
 * Agregar menú de administración
 */
function martini_theme_add_admin_menu() {
    // Obtener la URL del icono SVG
    $icon_url = get_template_directory_uri() . '/assets/images/logo_admin.svg';

    add_menu_page(
        "Opciones de tema",         // Título de la página
        "Opciones de tema",         // Título del menú
        "manage_options",           // Capacidad requerida
        "martini_theme_options",    // Slug del menú
        "martini_theme_options_page", // Función que renderiza la página
        $icon_url,                  // URL del icono personalizado
        2                           // Posición en el menú
    );
}
add_action('admin_menu', 'martini_theme_add_admin_menu');

/**
 * Renderizar la página de opciones del tema
 */
function martini_theme_options_page() {
    ?>
    <div class="wrap">
        <h1>Opciones de Tema</h1>
        <p>
            En esta sección podrás cargar y configurar diferentes elementos del tema, como:
        </p>
        <ul>
            <li>Logotipo del sitio.</li>
            <li>Imágenes para slides.</li>
            <li>Iconos para redes sociales y sus enlaces correspondientes.</li>
            <li>Y mucho más.</li>
        </ul>
        <p>
            Utiliza las opciones disponibles a continuación para personalizar tu sitio.
        </p>
    </div>
    <?php
}

/**
 * Cargar estilos en el panel de administración
 */
function martini_theme_admin_styles() {
    wp_enqueue_style(
        'martini-theme-admin-styles', // Identificador único
        get_template_directory_uri() . '/assets/css/admin-styles.css', // Ruta correcta
        array(), // Dependencias (ninguna en este caso)
        '1.0.0' // Versión del archivo
    );
}
add_action('admin_enqueue_scripts', 'martini_theme_admin_styles');