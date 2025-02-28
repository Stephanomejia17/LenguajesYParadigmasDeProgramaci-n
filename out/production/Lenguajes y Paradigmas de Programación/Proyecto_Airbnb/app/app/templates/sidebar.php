<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
     
        .aside {
            width: 250px;
            height: 100vh;
            background: #4b0dc7;
            position: fixed;
            top: 0;
            left: 0;
            color: rgb(255, 255, 255);
            padding: 40px;
            font-family: Arial, sans-serif;
        }

        .aside__header img {
            width: 150px;
            padding: 10px;
            border-radius: 15px;
        }

        .options {
            margin-top: 20px;
            align-items: center;
            justify-content: space-around;
            cursor: pointer;
        }

        .options ul {
            list-style: none;
        }

        .options__item {
            margin: 15px;
        }

        .options__item__link {
            text-decoration: none;
            color: white;
            font-size: 18px;
            display: block;
            padding: 10px;
            transition: 0.3s;
        }

        .options__item__link:hover {
            background: rgba(66, 0, 87, 0.315);
            border-radius: 5px;
        }

        .main_content {
            margin-left: 250px;
            width: calc(100% - 250px);
            height: 100vh;
            background-image: url('../src/atardecer.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        </style>
    </head>

    <body>
    <aside class="aside" id="aside">
        <div class="aside__header">
            <div class="aside__header__logo">
            <a href="../secciones/vista_index_admin.php">
                <img src="../src/logo.jpeg" alt="logo">
               </a>
            </div>
        </div>
        <div class="options">
            <div class="options__item">
                <a href="vista_propiedades_admin.php" class="options__item__link">Propiedades</a>
            </div>
            <div class="options__item">
                <a href="vista_reservas_admin.php" class="options__item__link">Reservas</a>
            </div>
            <div class="options__item">
                <a href="../secciones/cerrar.php" class="options__item__link">Cerrar sesión</a>

            </div>
        </div>
    </aside>
        

        
                    
              