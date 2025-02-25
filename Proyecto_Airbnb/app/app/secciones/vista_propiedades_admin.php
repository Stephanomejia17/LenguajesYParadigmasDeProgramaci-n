<?php
        include("../templates/sidebar.php");
        include("../secciones/propiedades_admin.php");
    ?>

    <style>
        * {
            font-family: Arial, sans-serif;
        }
        .main_container {
            margin-left: 250px;
            width: calc(100% - 250px);
            height: auto;
            display: flex;
            background-color: whitesmoke;
            background-size: cover;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .left-section {
            width: 40%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: p rgba(44, 46, 54, 0.94);
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin: 5px 0;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background:  rgba(64, 90, 240, 0.94);
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .right-section {
            width: 55%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
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
<body>
<div class="main_container">
<div class="container">
    <!-- Sección Izquierda -->
    <div class="left-section">
        
        <!-- Formulario Principal -->
        <div class="form-container">
            <h2>Mis Propiedades</h2>
            <form action=" " method="POST">
                <label for="titulo">Código de Propiedad</label>
                <input type="text" id="cod_propiedad" name="cod_propiedad">

                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo">

                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion">

                <label for="precio">Precio</label>
                <input type="text" id="precio" name="precio">

                <label for="habitaciones">Habitaciones</label>
                <input type="text" id="habitaciones" name="habitaciones">

                <button type="submit" name = "accion" value="agregar" >Agregar</button>
                <button type="submit" name="accion" value="actualizar">Actualizar</button>
            </form>
        </div>

        <!-- Formulario de Búsqueda/Borrar -->
        <div class="form-container">
            <h2>Borrar Propiedad</h2>
            <form action="" method="POST">
                <label for="buscar">Borrar por Código de Propiedad</label>
                <input type="text" id="cod_propiedad_borrar" name="cod_propiedad_borrar">
                <button type="submit" name="accion" style="background: red;" value="borrar">Borrar</button>
            </form>
        </div>

    </div>

    <!-- Sección Derecha - Tabla -->
    <div class="right-section">
        <h2>Lista de Propiedades</h2>
        <table>
            <thead>
                <tr>
                    <th>Cod</th>
                    <th>Título</th>
                    <th>Dirección</th>
                    <th>Precio</th>
                    <th>Habitaciones</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                <?php foreach($lista_propiedades as $propiedades) {?>
                    <tr>
                    <td><?php echo $propiedades['cod_propiedad'];?></td>
                    <td><?php echo $propiedades['titulo'];?></td>
                    <td><?php echo $propiedades['direccion'];?></td>
                    <td><?php echo $propiedades['precio'];?></td>
                    <td><?php echo $propiedades['habitaciones'];?></td>
                <?php } ?>
                </tr>
            </tbod>
        </table>

        
    </div>

</div>
</div>


      
  
  <?php    include("../templates/end.php");  ?>