<?php
include_once "funciones.php";
if (!isset($_POST["id_producto"])) {
    exit("No hay id_producto");
}
agregarProductoAlCarrito($_POST["id_producto"], $_POST["numero_cantidad"]);
header("Location: inicio.php");
