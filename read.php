<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css?v=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
<?php  
echo " <div min-width: 140px><p style='color:green'># Leyendo archivo con fopen y fread\n</p> <br>";
echo "<br>";
$archivo = fopen("text.txt", "r") or die("No se pudo abrir el archivo");

$contenido = fread($archivo, filesize("text.txt")); 
echo $contenido."<br>";
 $lines = file('text.txt');
foreach ($lines as $line) {
    echo $line."<br>";

} 
echo"</div><br>";
echo "\n";

//# Leer Archivos con los saltos de linea

 echo "<div min-width: 140px><p style='color:green'># Leyendo Archivos con los saltos de linea </p><br>";
 $lines = file('text.txt', FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) {
    echo "<p>".$line."</p>"."<br>";
} 

//#Leer directorio
 echo  "</div><div width: 170px><p style='color:green'># Leyendo directorio </p><br>";
$directorio = opendir(".");

while ($archivo = readdir($directorio)) {
    echo  $archivo . "<br>";
}

closedir($directorio); 
echo "</div>"; 
//#  devuelve true o false si es un directorio o no .
$fo = is_dir("./text.txt");


echo "<div min-width: 140px>";
function listarArchivos( $path  ){     
    // Abrimos la carpeta que nos pasan como parámetro     
    $dir = opendir($path);     
        while ($elemento = readdir($dir)){    // Leo todos los ficheros de la carpeta   
        // Tratamos los elementos . y .. que tienen todas las carpetas       
        if( $elemento != "." && $elemento != ".."){  
        if( is_dir($path.$elemento) ){   // Si es una carpeta                 
        // Muestro la carpeta                 
        echo "<div><p><strong>CARPETA: 
        <a href='".$elemento."'>". $elemento."</strong></p> </a>
        <a href='edit.php?accion=del&archivo=".$elemento."'>X    </a>   
        <a href='delArchivo.php?accion=edit&archivo=".$elemento."'>Edit</a></div>";  
        } else {           // Si es un fichero                   
        echo "<br /><div><a href='".$elemento."'>". $elemento."</strong></p></a> 
        <a href='delArchivo.php?accion=del&archivo=".$elemento."'>X  </a>
        <a href='delArchivo.php?accion=edit&archivo=".$elemento."'>Edit</a>
        </div>";      // Muestro el fichero       
    }         
    }   
    }
    } 

 
    echo "<br></div>";
    echo  "<div min-width: 140px><p style='color:green'># Leyendo directorio  y viendo si hay carpetas</p><br>";
    listarArchivos("./");

    $path = "/text.txt";


    $pathInfo = pathinfo($path);
    
    echo "<br></div> ";
    echo "<br>";

    echo " <div min-width: 140px><p style='color:green'># pathinfo para descomponer el archivo</p> <br>";
    echo "<br>";

    echo "Directory: " . $pathInfo['dirname'] . "<br>";
    echo "Basename: " . $pathInfo['basename'] . "<br>";
    echo "Filename: " . $pathInfo['filename'] . "<br>";
    echo "Extension: " . $pathInfo['extension'] . "<br> </div>";
    echo " <div min-width: 140px><p style='color:green'># Introducir Datos en el fichero con file_put_contents(archivo, texto);</p> <br>";
    $archivo = "text.txt";
    $texto = "Hola Mundo24";
    if(isset($_GET["archivo"]) &&isset($_GET["texto"]) ){

        $archivo = $_GET["archivo"];    
        $texto = $_GET["texto"];
        file_put_contents($archivo, $texto);
        header("refresh:1;url=read.php");
    }



    ?>
    <form>
        <input type="text" name="archivo" placeholder="Nombre Archivo">
        <input type="text" name="texto" placeholder="Texto a Introducir">
        <button>Enviar</button>
    </form>
   </div>
    </div>
</body>
</html>