<?php

$host="192.168.43.81";
$user = "ernes";
$pass = "Hydra.juan00";
$db_name = "tegplanet";


$conn = mysqli_connect($host, $user, $pass, $db_name);

if(!$conn){

    echo "ERROR DE CONEXION";

}else{

    echo "CONEXION EXTABLECIDA";
}


?>