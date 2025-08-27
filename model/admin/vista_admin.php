<?php
session_start();
require_once("../../coneccion/coneccion.php");
$db = new database;
$con = $db->conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería Juanes</title>
    <link rel="stylesheet" href="../../controller/css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <header class="navbar">
        <div class="logo">
            <i class="bi bi-tools"></i>
            <span>Ferretería Juanes</span>
        </div>
               
    </header>

    <main>
        <h1 class="titulo"> Opciones </h1>
        <div class="categorias">

            <a href="proveedor.php" class="categoria">
                <img src="../../controller/IMG/proveedores.png" alt="Proveedores">
                <p>Proveedores</p>

            <a href="productos.php" class="categoria">
                <img src="../../controller/IMG/productos.png" alt="Productos">
                <p>Productos</p>
            </a>

            <a href="compra.php" class="categoria">
                <img src="../../controller/IMG/carrito.jpg" alt="Productos">
                <p>Compar</p>
            </a>

        </div>
    </main>

    <footer>
    <div class="footer-container">
        <div class="footer-section">
            <h4>Ferretería Juanes</h4>
            <p>Tu aliado en materiales, herramientas y soluciones para el hogar y la industria.</p>
        </div>

        <div class="footer-section">
            <h4>Contacto</h4>
            <p>📞 +57 300 123 4567</p>
            <p>📧 contacto@ferreteriajuanes.com</p>
            <p>📍 cra 8 #11-22, ibague</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2025 Ferretería Juanes. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>