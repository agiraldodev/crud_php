<?php
include 'config.php';
include 'plantilla.php';

$id = $_GET['id'];
$sql = "SELECT * FROM productos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <form action="actualizar.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                Nombre: <input class="form-control" type="text" name="nombre" value="<?php echo $row['nombre']; ?>" />
                Precio: <input class="form-control" type="text" name="precio" value="<?php echo $row['precio']; ?>" />
                <input class="btn btn-primary" type="submit" value="Actualizar">
            </form>
        </div>
    </div>
</div>