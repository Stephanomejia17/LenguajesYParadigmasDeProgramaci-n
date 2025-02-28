<?php include('../templates/cabecera_usuario.php');
session_start();
$correo = $_SESSION['correo'];
$tipo = $_SESSION['tipo'];
$id = isset($_GET['id'])?$_GET['id'] : '';
?>
<style>
        .recuadro_inicio {
            margin-top: 25px;
            margin-bottom: 50px;
            margin-left: 680px;
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

        <div class="titulo">Reserva</div>

        <form class="formulario_inicio" method="POST" action="alojamientos.php">
            <input type="hidden" id="fk_cod_propiedad" name="fk_cod_propiedad" value="<?php echo htmlspecialchars($id); ?>">
            <input type="hidden" id="fk_correo" name="fk_correo" value="<?php echo htmlspecialchars($correo); ?>">
            <input type="hidden" id="fk_tipo" name="fk_tipo" value="<?php echo htmlspecialchars($tipo); ?>">

            <div class="caja_texto">
                <label>Fecha de llegada</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" required>
            </div>

            <div class="caja_texto">
                <label>Fecha de salida</label>
                <input type="date" id="fecha_fin" name="fecha_fin" required>
            </div>

            <div class="caja_texto">
                <label>Número de personas</label>
                <input type="number" id="npersonas" name="npersonas" placeholder="Introduce el número de personas" required>
            </div>

            <button type="submit" class="boton_inicio">Reservar</button>

        </form>
    </div>
</body>
</html>

<?php include('../templates/pie.php'); ?>