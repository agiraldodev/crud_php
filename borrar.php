<?php
include 'config.php';
include 'plantilla.php';

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id=$id";

if($conn->query($sql) === TRUE){
    header("Location: index.php");
}else {
    echo "Error al eliminar el producto: " . $sql . "<br/>" . $conn->error;
}

$conn->close();