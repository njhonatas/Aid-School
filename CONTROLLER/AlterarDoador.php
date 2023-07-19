<?php
require_once '../DTO/DoadorDTO.php';
require_once '../DAO/DoadorDAO.php';

$cpfdoador = $_POST["cpfdoador"];
$rgdoador = $_POST["rgdoador"];
$nomedoador = $_POST["nomedoador"];
$telefonedoador = $_POST["telefonedoador"];
$emaildoador = $_POST["emaildoador"];
$enderecodoador = $_POST["enderecodoador"];

$doadorDTO = new DoadorDTO();
$doadorDTO->setCpfdoador($cpfdoador);
$doadorDTO->setRgdoador($rgdoador);
$doadorDTO->setNomedoador($nomedoador);
$doadorDTO->setTelefonedoador($telefonedoador);
$doadorDTO->setEmaildoador($emaildoador);
$doadorDTO->setEnderecodoador($enderecodoador);
//var_dump($doadorDTO);
//die();
$doadorDAO = new DoadorDAO();

$doadorDAO->Alterar($doadorDTO);

echo "<script>";
echo "alert('Doador editado com Sucesso!');";
echo "window.location.href = '../VIEW/listarDoador.php';";
echo "</script>";
