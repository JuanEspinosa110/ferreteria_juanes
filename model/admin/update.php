<?php
session_start();
require_once("../../coneccion/coneccion.php");
$db = new database;
$con = $db -> conectar();
?>