document.addEventListener('DOMContentLoaded', function() {
    // Seleccionar todas las pestañas
    const tabs = document.querySelectorAll('.nav-tab');
    const tabContents = document.querySelectorAll('.tab-content');

    // Función para cambiar de pestaña
    function switchTab(tab) {
        // Remover la clase activa de todas las pestañas
        tabs.forEach(t => t.classList.remove('nav-tab-active'));
        // Ocultar todos los contenidos
        tabContents.forEach(content => content.style.display = 'none');

        // Agregar la clase activa a la pestaña seleccionada
        tab.classList.add('nav-tab-active');
        // Mostrar el contenido correspondiente
        const target = tab.getAttribute('href');
        document.querySelector(target).style.display = 'block';

        // Actualizar la URL del navegador
        history.pushState(null, null, target);
    }

    // Manejar el clic en las pestañas
    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            switchTab(this);
        });
    });

    // Manejar el estado inicial (cuando se carga la página)
    const initialTab = window.location.hash || '#tab-1';
    const initialTabElement = document.querySelector(`.nav-tab[href="${initialTab}"]`);

    if (initialTabElement) {
        switchTab(initialTabElement);
    }
});