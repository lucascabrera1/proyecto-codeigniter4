<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos</title>
</head>
<body>
    <h2>subir archivos con codeigniter 4</h2>
    <form action="<?php base_url('/upload'); ?>" method="post" enctype= "multipart/form-data">
        <p>
            <label for="archivo">Selecciona un archivo</label>
            <input type="file" name="archivo" id="archivo" accept="image/jpeg, image/png">
        </p>
        <p>
            <button type="submit">Subir archivo</button>
        </p>
    </form>
</body>
</html>