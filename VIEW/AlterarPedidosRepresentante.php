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

    <link rel="stylesheet" href="../CSS/AlterarPedido.css">

    <!-- css link  navbar -->
    <link rel="stylesheet" href="../CSS/NavbarperfilRepre.css">

    <!-- favicon link  -->
    <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- fonte link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <title>Alterar Pedido</title>

</head>

<body>
    <?php
    require_once '../DAO/PedidoDAO.php';
    $idpedido = $_GET["id"];
    $pedidoDAO = new PedidoDAO();
    $pedido = $pedidoDAO->PesquisarUmRegistro($idpedido);
    ?>

    <!-- Incluir a página -->
    <?php
    include '../VIEW/NavbarperfilRepre.php';
    ?>

    <div class="form-container">
        <h2 class="form-title">Alterar Pedido</h2>

        <!--formulario -->
        <form action="../CONTROLLER/AlterarPedidoRep.php" method="post">

            <input type="hidden" name="idpedido" value="<?php echo $pedido["idpedido"] ?>">

            <div class="form-group">
                <label for="nomepedido">Nome:</label>
                <input type="text" name="nomepedido" required placeholder="Digite o nome do Pedido "
                    value="<?php echo $pedido["nomepedido"] ?>">
            </div>

            <div class="form-group">
                <label class="checkbox-label">Condição:</label>
                <input type="checkbox" name="condicao[]" value="1" class="checkbox-option">Novo
                <input type="checkbox" name="condicao[]" value="2" class="checkbox-option">Semi-novo
                <input type="checkbox" name="condicao[]" value="3" class="checkbox-option">Usado
            </div>

            <div class="form-group">
                <label for="quantidadepedido">Quantidade:</label>
                <input type="number" name="quantidadepedido" required placeholder="Digite a Quantidade" min="1"
                    value="<?php echo $pedido["quantidadepedido"] ?>">
            </div>

            <input type="submit" value="Finalizar">
        </form>
        
    </div>
</body>

</html>