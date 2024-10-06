<?php

// Creamos la funcion y le asignamos el parametro text
function decryptStageXII($text) {

    // Declaramos 2 variables vacias
    // Almacenará los caracteres en posición par
    $leftPart = '';
    // Almacenará los caracteres en posición inpar y en orden invertido
    $rightPart = '';

    // Definimos una variable contador con valor 0 para recorrer el texto
    // Mientras el valor sea menor a la longitud del texto seguira ejecutandose (strlen)
    for ($i = 0; $i < strlen($text); $i++) {
        // Dividimos $i, si da 0 es par y se almacena en $left
        // Si no da 0, se ejecuta el codigo post ':'
        // Concatenamos el caracter $i al principio de $right para generar el orden invertido
        ($i % 2 === 0) ? $leftPart .= $text[$i] : $rightPart = $text[$i] . $rightPart;
    }

    // Devolvemos $left y $right de manera concatenada
    return $leftPart . $rightPart;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $encryptedX2 = $_POST['text-encriptado'];
    $decryptedX1 = decryptStageXII($encryptedX2);
    
    header("Location: ../views/X2_to_X1.php?decryptedX1=" . urlencode($decryptedX1) . "&text-encriptado=" . urlencode($encryptedX2));
    exit();
}
