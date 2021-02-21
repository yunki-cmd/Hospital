<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js" defer></script>
    <script src="js/login.js" defer></script>
</head>

<body>
    <div class="page">
        <div class="container">
            <div class="left">
                <div class="login">Login</div>
                <div class="eula">Ingrese un nombre y un password para ingresar</div>
            </div>
            <div class="right">
                <svg viewBox="0 0 320 300">
                    <defs>
                        <linearGradient inkscape:collect="always" id="linearGradient" x1="13" y1="193.49992" x2="307"
                            y2="193.49992" gradientUnits="userSpaceOnUse">
                            <stop style="stop-color:#ff00ff;" offset="0" id="stop876" />
                            <stop style="stop-color:#ff0000;" offset="1" id="stop878" />
                        </linearGradient>
                    </defs>
                    <path
                        d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
                </svg>
                <form action="./src/usuario.php" class="form" method="POST" id="form">
                    <label for="user">Nombre</label>
                    <input type="user" name="user" id="user">
                    <label for="password">Contraseña</label>
                    <input type="password" name='password' id="password" autocomplete="TRUE">
                    <input type="submit" id="submit" value="Enviar">
                </form>
            </div>
        </div>
        <?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    $conexion = $_GET['conexion'];
    if ($error) {
        echo '<div class="error">
                    <span>Usuario o password Incorrectos</span>
                    <span>Introduzca de nuevo los Campos</span>';
                    echo $conexion,
                '</div>';
    }
}
?>
    </div>
</body>

</html>