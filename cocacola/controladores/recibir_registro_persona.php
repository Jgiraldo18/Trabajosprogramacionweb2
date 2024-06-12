<script src="../js/sweetalert2@10.js"></script>
.

<?php

//paso 1: llamar la libreria de conexion a la BD 

require "../config/conexion.php";

//paso2: capturar variables

$venta = $_POST["venta"];
$variable = 230;
//paso 3: arma el sql que hicimos en phpmyadmin
if($variable >= 0 ){
    echo "<script>
    Swal.fire({
      title: 'ERROR',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
    // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
        window.location.href = '../index.html';
      }
    });
  </script>";Die("inventario insuficiente"); 
}
if($variable < $venta){
    echo "<script>
    Swal.fire({
      title: 'Error eliminando',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
    // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
        window.location.href = '../index.html';
      }
    });
  </script>";Die("inventario insuficiente"); 
}else{

$sql_insertar ="INSERT INTO ventas1(cantidad, fecha_sys) VALUES ('".$venta."', now())";

if ($dbh->query($sql_insertar)) 
{
    echo "<script>
    Swal.fire({
      title: 'COMPRA SATISFACTORIA',
      icon: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
        window.location.href = '../index.html';
      }
    });
  </script>";
}else{
    echo "<script>
            Swal.fire({
              title: 'Error eliminando',
              icon: 'error',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
            // Redirecciona a otra página o realiza cualquier otra acción después de eliminar
                window.location.href = '../index.html';
              }
            });
          </script>";
}
}
?> 