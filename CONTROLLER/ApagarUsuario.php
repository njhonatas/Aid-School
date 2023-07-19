<?php
require_once '../DAO/UsuarioDAO.php';
$idusuario=$_GET["id"];

$UsuarioDAO=new UsuarioDAO();
$UsuarioDAO->Apagar($idusuario);
//var_dump($UsuarioDAO);
//die();
echo "<script>";
echo 'alert("Usuário excluido com sucesso!");';
echo "window.location.href = '../VIEW/ListarUsuario.php';";
echo "</script>";