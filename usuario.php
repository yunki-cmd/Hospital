<?php
include './config.php';
$user = $_POST['user'];
$pass = $_POST['password'];

echo $user, $pass;

$conexion = new mysqli($server, $user, $pass);

if ($conexion->connect_error) {
    header("Location: login.php?error=true");
} else {
    header("location:inicio.html?user=" . $user . "?password=" . $pass);
}