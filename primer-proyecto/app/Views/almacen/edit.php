<?php echo $this->extend('plantillas/layout'); ?>
<?php echo $this->section('contenido');?>
<h2 class="mb-4">Editar Almacén <?php echo $id?></h2>
<?php echo validation_list_errors(); ?>

<?php if (!empty($errors)): ?>
    <div class ="alert alert-danger" role="alert">
        <ul>
            <?php foreach($errors as $error) : ?>
                <li><?php echo esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<form action="<?php echo base_url('almacen/' . $id); ?>" method="POST" autocomplete="off">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <p>
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo" autofocus class="form-control" required 
            value = <?php echo set_value('codigo'); ?>>
    </p>
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required
        value = <?php echo set_value('codigo'); ?>>
    </p>
    <p>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </p>
</form>