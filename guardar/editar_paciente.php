<?php

print_r($_POST);if(!isset($_POST['Id_Product'])){
    header('Location: editar.php?mensaje=error');
}
include_once '../conexion/conexion2.php';

$id_Product=$conn->real_escape_string ($_POST['Id_Product']);
$nombre=$conn->real_escape_string ($_POST['nombre']);
$stock=$conn->real_escape_string ($_POST['stock']);
$stock_min=$conn->real_escape_string ($_POST['stock_min']);
$fecha=$conn->real_escape_string ($_POST['fecha_vencimiento']);

$sql= "UPDATE productos SET nombre='$nombre', stock='$stock', stock_min='$stock_min', fecha_vencimiento='$fecha' WHERE id=$id_Product";


$resultado=$conn->query($sql);


if($resultado==TRUE){
    header('Location: ../index.php?mensaje=actualizado');
}else{
    echo "error";
}


?>