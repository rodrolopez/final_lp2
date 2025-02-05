<?php
class ProductoModel {
    public function obtenerProductos() {
        return [
            [
                'nombre' => 'Tetera Electrica',
                'descripcion' => 'La mejor Pava Electrica para esos matecitos.',
                'precio' => 34999.99,
                'imagen' => 'https://via.placeholder.com/150'
            ],
            [
                'nombre' => 'Auriculares Bluetooth',
                'descripcion' => 'Sonido inalámbrico de alta calidad.',
                'precio' => 15000.00,
                'imagen' => 'https://via.placeholder.com/150'
            ],
            [
                'nombre' => 'Smartwatch FitPro',
                'descripcion' => 'Monitorea tu salud y actividad diaria.',
                'precio' => 19999.99,
                'imagen' => 'https://via.placeholder.com/150'
            ]
        ];
    }
}
?>