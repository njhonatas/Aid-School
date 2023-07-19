<?php
require_once '../DAO/InstitutoDAO.php';
$idinstituto=$_GET["id"];

$InstitutoDAO=new InstitutoDAO();
$InstitutoDAO->Apagar($idinstituto);
//var_dump($InstitutoDAO);
//die();
echo "<script>";
echo 'alert("Instituto excluido com sucesso!");';
echo "window.location.href = '../VIEW/ListarInstituto.php';";
echo "</script>";