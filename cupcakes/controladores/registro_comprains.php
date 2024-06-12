<?php
require "../config/conexion.php";

$cod= $_POST["cod"];
$fecha_sys= $_POST["fecha_sys"];
$precio= $_POST["precio"];




//paso 3 : armar el sql que hicimos en phpmyadmin

$sql_insertar = "INSERT INTO compraism(cod, fecha_sys, precio) VALUES (now(),'".$cod"', '".$fecha_sys"', '".$precio"');


if($dbh->query($sql_insertar)) 
{
    echo "info registrada correctamente";


}else
{
    echo"error guardado";
}


?>