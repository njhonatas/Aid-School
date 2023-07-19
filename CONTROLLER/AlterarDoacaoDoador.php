<?php
require_once '../DTO/DoacaoDTO.php';
require_once '../DAO/DoacaoDAO.php';
require_once '../DTO/PedidoDTO.php';
require_once '../DAO/PedidoDAO.php';

$idpedido = $_POST["idpedido"];
$iddoacao = $_POST["iddoacao"];
$quantidadeNovo = $_POST["quantidadedoacao"];

$DoacaoDTO = new DoacaoDTO();
$DoacaoDTO->setIddoacao($iddoacao);
$DoacaoDTO->setQuantidadedoacao($quantidadeNovo);

$DoacaoDAO = new DoacaoDAO();

$PesquisarUmRegistro = $DoacaoDAO->PesquisarUmRegistro($iddoacao);
$quantidadeAntiga = $PesquisarUmRegistro["quantidadedoacao"];

$PedidoDAO = new PedidoDAO();
$PesquisarUmRegistroPedido = $PedidoDAO->PesquisarUmRegistro($idpedido);
$quantidadepedido = $PesquisarUmRegistroPedido["quantidadepedido"];

if ($quantidadeNovo < $quantidadeAntiga) {
    $diferenca = $quantidadeAntiga - $quantidadeNovo;
    $resultado = $quantidadepedido + $diferenca;
    $PedidoDAO->AlterarPedidoEspecifico($resultado, $idpedido);
    
} elseif ($quantidadeNovo > $quantidadeAntiga) {
    $diferenca = $quantidadeNovo - $quantidadeAntiga;
    $resultado = $quantidadepedido - $diferenca;
    $PedidoDAO->AlterarPedidoEspecifico($resultado, $idpedido);
}

$Alterar = $DoacaoDAO->Alterar($DoacaoDTO);

echo "<script>";
echo "alert('Doação editada com Sucesso!');";
echo "window.location.href = '../VIEW/HistoricoDoador.php';";
echo "</script>";
