<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
require_once '../DAO/PedidoDAO.php';
require_once '../DTO/PedidoDTO.php';
require_once '../DAO/DoadorDAO.php';
require_once '../DTO/DoadorDTO.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../CSS/CadastroDoacao.css">

        <!-- css link  navbar -->
        <link rel="stylesheet" href="../CSS/navbar.css">

        <!-- favicon link  -->
        <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!-- fonte link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-5n4Eoz0Z+fu2XneIeYB+vc43tyrgCrtoleqXoAumhx5aiT6a8O/7S46gcJSkqdOk+oyPSSbTZPweT8XfEz1KOw==" crossorigin="anonymous" />

        
        <title>Fazer Doação</title>

    </head>
    <body>
        <!-- navbar  -->

        <header class="header fixed-top">

            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <img class="logo12" src="../IMAGES/logo_sem_fundo_e_texto.png" alt="logo do AID-SCHOOL">

                    <a href="Inicio.php" class="logo">AID.<span>SCHOOL</span></a>

                    <nav class="nav"> 
                        <a href="Login.php" target="_self">Login</a>
                    </nav>
                    
                    <div id="menu-btn" class="fas fa-bars"></div>
                </div>
            </div>

        </header>

        <!-- navbar link  java -->
        <script src="../JS/script.js"></script>

        <div class="form-container">
            <h2 class="form-title">Informações de Doação</h2>

            <!--formulario -->
            <form name="CadastroDoador" action="../CONTROLLER/CadastroDoadorController.php" method="post">

                <div class="form-group">
                    <label for="nomeDoacao">Nome:</label>
                    <input type="text" name="nomeDoacao" required placeholder="Digite o nome da Doação ">
                </div>

                <div class="form-group">
                    <label for="descricaoDoacao">Descrição:</label>
                    <textarea name="descricaoDoacao" id="descricaoDoacao" cols="35" rows="4" required placeholder="Descreva a Doação"></textarea>            
                </div>

                <div class="form-group">
                    <label for="quantidadeDoacao">Quantidade:</label>
                    <input type="number" name="quantidadeDoacao" required placeholder="Digite a Quantidade" min="1">
                </div>

                
                <button type="button" class="left-button" onclick="window.history.back()">
                <i class="fas fa-arrow-left"></i> Voltar
                </button>
              
                <input type="submit" class="right-button" value="Finalizar">
                

            </form>
        </div>
    </body>
</html>

