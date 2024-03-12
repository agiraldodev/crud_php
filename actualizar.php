<?php
include 'config.php';
include 'plantilla.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$sql = "UPDATE productos SET nombre='$nombre', precio='$precio' WHERE id=$id";

if($conn->query($sql) === TRUE){
    header("Location: index.php");
}else {
    echo "Error al actualizar el producto: " . $sql . "<br/>" . $conn->error;
}

$conn->close();