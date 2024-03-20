<?php 
include ('../Componentes/db.php');
if($islogin == true ){
  header('Location: ../index.php');
  exit; 
}
else{
  print  " <form>
  <label for='nombre'>Nombre:</label><br/>
  <input type='text' id='nombre' name='nombre'><br/>
  <label for='pass'>pass:</label><br/>
  <input type='text' id='pass' name='pass'><br/>
  <button>Enviar</button>
</form> ";
}
?>