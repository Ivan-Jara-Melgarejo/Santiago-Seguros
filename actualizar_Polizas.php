<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $tipo_seguro = $_POST['tipo_seguro'];

    $sql = "UPDATE clientes SET nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo', tipo_seguro='$tipo_seguro' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: vista_Polizas.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

$id = $_GET['id'];
$sql = "SELECT * FROM clientes WHERE id=$id";
$result = $conn->query($sql);
$cliente = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Cliente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Actualizar Cliente</h1>
        <form action="actualizar_Polizas.php" method="post">
            <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $cliente['nombre']; ?>" required><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="<?php echo $cliente['apellido']; ?>" required><br>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo $cliente['telefono']; ?>" required><br>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" value="<?php echo $cliente['correo']; ?>" required><br>
            <label for="tipo_seguro">Tipo de Seguro:</label>
            <input type="text" id="tipo_seguro" name="tipo_seguro" value="<?php echo $cliente['tipo_seguro']; ?>" required><br>
            <button type="submit">Actualizar Cliente</button>
        </form>
        <a href="read.php">Volver a la lista de clientes</a>
    </div>
</body>
</html>
