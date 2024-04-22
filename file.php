<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    <form method="POST" action="upfile.php" enctype="multipart/form-data">
        <input type="text" placeholder="Nombre Producto" name="NameProduct">
        <input type="text" placeholder="Categoría" name="cat">
        <input type="text"placeholder="Precio" name="precio">
        <input type="file" name="file">
    <button>Enviar</button>
    </form>
</body>
</html>