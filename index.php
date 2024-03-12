<?php
include 'config.php';

// Consultar todos los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>

<table>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>

    <?php
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["precio"] . "</td><td><a href='editar.php?id=" . $row["id"] . "'>Editar</a> | <a href='borrar.php?id=" .$row["id"] . "'>Borrar</a></td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'> No se encontraron productos </td></tr>";
    }

    ?>
</table>
<a href="crear.php">Agregar producto</a>