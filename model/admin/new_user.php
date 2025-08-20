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
    <title>Document</title>
</head>
<body>
    <form class="update-box" action="" method="POST">
            <h2>NUEVO USUARIO</h2>

            <label for="usuario">documento</label>
            <input type="int" id="doc_us" name="doc_us" placeholder="Ingrese su docuemnto" required>

            <label for="usuario">nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>

            <label for="usuario">correo</label>
            <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required>

            <label for="usuario">usuario</label>
            <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>

            <label for="clave">Clave</label>
            <input type="password" id="clave" name="clave" placeholder="ingrese su clave" required>

            <p class="forgot-password">Forgot your password?</p>

            <input type="submit" name="crear" id="crear" value="Validar" classs="btn-login">

            <p class="signup-link">New to ToolMart? <a href="#">Sign up</a></p>
        </form>
    
</body>
</html>