<?php echo $this->extend('plantillas/layout') ?>
<?php echo $this->section("contenido"); ?>

<h2>Detalles del producto <?php echo $producto['nombre'] ?> </h2>
<?php echo $this->endSection(); ?>