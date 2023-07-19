<?php
session_start();
include 'validaLogin.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AID-SCHOOL ADM</title>

    <!-- css da Pagina -->
    <link rel="stylesheet" href="../CSS/styleAdm.css">
    <link rel="stylesheet" href="../CSS/NavbarperfilAdm.css">

    <!-- favicon link  -->
    <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

    <!-- icones link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <!-- Incluir a página -->
    <?php
    include '../VIEW/NavbarperfilAdm.php';
    ?>


    <!-- services section starts  -->
    <div class="page-container">
        <section class="services" id="services">

            <div class="box-container container">

                <div class="box">
                    <img src="../IMAGES/icone_cadastrar_instituto.png" alt="icone cadastrar instituto">
                    <a href="CadastroInstituto.php">
                        <h3>Cadastrar Instituto</h3>
                    </a>

                </div>

                <div class="box">
                    <img src="../IMAGES/icone_cadastro_semfundo.png" alt="icone cadastro semfundo">
                    <a href="CadastroUsuario.php">
                        <h3>Cadastrar Doador</h3>
                    </a>

                </div>

                <div class="box">
                    <img src="../IMAGES/icone_cadastro_pedido.png" alt="icone cadastro pedido">
                    <a href="CadastroUsuario.php">
                        <h3>Cadastrar Representante</h3>
                    </a>
                </div>

                <div class="box">
                    <img src="../IMAGES/icone doação .png" alt="icone doação">
                    <a href="ListarDoacao.php">
                        <h3>Listar Doações</h3>
                    </a>

                </div>

                <div class="box">
                    <img src="../IMAGES/icone_doador.png" alt="icone doador">
                    <a href="ListarPedidos.php">
                        <h3>Listar Pedidos</h3>
                    </a>
                </div>
                <div class="box">
                    <img src="../IMAGES/icone_instituto.png" alt="icone instituto">
                    <a href="ListarInstituto.php">
                        <h3>Listar Instituições</h3>
                    </a>

                </div>
                <div class="box">
                    <img src="../IMAGES/icone_login.png" alt="icone login">
                    <a href="ListarUsuario.php">
                        <h3>Listar Usuários</h3>
                    </a>

                </div>
                <div class="box">
                    <img src="../IMAGES/icone_relatorio.png" alt="icone relatorio">
                    <a href="ListarDoador.php">
                        <h3>Listar Doadores</h3>
                    </a>

                </div>
                <div class="box">
                    <img src="../IMAGES/icone representante3.png" alt="icone representante3">
                    <a href="ListarRepresentante.php">
                        <h3>Listar Representante</h3>
                    </a>
                </div>

            </div>

        </section>
    </div>
    <!-- navbar link  java -->
    <script src="../JS/script.js"></script>


</body>

</html>