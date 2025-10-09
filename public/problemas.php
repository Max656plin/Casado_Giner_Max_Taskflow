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
    /*
    * Ejercicio 2.4: Comparar dos números simples y mostrar el mayor
    */
    $edad = 20;
    $edadMinima = 18;

    var_dump($edad >= $edadMinima);  // true
    
    $contraseñaGuardada = "123";
    $contaseñaUsuario = "123";

    var_dump($contraseñaGuardada === $contaseñaUsuario);  // true   
?>

<?php
    /*
    *Ejercicio 2.5: comprobar si un número es par o impar
    */ 
    $numero = 11;

    if ($numero % 2 == 0)
        {
            echo "El número $numero es par.";
        } 
        else 
        {
            echo "El número $numero es impar.";
        }
?>

<?php
       /*
        * Ejercicio 3.1: Comprobar si una persona pasa o no basandose en su edad 
        */
    $edad = 21;
    if ($edad >= 18) 
        {
            echo "Puedes pasar";
        } 
        else 
        {
            echo "No puedes pasar";
        }
?>

<?php
    /*
    * Ejercicio 3.2: Calcular la calificación de un estudiante basandose en su nota numérica
    */
    $nota=5;

    if ($nota >= 9) 
        {
            echo "Sobresaliente";
        } 
        elseif ($nota >= 7 && $nota < 8.9) 
        {
            echo "Notable";
        } 
        elseif ($nota >= 5 && $nota < 6.9) 
        {
            echo "Aprobado";
        }
        else 
        {
            echo "Suspenso";
        }
?>

<?php
    /*
    * Ejercicio 3.3: Mostrar el menú del día basandose en el día de la semana
    */

    $diaSemana = "lunes";

    switch ($diaSemana)
     {
        case "lunes":
            echo "Lentejas";
            break;

        case "miercoles":
            echo "Pealla";
            break;

        case "viernes":
            echo "Pescado al horno";
            break;  

        default:
            echo "Hoy no hay menú especial";
            break;
     }
?>

<?php
    /*
    * Ejercicio 3.4: Verficación de acceso en un bucle if
    */
    
    $rolUsuario = "admin";
    $usuarioActivo = true;

    if ($rolUsuario === "admin" && $usuarioActivo) 
        {
            echo "Acceso concedido";
        } 
        else 
        {
            echo "Acceso denegado";
        }
?>

<?php
    /*
    * Ejercicio 4.1: Mostrar los números del 1 al 10 utilizando un bucle for
    */
 $numeroMultiplicar = 7;
    for ($i = 1; $i <= 10; $i++) 
        {
            $resultado = $numeroMultiplicar * $i;
            echo "$numeroMultiplicar x $i = $resultado\n";
        }
?>

<?php 
    /*
    * Ejercicio 4.2: Mostrar los números del 10 al 1 utilizando un bucle while
    */

  $a = 10;

  while ($a >= 0) 
      {
          echo $a . "\n";
          $a--;
      }
      echo "¡Feliz Año Nuevo!";
?>

<?php
    /*
    * Ejercicio 4.3: Iterar sobre un array de nombres y mostrar un  mensaje de saludo para cada nombre
    */
    $alumnos = ["Ana", "Luis", "Pedro", "Marta"];

    foreach ($alumnos as $alumno) 
    {
        echo "Hola, $alumno!\n";
    }
?>

<?php
    /*
    * Ejercicio 4.4: Iterar sobre un array asociativo de productos y mostrar su nombre y precio
    */
$productos = [
    ["nombre" => "Portátil", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Teclado", "precio" => 200]
];

foreach ($productos as $productos) 
{
    echo "Producto: " . $productos["nombre"] . " - Precio: " . $productos["precio"] . " €\n";
}
?>

<?php
/*
* Ejercicio 5.1: Iterar sobre un array asociativo y mostrar sus claves y valores
*/  

$usuario = ["nombre" => "Tu Nombre","edad" => 30, "email" => "tu.email@ejemplo.com", "esEstudiante" => true];

foreach ($usuario as $clave => $valor) 
{
    echo "$clave: $valor\n";
}
?>

<?php
    /*
    * Ejercicio 5.2: Iterar sobre un array de notas y mostrar si cada nota es aprobada o suspendida
    */

    $notas = [8.5 , 4.2 , 7.0 , 9.8 , 5.5 , 3.9];
    foreach ($notas as $notas)
        if( $notas >= 5)
            {
                echo "Aprobado: $notas\n";
            }
            else
            {
                echo "Suspenso: $notas\n";
            }
?>

<?php
/*
* Ejercicio 5.3: Iterar sobre un array multidimensional y mostrar sus elementos
*/

$listaCompra = [
    "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
    "Lácteos" => ["Leche", "Queso"],
    "Limpieza" => ["Detergente", "Lejía"]
];


foreach ($listaCompra as $categoria => $productos) {
    echo $categoria;
    foreach ($productos as $producto) {
        echo $producto;
    }
}
?>

<?php
    /*
    * Ejercicio 5.4: Calcular el coste total de un carrito de la compra
    */
    $productos = [
    ["nombre" => "Portátil", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Teclado", "precio" => 200]
    ];
    $total = 0;

    foreach ($productos as $producto)
        {
            $total += $producto["precio"];
        }
        echo "El coste total del carrito de la compra es: $total €";
        echo "El coste total del carrito de la compra es: " . $total . "€";
?>
