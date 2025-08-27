<?php
session_start();
require_once("../../coneccion/coneccion.php");
$db = new database;
$con = $db->conectar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
    <link rel="stylesheet" href="../../controller/css/estilos_admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  <!-- Navbar -->
  <header class="navbar_user">
    <div class="logo_user">Ferretería Juanes</div>
    <nav class="nav-links_user">
      <a href="vista_admin.php">Inicio</a>
      <a href="productos.php">Productos</a>
    </nav>
    <div class="nav-actions_user">
      <i class="bi bi-person-circle"></i>
    </div>
  </header>

  <!-- Main content -->
  <main class="container_user">
    <h1>Proveedores</h1>

    <div class="actions-bar_user">
      <td>
  <a href="nuevo_proveedor.php" 
     onclick="window.open(this.href, '', 'width=700,height=500,toolbar=NO'); return false;">
    <button type="button" class="btn btn-success">NUEVO PROVEEDOR</button>
  </a>
</td>
</button>

    </div>

    <!-- Proveedores Table -->
    <table class="tabla-azul">
        <thead>
        <tr>
            <th>NIT</th>
            <th>Proveedor</th>
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <tbody>
        <?php
        // Traemos proveedores y unimos con estado (si tienes tabla estado)
        $sql = $con->prepare("SELECT p.nit, p.proveedor, p.telefono, e.estado 
                              FROM proveedor p 
                              INNER JOIN estado e ON p.id_estado = e.id_estado");
        $sql->execute();
        $resultado1 = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultado1 as $resul) {
        ?>
            <tr>
                <td><?php echo $resul['nit'] ?></td>
                <td><?php echo $resul['proveedor'] ?></td>
                <td><?php echo $resul['telefono'] ?></td>
                <td><?php echo $resul['estado'] ?></td>
                <td>
                  <a href="update_proveedor.php?id=<?php echo $resul['nit']; ?>" 
                    onclick="window.open(this.href, '', 'width=700,height=500,toolbar=NO'); return false;">
                    <button type="button" class="btn btn-danger">ACTUALIZAR/ELIMINAR</button>
                  </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
  </main>
</body>
</html>
