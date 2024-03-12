<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM productos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
    Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" />
    Precio: <input type="text" name="precio" value="<?php echo $row['precio']; ?>" />
    <input type="submit" value="Actualizar">
</form>