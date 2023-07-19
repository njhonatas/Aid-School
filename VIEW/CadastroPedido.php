<!DOCTYPE html>
<?php
session_start();
require_once '../DAO/RepresentanteDAO.php';
$idusuario = $_SESSION["idusuario"];
$RepresentanteDAO = new RepresentanteDAO();
$representante = $RepresentanteDAO->selecionaID($idusuario);
//var_dump($representante["idrepresentante"]);
//die();
?>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">

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

        <!-- home css link  -->
        <link rel="stylesheet" href="../CSS/CadastroPedido.css">
        <link rel="stylesheet" href="../CSS/NavbarperfilRepre.css">
        <link rel="stylesheet" href="../CSS/footer-represent.css">

        <title>Cadastro Pedido</title>

    </head>

    <body>

        <!-- Incluir a página -->

        <header class="header fixed-top">

            <div class="container">

                <div class="row align-items-center justify-content-between">

                    <img class="logo12" src="../IMAGES/logo sem fundo e texto.png" alt="logo do AID-SCHOOL">

                    <a href="InicioRepresentante.php" class="logo">AID.<span>SCHOOL</span></a>

                    <nav class="nav">

                        <a href="InicioRepresentante.php" target="_self">Início</a>

                        <a href="CadastroPedido.php" target="_self">Realizar Pedido</a>

                        <a href="HistoricoRepresentante.php" target="_self">Histórico</a>

                        <a href="DoacoesRecebidas.php" target="_self">Doações Recebidas</a>

                        <a href="AjudaRepresentante.php" target="_self">Ajuda</a>

                        <a href="SobrenosRepresentante.php" target="_self">Sobre Nós</a>


                    </nav>

                    <div class="navbardrop">
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><?php
                                //session_start();
                                //include 'validaLogin.php';
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

        <div class="form-container">
            <h2 class="form-title">Informações de Pedido</h2>

            <!--formulario -->
            <form action="../CONTROLLER/CadastroPedidoController.php" method="post">
                <input type="hidden" name="idrepresentante" value="<?= $representante["idrepresentante"] ?>">
                <input type="hidden" name="idinstituto" value="<?= $representante["idinstituto"] ?>">
                <div class="form-group">
                    <label for="nomepedido">Nome:</label>
                    <input type="text" name="nomepedido" required placeholder="Digite o nome do Pedido ">
                </div>

                <div class="form-group">
                    <label for="descricaopedido">Descrição:</label>
                    <input type="text" name="descricaopedido" id="descricaopedido" required placeholder="Descreva o Pedido">
                </div>

                <div class="form-group">
                    <label class="checkbox-label">Condição:</label>
                    <input type="checkbox" name="condicao[]" value="novo" class="checkbox-option">Novo
                    <input type="checkbox" name="condicao[]" value="semi-novo" class="checkbox-option">Semi-novo
                    <input type="checkbox" name="condicao[]" value="usado" class="checkbox-option">Usado
                </div>
                
                
                <!--  <div class="form-group">
                    <label class="checkbox-label">Condição:</label>
                    <input type="checkbox" name="condicao[]" value="novo" class="checkbox-option">Novo
                    <input type="checkbox" name="condicao[]" value="semi-novo" class="checkbox-option">Semi-novo
                    <input type="checkbox" name="condicao[]" value="usado" class="checkbox-option">Usado
                </div> -->
                
             
                <div class="form-group">
                    <label for="quantidadepedido">Quantidade:</label>
                    <input type="number" name="quantidadepedido" required placeholder="Digite a Quantidade" min="1">
                </div>

                <input type="submit" value="Finalizar">
            </form>
        </div>
    </body>
</html>