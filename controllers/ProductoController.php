<?php
class ProductoController {
    private $model;

    public function __construct() {
        // Instanciamos el modelo
        $this->model = new ProductoModel();
    }

    public function mostrarInicio() {
        // Obtenemos los productos del modelo
        $productos = $this->model->obtenerProductos();

        // Cargamos la vista
        //include 'views/header.php';
        include 'views/page.php';
        //include 'views/footer.php';
    }
}
?>