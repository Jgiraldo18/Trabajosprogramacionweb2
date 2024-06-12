<?php

$dataBase = "mysql:dbname=cocacola;host=127.0.0.1";
$user = "root";
$pass = "JuAn0616";

try {

    $dbh = new PDO($dataBase, $user, $pass);

}

catch (Exception $e) {

    die("Error Al Conectar Con La Base De Datos");

}

?>