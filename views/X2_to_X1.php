<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X2 a X1</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../src/icon.png" type="image/x-icon">
</head>
<body>
    <div class="top-buttons">
        <button onclick="window.location.href='../index.php'">Inicio</button>
        <button onclick="window.location.href='./X1_to_X.php'">X1 => X</button>
    </div>
    <h3>X2 a X1</h3>
    <div class="container">
        <div class="column-2">
            <h4>Desencriptar X2</h4>
            <form action="../php/X2_X1.php" method="POST">
                <input type="text" name="text-encriptado" placeholder="Introduce el texto X2" value="<?php echo isset($_GET['text-encriptado']) ? htmlspecialchars($_GET['text-encriptado']) : ''; ?>" required>
                <input type="hidden" name="action" value="decrypt">
                <button type="submit">Desencriptar</button>
            </form>
            <br>
            <?php
            if (isset($_GET['decryptedX1'])) {
                $decryptedX1 = htmlspecialchars($_GET['decryptedX1']);
                echo "<b>X1 =></b> <p>$decryptedX1</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
