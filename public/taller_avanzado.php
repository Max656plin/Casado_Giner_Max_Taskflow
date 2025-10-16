<?php
// Ejercicio 1: Crear una función para calcular el precio final después de aplicar un descuento basado en la categoría del producto
function calcularDescuento($precio,$categoria){
    if($categoria == "electronica"){
        $descuento = $precio * 0.15;
    } elseif($categoria == "ropa"){
        $descuento = $precio * 0.10;
    } elseif($categoria == "alimentacion"){
        $descuento = $precio * 0.05;
    } else {
        return "Categoría inválida";
    }
    $precioFinal = $precio - $descuento;
    return $precioFinal;
}

echo calcularDescuento(765, "electronica");
?>


<?php
//Ejercicio 2: El juego fizzbuzz con una función que recibe un númerp y si o si te devuelve algo por pantalla

function fizzBuzz($numero){
    if($numero % 3  == 0 && $numero % 5 == 0){
        return "FizzBuzz";
    } elseif($numero % 3 == 0){
        return "Fizz";
    } elseif($numero % 5 == 0){
        return "Buzz";
    } else {
        return $numero ." Este número no es divisible en el juego";
    }
}

echo fizzBuzz(26);
?>

<?php
function validarContrasena($pass) {
    if (strlen($pass) <= 8) {
        return "DEBIL";
    }

    $contieneMayuscula = false;
    $contieneNumero = false;

   
    for ($i = 0; $i < strlen($pass); $i++) {
        
        $caracter = $pass[$i];
        
        
        if ($caracter === strtoupper($caracter) && !is_numeric($caracter)) {
            $contieneMayuscula = true;
        }

     
        if (is_numeric($caracter)) {
            $contieneNumero = true;
        }
    }

   
    if ($contieneMayuscula && $contieneNumero) {
        return "FUERTE";
    }

    
    return "MEDIA";
}

echo validarContrasena("hola");
?>