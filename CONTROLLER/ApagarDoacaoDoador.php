<?php
require_once '../DAO/DoacaoDAO.php';
require_once '../DTO/PedidoDTO.php';
require_once '../DAO/PedidoDAO.php';
$iddoacao=$_GET["id"];
$DoacaoDAO = new DoacaoDAO();
$PedidoDAO = new PedidoDAO();
$PesquisarUmRegistro = $DoacaoDAO->PesquisarUmRegistro($iddoacao);
$idpedido = $PesquisarUmRegistro["idpedido"];
$quantidadedaocao = $PesquisarUmRegistro["quantidadedoacao"];

$PesquisarUmRegistroPedido = $PedidoDAO->PesquisarUmRegistro($idpedido);
$quantidadepedido = $PesquisarUmRegistroPedido["quantidadepedido"];
$resultado =  $quantidadepedido + $quantidadedaocao;

$PedidoDAO->AlterarPedidoEspecifico($resultado, $idpedido);

$DoacaoDAO->Apagar($iddoacao);
//var_dump($DoacaoDAO);
//die();
echo "<script>";
echo 'alert("Doação cancelada com sucesso!");';
echo "window.location.href = '../VIEW/HistoricoDoador.php';";
echo "</script>";