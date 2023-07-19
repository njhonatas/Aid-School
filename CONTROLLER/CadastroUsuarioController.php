<?php

require_once '../DTO/UsuarioDTO.php';
require_once '../DAO/UsuarioDAO.php';

$login = $_POST["login"];
$senha = md5($_POST["senha"]);
$idPerfil = $_POST["idPerfil"];

if (( $login == "" )or ( $senha == "") or ( $idPerfil == "")) {
    echo "<script>";
    echo "alert('Todos os campos são de preenchimento obrigatório!');";
    echo "window.location.href='../VIEW/CadastrarUsuario.php';";
    echo "</script>";
} else {
    $UsuarioDTO = New UsuarioDTO;
    $UsuarioDTO->setLogin($login);
    $UsuarioDTO->setSenha($senha);
    $UsuarioDTO->setIdPerfil($idPerfil);

    $UsuarioDAO = new UsuarioDAO;
    $resultado = $UsuarioDAO->Gravar($UsuarioDTO);
    $ultimoID = $UsuarioDAO->pegaUltimoID();
    $ID = $ultimoID["ultimoID"];
}
if ($resultado and $idPerfil == "2") {
//   var_dump($ID);
//    die;
    echo "<script>";
    echo "alert('Gravação efetuada com sucesso!');";
    echo "window.location.href='../VIEW/CadastroRepresentante.php?ultimoID=$ID';";
    echo "</script>";
} else {
    if ($resultado and $idPerfil == "3") {
        echo "<script>";
        echo "alert('Usuario efetuada com sucesso!');";
        echo "window.location.href='../VIEW/CadastroDoador.php?ultimoID=$ID';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Houve erro na gravação!');";
        echo "window.location.href='../VIEW/CadastroUsuario.php';";
        echo "</script>";
    }
}
?>