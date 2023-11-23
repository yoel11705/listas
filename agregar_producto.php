<?php
session_start();
include 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
   
    $nombre = $_POST['nombre'];

    $stock = $_POST['stock'];
    $precio = $_POST['precio'];

    agregarProducto($nombre, $stock, $precio);

    header("Location: index.php");
    exit();
}
?>