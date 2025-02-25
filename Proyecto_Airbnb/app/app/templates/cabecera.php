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
    </head>
    <style>
          body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../src/fondo.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;            
        }

        header {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            width: 80px;
            height: auto;
        }
        .alojo {
            font-size: 25px;
        }
        .registro {
            display: flex;
            gap: 10px;
        }

        .registro button {
            background: none;
            border: none;
            cursor: pointer;
        }

        .registro img {
            width: 80px;
            height: auto;
            border-radius: 50px;
        }

        .menu {
            display: none;
            position: absolute;
            top: 8%;
            right: 0;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 8px;
            width: 150px;
            z-index: 1000;
        }

        .registro:hover .menu {
            display: block;
        }

        .menu a {
            display: block;
            padding: 8px;
            text-decoration: none;
            color: black;
        }
        .menu a:hover {
            background: #f0f0f0;
        }

    </style>

    <body>
    <header>
        <a class="logo" href="index.php"><img src="../src/logo.jpeg"></a>
        <div class="alojo">WELCOME</div>
        <div class="registro">
            <button><img src="../src/login.png"></button>
            <div class="menu" id="menuRegistro">
                <a class="nav-item nav-link" href="../secciones/vista_inicio_sesion.php">Iniciar Sesión</a>
                <a class="nav-item nav-link" href="../secciones/vista_registrar.php">Registrarse</a>
            </div>
        </div>
    </header>

                 