<?php
require_once '../DTO/PedidoDTO.php';
require_once '../DAO/PedidoDAO.php';

$idpedido = $_POST["idpedido"];
$nomepedido = $_POST["nomepedido"];
$descricaopedido = $_POST["descricaopedido"];
$condicao = $_POST["condicao"];
$condicoesString = implode(", ", $condicao);
$quantidadepedido = $_POST["quantidadepedido"];

//print_r($_POST);
//die();
$pedidoDTO = new PedidoDTO();
$pedidoDTO->setIdpedido($idpedido);
$pedidoDTO->setNomepedido($nomepedido);
$pedidoDTO->setDescricaopedido($descricaopedido);
$pedidoDTO->setCondicao($condicoesString);
$pedidoDTO->setQuantidadepedido($quantidadepedido);

$pedidoDAO = new PedidoDAO();
//var_dump($pedidoDAO);
//die();
$pedidoDAO->AlterarPedido($pedidoDTO, $idpedido);
echo "<script>";
echo "alert('Pedido editado com Sucesso!');";
echo "window.location.href = '../VIEW/HistoricoRepresentante.php';";
echo "</script>";