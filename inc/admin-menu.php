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
 * Renderizar la página de opciones del tema con pestañas
 */
function martini_theme_options_page() {
    ?>
    <div class="wrap">
        <h1>Opciones de Tema</h1>

        <!-- Pestañas -->
        <h2 class="nav-tab-wrapper">
            <a href="#tab-1" class="nav-tab nav-tab-active">Tab 1</a>
            <a href="#tab-2" class="nav-tab">Tab 2</a>
        </h2>

        <!-- Contenido de las pestañas -->
        <?php
        // Incluir el contenido de cada pestaña
        require_once get_template_directory() . '/inc/tabs/tab-1.php';
        require_once get_template_directory() . '/inc/tabs/tab-2.php';
        ?>
    </div>

    <!-- Script para manejar las pestañas -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Seleccionar todas las pestañas
            const tabs = document.querySelectorAll('.nav-tab');
            const tabContents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remover la clase activa de todas las pestañas
                    tabs.forEach(t => t.classList.remove('nav-tab-active'));
                    // Ocultar todos los contenidos
                    tabContents.forEach(content => content.style.display = 'none');

                    // Agregar la clase activa a la pestaña seleccionada
                    this.classList.add('nav-tab-active');
                    // Mostrar el contenido correspondiente
                    const target = this.getAttribute('href');
                    document.querySelector(target).style.display = 'block';
                });
            });
        });
    </script>
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