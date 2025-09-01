<form action="<?php echo base_url('productos/guarda'); ?>" method="post" autocomplete="off">
    <h1>Nuevo Producto</h1>
    <p>
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo" class="form-control" required>
    </p>
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </p>
    <p>
        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio" min="1" value="0.00" class="form-control">
    </p>
    <p>
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" min="0" value="0" class="form-control">
    </p>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </p>
</form>