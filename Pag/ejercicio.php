<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="../style.css" type="text/css"/>
    <title>Ejercicios</title>
</head>
<body >
    <?php include("../Componentes/nav.php") ?>
<div id="main">
    <?php echo "<div class='ejercicio'>
      <h1> Hello World </h1> <br>
      <p> Mostrando HTML por php con string </p>
    </div>" ?>
    <?php echo "
    <div class='ejercicio'>
      <h2>Comando para ver errores en consola</h2>
      <p> Para mostrar los logs desde consola desde la carpeta de apache/logs
      comando: <br> tail -f error.log
      </p>
    </div>
    " ?>


      <!-- para mostrar el resultado de una variable debemos utilizar la etiqueta < ?= $variable ?> -->
    
      <div class='ejercicio'>
        <?php include("../Componentes/tabla.php")?>
      </div>
      <?php include("../Componentes/selec.php")?>

      <div class="ejercicio">
        <h2>
        Encuentra  el número mayor, el menor y el total de la array :
        </h2>
        <?php 

      
        $elems = array(2,11,9,8,-1,33,2,45,1,2);
        
        $max = 0;
        $min = 0;
        $total = 0;
        $vuelta = 0;


        foreach($elems as $elem) {
          
          if ($elem >= $max){
            $max = $elem;
            $total = $elem + $total;
            $vuelta++;
            
            
        } else if ($elem < $min) {
            $min = $elem;
            $total = $elem + $total;
            $vuelta++;
          } else{
            $total = $elem + $total;
            $vuelta++;
          }
        echo  " En la vuelta ".$vuelta ." el max es ". $max . " y el min es " . $min . "<br>".
        "total es ".$total." elemento a mirar ".$elem. "<br>"."<br>" ;
         
      };
      echo  "El max es ". $max . " y el min es " . $min . "<br>".  
      "La suma total es " .$total."<hr>";
        ?>
      </div>

      <div> 
      <?php ?>

      </div>

      
</div>
</body>
</html>

