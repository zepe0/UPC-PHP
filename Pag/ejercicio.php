<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="../style.css"/>
    <title>Ejercicios</title>
</head>
<body >
    <?php include("../Componentes/nav.php") ?>
<div id="main">
    <?php echo "<h1> Hello World </h1>" ?>
    
      <!-- para mostrar el resultado de una variable debemos utilizar la etiqueta <?= $variable ?> -->
    
      <div>
        <?php include("../Componentes/tabla.php")?>
      </div>
      <?php include("../Componentes/selec.php")?>
</div>
</body>
</html>

