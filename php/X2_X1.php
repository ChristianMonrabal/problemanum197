<?php

function decryptStageXII($text) {
    $leftPart = '';
    $rightPart = '';

    for ($i = 0; $i < strlen($text); $i++) {
        ($i % 2 === 0) ? $leftPart .= $text[$i] : $rightPart = $text[$i] . $rightPart;
    }

    return $leftPart . $rightPart;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'decrypt') {
    $encryptedX2 = $_POST['text-encriptado'];
    $decryptedX1 = decryptStageXII($encryptedX2);
    
    header("Location: ../views/X2_to_X1.php?decryptedX1=" . urlencode($decryptedX1) . "&text-encriptado=" . urlencode($encryptedX2));
    exit();
}
