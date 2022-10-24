<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Início</title>
</head>
<body>
    <?php
    if (($_POST["email"] == "") || ($_POST["senha"] == "")) {
        echo "<h1>Email ou senha inválidos</h1>";  
    } else {
    echo "<h1>Bem Vindo</h1>";
    }
    ?>
</body>
</html>