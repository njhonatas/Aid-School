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
        <link rel="stylesheet" href="../CSS/NavbarperfilDoador.css">

        <!-- icones link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



        <!-- CSS Carrosel  -->
        <link rel="stylesheet" href="../CSS/Carrosel.css">

        <!-- navbar link  -->
        <link rel="stylesheet" href="../CSS/NavbarperfilDoador.css">

        <!-- icones link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <script src="../JS/Carrosel.js" defer></script>
        <title>Sobre Nós</title>
    </head>
    <body>

        <!-- Incluir a página -->
        <?php
        session_start();
        include 'validaLogin.php';
        ?>

        <header class="header fixed-top">

            <div class="container">

                <div class="row align-items-center justify-content-between">

                    <img class="logo12" src="../IMAGES/logo sem fundo e texto.png" alt="logo do AID-SCHOOL">

                    <a href="InicioDoador.php" class="logo">AID.<span>SCHOOL</span></a>

                    <nav class="nav">

                        <a href="InicioDoador.php" target="_self">Início</a>

                        <a href="ListarPedidoDoador.php" target="_self">Doar</a>

                        <a href="HistoricoDoador.php" target="_self">Histórico de Doações</a>

                        <a href="AjudaDoador.php" target="_self">Ajuda</a>

                        <a href="SobrenosDoador.php" target="_self">Sobre Nós</a>

                        <a href="AjudaDoador.php" target="_self">Saiba mais</a>

                    </nav>

                    <div class="navbardrop">
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><?php
                                //session_start();
                               // include 'validaLogin.php';
                                if (isset($_SESSION["login"])) {
                                    echo "User: ", $_SESSION["login"];
                                    echo "<br>";
                                    echo "Perfil: ", $_SESSION["descricao"];
                                    echo "<br>";
                                }
                                ?></a>

                            <a class="dropdown-item" onclick="confirmLogout()">Sair</a>
                        </div>

                        <a onclick="confirmLogout()" target="_self">
                            <i class="fas fa-sign-out-alt" style="margin-left: 20px;"></i>
                        </a>

                        <script>
                            function confirmLogout() {
                                if (confirm("Tem certeza que deseja sair?")) {
                                    window.location.href = "../controller/logoffController.php";
                                }
                            }
                        </script>
                    </div>


                    <div id="menu-btn" class="fas fa-bars"></div>
                </div>
            </div>

        </header>
        <script src="../JS/script.js"></script>
        <script src="../JS/script2.js"></script>

        <h1 class="heading">QUEM SÃO OS CRIADORES?</h1

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
