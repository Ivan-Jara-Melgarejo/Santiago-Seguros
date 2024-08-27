<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $tipo_seguro = $_POST['tipo_seguro'];

    $sql = "INSERT INTO clientes (nombre, apellido, telefono, correo, tipo_seguro)
            VALUES ('$nombre', '$apellido', '$telefono', '$correo', '$tipo_seguro')";

    if ($conn->query($sql) === TRUE) {
        header("Location: vista_Polizas.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Cliente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Crear Nuevo Cliente</h1>
        <form action="index.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required><br>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required><br>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required><br>
            <label for="tipo_seguro">Tipo de Seguro:</label>
            <input type="text" id="tipo_seguro" name="tipo_seguro" required><br>
            <button type="submit">Crear Cliente</button>
        </form>
        <a href="vista_Polizas.php">Volver a la lista de clientes</a>
    </div>
</body>
</html>
