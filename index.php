<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link  rel="stylesheet" href="style.css" type="text/css"/>
    <title>Document</title>
  </head>
  <body>
    <div> 
      <?php include("nav.php") ?>
    </div>
    <?php echo "<h1> Hello World </h1>" ?>
    <div><?php include( "login.php")?></div>
  
  
    <!-- para mostrar el resultado de una variable debemos utilizar la etiqueta <?= $variable ?> -->
    <?= " tu nombre es $name" ?>
    <div> 
      <?php include("tabla.php")?>
    </div>
    <?php include("selec.php")?>

    <?php include("footer.php")?>

 
  </body>
</html>
