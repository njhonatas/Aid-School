<?php
require_once '../DTO/DoacaoDTO.php';
require_once '../DAO/DoacaoDAO.php';
require_once '../DTO/PedidoDTO.php';
require_once '../DAO/PedidoDAO.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Doação</title>
</head>

<body>
    <?php
    $nomedoacao = $_POST["nomeDoacao"];
    $descricaoDoacao = $_POST["descricaoDoacao"];
    $quantidadeDoacao = $_POST["quantidadeDoacao"];
    $quantidadepedido = $_POST["quantidadepedido"];
    $idrepresentante = $_POST["idrepresentante"];
    $idpedido = $_POST["idpedido"];
    $cpfdoador = $_POST["cpfdoador"];
    $condicao = $_POST["condicao"];
    $quant = $quantidadepedido - $quantidadeDoacao;
    $status = "";

    if ($quantidadepedido > $quantidadeDoacao) {
        $status = 2;
    } else {
        $status = 3;
    }



    if (($condicao == "") or ($descricaoDoacao == "") or ($quantidadeDoacao == "")) {
        echo "<script>";
        echo "alert('Todos os campos são de preenchimento obrigatório!');";
        echo "window.location.href='../VIEW/ListarPedidoDoador.php';";
        echo "</script>";
    } else {

        $PedidoDTO = new PedidoDTO;
        $PedidoDTO->setStatus($status);
        $PedidoDTO->setQuantidadepedido($quant);
        $PedidoDTO->setIdpedido($idpedido);

        $DoacaoDTO = new DoacaoDTO;
        $DoacaoDTO->setNomedoacao($nomedoacao);
        $DoacaoDTO->setDescricaodoacao($descricaoDoacao);
        $DoacaoDTO->setQuantidadedoacao($quantidadeDoacao);

        $DoacaoDTO->setIdrepresentante($idrepresentante);
        $DoacaoDTO->setIdpedido($idpedido);
        $DoacaoDTO->setCpfdoador($cpfdoador);

        $DoacaoDAO = new DoacaoDAO;
        $resultado = $DoacaoDAO->Gravar($DoacaoDTO);

        if ($resultado) {
            $PedidoDAO = new PedidoDAO();
            $alterar = $PedidoDAO->AlterarPedidoPadrao($PedidoDTO);


            if ($alterar) {
                echo "<script>";
                echo "alert('Doação efetuada com sucesso, entre em contato com o representante para combinar o método de entrega!');";
                echo "window.location.href='../VIEW/HistoricoDoador.php';";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Houve erro na alteração do pedido!');";
                echo "window.location.href='../VIEW/ListarPedidoDoador.php';";
                echo "</script>";
            }
        } else {
            echo "<script>";
            echo "alert('Houve erro na Doação!');";
            echo "window.location.href='../VIEW/ListarPedidoDoador.php';";
            echo "</script>";
        }

    }
    ?>
</body>

</html>