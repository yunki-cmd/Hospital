<?php
include './config.php';
$user = $_POST['user'];
$pass = $_POST['password'];

$conexion = new mysqli($server, $user, $pass,'hospital');

if ($conexion->connect_error) {
    header("Location: ../login.php?error=true&conexion=".$conexion->connect_error);
    $conexion->close();
} else {
    header("location: ../inicio.php?user=" . $user . "&password=" . $pass);
    /* $datos_usuario = new user();
    $datos_usuario->user =$user;
    $datos_usuario->password = $pass;
    echo (json_encode($datos_usuario)); */
    $conexion->close();
}

/* class user{
    public $user;
    public $password;
} */