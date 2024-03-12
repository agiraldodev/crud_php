<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud_php";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida a la base de datos: " . $conn->connect_error);
}