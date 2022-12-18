<?php

if(!isset($_GET['Id_Produc'])){
    header('Location: ../index.php?mensaje');
    exit();
}

include_once '../conexion/conexion.php';

$Id_Produc= $_GET['Id_Produc'];

$sentencia= $bd->prepare("DELETE FROM productos WHERE Id_Produc= ?;");
$resultado=$sentencia->execute([$Id_Produc]);


if($resultado==TRUE){
    header('Location: ../index.php?mensaje=eliminado');
}else{
    header('Location: ../index.php?Error');
}





?>