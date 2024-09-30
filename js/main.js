const vowels = "aeiou";

/**
 * PROCESO DE ENCRIPTACIÓN
 * 
 * Función para transformar el texto original (X) en el texto intermedio (X').
 */
function transformTextX(text) {
    // Encripta/Desencripta de X a X'
    let modifiedText = '';
    let buffer = '';
    let withinVowelRange = false;

    for (let char of text) {
        if (vowels.includes(char.toLowerCase())) {
            // Si se encuentra una vocal, se revierte el buffer actual
            if (withinVowelRange) {
                modifiedText += buffer.split('').reverse().join('');
                buffer = '';
            }
            withinVowelRange = true;
            modifiedText += char; // Agrega la vocal
        } else if (withinVowelRange) {
            buffer += char; // Agrega caracteres que no sean vocales al buffer
        } else {
            modifiedText += char; // Agrega caracteres fuera del rango de vocales directamente
        }
    }

    // Si queda algún buffer, lo agrega al final
    if (buffer) {
        modifiedText += buffer.split('').reverse().join('');
    }
    
    return modifiedText;
}

/**
 * PROCESO DE ENCRIPTACIÓN
 * 
 * Función para transformar el texto intermedio (X') en el texto final (X'').
 */
function encryptStageXII(text) {
    // Encripta de X' a X''
    let leftPart = '';
    let rightPart = '';

    for (let i = 0; i < text.length; i++) {
        if (i % 2 === 0) {
            leftPart += text[i];  // Caracteres en posiciones pares
        } else {
            rightPart = text[i] + rightPart; // Caracteres en posiciones impares (al revés)
        }
    }

    return leftPart + rightPart;
}

/* PROCESO DE DESENCRIPTACIÓN  Función para transformar el texto final (X'') de vuelta al texto intermedio (X').*/
function decryptStageXII(text) {
    // Desencripta de X'' a X'
    let length = text.length;
    let middle = Math.ceil(length / 2);
    let firstHalf = text.slice(0, middle); // Primera parte
    let secondHalf = text.slice(middle); // Segunda parte (revertida)

    let reconstructedText = '';
    for (let i = 0; i < firstHalf.length; i++) {
        reconstructedText += firstHalf[i]; // Agregar el caracter de la primera parte
        if (i < secondHalf.length) {
            reconstructedText += secondHalf[secondHalf.length - 1 - i]; // Agregar el caracter de la segunda parte
        }
    }
    
    return reconstructedText;
}

// Encriptar
document.getElementById('button-encriptar').addEventListener('click', () => {
    let plainText = document.getElementById('text-encriptar').value;
    
    // Transformar de X a X'
    let encryptedXI = transformTextX(plainText);
    document.getElementById('textXI-encriptado').innerText = encryptedXI;
    
    // Encriptar de X' a X''
    let encryptedXII = encryptStageXII(encryptedXI);
    document.getElementById('textXII-encriptado').innerText = encryptedXII;
});

// Desencriptar
document.getElementById('button-desencriptar').addEventListener('click', () => {
    let encryptedXII = document.getElementById('text-desencriptar').value;
    
    // Desencriptar de X'' a X'
    let decryptedXI = decryptStageXII(encryptedXII);
    document.getElementById('textXI-desencriptado').innerText = decryptedXI;
    
    // Transformar de X' a X
    let plainText = transformTextX(decryptedXI);
    document.getElementById('text-desencriptado').innerText = plainText;
});
