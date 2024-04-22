<?php  

/* $archivo = fopen("text.txt", "r") or die("No se pudo abrir el archivo");
$contenido = fread($archivo, filesize("text.txt")); */

/* $lines = file('text.txt');
foreach ($lines as $line) {
    echo $line;

} */

$lines = file('text.txt', FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) {
    echo $line ."<br>";
}
