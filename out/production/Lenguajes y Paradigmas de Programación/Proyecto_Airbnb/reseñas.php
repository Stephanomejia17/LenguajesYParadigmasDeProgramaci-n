<?php
    include_once("../configuraciones/bd.php");
    session_start();
    $correo = isset($_SESSION['correo']) ? $_SESSION['correo'] : '';
    $tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : '';
    $fk_cod_propiedad = isset($_GET['id']) ? $_GET['id'] : '';
    $fecha = date('Y-m-d');
    //echo $fecha;
    $conexionBD = bd::crearInstancia();

    $calificacion = isset($_POST['calificacion']) ? $_POST['calificacion'] : '';
    $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : '';

    $query = $conexionBD->prepare("INSERT INTO reseñas (calificacion , comentario, fecha,fk_correo, fk_tipo, fk_cod_propiedad) values (:calificacion, :comentario, :fecha,:correo, :tipo, :fk_cod_propiedad)");
    $query->bindParam(':calificacion', $calificacion, PDO::PARAM_INT);
    $query->bindParam(':comentario', $comentario, PDO::PARAM_STR);
    $query->bindParam(':fecha', $fecha);
    $query->bindParam(':correo', $correo, PDO::PARAM_STR);
    $query->bindParam(':tipo', $tipo, PDO::PARAM_STR);
    $query->bindParam(':fk_cod_propiedad', $fk_cod_propiedad, PDO::PARAM_INT);
    $query->execute();
    


    $query = $conexionBD->prepare("SELECT fk_correo, fecha,calificacion, comentario FROM reseñas WHERE fk_cod_propiedad = $fk_cod_propiedad");
    $query->execute();
    $lista_reviews = $query->fetchAll(PDO::FETCH_ASSOC);



    ?>