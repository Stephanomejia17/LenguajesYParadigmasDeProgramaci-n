<?php include('../templates/cabecera_usuario.php'); 
include('../secciones/new_alojamientos.php');?>
    
    <style>
        * {
            font-family: Arial, sans-serif;
        }
        .filtro {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 15px;
            background: #f7f7f7;
            border: 1px solid #ddd;
        }

        .filtro input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 20px;
        }

        .filtro button img {
            width: 30px;
            height: auto;
            border-radius: 50px;
        }

        .container {
            max-width: 600px;
            margin-top: 25px;
            margin-bottom: 25px;  
            background: white;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .property {
            display: flex;
            flex-direction: column; /* Hace que los elementos se acomoden en columna */
            gap: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid #ddd;
            margin-bottom: 16px;
        }
        label {
            font-size: 14px;
            display: block;
        }
        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .botones {
            display: flex;
            gap: 10px;  /* Espacio entre botones */
            justify-content: center; /* Alinea los botones al centro */
        }

        button {
            background-color:  #4b0dc7;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color:rgb(33, 2, 95);
        }
    
    </style>


    <div class="filtro">
        <input type="text" placeholder="¿A dónde vas?">
        <input type="date">
        <input type="date">
        <input type="number" placeholder="¿Cuántos?">
        <button><img src="../src/busca.jpg"></button>
    </div>
    <?php foreach($lista_propiedades as $propiedad){ ?>
    <div class="container">

        <div class="property">
            
                <h2><?php echo $propiedad['titulo'];?></h2>
                <p>Dirección:<?php echo $propiedad['direccion'];?></p>
                <p>Precio de noche por persona:<?php echo $propiedad['precio'];?></p>
                <p>Habitaciones:<?php echo $propiedad['habitaciones'];?></p>
                </div class="botones">
                <button onclick="window.location.href='vista_reseñas.php';" >Reseñas</button>
                <button onclick="window.location.href='vista_alojamientos.php';">Reservar</button>
                </div>
        </div>
        
    </div>
    <?php } ?>


<?php include('../templates/pie.php'); ?>
