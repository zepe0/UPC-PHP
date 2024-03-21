<link  rel="stylesheet" href="../style.css" type="text/css"/>
<?php 
include ("../Componentes/db.php");
include ("../Componentes/nav.php");
include ("../Logica/calculos.php");

print 

"</ul>
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
</ul>";
?>
