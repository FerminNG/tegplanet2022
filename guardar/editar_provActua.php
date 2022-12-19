<?php

print_r($_POST);if(!isset($_POST['Id_Prove'])){
    header('Location: editar.php?mensaje=error');
}
include_once '../conexion/conexion2.php';


$Id_Prove=$conn->real_escape_string ($_POST['Id_Prove']);
$nombre=$conn->real_escape_string ($_POST['nombre']);
$dir=$conn->real_escape_string ($_POST['Direccion']);
$tel=$conn->real_escape_string ($_POST['Telefono']);
$correo=$conn->real_escape_string ($_POST['Email']);

$sql= "UPDATE proveedor SET nombre='$nombre', Direccion='$dir', Telefono='$tel', Email='$correo' WHERE Id_Prove=$Id_Prove";


$resultado=$conn->query($sql);


if($resultado==TRUE){
    header('Location: ../proveedores.php?mensaje=actualizado');
}else{
    echo "error";
}


?>