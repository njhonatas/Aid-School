<?php
require_once '../DAO/PedidoDAO.php';
require_once '../DTO/PedidoDTO.php';
require_once '../DAO/DoadorDAO.php';
require_once '../DTO/DoadorDTO.php';
require_once '../DAO/RepresentanteDAO.php';
require_once '../DAO/InstitutoDAO.php';
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="../CSS/CadastroDoacao.css">
    <link rel="stylesheet" href="../CSS/footer-doador.css">
    <link rel="stylesheet" href="../CSS/NavbarperfilDoador.css">


    <title>Fazer Doação</title>
</head>

<body>

    <!-- Incluir a página -->
    <?php
    include '../VIEW/NavbarperfilDoador.php';
    ?>

    <?php

    $usuario = $_SESSION["idusuario"];
    $id = $_GET["id"];

    $DoadorDAO = new DoadorDAO();
    $pesquisa = $DoadorDAO->Pesquisarpedidodoador($id, $usuario);
    $RepresentanteDAO = new RepresentanteDAO();
    $pesquisaRep = $RepresentanteDAO->PesquisarUmRegistro($pesquisa["idrepresentante"]);

    $InstitutoDAO = new InstitutoDAO();
    $pesquisainst = $InstitutoDAO->PesquisarUmRegistro($pesquisa["idinstituto"]);

    ?>
    <div class="form-container">
        <h2 class="form-title">Realizar Doação</h2>

        <form action="../CONTROLLER/CadastroDoacaoController.php" method="post">

            <input type="hidden" name="idpedido" value="<?php echo $pesquisa["idpedido"] ?>">
            <input type="hidden" name="idrepresentante" value="<?php echo $pesquisa["idrepresentante"] ?>">
            <input type="hidden" name="cpfdoador" value="<?php echo $pesquisa["cpfdoador"] ?>">
            <input type="hidden" name="idusuario" value="<?php echo $usuario ?>">
            <input type="hidden" name="nomeDoacao" value="<?php echo $pesquisa["nomepedido"] ?>">
            <input type="hidden" name="descricaoDoacao" value="<?php echo $pesquisa["descricaopedido"] ?>">
            <input type="hidden" name="quantidadepedido" value="<?php echo $pesquisa["quantidadepedido"] ?>">


            <div class="form-group2">
                <label>Nome da doação:
                    <?php echo $pesquisa["nomepedido"] ?>
                </label>
            </div>

            <div class="form-group2">
                <label>Nome da Instituição:
                    <?php echo $pesquisainst["nomeinstituto"] ?>
                </label>
            </div>

            <div class="form-group2">
                <label>Descrição:
                    <?php echo $pesquisa["descricaopedido"] ?>
                </label>
            </div>

            <div class="form-group2">
                <label>Nome do representante:
                    <?php echo $pesquisaRep["nomerep"] ?>
                </label>
            </div>

            <div class="form-group">
                <label>Quantidade Solicitada:
                    <?php echo $pesquisa["quantidadepedido"] ?>
                </label>
            </div>

            <div class="form-group">
                <label>Condição:</label>
                <?php $MyArray = explode(", ", $pesquisa["condicao"]);

                foreach ($MyArray as $Cond) {
                    echo "<br><input type='radio' name='condicao[]' id='$Cond' value='$Cond' class='checkbox-option'><label for='$Cond' > $Cond </label>";
                }
                ?>
            </div>

            <div class="form-group">
                <label>Quantidade da Doação:</label>
                <input type="number" min="1" max="<?php echo $pesquisa["quantidadepedido"] ?>" name="quantidadeDoacao"
                    placeholder="Digite a Quantidade">
            </div>


            <a href="ListarPedidoDoador.php" class="left-button">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>



            <input type="submit" class="right-button" value="Finalizar">

        </form>
    </div>

    <?php
    // put your code here
    ?>
</body>

</html>