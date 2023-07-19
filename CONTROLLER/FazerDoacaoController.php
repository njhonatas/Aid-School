<?php
require_once '../DAO/PedidoDAO.php';
require_once '../DTO/PedidoDTO.php';
require_once '../DAO/DoacaoDAO.php';
require_once '../DTO/DoacaoDTO.php';

$idpedido = $_POST ["idpedido"];
$idrepresentante = $_POST ["idrepresentante"];
$cpfdoador = $_POST ["cpfdoador"];
$idusuario = $_POST ["idusuario"];
$nomedoacao = $_POST ["nomedoacao"];
$descricaodoacao = $_POST ["descricaodoacao"];
$quantidadepedido = $_POST ["quantidadepedido"];
$quantidadedoacao = $_POST ["quantidadedoacao"];
$quant = $quantidadepedido - $quantidadedoacao;
$status = "";

if ($quantidadepedido > $quantidadedoacao) {
    $status = 2;
} else {
    $status = 3;
}

$PedidoDTO = new PedidoDTO;
$PedidoDTO->setStatus($status);
$PedidoDTO->setQuantidadepedido($quant);
$PedidoDTO->setIdpedido($idpedido);

$DoacaoDTO = new DoacaoDTO();
$DoacaoDTO->setNomedoacao($nomedoacao);
$DoacaoDTO->setDescricaodoacao($descricaodoacao);
$DoacaoDTO->setQuantidadedoacao($quantidadedoacao);
$DoacaoDTO->setCpfdoador($cpfdoador);
$DoacaoDTO->setIdrepresentante($idrepresentante);
$DoacaoDTO ->setIdpedido($idpedido);

$DoacaoDAO = new DoacaoDAO();
$gravar = $DoacaoDAO->Gravar($DoacaoDTO);

if ($gravar) {
    $PedidoDAO = new PedidoDAO();
    $alterar = $PedidoDAO->AlterarPedido($PedidoDTO);


    if ($alterar) {
        echo "<script>";
        echo "alert('Doação efetuada com sucesso! Entre em contato com o representante para combinar o método de entrega!');";
        echo "window.location.href='../VIEW/InicioDoador.php';";
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
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
