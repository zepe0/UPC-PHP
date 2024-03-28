
<h2> Creando Tabla de multiplicar con for</h2>
<?php 

$num2 = 1;
for ($i=0; $i < 10 ; $i++) { 
    $resultado = $i * $num2;
    echo "<table>
    <tr>
        <td> {$i}x{$num2}</td>
        <td> $resultado</td>
    </table>";
  
}
?>