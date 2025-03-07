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