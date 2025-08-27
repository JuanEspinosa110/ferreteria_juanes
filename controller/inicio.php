<?php
session_start();
require_once("../coneccion/coneccion.php");

$db = new Database();

$con = $db->conectar();


if ($_POST["inicio"]) {
    $usuario = $_POST["usuario"];
    $clave = htmlentities(addslashes(($_POST["clave"])));

    $sql = $con -> prepare("SELECT * FROM usuario WHERE nombre = '$usuario'  AND contrasena = '$clave' ");
    $sql->execute();
    $_fila = $sql->fetch();

    if ($_fila) {

        $_SESSION['documento'] = $fila['documento'];
        $_SESSION['tipo'] = $_fila['id_tip_us'];

        if ($_SESSION['tipo'] == 1) {
            header("Location: ../model/admin/vista_admin.php");
        }

    }

    else {
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
    }

}

