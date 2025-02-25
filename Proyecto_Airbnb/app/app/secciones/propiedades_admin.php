<?php
    include_once("../configuraciones/bd.php");
    $conexionBD = bd::crearInstancia();
      
    session_start();
    $correo = isset($_SESSION['correo']) ? $_SESSION['correo'] : 'No hay usuario';
    $tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : 'No definido';
    


    $accion = isset($_POST['accion']) ? $_POST['accion'] : null;

    if ($accion) {
            switch ($accion) {
                case 'agregar':
                    echo "<script>alert('Correo: $correo, Tipo: $tipo');</script>";

                    if (isset($_POST['titulo'], $_POST['direccion'], $_POST['precio'], $_POST['habitaciones'])) {
                        $titulo = $_POST['titulo'];
                        $direccion = $_POST['direccion'];
                        $precio = $_POST['precio'];
                        $habitaciones = $_POST['habitaciones'];
    
                        // Query preparada
                        $query = $conexionBD->prepare("
                            INSERT INTO propiedades (titulo, direccion, precio, habitaciones, fk_correo, fk_tipo) 
                            VALUES (:titulo, :direccion, :precio, :habitaciones, :correo, :tipo)
                        ");
    
                        // Enlazar parámetros
                        $query->bindParam(':titulo', $titulo, PDO::PARAM_STR);
                        $query->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                        $query->bindParam(':precio', $precio, PDO::PARAM_INT);
                        $query->bindParam(':habitaciones', $habitaciones, PDO::PARAM_INT);
                        $query->bindParam(':correo', $correo, PDO::PARAM_STR);
                        $query->bindParam(':tipo', $tipo, PDO::PARAM_STR);

                        $query->execute();}
                        break;
                    
                   
                    case 'actualizar':
                        if (isset($_POST['cod_propiedad'], $_POST['titulo'], $_POST['direccion'], $_POST['precio'], $_POST['habitaciones'])) {
                            $cod_propiedad = $_POST['cod_propiedad'];
                            $titulo = $_POST['titulo'];
                            $direccion = $_POST['direccion'];
                            $precio = $_POST['precio'];
                            $habitaciones = $_POST['habitaciones'];

                            $query = $conexionBD->prepare("UPDATE propiedades SET 
                                                            titulo = :titulo, 
                                                            direccion = :direccion, 
                                                            precio = :precio, 
                                                            habitaciones = :habitaciones, 
                                                            fk_correo = :correo,
                                                            fk_tipo = :tipo
                                                          WHERE cod_propiedad = :cod_propiedad");
            
            
                            $query->bindParam(':titulo', $titulo, PDO::PARAM_STR);
                            $query->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                            $query->bindParam(':precio', $precio, PDO::PARAM_INT);
                            $query->bindParam(':habitaciones', $habitaciones, PDO::PARAM_INT);
                            $query->bindParam(':cod_propiedad', $cod_propiedad, PDO::PARAM_INT);
                            $query->bindParam(':correo', $correo, PDO::PARAM_STR); // no me dejaba actualizar sin correo y tipo
                            $query->bindParam(':tipo', $tipo, PDO::PARAM_STR);

                            $query->execute();
                        }
                        break;

                        case 'borrar':
                            if (isset($_POST['cod_propiedad_borrar'])) {
                                $cod_propiedad = $_POST['cod_propiedad_borrar'];
                                $query = $conexionBD->prepare("DELETE FROM propiedades WHERE cod_propiedad = :cod_propiedad");
                                $query->bindParam(':cod_propiedad', $cod_propiedad, PDO::PARAM_INT);
                                $query->execute();
                            }
                            break;
                    
            }};
    
    $query = $conexionBD->prepare("SELECT cod_propiedad, titulo,direccion,precio,habitaciones FROM propiedades WHERE fk_correo= :correo and fk_tipo= :tipo "); //datos quemados hay que recuperar
    $query->bindParam(':correo', $correo, PDO::PARAM_STR);
    $query->bindParam(':tipo', $tipo, PDO::PARAM_STR); 
    $query->execute();
    $lista_propiedades = $query->fetchAll();
    
    ?>

    