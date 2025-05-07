<?php
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$peluqueria = new PeluqueriaDB($pdo);
$producto = $peluqueria->retornarProductoPorId($id);

if(!$producto) {
    header("Location: index.php?pagina=productos");
    exit;
}

incluirTemplate('header');
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="<?= htmlspecialchars($producto['imagen']) ?>" 
                     alt="<?= htmlspecialchars($producto['nombre']) ?>">
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-secondary p-5 h-100 rounded">
                    <h2 class="text-primary mb-4"><?= htmlspecialchars($producto['nombre']) ?></h2>
                    <p class="text-white fs-4 mb-4"><?= number_format($producto['precio'], 2) ?>€</p>
                    <p class="text-white mb-4"><?= nl2br(htmlspecialchars($producto['descripcion'])) ?></p>
                    
                    <form action="index.php?pagina=carrito" method="post">
                        <input type="hidden" name="id_producto" value="<?= $producto['id_producto'] ?>">
                        <button type="submit" class="btn btn-primary py-2 px-4">
                            Añadir al Carrito
                        </button>
                        <a href="index.php?pagina=productos" class="btn btn-outline-light py-2 px-4">
                            Volver
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php incluirTemplate('footer'); ?>