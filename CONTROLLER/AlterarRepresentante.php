<?php
require_once '../DTO/RepresentanteDTO.php';
require_once '../DAO/RepresentanteDAO.php';

$idrepresentante = $_POST["idrepresentante"];
$nomerep = $_POST["nomerep"];
$rgrep = $_POST["rgrep"];
$enderecorep = $_POST["enderecorep"];
$emailrep = $_POST["emailrep"];
$telefonerep = $_POST["telefonerep"];
$sexo = $_POST["sexorep"];

$representanteDTO = new RepresentanteDTO();

$representanteDTO->setIdrepresentante($idrepresentante);
$representanteDTO->setNomerep($nomerep);
$representanteDTO->setRgrep($rgrep);
$representanteDTO->setEnderecorep($enderecorep);
$representanteDTO->setEmailrep($emailrep);
$representanteDTO->setTelefonerep($telefonerep);
$representanteDTO->setSexo($sexo);
//var_dump($representanteDTO);
//die();
$represetanteDAO = new RepresentanteDAO();

$represetanteDAO->Alterar($representanteDTO);

echo "<script>";
echo "alert('Representante editado com Sucesso!');";
echo "window.location.href = '../VIEW/ListarRepresentante.php';";
echo "</script>";