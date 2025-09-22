<form action="<?php echo base_url('/almacen'); ?>" method="post" autocomplete="off">
    <h1>Nuevo Almacén</h1>
    <p>
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo" class="form-control" required>
    </p>
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </p>
    <p>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </p>
</form>