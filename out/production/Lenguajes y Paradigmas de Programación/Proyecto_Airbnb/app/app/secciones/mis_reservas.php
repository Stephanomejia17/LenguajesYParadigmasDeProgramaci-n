<?php
include_once '../configuraciones/bd.php';
$conexionBD=BD::crearInstancia();

$fk_correo = $_SESSION['correo'];

$consulta=$conexionBD->prepare("SELECT * FROM reservas WHERE fk_correo='$fk_correo'");
$consulta->execute();
$listaReservas=$consulta->fetchAll();

?>