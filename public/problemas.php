<?php
    /*
    * Ejercicio 1.1: Declarar variables de diferentes tipos y mostrarlas en pantalla.
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
    /*
    * Ejercicio 1.2: Variables para un producto en una tienda online.
    */
    $producto = "Portátil";
    $precio = 499.99;
    $stock = 25;
    $oferta = true;

    echo "Nombre: $producto ";
    echo " Precio: $precio €";
    echo " stock: $stock ";
    echo " Está de oferta?: " . ($oferta ? "Sí" : "No");
?>

<?php
    /*
    * Ejercicio 1.3: Constantes para el nombre del sitio web y la versión de
    */
    define("NOMBRE_SITIO", "Mi Tienda Online");
    define("VERSION_APP",1.0);

    echo "Sitio: " . NOMBRE_SITIO . " - Versión: " . VERSION_APP;
?>

<?php
    /*
    * Ejercicio 2.1: Declarar variables numéricas y realizar multiples operaciones.
    */
    $num1 = 10;
    $num2 = 5;  

    echo "Suma: " . ($num1 + $num2) . "\n";
    echo "Resta: " . ($num1 - $num2) . "\n";
    echo "Multiplicación: " . ($num1 * $num2) . "\n";
    echo "División: " . ($num1 / $num2);
?>

<?php
    /*
    * Ejercicio 2.2: Variables para gestionar el stock de un producto en una tienda online.
    */
    $stock = 100;
    echo "Stock inicial: $stock";

    $venta = 25;
    $stock -= $venta;
    echo "Después de la venta de $venta unidades: $stock";

    $pedido = 50;
    $stock += $pedido;
    echo "Después de recibir el pedido de $pedido unidades: $stock";
?>

<?php
    /*
    * Ejercicio 2.3: Variables para calcular el precio total de una compra con impuestos.
    */
   $nombre = "Oskar";
   $apellido = "Calvo";
   $curso = "Desarrollo Web en Entorno Servidor";

   $frasecompleta = "El profesor $nombre $apellido imparte el curso de $curso.";

    echo $frasecompleta;
?>

<?php
    $edad = 20;
    $edadMinima = 18;

    var_dump($edad > $edadMinima);  // true
    var_dump($edad < $edadMinima);  // false    
?>

