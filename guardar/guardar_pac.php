<?php








include_once '../conexion/conexion.php';

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$peso=$_POST['peso'];
$temperatura=$_POST['temperatura'];
$presion=$_POST['presion_arterial'];
$motivo=$_POST['motivo'];
$abono=$_POST['abono'];


$sentencia= $bd->prepare("INSERT INTO consultas(codigo,nombre,apellidos,edad,peso,temperatura,presion_arterial,motivo,abono) values (?,?,?,?,?,?,?,?,?);");

$resultado= $sentencia->execute([$codigo,$nombre,$apellidos,$edad,$peso,$temperatura,$presion,$motivo,$abono]);


if($resultado== true){
    header('Location: ../consultas.php?mensaje=registrado');
}else{

    echo "eroor de consulta";
   // header('Location: ../consultas.php?mensaje=Error');
    exit();   
}


?>