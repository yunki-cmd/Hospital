<?php


header('Content-Type: application/json charset=UTF-8');
$select_pacientes = 'select * from paciente';
$conexion = new mysqli('localhost', 'daw', '', 'hospital');

$keys = [];
foreach ($_POST as $key => $value) {
    $keys[$key]=$value;
}
$insert = '';
switch ($keys['modo']) {
    case 'insert-doctor':
        $insert = 'insert into doctor (nombre,fechaNacimiento,fechaIncorporacion) values
        ('.'"'.$keys['doctor'].'",'.'"'.$keys['fecha_nacimiento'].'",'.'"'.$keys["fecha_incorporacion"].'"'.')';
        break;
    case 'insert-paciente':
        $insert = 'insert into paciente (nombre,fechaNacimiento) values
        ('.'"'.$keys['paciente'].'",'.'"'.$keys['fecha_nacimiento'].'"'.')';
        break;
        
}


if($conexion->connect_error){
    echo json_encode($conexion->connect_error);
    die. 'error conexion'. $conexion->connect_error;
}else{
    if($conexion->query($insert) === true){
        echo json_encode('insertado');
        $conexion->close();
    }
}
?>