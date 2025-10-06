<?php
    /*
    * Ejercicio 1: Declarar variables de diferentes tipos y mostrarlas en pantalla.
    */
    $nombre = "Hideo";
    $apellidos = "Kojima";
    $edad = 62;
    $altura = 1.73;
    $estudiante = false;

    echo "Nombre: $nombre ";
    echo " Apellidos: $apellidos ";
    echo " Edad: $edad ";
    echo " Altura: $altura metros ";
    echo " Es estudiante?: " . ($estudiante ? "Sí" : "No");
?>

<?php
    $producto = "Portátil";
    $precio = 499.99;
    $stock = 25;
    $oferta = true;

    echo "Nombre: $producto ";
    echo " Precio: $precio €";
    echo " stock: $stock ";
    echo " Está de oferta?: " . ($oferta ? "Sí" : "No");
?>
