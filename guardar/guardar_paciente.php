<?php


//print_r($_POST);
if(empty($_POST['nombre'])|| empty($_POST['stock'])|| empty($_POST['stock_min'])
|| empty($_POST['fecha_vencimiento'])){

 header('Location: guardar.php?mensaje=falta');
 exit();

}




include_once '../conexion/conexion.php';


$nombre=$_POST['nombre'];
$stock=$_POST['stock'];
$stock_min=$_POST['stock_min'];
$fecha=$_POST['fecha_vencimiento'];



$sentencia= $bd->prepare("INSERT INTO productos(nombre,stock,stock_min,fecha_vencimiento) values (?,?,?,?);");

$resultado= $sentencia->execute([$nombre,$stock,$stock_min,$fecha]);


if($resultado== true){
    header('Location: ../index.php?mensaje=registrado');
}else{
    header('Location: ../index.php?mensaje=Error');
    exit();   
}


?>