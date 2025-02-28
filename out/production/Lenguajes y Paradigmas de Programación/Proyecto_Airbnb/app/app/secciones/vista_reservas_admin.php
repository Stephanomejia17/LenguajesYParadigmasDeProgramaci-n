<?php include("../templates/sidebar.php"); ?>
<?php include("../secciones/reservas_admin.php"); ?>
  
<style>
    .main_content-reservas{
        margin-left: 250px;
        width: calc(100% - 250px);
        height: 100vh;
        background-color: whitesmoke;
        align-items: center;       
        align-items: center; /* Centra verticalmente */
        text-align: center; /* Asegura que el texto esté centrado */

    }
    h2 {
            color: rgba(44, 46, 54, 0.94);
            margin-bottom: 30px;
            padding-top: 30px;
        }
    table {
            width: 80%;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-left: 100px;
            
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background:  #4b0dc7;;
            color: white;
        }
</style>
<div class="main_content-reservas">
<h2>Lista de Reservas</h2>
        <table>
            <thead>
                <tr>  
                    <th>ID Reserva</th>
                    <th>ID Propiedad</th>
                    <th>Fecha de ingreso</th>
                    <th>Fecha de salida</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_reservas as $reserva) {?>
                <tr>
                    <td> <?php echo $reserva['id_reserva'];?></td>
                    <td><?php echo $reserva['fk_cod_propiedad'];?></td>
                    <td> <?php echo $reserva['fecha_inicio'];?></td>
                    <td><?php echo $reserva['fecha_fin'];?></td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </table>
    </div>

</div>


<?php    include("../templates/end.php");  ?>