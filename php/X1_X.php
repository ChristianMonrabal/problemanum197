<?php

function transformTextX($text) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $result = '';
    $buffer = '';

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (in_array(strtolower($char), $vowels)) {
            $result .= strrev($buffer) . $char;
            $buffer = '';
        } else {
            $buffer .= $char;
        }
    }

    return $result . strrev($buffer);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $encryptedX1 = $_POST['text-encriptado'];
    $decryptedX = transformTextX($encryptedX1);
    
    header("Location: ../views/X1_to_X.php?decryptedX=" . urlencode($decryptedX) . "&text-encriptado=" . urlencode($encryptedX1));
    exit();
}
