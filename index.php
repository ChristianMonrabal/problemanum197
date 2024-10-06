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
    <div class="top-buttons">
        <button onclick="window.location.href='./views/X2_to_X1.php'">X2 => X1</button>
        <button onclick="window.location.href='./views/X1_to_X.php'">X1 => X</button>
    </div>
    <h3>Problema 197</h3>
    <div class="container">
        <div class="column-2">
            <h4>Desencriptar</h4>
            <form action="./php/process.php" method="POST">
                <input type="text" name="text-desencriptar" placeholder="Introduce el texto X''" value="<?php echo isset($_GET['encryptedText']) ? htmlspecialchars($_GET['encryptedText']) : ''; ?>" required>
                <button type="submit">Desencriptar</button>
            </form>
            <br>
            <br>
            <?php
            if (isset($_GET['decryptedText'])) {
                $decryptedText = htmlspecialchars($_GET['decryptedText']);
                echo "<b>x =></b> <p>$decryptedText</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
