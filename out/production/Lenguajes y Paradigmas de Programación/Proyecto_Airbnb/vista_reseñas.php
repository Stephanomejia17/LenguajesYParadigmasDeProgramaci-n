<?php include('../templates/cabecera_usuario.php'); 
session_start();
$correo = $_SESSION['correo'];?>
<?php include('../secciones/reseñas.php'); ?>

    
<style>        
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .left_section {
            width: 40%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
           
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
        button:hover {
            background:  rgba(64, 90, 240, 0.74);
        }

        .right_section {
            width: 55%;
        }

        table {
            width: 100%;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .logo img{
            padding: 8px;
            width: 120px;
            height: auto;
        }

        .container_table {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .logo img{
            padding: 8px;
            width: 120px;
            height: auto;
        }

    </style>
<body>
<div class="main_container">
<div class="container">
    
    <div class="left_section">      
        <div class="form-container">
          
            <form action=" " method="POST">
            <h2>Deja tu reseña</h2>
                <label>Calificacion</label>
                <select name="calificacion" id="calificacion" required>
                    <option value="" disabled selected>Elige Puntuación</option>
                    <option value="1"> 1</option>
                    <option value="2"> 2</option>
                    <option value="3"> 3</option>
                    <option value="4"> 4</option>
                    <option value="5"> 5</option> 
                </select>

                <label>Comentario</label>
                <input type="text"  name="comentario" id="comentario" required>

                <button type="submit" >Agregar Reseña</button>
               
            </form>
        </div>

    </div>

   
    <div class="right_section">    

        <div class="container_table">
        <div class="logo"><img src="../src/logo.jpeg"></div>
        <h2>Reseñas de la Propiedad</h2>
        <table class="table">
        <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Fecha</th>
                    <th>Calificacion</th>
                    <th>Comentario</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($lista_reviews as $review){ ?>
                <tr>
                    <td><?php echo $review['fk_correo'] ?></td>
                    <td><?php echo $review['fecha'] ?></td>
                    <td><?php echo $review['calificacion'];?></td>
                    <td><?php echo $review['comentario'];?></td>
                
                </tr>
            <?php }?>
        </table>
    </div>

        
    </div>

</div>
</div>


      
  
 <?php include('../templates/pie.php'); ?>