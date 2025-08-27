<?php
require_once("../../coneccion/coneccion.php");
$db = new Database();
$con = $db->conectar();

// obtener lista de proveedores
$proveedores = $con->query("SELECT nit, proveedor FROM proveedor")->fetchAll(PDO::FETCH_ASSOC);

// obtener lista de productos
$productos = $con->query("SELECT id_producto, producto, stock FROM producto")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Simulación de Compra</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

  <div class="container">
    <h2 class="mb-4">Compra a Proveedores</h2>
    <form action="procesar_compra.php" method="POST" class="border p-4 rounded bg-light">

      <!-- Proveedor -->
      <div class="mb-3">
        <label class="form-label">Proveedor</label>
        <select name="proveedor" class="form-select" required>
          <option value="">Seleccione un proveedor</option>
          <?php foreach($proveedores as $p): ?>
            <option value="<?= $p['nit'] ?>"><?= $p['proveedor'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- Producto -->
      <div class="mb-3">
        <label class="form-label">Producto</label>
        <select name="producto" class="form-select" required>
          <option value="">Seleccione un producto</option>
          <?php foreach($productos as $prod): ?>
            <option value="<?= $prod['id_producto'] ?>">
              <?= $prod['producto'] ?> (Stock: <?= $prod['stock'] ?>)
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- Cantidad -->
      <div class="mb-3">
        <label class="form-label">Cantidad a Comprar</label>
        <input type="number" name="cantidad" class="form-control" min="1" required>
      </div>

      <button type="submit" class="btn btn-success">Comprar</button>
    </form>
  </div>

</body>
</html>
