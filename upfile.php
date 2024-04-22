<?php
echo "Datos Formularios  <br>";
var_dump($_POST);
?>
<br>
<?php
echo "Datos Archivo <br>";
var_dump($_FILES);
?>

<?php  
if ($_FILES["file"]["size"] < 4000000 ){

    if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
        $id = "1";
        $Filename = $_FILES["file"]["name"];
        $dir = "upload";
        
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true); 
            move_uploaded_file($_FILES["file"]["tmp_name"], $dir."/".$Filename);
            echo "Archivo subido correctamente";
            exit;
            
        }  
        if(file_exists($dir)){
            move_uploaded_file($Filename,$dir);
            echo "Archivo subido correctamente";
        }else {
            echo "No se ha podido subir el archivo";
        }
    } 
}else{
    //TODO Cambiar en el archivo php.ini el tamaño máximo de archivo en upload_max_filesize=40M
    echo "El archivo seleccionado es demasiado grande";
}


 

