<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Outros elementos do cabeçalho -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- favicon link  -->
        <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

        <!-- navbar link  -->
        <link rel="stylesheet" href="../CSS/NavbarperfilRepre.css">

        <!-- icones link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


        <!-- Carrosel css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <!-- icones link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        
        <!-- CSS link  -->
        <link rel="stylesheet" href="../CSS/../CSS/Carrosel2.css">

        <script src="../JS/Carrosel.js" defer></script>

        <title>Sobre Nós</title>
    </head>
    <body>

        <!-- Incluir a página -->
        <?php
        include '../VIEW/NavbarperfilRepre.php';
        ?>

        <h1 class="heading">QUEM SÃO OS CRIADORES?</h1>
        
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel">
                <!-- Aqui estão os cards do carrossel -->
                <li class="card">
                    <div class="img"><img src="../IMAGES/Emerson perfil.png" alt="" class="foto-perfil"></div>
                    <h2>Emerson Ferreira</h2>
                    <div class="social-media">
                        <a href="mailto:sonferreira624@gmail.com" class="social-link">
                            <i class="icon material-icons move-icon-down">email</i> Email
                        </a>
                        <a href="#" class="social-link-desativado">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </div>
                </li>
                <li class="card">
                    <div class="img"><img src="../IMAGES/Breno_perfil.png" alt="foto de perfil" class="foto-perfil"></div>
                    <h2>Breno Silva</h2>
                    <div class="social-media">
                        <a href="mailto:brenosilvagoncalves12@gmail.com" class="social-link">
                            <i class="icon material-icons">email</i> Email
                        </a>
                        <a href="#" class="social-link-desativado">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </div>
                </li>
                <li class="card">
                    <div class="img"><img src="../IMAGES/Jhonatas_perfil.png" alt="" class="foto-perfil"></div>
                    <h2>Jhonatas Martins</h2>
                    <div class="social-media">
                        <a href="mailto:jhonatas1327@gmail.com" class="social-link">
                            <i class="icon material-icons">email</i> Email
                        </a>
                        <a href="https://www.instagram.com/mjhonatass_/?igshid=OGQ5ZDc2ODk2ZA%3D%3D" class="social-link" target="external">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </div>
                </li>
                <li class="card">
                    <div class="img"><img src="../IMAGES/Erick_perfil.png" alt="" class="foto-perfil"></div>
                    <h2>Erick William</h2>
                    <div class="social-media">
                        <a href="mailto:erickcosta6@gmail.com" class="social-link">
                            <i class="icon material-icons">email</i> Email
                        </a>
                        <a href="https://twitter.com/ErickWilli89109" target="external" class="social-link">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                    </div>
                </li>
                <li class="card">
                    <div class="img"><img src="../IMAGES/Danilo_perfil.png" alt="" class="foto-perfil"></div>
                    <h2>Danilo Silva</h2>
                    <div class="social-media">
                        <a href="mailto:y.danilost2020@gmail.com" class="social-link">
                            <i class="icon material-icons">email</i> Email
                        </a>
                        <a href="#" class="social-link-desativado">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </div>
                </li>
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>

    </body>
</html>
