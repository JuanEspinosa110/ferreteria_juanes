<?php
session_start();
require_once("../../coneccion/coneccion.php");
$db = new database;
$con = $db -> conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../../controller/css/estilos_admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  <!-- Navbar -->
  <header class="navbar_user">
    <div class="logo_user">Ferreteria Juanes</div>
    <nav class="nav-links_user">
      <a href="../../index.html">Inicio</a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
    </nav>
    <div class="nav-actions_user">
      <i class="bi bi-person-circle"></i>
    </div>
  </header>

  <!-- Main content -->
  <main class="container_user">
    <h1>Users</h1>

    <div class="actions-bar_user">
      <button class="btn-create_user" id="openModal_user">Crear nuevo usuario</button>
    </div>

    <!-- Users Table -->
    <table class="tabla-azul">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Documento</th>
            <th>User</th>
            <th>Rol</th>
            <th>Correo</th>
        </tr>

        <?php

        $sql = $con->prepare(query:"SELECT * FROM users INNER JOIN tipo_us ON users.id_tip_us = tipo_us.id_tip_us");
        $sql->execute();
        $resultado1 = $sql->fetchAll(mode: PDO::FETCH_ASSOC);
        foreach ($resultado1 as $resul) {
        

        ?>

    </thead>

        <tbody>
            <tr>
                <td>
                <label for=""><?php echo $resul['nombre'] ?></label>
                </td>

                <td>
                    <label for=""><?php echo $resul['doc_us'] ?></label>
                </td>

                <td>
                    <label for=""><?php echo $resul['usuario'] ?></label>
                </td>

                <td>
                <label for=""><?php echo $resul['tip_us'] ?></label>
                </td>

                <td>
                <label for=""><?php echo $resul['correo'] ?></label>
                </td>

                <td>
                  <a href="update.php?id=<?php echo $resul['doc_us']; ?>" 
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