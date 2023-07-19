<?php

require_once '../DTO/InstitutoDTO.php';
require_once '../DAO/InstitutoDAO.php';

$idinstituto = $_POST["idinstituto"];
$nomeinstituto = $_POST["nomeinstituto"];
$emailinstituto = $_POST["emailinstituto"];
$telefoneinstituto = $_POST["telefoneinstituto"];
$enderecoinstituto = $_POST["enderecoinstituto"];

$institutoDTO = new InstitutoDTO();
$institutoDTO->setIdinstituto($idinstituto);
$institutoDTO->setNomeinstituto($nomeinstituto);
$institutoDTO->setEmailinstituto($emailinstituto);
$institutoDTO->setTelefoneinstituto($telefoneinstituto);
$institutoDTO->setEnderecoinstituto($enderecoinstituto);

$institutoDAO = new InstitutoDAO();
//var_dump($usuarioDTO);
//die();
$institutoDAO->Alterar($institutoDTO);

echo "<script>";
echo "alert('Instituto editado com Sucesso!');";
echo "window.location.href = '../VIEW/ListarInstituto.php';";
echo "</script>";
