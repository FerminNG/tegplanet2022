
<?php

$host= "localhost";
$user = "root";
$password="";
$dbname="tegplanet";

$conn=mysqli_connect($host,$user,$password,$dbname);

if(mysqli_connect_errno()){
    echo "fallo al conectar con la BASE DE DATOS";

    exit();
}

mysqli_set_charset($conn, "utf8");




?>