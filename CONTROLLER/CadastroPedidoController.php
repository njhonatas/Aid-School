<?php
require_once '../DTO/PedidoDTO.php';
require_once '../DAO/PedidoDAO.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Pedido</title>
    </head>
    <body>
        <?php
        $nomepedido = $_POST["nomepedido"];
        $descricaopedido = $_POST["descricaopedido"];
        $condicao = $_POST["condicao"];
        $condicoesString = implode(", ", $condicao);
        $quantidadepedido = $_POST["quantidadepedido"];
        $idinstituto = $_POST["idinstituto"];
        $idrepresentante = $_POST["idrepresentante"];
//        var_dump($condicoesString);
//        die();
        if (($nomepedido == "") or ( $descricaopedido == "") or ( $condicoesString == "") or ( $quantidadepedido == "")) {
            echo "<script>";
            echo "alert('Todos os campos são de preenchimento obrigatório!');";
            echo "window.location.href='../VIEW/CadastroPedido.php';";
            echo "</script>";
        } else {
            $PedidoDTO = New PedidoDTO;
            $PedidoDTO->setNomePedido($nomepedido);
            $PedidoDTO->setDescricaopedido($descricaopedido);
            $PedidoDTO->setCondicao($condicoesString);
            $PedidoDTO->setQuantidadepedido($quantidadepedido);
            $PedidoDTO->setIdinstituto($idinstituto);
            $PedidoDTO->setIdrepresentante($idrepresentante);

            $PedidoDAO = new PedidoDAO;
            $resultado = $PedidoDAO->Gravar($PedidoDTO);

            if ($resultado) {
                echo "<script>";
                echo "alert('Pedido realizado com sucesso!');";
                echo "window.location.href='../VIEW/HistoricoRepresentante.php';";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Houve erro na gravação do pedido!');";
                echo "window.location.href='../VIEW/CadastroPedido.php';";
                echo "</script>";
            }
        }
        ?>
    </body>
</html>