<?php

include_once '../configuraciones/bd.php';
$conexionBD=BD::crearInstancia();

$fecha_inicio=isset($_POST['fecha_inicio'])?$_POST['fecha_inicio']:'';
$fecha_fin=isset($_POST['fecha_fin'])?$_POST['fecha_fin']:'';
$fk_cod_propiedad=isset($_POST['fk_cod_propiedad'])?$_POST['fk_cod_propiedad']:'';
$fk_correo=isset($_POST['fk_correo'])?$_POST['fk_correo']:'';
$fk_tipo=isset($_POST['fk_tipo'])?$_POST['fk_tipo']:'';

$sql_bloquear="SELECT COUNT(*) as total FROM reservas 
                WHERE fk_cod_propiedad = '$fk_cod_propiedad' 
                AND NOT (
                        fecha_fin='$fecha_inicio' OR 
                        fecha_inicio='$fecha_fin'
                )
                AND (
                        (fecha_inicio BETWEEN '$fecha_inicio' AND '$fecha_fin') OR
                        (fecha_fin BETWEEN '$fecha_inicio' AND '$fecha_fin') OR
                        ('$fecha_inicio' BETWEEN fecha_inicio AND fecha_fin) OR
                        ('$fecha_fin' BETWEEN fecha_inicio AND fecha_fin)
                      )";
$consulta_bloquear=$conexionBD->prepare($sql_bloquear);
$consulta_bloquear->execute();
$consulta_bloquear_return=$consulta_bloquear->fetchColumn();

if ($consulta_bloquear_return>0) {
    echo "<script>
            alert('Las fechas elegidas no estan disponibles, por favor elija otra.');
            window.location.href = '../inicio.php';
          </script>";
    exit();
}

$sql="INSERT INTO reservas(fecha_inicio,fecha_fin,fk_cod_propiedad,fk_correo,fk_tipo) VALUES ('$fecha_inicio','$fecha_fin','$fk_cod_propiedad','$fk_correo','$fk_tipo')";
$consulta=$conexionBD->prepare($sql);
    if($consulta->execute()){
        echo "<script>
            alert('Reserva exitosa');
            window.location.href = '../inicio.php';
            </script>";
        exit();
    } else {
        echo "<script>alert('Error al reservar');</script>";
        exit();
    }

?>