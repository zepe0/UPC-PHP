<?php
if (isset($_GET["accion"]) && $_GET["accion"] === "del"){
    if ($_GET["archivo"] === "prueva.es"){
    unlink( $_GET["archivo"]);
    header("refresh:3;url=read.php");
    }else{
        header("refresh:3;url=read.php");
    echo "estos archivos no se pueden borrar";
    
    };
}


if (isset($_GET["accion"]) && $_GET["accion"] === "edit"){
    rename($_GET["archivo"], "mi_fichero.txt");
    echo "Archivo ".$_GET["archivo"].""."renombrado a mi_fichero.txt";
    header("refresh:3;url=read.php");
};