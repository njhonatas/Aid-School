<?php
require_once '../DAO/PedidoDAO.php';
$idpedido=$_GET["id"];

$PedidoDAO=new PedidoDAO();
$PedidoDAO->Apagar($idpedido);
//var_dump($PedidoDAO);
//die();
echo "<script>";
echo 'alert("Pedido excluido com sucesso!");';
echo "window.location.href = '../VIEW/HistoricoRepresentante.php';";
echo "</script>";