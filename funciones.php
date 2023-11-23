<?php
function obtenerProductos() {
 
    if (isset($_SESSION['productos'])) {
        return $_SESSION['productos'];
    } else {
     

        $_SESSION['productos'] = array();
        return $_SESSION['productos'];
    }
}


function agregarProducto($nombre, $stock, $precio) {
    $producto = array(
        'nombre' => $nombre,
        'stock' => $stock,
        'precio' => $precio
    );

    $_SESSION['productos'][] = $producto;
}
?>