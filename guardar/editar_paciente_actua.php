<?php

print_r($_POST);if(!isset($_POST['codigo'])){
    header('Location: editar_proveedor.php?mensaje=error');
}
include_once '../conexion/conexion.php';

$Id_Prove= $_POST['Id_Prove'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$sexo1=$_POST['sexo1'];
$direccion=$_POST['direccion'];
$tutor=$_POST['tutor'];
$telefono=$_POST['telefono'];


$sentencia= $bd->prepare("UPDATE pacientes SET  nombre=?, apellidos=?, edad=?, sexo=?, direccion=?, tutor=?, telefono=? WHERE codigo=?; ");
$resultado= $sentencia->execute([$codigo,$nombre,$apellidos,$edad,$sexo1,$direccion,$tutor,$telefono]);

if($resultado==TRUE){
    header('Location: ../index.php?mensaje=actualizado');
}else{
    echo "error";
}


?>