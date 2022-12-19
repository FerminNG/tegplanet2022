<?php

$db_name="192.168.106.63";
$db_nombre="tegplanet";
$db_usuario="root";
$db_contra="";





try{
    $bd= new PDO('mysql:host=localhost; dbname='.$db_nombre,
    $db_usuario,$db_contra, array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"));
}catch (Exception $e){

    echo "PROBLEMA CON LA CONEXION: ".$e->getMessage();
}


?>