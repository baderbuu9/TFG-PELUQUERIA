<?php
$peluqueria = new PeluqueriaDB($pdo);
$productos = $peluqueria->retornarProductos();

incluirTemplate('header');
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <?php while ($producto = $productos->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="product-item bg-dark rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?= htmlspecialchars($producto['imagen']) ?>" 
                                 alt="<?= htmlspecialchars($producto['nombre']) ?>">
                            <div class="product-overlay">
                                <a class="btn btn-outline-light" 
                                   href="index.php?pagina=detalle_producto&id=<?= $producto['id_producto'] ?>">
                                   Ver Detalles
                                </a>
                            </div>
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="text-primary mb-2"><?= htmlspecialchars($producto['nombre']) ?></h5>
                            <p class="text-white"><?= number_format($producto['precio'], 2) ?>€</p>
                            <button class="btn btn-primary">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php incluirTemplate('footer'); ?>