<?php
require "../config/conexion.php";


$cod = $_POST["cod"];
$fecha = $_POST["fecha"];
$cod_cliente = $_POST["cod_cliente"];
$cod_cobrador = $_POST["cod_cobrador"];
$valor_pagado = $_POST["valor_pagado"];
$valor_restante = $_POST["valor_restante"];
$cuotas_a_pagar = $_POST["cuotas_a_pagar"];
$cod_prestamo = $_POST["cod_prestamo"];


$sql_insertar ="INSERT INTO pago(cod, fecha, cod_cliente, cod_cobrador, valor_pagado, valor_restante, cuotas_a_pagar, cod_prestamo, fecha_sys)
VALUES ('".$cod."', '".$fecha."', '".$cod_cliente."', '".$cod_cobrador."', '".$valor_pagado."','".$valor_restante."', '".$cuotas_a_pagar."', '".$cod_prestamo."', now())";

$sql_insertar ="INSERT INTO ventas1(cod, cantidad, fecha_sys) VALUES ('".$cod."','".$cantidad."', '".$fecha_sys."', now())";


if($dbh->query($sql_insertar)) 
{
    echo "info registrada correctamente";


}else
{
    echo"error guardado";
}


?>






if ($ventas>230)