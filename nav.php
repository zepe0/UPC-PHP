<?php
// Definimos los elementos del menú
$menuItems = [
    'Inicio' => 'index.php',
    'Servicios' => 'services.php',
    'Nosotros' => 'about.php',
    'Contacto' => 'contact.php'
];

// Función para generar el menú
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
