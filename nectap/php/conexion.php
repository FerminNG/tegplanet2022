<?php

$host="localhost";
$user = "root";
$pass = "";
$db_name = "tegplanet";


$conn = mysqli_connect($host, $user, $pass, $db_name);

if(!$conn){

    echo "ERROR DE CONEXION";

}else{

    echo "CONEXION EXTABLECIDA";
}


?>