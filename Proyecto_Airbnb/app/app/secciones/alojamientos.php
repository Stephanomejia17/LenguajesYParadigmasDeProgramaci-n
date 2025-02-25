<?php

include_once '../configuraciones/bd.php';
$conexionBD=BD::crearInstancia();

$fecha_inicio=isset($_POST['fecha_inicio'])?$_POST['fecha_inicio']:'';
$fecha_fin=isset($_POST['fecha_fin'])?$_POST['fecha_fin']:'';
$fk_cod_propiedad=isset($_POST['fk_cod_propiedad'])?$_POST['fk_cod_propiedad']:'';
$fk_correo=isset($_POST['fk_correo'])?$_POST['fk_correo']:'';
$fk_tipo=isset($_POST['fk_tipo'])?$_POST['fk_tipo']:'';

$sql="INSERT INTO reservas(fecha_inicio,fecha_fin,fk_cod_propiedad,fk_correo,fk_tipo) VALUES ('$fecha_inicio','$fecha_fin','$fk_cod_propiedad','$fk_correo','$fk_tipo')";
$consulta=$conexionBD->prepare($sql);
    if($consulta->execute()){
        echo "<script>
            alert('Reserva exitosa');
            window.location.href = 'vista_usuario.php';
            </script>";
        exit();
    } else {
        echo "<script>alert('Error al reservar');</script>";
        exit();
    }

?>