<?php

session_start();
require_once '../DAO/LoginDAO.php';

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

$loginDAO = new LoginDAO();
$login = $loginDAO->login($login, $senha);
//var_dump($usuario);
//die;
if (!empty($login)) {
    $_SESSION["login"] = $login["login"];
    $_SESSION["descricao"] = $login["descricao"];
    $_SESSION["idusuario"] = $login["idusuario"];
    $descricao = $_SESSION["descricao"];
    switch ($descricao) {
        case "Administrador":
            echo "<script>";
            echo "window.location.href = '../VIEW/InicioAdm.php';";
            echo "</script> ";
            break;
        case "Representante":
            echo "<script>";
            echo "window.location.href = '../VIEW/InicioRepresentante.php';";
            echo "</script> ";
            break;
        case "Doador":
            echo "<script>";
            echo "window.location.href = '../VIEW/InicioDoador.php';";
            echo "</script> ";
            break;
    }
} else {
    echo "<script>";
    echo "window.location.href = '../VIEW/Login.php';";
    echo "alert('Usuário e/ou senha inválido!');";
    echo "</script> ";
}
?>
