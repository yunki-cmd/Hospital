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
    <script src="./js/inicio.js"defer type="module"></script>
    <link rel="stylesheet" href="./css/inicio.css">

</head>

<body>
    <header class="header">
        <h1 class="header__h1">Gestion Hospital</h1>
    </header>
    <article class="container">
        <header class="constainer__header">
            <nav class="container__nav">
                <ul class="container__header_ul" id='consulta'>
                        <ul id="insertar" class="container__header_ul--insertar">Insertar
                            <li value="Doctor">Doctor</li>
                            <li value="Paciente">Paciente</li>
                        </ul>
                        <ul id="citas" class="container__header_ul--citas">Modificar Citas
                            <li value="consultarCitaDoctor">consultar cita doctor</li>
                            <li value="consultarCitaPaciente">consultar cita paciente</li>
                            <li value="consultarCitaFecha">consultar cita fecha</li>
                            <li>insertar cita</li>
                            <li>modificiar cita</li>
                        </ul>
                </ul>
            </nav>
        </header>
        <div id="formulario"></div>
    </article>
</body>

</html>