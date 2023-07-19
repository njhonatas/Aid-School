<?php

require_once '../DTO/UsuarioDTO.php';
require_once '../DAO/UsuarioDAO.php';

$idusuario = $_POST["idusuario"];
//$idperfil = $_POST["idperfil"];
$login = $_POST["login"];
$senha = md5($_POST["senha"]);

$usuarioDTO = new usuarioDTO();
//$usuarioDTO->setIdperfil($idperfil);
$usuarioDTO->setLogin($login);
$usuarioDTO->setIdusuario($idusuario);
$usuarioDTO->setSenha($senha);

$usuarioDAO = new UsuarioDAO();
//var_dump($usuarioDTO);
//die();
$usuarioDAO->Alterar($usuarioDTO);
//print_r($usuarioDTO);
//die();
echo "<script>";
echo "alert('Usuário editado com Sucesso!');";
echo "window.location.href = '../VIEW/ListarUsuario.php';";
echo "</script>";