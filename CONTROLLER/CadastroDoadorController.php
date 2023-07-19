<?php
require_once '../DTO/DoadorDTO.php';
require_once '../DAO/DoadorDAO.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Doador</title>
    </head>
    <body>
        <?php
        $cpfdoador = $_POST["cpfdoador"];
        $rgdoador = $_POST["rgdoador"];
        $nomedoador = $_POST["nomedoador"];
        $telefonedoador = $_POST["telefonedoador"];
        $emaildoador = $_POST["emaildoador"];
        $enderecodoador = $_POST["enderecodoador"];
        $dtnascdoador = $_POST["dtnascdoador"];
        $idusuario = $_POST["idusuario"];

        if (($cpfdoador == "") or ($rgdoador == "") or ($nomedoador == "") or ($telefonedoador == "") or ($emaildoador == "") or ($enderecodoador == "") or ($dtnascdoador == "")) {
            echo "<script>";
            echo "alert('Todos os campos são de preenchimento obrigatório!');";
            echo "window.location.href='../VIEW/CadastroDoador.php';";
            echo "</script>";
        } else {
            $DoadorDTO = New DoadorDTO;
            $DoadorDTO->setCpfdoador($cpfdoador);
            $DoadorDTO->setRgdoador($rgdoador);
            $DoadorDTO->setNomedoador($nomedoador);
            $DoadorDTO->setTelefonedoador($telefonedoador);
            $DoadorDTO->setEmaildoador($emaildoador);
            $DoadorDTO->setEnderecodoador($enderecodoador);
            $DoadorDTO->setDtnascdoador($dtnascdoador);
            $DoadorDTO->setIdusuario($idusuario);


            $DoadorDAO = new DoadorDAO;
            $resultado = $DoadorDAO->Gravar($DoadorDTO);

            if ($resultado) {
                echo "<script>";
                echo "alert('Doador foi cadastrado com sucesso, efetue o login para entrar no sistema!');";
                echo "window.location.href='../VIEW/Login.php';";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Houve erro na gravação!');";
                echo "window.location.href='../VIEW/CadastroDoador.php';";
                echo "</script>";
            }
        }
        ?>
    </body>
</html>