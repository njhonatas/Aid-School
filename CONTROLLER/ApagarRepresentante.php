<?php
require_once '../DAO/RepresentanteDAO.php';
$idrepresentante=$_GET["id"];

$RepresentanteDAO=new RepresentanteDAO();
$RepresentanteDAO->Apagar($idrepresentante);
//var_dump($UsuarioDAO);
//die();
echo "<script>";
echo 'alert("Representante excluido com sucesso!");';
echo "window.location.href = '../VIEW/ListarRepresentante.php';";
echo "</script>";