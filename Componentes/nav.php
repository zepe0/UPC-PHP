<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("db.php");
function generateMenu($items) {
    echo '<ul>';
    foreach ($items as $name => $link) {
      
        echo "<li><a href='{$link}'>{$name}</a></li>";
    }
    echo '</ul>';
}

// Llamamos a la función para generar el menú
generateMenu($menuItems);
?>
</body>
</html>
