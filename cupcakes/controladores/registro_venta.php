<?php
require "../config/conexion.php";

$cod= $_POST["cod"];
$fecha_sys= $_POST["fecha_sys"];
$cantidad= $_POST["cantidad"];
$psubtotal= $_POST["psubtotal"];
$iva= $_POST["iva"];
$ptotal= $_POST["ptotal"];



//paso 3 : armar el sql que hicimos en phpmyadmin

$sql_insertar = "INSERT INTO venta(cod, fecha_sys,cantidad, psubtotal, iva,ptotal) VALUES (now(), '".$cod."', '".$fecha_sys."', '".$cantidad."', '".$psubtotal."', '".$iva."','".$ptotal."')";



if($dbh->query($sql_insertar)) 
{
    echo "info registrada correctamente";


}else
{
    echo"error guardado";
}


?>