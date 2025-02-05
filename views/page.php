<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Electrónica - TechStore</title>
    <link rel="stylesheet" href="/final_lp2/public/style.css">
</head>
<section id="productos" class="productos">
    <div class="container">
        <h2>Nuestros Productos</h2>
        <div class="product-grid">
            <?php foreach ($productos as $producto): ?>
                <div class="product-card">
                    <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                    <h3><?php echo $producto['nombre']; ?></h3>
                    <p><?php echo $producto['descripcion']; ?></p>
                    <p class="price">$<?php echo number_format($producto['precio'], 2); ?></p>
                    <a href="#" class="btn">Comprar Ahora</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
</html>
