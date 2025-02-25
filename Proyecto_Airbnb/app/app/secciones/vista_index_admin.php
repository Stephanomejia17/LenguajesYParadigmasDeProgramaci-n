<?php include("../templates/sidebar.php")?>

<style>
        .main_content h1 {
            font-size: 70px;
            margin-bottom: 10px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
        }

        .main_content p1 {
            padding: 20px;
            border-radius: 20px;
            background-color: #4b0dc7;
            font-size: 30px;
            margin-bottom: 50px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
        }

        .main_img_container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            gap: 25px; /* Espacio entre las imágenes */
                   
        }

        .main_img img {
            padding: 20px;
            width: 300px;
            height: 200px;
            border-radius: 30px;
            background-color: rgb(255, 255, 255);
        }
        .main_img_container p {
            font-size: 30px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
        }

    </style>
</style>

<div class="main_content">
        <h1>Welcome to house admin</h1>
        <p1> Just like it</p1>
        <div class="main_img_container">
            <div class="main_img">
                <img src="../src/alquila.jpg">
                <p> Alquila</p>
            </div>
            <div class="main_img">
                <img src="../src/gestion.jpg" >
                <p> Gestiona</p>
            </div>
            <div class="main_img">
                <img src="../src/descansa.jpg">
                <p> Disfruta</p>
            </div>
        </div>
    </div>
<?php include("../templates/end.php")?>