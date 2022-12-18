<?php


//print_r($_POST);
if(empty($_POST['nombre'])|| empty($_POST['Direccion'])|| empty($_POST['Telefono'])
|| empty($_POST['Email'])){

 header('Location: guardar_proveedor?mensaje=falta');
 exit();

 

}else{
    echo "<script>alert('no hay datos');</script>";
}




include_once '../conexion/conexion.php';


$nombre=$_POST['Nombre'];
$direccion=$_POST['Direccion'];
$tel=$_POST['Telefono23'];
$correo=$_POST['Email'];



$sentencia= $bd->prepare("INSERT INTO proveedor(Nombre,Direccion,Telefono,Email) values (?,?,?,?);");
print_r($sentencia);
$resultado= $sentencia->execute([$nombre,$direccion,$tel,$correo]);


if($resultado== true){
    header('Location: ../proveedores.php?mensaje=registrado');
}else{
    header('Location: ../proveedores.php?mensaje=Error');
    exit();   
}


?>