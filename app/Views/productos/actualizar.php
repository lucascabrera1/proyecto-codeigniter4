<?php echo $this->section('contenido'); ?>

<?php echo $this->extend('plantillas/layout'); ?>

<form action="<?php echo base_url('productos/actualiza' .$producto['id_producto']); ?>" method="post" autocomplete="off">
    <h1>Editar Producto</h1>
    <input type="hidden" name="id_producto" value = "<?php echo $producto['id_producto'] ?>">
    <p>
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo" class="form-control" required 
        value= <?php echo set_value('codigo', $producto['codigo']); ?> autofocus>
    </p>
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control"
        value= <?php echo $producto['nombre']; ?>>
    </p>
    <p>
        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio" min="1" value="0.00" class="form-control"
        value= <?php echo $producto['precio']; ?>>
    </p>
    <p>
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" min="0" value="0" class="form-control"
        value= <?php echo $producto['stock']; ?>>
    </p>
    <p>
        <label for="almacen">Almacen</label>
        <input type="number" name="almacen" id="almacen" min="0" value="0" class="form-control"
        value= <?php echo $producto['id_almacen']; ?>>
    </p>
    <p>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </p>
</form>

<?php echo $this->endSection(); ?>