<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="../../controller/css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>

    <!-- HEADER -->
    <header class="header_admin">
        <div class="logo_admin">Ferreteria Juanes</div>
        <nav class="nav_admin">
            <a href="../../index.html">Inicio</a>
            <a href="#">Productos</a>
            <a href="#">Categorías</a>
        </nav>
        <div class="acciones_admin">
            <a href="#" class="icono_admin"><i class="bi bi-person-circle"></i></a>
            <a href="../../index.html" class="cerrar-sesion_admin"><i class="bi bi-box-arrow-right"></i> Cerrar sesión</a>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="contenedor-categorias_admin">
        <div class="categoria_admin">
            <a href="productos.html">
                <img src="../../controller/IMG/productos_admin.webp" alt="Productos">
                <p>Productos</p>
            </a>
        </div>
        <div class="categoria_admin">
            <a href="users.php">
                <img src="../../controller/IMG/usuarios_admin.png" alt="Usuarios">
                <p>Usuarios</p>
            </a>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="footer_admin">
        <p>&copy; 2025 Mi Ferretería. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
