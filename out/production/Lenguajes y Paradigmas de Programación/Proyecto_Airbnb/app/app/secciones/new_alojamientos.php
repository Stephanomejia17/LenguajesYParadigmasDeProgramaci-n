<?php
include_once '../configuraciones/bd.php';
//session_start();
$conexionBD = BD::crearInstancia();

$query = $conexionBD->prepare("SELECT titulo, direccion, precio, habitaciones FROM propiedades"); 
$query->execute();
$lista_propiedades = $query->fetchAll(PDO::FETCH_ASSOC); // <-- Aquí está la corrección

// Verifica que los datos se obtengan correctamente
//echo "<pre>";//print_r($lista_propiedades);
//echo "</pre>";

?>