<?php
    include_once("../configuraciones/bd.php");
    session_start();
    $correo = isset($_SESSION['correo']) ? $_SESSION['correo'] : 'No hay usuario';
    $tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : 'No definido';
    $conexionBD = bd::crearInstancia();

    $query = $conexionBD->prepare("SELECT r.id_reserva, r.fk_cod_propiedad, r.fecha_inicio, r.fecha_fin 
                                    FROM reservas r 
                                    JOIN propiedades p ON r.fk_cod_propiedad = p.cod_propiedad
                                    WHERE p.fk_correo = :correo and p.fk_tipo= :tipo"); //datos quemados hay que recuperar
    $query->bindParam(':correo', $correo, PDO::PARAM_STR);
    $query->bindParam(':tipo', $tipo, PDO::PARAM_STR); 
    $query->execute();
    $lista_reservas = $query->fetchAll();
    
    ?>