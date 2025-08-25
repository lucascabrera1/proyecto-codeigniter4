<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body> -->
    <?php echo $this->extend('plantillas/layout'); ?>
    <?php echo $this->section('contenido');?>
    <table>
        <thead>
            <th>Código</th>
            <th>Nombre</th>
            <th>Stock</th>
            <th>Precio</th>
        </thead>
        <tbody>
            <?php foreach( $productos as $producto ) : ?>
                <tr>
                    <td><?php echo $producto['codigo']; ?></td>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td><?php echo $producto['stock']; ?></td>
                    <td><?php echo $producto['precio']; ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php echo $this->endSection(); ?>

    <?php echo $this->section("scripts"); ?>
    <script>
        alert("Hola JS")
    </script>
    <?php echo $this->endSection(); ?>
<!-- </body>
</html> -->