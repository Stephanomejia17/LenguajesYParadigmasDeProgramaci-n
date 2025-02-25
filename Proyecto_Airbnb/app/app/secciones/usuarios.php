<?php
//INSERT INTO `usuario` (`correo`, `contraseña`, `nombre`, `apellido`, `fecha_nacimiento`, `tipo (admin/cliente)`) VALUES ('stephano.mejia@outlook.es', '1234', 'Stephano', 'Mejia', '16/05/2003', 'admin');
session_start();

include_once '../configuraciones/bd.php';
$conexionBD=BD::crearInstancia();

$correo=isset($_POST['correo'])?$_POST['correo']:'';
$contraseña=isset($_POST['contraseña'])?$_POST['contraseña']:'';
$nombre=isset($_POST['nombre'])?$_POST['nombre']:'';
$apellido=isset($_POST['apellido'])?$_POST['apellido']:'';
$fecha_nacimiento=isset($_POST['fechanacimiento'])?$_POST['fechanacimiento']:'';
$tipo=isset($_POST['tipo'])?$_POST['tipo']:'';

$accion=isset($_POST['accion'])?$_POST['accion']:'';

if($accion=="continuar"){
    $sql="INSERT INTO usuarios(correo,contraseña,nombre,apellido,fecha_nacimiento,tipo) VALUES ('$correo','$contraseña','$nombre','$apellido','$fecha_nacimiento','$tipo')";
    $consulta=$conexionBD->prepare($sql);
    if($consulta->execute()){
        echo "<script>
            alert('Registro exitoso');
            window.location.href = 'vista_usuario_iniciado.php';
            </script>";
        exit();
    } else {
        echo "<script>alert('Error en el registro');</script>";
        exit();
    }

    
    echo "<script>alert('Registro exitoso');</script>";
}
else if($accion=="iniciar_sesion"){
    $consulta=$conexionBD->prepare("SELECT correo, contraseña, tipo FROM usuarios WHERE correo='$correo' AND contraseña='$contraseña' AND tipo='$tipo'");
    $consulta->execute();

    $data = $consulta->fetch();

    if($data){
        $_SESSION['correo'] = $data['correo'];
        $_SESSION['tipo'] = $data['tipo'];

        if ($tipo == 'usuario'){
            echo "<script>
                alert('Inicio de sesión exitoso');
                window.location.href = 'vista_usuario_iniciado.php';
                </script>";
            exit();
        } else if ($tipo == 'administrador') {
            echo "<script>
                alert('Inicio de sesión exitoso');
                window.location.href = 'vista_index_admin.php';
                </script>";
            exit();
        }
    } else {
        echo "<script>
        alert('Error en el inicio de sesión');
        window.location.href = 'vista_inicio_sesion.php';
        </script>";
        exit();
    }

}

?>