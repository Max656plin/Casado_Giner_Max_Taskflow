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
//Ejercicio 3: Validar la fortaleza de una contraseña mediante una función que reciba la contraseña y devuelva "DEBIL", "MEDIA" o "FUERTE"
function validarContraseña($pass) {
    $longitud = strlen($pass);
    $tieneMayuscula = false;
    $tieneNumero = false;

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $pass[$i];

        if ($caracter === strtoupper($caracter) && $caracter !== strtolower($caracter)) {
            $tieneMayuscula = true;
        }

        if (is_numeric($caracter)) {
            $tieneNumero = true;
        }
    }

    // DEBIL: 8 caracteres o menos y no cumple con mayúscula o número
    if ($longitud <= 8) {
        return "DEBIL";
    }
    // MEDIA: más de 8 caracteres, pero falta mayúscula o número
    elseif (!$tieneMayuscula || !$tieneNumero) {
        return "MEDIA";
    }
    // FUERTE: más de 8 caracteres, al menos una mayúscula y un número
    else {
        return "FUERTE";
    }
}

echo validarContraseña("holamundooo");
?>


<?php
//Ejercicio 4: Encontrar el valor más grande mediante una función que reciba un array de números
function encontrarMaximo($array) {
    
    $maximo = $array[0];

    foreach ($array as $valor) {
        if ($valor > $maximo) {
            $maximo = $valor; 
        }
    }
    return $maximo;
}

$numeros = [1, 10, 15, 45, 123];
echo "El número más alto es: " . encontrarMaximo($numeros);
?>


<?php
//Ejercicio 5: Filtrar un array de usuarios para obtener solo aquellos que son mayores de edad utilizando una función anónima (closure)
$usuarios = [
    ['nombre' => 'Ana', 'edad' => 25, 'activo' => true],
    ['nombre' => 'Juan', 'edad' => 17, 'activo' => true],
    ['nombre' => 'Pedro', 'edad' => 35, 'activo' => false],
    ['nombre' => 'Sofía', 'edad' => 22, 'activo' => true]
];
$mayores = array_filter($usuarios, fn($u) => $u['edad'] >= 18);

print_r($mayores);
?>
