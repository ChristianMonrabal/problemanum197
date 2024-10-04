<?php

function decryptCombined($text) {
    $leftPart = '';
    $rightPart = '';
    
    for ($i = 0; $i < strlen($text); $i++) {
        ($i % 2 === 0) ? $leftPart .= $text[$i] : $rightPart = $text[$i] . $rightPart;
    }

    $decryptedXI = $leftPart . $rightPart;

    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $result = '';
    $buffer = '';

    for ($i = 0; $i < strlen($decryptedXI); $i++) {
        $char = $decryptedXI[$i];
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
    
    $plainText = decryptCombined($encryptedXII);
    
    header("Location: ../index.php?decryptedText=" . urlencode($plainText) . "&encryptedText=" . urlencode($encryptedXII));
    exit();
}
?>
