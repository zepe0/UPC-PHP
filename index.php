<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link  rel="stylesheet" href="style.css" type="text/css"/>
    <title>Document</title>
  </head>
  <body>
    <?php include("Componentes/nav.php") ?>
  <?php include("Componentes/db.php");?> 
    <div> 
     

      <?php include("Componentes/db.php");     
   
      if($islogin != true) { // Redirigir al navegador a otro documento
       header('Location: Pag/login.php'); 
       // Asegúrate de que el código que sigue no se ejecute después de la redirección.
    }
    else{
      print "
      <h1>Dentro  del area restringida! ${name}</h1>";
    }
     
    ?>

   
    </div>
   



    <?php include("Componentes/footer.php")?>

 
  </body>
</html>
