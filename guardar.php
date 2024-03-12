<?php
include 'config.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

// Insertar el producto en la tabla Productos
$sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')";

if($conn->query($sql) === TRUE) {
    header("Location: index.php");
}else {
    echo "Error: " . $sql . "<br/>" . $conn->error;
}

$conn->close();