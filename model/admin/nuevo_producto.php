<?php
require_once("../../coneccion/coneccion.php");
$db = new Database();
$con = $db->conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = $_POST['producto'];
    $precio = $_POST['precio_venta'];
    $stock = $_POST['stock'];
    $estado = $_POST['estado'];

    $query = $con->prepare("INSERT INTO producto (producto, precio_venta, stock, id_estado) VALUES (?, ?, ?, ?)");
    $query->execute([$producto, $precio, $stock, $estado]);

    echo "<script>alert('Producto agregado correctamente'); window.close();</script>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nuevo Producto</title>
</head>
<body>
  <h2>Agregar Producto</h2>
  <form method="POST">
    <label>Producto:</label><br>
    <input type="text" name="producto" required><br><br>

    <label>Precio de Venta:</label><br>
    <input type="number" name="precio_venta" step="0.01" required><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" required><br><br>

    <label>Estado (id_estado):</label><br>
    <input type="number" name="estado" required><br><br>

    <button type="submit">Guardar</button>
  </form>
</body>
</html>