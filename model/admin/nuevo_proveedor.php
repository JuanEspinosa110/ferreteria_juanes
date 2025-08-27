<?php
require_once("../../coneccion/coneccion.php");
$db = new Database();
$con = $db->conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nit = $_POST['nit'];
    $proveedor = $_POST['proveedor'];
    $telefono = $_POST['telefono'];
    $estado = $_POST['estado'];

    $query = $con->prepare("INSERT INTO proveedor (nit, proveedor, telefono, id_estado) VALUES (?, ?, ?, ?)");
    $query->execute([$nit, $proveedor, $telefono, $estado]);

    echo "<script>alert('Proveedor agregado correctamente'); window.close();</script>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nuevo Proveedor</title>
</head>
<body>
  <h2>Agregar Proveedor</h2>
  <form method="POST">
    <label>NIT:</label><br>
    <input type="text" name="nit" required><br><br>

    <label>Proveedor:</label><br>
    <input type="text" name="proveedor" required><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono" required><br><br>

    <label>Estado:</label><br>
    <input type="text" name="estado" required><br><br>

    <button type="submit">Guardar</button>
  </form>
</body>
</html>
