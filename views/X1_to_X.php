<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X1 a X</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../src/icon.png" type="image/x-icon">
</head>
<body>
    <div class="top-buttons">
        <button onclick="window.location.href='../index.php'">Inicio</button>
        <button onclick="window.location.href='./X2_to_X1.php'">X2 => X1</button>
    </div>
    <h3>X1 a X</h3>
    <div class="container">
        <div class="column-2">
            <h4>Desencriptar X1</h4>
            <form action="../php/X1_X.php" method="POST">
                <input type="text" name="text-encriptado" placeholder="Introduce el texto X1" value="<?php echo isset($_GET['text-encriptado']) ? htmlspecialchars($_GET['text-encriptado']) : ''; ?>" required>
                <input type="hidden" name="action" value="decrypt">
                <button type="submit">Desencriptar</button>
            </form>
            <br>
            <?php
            if (isset($_GET['decryptedX'])) {
                $decryptedX = htmlspecialchars($_GET['decryptedX']);
                echo "<b>X =></b> <p>$decryptedX</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
