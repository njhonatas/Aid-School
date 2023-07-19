<?php
require_once '../DAO/DoadorDAO.php';
$cpfdoador=$_GET["id"];

$DoadorDAO=new DoadorDAO();
$DoadorDAO->Apagar($cpfdoador);
//var_dump($UsuarioDAO);
//die();
echo "<script>";
echo 'alert("Doador excluido com sucesso!");';
echo "window.location.href = '../VIEW/ListarDoador.php';";
echo "</script>";