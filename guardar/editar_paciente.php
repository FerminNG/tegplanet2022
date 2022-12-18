<?php

print_r($_POST);if(!isset($_POST['codigo'])){
    header('Location: edital.php?mensaje=error');
}
include_once '../conexion/conexion.php';

$id_Product= $_POST['id_Product'];
$nombre=$_POST['nombre'];
$stock=$_POST['stock'];
$stock_min=$_POST['stock_min'];
$fecha=$_POST['fecha_vencimiento'];



$sentencia= $bd->prepare("UPDATE productos SET  nombre=?, stock=?, stock_min=?, fecha_vencimiento=? WHERE id_Product=?; ");
$resultado= $sentencia->execute([$codigo,$nombre,$stock,$stock_min,$fecha]);

if($resultado==TRUE){
    header('Location: ../index.php?mensaje=actualizado');
}else{
    echo "error";
}


?>