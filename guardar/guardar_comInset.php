<?php


//print_r($_POST);
/*if(empty($_POST['nombre'])|| empty($_POST['stock'])|| empty($_POST['stock_min'])
|| empty($_POST['fecha_vencimiento'])){

 header('Location: index.php?mensaje=falta');
 exit();

} */

include_once '../conexion/conexion.php';


$cantidad=$_POST['Cantidad'];
$Precio_Unitario=$_POST['Precio_Unitario'];
$Precio_Total=$_POST['Precio_Total'];
$Fecha_Compra=$_POST['Fecha_Compra'];
$Producto=$_POST['Producto'];
$Proveedor=$_POST['Proveedor'];




$sentencia= $bd->prepare("INSERT INTO compras(Cantidad,Precio_Unitario,Precio_Total,Fecha_Compra,Producto,Proveedor) values (?,?,?,?,?,?");

$resultado= $sentencia->execute([$cantidad,$Precio_Unitario,$Precio_Total,$Fecha_Compra,$Producto,$Proveedor]);


if($resultado== true){
    header('Location: ../compras.php?mensaje=registrado');
}else{
    header('Location: ../compras.php?mensaje=Error');
    exit();   
}


?>