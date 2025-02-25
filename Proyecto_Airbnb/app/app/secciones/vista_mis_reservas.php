<?php include('../templates/cabecera_usuario.php'); 
session_start();
$correo = $_SESSION['correo'];
?>
<?php include('../secciones/mis_reservas.php'); ?>
    <style>
        * {
            font-family: Arial, sans-serif;
        }

        .recuadro_inicio {
            margin-top: 50px;
            margin-bottom: 150px;
            margin-left: 650px;
            justify-content: center;
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

    </style>
</head>
<body>
    <div class="recuadro_inicio">
        <div class="logo"><img src="../src/logo.jpeg"></div>

        <div class="titulo">MIS RESERVAS</div>

        <table class="table">
            <thead>
                <tr>
                    <th>Fecha de llegada</th>
                    <th>Fecha de salida</th>
                    <th>Código de propiedad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaReservas as $reserva){ ?>
                    <tr>
                        <td> <?php echo $reserva['fecha_inicio']; ?> </td>
                        <td> <?php echo $reserva['fecha_fin']; ?> </td>
                        <td> <?php echo $reserva['fk_cod_propiedad']; ?> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php include('../templates/pie.php'); ?>