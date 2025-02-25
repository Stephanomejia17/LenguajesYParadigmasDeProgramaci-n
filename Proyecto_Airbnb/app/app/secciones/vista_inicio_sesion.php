
<?php include('../secciones/usuarios.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('../src/fondo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .recuadro_inicio {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        .logo img{
            padding: 8px;
            width: 120px;
            height: auto;
        }

        .titulo {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .formulario_inicio {
            width: 100%;
        }

        .caja_texto {
            margin-bottom: 15px;
            text-align: left;
        }

        .caja_texto label {
            font-size: 14px;
            color: #666;
        }

        .caja_texto input , .caja_texto select{
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        .boton_inicio {
            width: 100%;
            padding: 10px;
            color: #000;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            text-decoration: none;
        }

        .boton_inicio:hover {
            background-color: #6c4675;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="recuadro_inicio">
        <div class="logo"><img src="../src/logo.jpeg"></div>

        <div class="titulo">INICIA SESIÓN</div>

        <form class="formulario_inicio" method="POST" action="">
            <div class="caja_texto">
                <label>Correo Electrónico</label>
                <input type="text" id="correo" name="correo" placeholder="Introduce tu correo electrónico" required>
            </div>

            <div class="caja_texto">
                <label>Contraseña</label>
                <input type="password" id="contraseña" name="contraseña" placeholder="Introduce tu contraseña" required>
            </div>

            <div class="caja_texto">
                <label>Tipo</label>
                <select name="tipo" id="tipo" required>
                    <option value="" disabled selected>Seleccione un tipo</option>
                    <option value="usuario">Usuario</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>

            <button type="submit" class="boton_inicio" name="accion" value="iniciar_sesion">Continuar con e-mail</button>

        </form>

        <button type="button" class="boton_inicio" onclick="window.location.href='vista_registrar.php';">No tienes una cuenta? ¡Regístrate!</button>


    </div>
</body>
</html>
