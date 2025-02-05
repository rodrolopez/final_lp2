<?php
include 'views/header.php'; 

include 'views/page.php';

// Incluimos el autoload para cargar automáticamente las clases
spl_autoload_register(function ($class_name) {
    $directories = ['models/', 'controllers/', 'views/'];
    foreach ($directories as $directory) {
        $file = __DIR__ . '/' . $directory . $class_name . '.php';
        if (file_exists($file)) {
            include $file;
            return;
        }
    }
});

// Instanciamos el controlador
$controller = new ProductoController();

// Obtenemos los productos
$productos = $controller->mostrarInicio();


include 'views/footer.php';

?>
