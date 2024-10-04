<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 197</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./src/icon.png" type="image/x-icon">
</head>
<body>
    <h3>Problema 197</h3>
    <div class="container">
        <div class="column-2">
            <h4>Desencriptar</h4>
            <form action="./php/process.php" method="POST">
                <input type="text" name="text-desencriptar" placeholder="Introduce el texto X''" value="<?php echo isset($_GET['encryptedText']) ? htmlspecialchars($_GET['encryptedText']) : ''; ?>" required>
                <input type="hidden" name="action" value="decrypt">
                <button type="submit">Desencriptar</button>
            </form>
            <br>
            <br>
            <?php
            if (isset($_GET['decryptedXI']) && isset($_GET['decryptedText'])) {
                $decryptedXI = htmlspecialchars($_GET['decryptedXI']);
                $decryptedText = htmlspecialchars($_GET['decryptedText']);
                echo "<b>x' =></b> <p>$decryptedXI</p>";
                echo "<b>x =></b> <p>$decryptedText</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
