<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gestion de Inventario</title>

</head>
<body>

    <h1>Inventario</h1>



    <?php
    include 'funciones.php';


    $productos = obtenerProductos();

    
    if (!empty($productos)) {
        echo "<ul>";
        foreach ($productos as $producto) {
            echo "<li>{$producto['nombre']} - Stock: {$producto['stock']} - Precio: {$producto['precio']}</li>";
        }
        echo "</ul>";
        
    } else {
        echo "<p>No hay productos en el inventario :/.</p>";
    }
    ?>

    <h2>Agregar Nuevo Producto.. :</h2>
    <form action="agregar_producto.php" method="post">

        <label for="nombre">Nombre del Producto:</label>
        <input type="text" name="nombre" required>

        <label for="stock">Cantidad:</label>
        <input type="number" name="stock" required>

        <label for="precio">Precio por Unidad:</label>
        <input type="number" step="0.01" name="precio" required>

        <button type="submit">Agregaar</button>
    </form>
</body>
</html>