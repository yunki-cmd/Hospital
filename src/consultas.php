<?php

$datosRecibidos = file_get_contents('php://input');

header('Content-Type: application/json charset=UTF-8');
$select_pacientes = 'select * from paciente';
$conexion = new mysqli('localhost', 'hospital', 'hospital', 'hospital');
$datosRecibidos = str_replace('"', '', $datosRecibidos);
switch ($datosRecibidos) {
    case 'todos':
        $select = $select_pacientes;
        break;
    case 'Marcas':
        $select = $select_marcas;
        break;
    case 'Tipos':
        $select = $select_tipos_coche;
        break;
    case 'Modelos':
        $select = $select_modelos_coche;
        break;
    case 'Color':
        $select = $select_color_coches;
        break;
    default:
        $select = 'show tables';
        break;
}

if($conexion->connect_error){
    die. 'error conexion'. $conexion->connect_error;
}else{
    if($query_result = $conexion->query($select)){
        $resultados =[];
        while($resultado = $query_result->fetch_assoc()){
            array_push($resultados,$resultado);
        }
        echo json_encode($resultados);
        $query_result->close();
        $conexion->close();
    }
}





?>