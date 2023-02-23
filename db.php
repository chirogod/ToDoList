<?php
/* CONECTAMOS A LA BASE DE DATOS CON UN TRY CATCH */

$server = "localhost";
$username = "root";
$password = "agucapo";
$db = "to_do_list";

try {
    $conn = new PDO("mysql:host=$server;dbname=$db",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed" . $e ->getMessage();
}




?>