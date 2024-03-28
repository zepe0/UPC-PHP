<?php
$fo= "4x";
$fodos = !filter_var($fo, FILTER_VALIDATE_INT);// valida si es entero o no y devuelve un bolean!
session_start();

var_dump(($_GET['contador'])); //Ver
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 0; // Inicializar solo si no está ya establecida
}
    
    if($_GET["contador"] == 1 ){        

        $_SESSION["contador"] = $_SESSION["contador"] + 1;
    } else{ 
        $_SESSION["contador"] --;
       
       
    }
    echo "<h2>".$_SESSION["contador"]."</h2>";

/* 
echo "<p>hola <strong>$fodos</strong> hola </p>";
echo("<script>console.log('PHP: " . $fodos . "');</script>"); */
var_dump($fodos);
?>

<a href="sesiones.php?contador=1"> Aumenta el valor </a>
<a href="sesiones.php?contador=-1"> Aumenta el valor </a>
