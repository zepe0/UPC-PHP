<link  rel="stylesheet" href="../tabla.css" type="text/css"/>
<link  rel="stylesheet" href="../style.css" type="text/css"/>
<?php
ini_set('display_errors', 1);
ini_set('log_errors', 'On');
error_reporting(E_ALL);
include("../Componentes/nav.php");

$productes = array(
    array(
        "nom" => "Pomes",
        "imatge" => "https://www.cuina.cat/uploads/s1/65/74/83/red-delicious_22_645x400.jpeg",
        "preu" => 10.99
    ),
    array(
        "nom" => "Taronges",
        "imatge" => "https://botiga.mercatfontetes.cat/598-large_default/taronges-1kg-aprox-.jpg",
        "preu" => 20.49
    ),
    array(
        "nom" => "Cireres",
        "imatge" => "https://etselquemenges.cat/wp-content/media/2012/05/cireres-600.gif",
        "preu" => 15.79
    )
);

echo("<!--\n");
print_r($productes);    
echo("-->");

 foreach ($productes as $indice => $value) {
  echo "<table> \n";
  echo "\t<tr>\n";
  echo  "<td>". $value['nom'] . "</td>";
  echo "<td><img src='{$value['imatge']}'> </td>";
  echo "<td>".$value['preu']. " € </td>";
  echo "</tr> ";
  echo "</table>";
}


echo("</BODY>");
echo("</HTML>");
?>