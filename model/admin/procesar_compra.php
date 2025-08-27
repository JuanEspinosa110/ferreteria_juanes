<?php
require_once("../../coneccion/coneccion.php");
$db = new Database();
$con = $db->conectar();

$id_producto = $_POST['producto']; 
$cantidad = $_POST['cantidad']; 

$sql = "UPDATE producto 
        SET stock = stock + $cantidad 
        WHERE id_producto = $id_producto";

if ($con->query($sql)) {
    echo "<script>alert('Compra realizada con éxito. Stock actualizado.'); 
    </script>";
} else {
    echo "<script>alert('Error al realizar la compra'); 
    window.location.href='comprar.php';</script>";
}
?>

