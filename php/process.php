<?php

// Función para desencriptar X'' a X'
function decryptStageXII($text) {
    $leftPart = '';
    $rightPart = '';

    for ($i = 0; $i < strlen($text); $i++) {
        ($i % 2 === 0) ? $leftPart .= $text[$i] : $rightPart = $text[$i] . $rightPart;
    }

    return $leftPart . $rightPart;
}

// Función para desencriptar de X' a X
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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'decrypt') {
    $encryptedXII = $_POST['text-desencriptar']; 
    
    $decryptedXI = decryptStageXII($encryptedXII);
    
    $plainText = transformTextX($decryptedXI);
    
    header("Location: ../index.php?decryptedXI=" . urlencode($decryptedXI) . "&decryptedText=" . urlencode($plainText) . "&encryptedText=" . urlencode($encryptedXII));
    exit();
}
?>
