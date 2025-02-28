<?php include('../templates/cabecera_usuario.php'); 
session_start();
$correo = $_SESSION['correo'];?>
<?php include('../secciones/mis_reservas.php'); ?>

    
<style>
        * {
            font-family: Arial, sans-serif;
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
    
    <div class="left-section">
        
       
        <div class="form-container">
            <form action=" " method="POST">
            <h2>Deja tu reseña</h2>
                <label for="calificacion">Calificacion</label>
                <select name="calificacion" id="calificacion" required>
                    <option value="" disabled selected>Elige Puntuación</option>
                    <option value="1"> 1</option>
                    <option value="2"> 2</option>
                    <option value="3"> 3</option>
                    <option value="4"> 4</option>
                    <option value="5"> 5</option> 
                </select>

                <label for="comentario">Comentario</label>
                <input type="text" id="habitaciones" name="habitaciones">

                <button type="submit" name = "accion" value="agregar" >Agregar Reseña</button>
               
            </form>
        </div>

    </div>

   
    <div class="right-section">    
    
        <table>
            <thead>
                <tr>
                    <th>Calificacion</th>
                    <th>Comenatrio</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>5</td>
                    <td>dbjasvauvfc</td>
                
                </tr>
            </tbod>
    
        </table>
  

        
    </div>

</div>
</div>


      
  
 <?php include('../templates/pie.php'); ?>