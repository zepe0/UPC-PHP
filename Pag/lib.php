

<link  rel="stylesheet" href="../style.css" type="text/css"/>
<?php 
include ("../Componentes/db.php");
include ("../Componentes/nav.php");
include ("../Logica/calculos.php");

$cadena = "EHOLH";

$array = str_split($cadena);
$contador = [];
foreach ($array as $key => $caracter) {
    if(isset($contador[$key])){
        $contador[$key]++;        
    }else{
        $contador[$key]= $caracter;

    };
}
print_r($contador);

print 

"<div class='ejercicio'>
<h2> Importando funciones desde Librería ( La Lógica ) y pintando el resultado  en la pantalla pasándole los parámetros directos </h2>
    </ul>
    <li>
    Suma por función de 2 + 2 cargada desde la Liberia ---> ". suma(2,2).
    "</li>
    <li>
    Resta por función de 2 - 2 cargada desde la Liberia ---> ". resta(2,2).
    "</li>
    <li>
    Multiplicación por función de 2 * 2 cargada desde la Liberia ---> ". multiplicacion(2,2).
    "</li>
    <li>
    Division por función de 2 / 2 cargada desde la Liberia ---> ". division(2,2).
    "</li>
    </ul>
</div>
<div class='ejercicio'>
<h2> Encuentra en un string la letra que mas se repite </h2>

</div>

";
$date2 = "22/03/2025";
$date = date("Y-m-d");
$timestamp = strtotime($date);
echo $timestamp. "<br>";
function compara($a,$b) {

    if ($a > $b){
        return  "el numero mayor es: ". $a ;
    } elseif ($a == $b) { 
        return   " son iguales";}
    else{
        return "el  menor es: ". $b ;
    }
    };

echo compara($date,$date2);

?>
