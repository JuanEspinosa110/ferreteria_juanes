<?php
include("../../coneccion/coneccion.php");
$db = new Database();
$con = $db->conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nit = $_POST['nit'];
    $proveedor = $_POST['proveedor'];
    $telefono = $_POST['telefono'];
    $id_estado = $_POST['id_estado'];

    if (isset($_POST['actualizar'])) {
        
        $sql = "UPDATE proveedor SET proveedor='$proveedor', telefono='$telefono', id_estado= '$id_estado' WHERE nit='$nit'";
        $con->exec($sql);
        echo "Proveedor actualizado correctamente";
    }

    if (isset($_POST['eliminar'])) {
        
        $sql = "DELETE FROM proveedor WHERE nit='$nit'";
        $con->exec($sql);
        echo "Proveedor eliminado correctamente";
    }
}
?>


<form method="POST">
    <label>NIT:</label>
    <input type="text" name="nit" required><br>

    <label>Nombre:</label>
    <input type="text" name="proveedor"><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono"><br>

    <label>Id_estado:</label>
    <input type="text" name="id_estado"><br><br>

    <button type="submit" name="actualizar">Actualizar</button>
    <button type="submit" name="eliminar">Eliminar</button>
</form>
