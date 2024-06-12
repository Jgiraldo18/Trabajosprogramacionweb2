<?php
require "../config/conexion.php";

$cod= $_POST["cod"];
$fecha_sys= $_POST["fecha_sys"];
$precio= $_POST["precio"];


    $sql_eliminar = "DELETE FROM ventsoat WHERE cod='".$cod."' ";
     
    if($dbh->query($sql_eliminar)) {
        echo "<script>
            Swal.fire({
              title: 'DATOS ELIMINADOS CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/cupcakes/vender';
              }
            });
          </script>";
    }else{
        echo "<script>
            Swal.fire({
              title: 'ERROR AL ELIMINAR EL REGISTRO',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'error'
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = 'http://localhost/cupcakes/vender';
              }
            });
          </script>";
}
?>

