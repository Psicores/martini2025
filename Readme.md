martini2025/
│
├── assets/                  # Carpeta para archivos estáticos (CSS, JS, imágenes, fuentes)
│   ├── css/                 # Hojas de estilo CSS
│   ├── js/                  # Archivos JavaScript
│   ├── images/              # Imágenes del tema
│   └── fonts/               # Fuentes personalizadas
│
├── inc/                     # Funcionalidades adicionales (archivos PHP)
│   ├── enqueue-scripts.php  # Registrar y cargar CSS y JS
│   ├── custom-functions.php # Funciones personalizadas
│   ├── theme-support.php    # Soporte para características del tema
│   └── widgets.php          # Registrar widgets personalizados
│
├── template-parts/          # Fragmentos de plantillas reutilizables
│   ├── header/              # Fragmentos del header
│   ├── footer/              # Fragmentos del footer
│   ├── content/             # Fragmentos de contenido (entradas, páginas)
│   └── widgets/             # Fragmentos para widgets personalizados
│
├── templates/               # Plantillas personalizadas
│   ├── page-{slug}.php      # Plantilla para una página específica (ej: page-contacto.php)
│   ├── single-{post-type}.php # Plantilla para un tipo de entrada específico
│   └── archive-{post-type}.php # Plantilla para archivos de un tipo de entrada específico
│
├── languages/               # Archivos de traducción (.po y .mo)
│
├── .gitignore               # Archivo para ignorar archivos en Git
├── style.css                # Hoja de estilos principal del tema
├── index.php                # Plantilla principal del tema
├── functions.php            # Archivo de funciones del tema
├── header.php               # Plantilla del header
├── footer.php               # Plantilla del footer
├── sidebar.php              # Plantilla de la barra lateral (si es necesaria)
├── screenshot.png           # Captura de pantalla del tema (1200x900 px)
└── README.md                # Documentación del tema (opcional)