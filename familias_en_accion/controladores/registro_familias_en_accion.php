<?php
require "../config/conexion.php";

$Documento= $_POST["Documento"];
$NombreCompleto = $_POST["NombreCompleto"];
$Estrato = $_POST["Estrato"];
$Celular = $_POST["Celular"];
$Sexo = $_POST["Sexo"];


//paso 3 : armar el sql que hicimos en phpmyadmin

$sql_insertar ="INSERT INTO 
familias(Documento, NombreCompleto, Estrato, Celular, Sexo, fecha_sys) 
VALUES ('".$Documento."','".$NombreCompleto."','".$Estrato."','".$Celular."','".$Sexo."', now())";
 if($Estrato<=2)
{die("No puede registrase si pertenece a un estrato superior a 2")}

if($dbh->query($sql_insertar)) 
{
    echo "FELICITACIONES SE A REGISTRADO CORRECTAMENTE";


}else
{
    echo"OJO ERROR REGISTRADO";
}


?>