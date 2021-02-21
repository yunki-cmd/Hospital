<?php
session_start();
if (isset($_GET['user']) && isset($_GET['password'])) {
    $_SESSION["user"]= $_GET['user'];
    $_SESSION["password"]= $_GET['password'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="./js/inicio.js"defer></script>

</head>

<body>
    <header class="header">
        <h1 class="header__h1">Gestion Citas Hospital</h1>
    </header>
    <div class="container">
        <input type="button" id='btn' value="consultar">
    </div>
</body>

</html>