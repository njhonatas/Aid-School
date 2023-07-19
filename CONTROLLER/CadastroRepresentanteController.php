<?php
require_once '../DTO/RepresentanteDTO.php';
require_once '../DAO/RepresentanteDAO.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Representante</title>
    </head>
    <body>
        <?php
        $nomerep = $_POST["nomerep"];
        $cpfrep = $_POST["cpfrep"];
        $rgrep = $_POST["rgrep"];
        $dtnascrep = $_POST["dtnascrep"];
        $enderecorep = $_POST["enderecorep"];
        $emailrep = $_POST["emailrep"];
        $telefonerep = $_POST["telefonerep"];
        $sexorep = $_POST["sexorep"];
        $idusuario = $_POST["idusuario"];
        $idinstituto = $_POST["idinstituto"];
        
//        var_dump($_POST);
//        die;

        if (($nomerep == "") or ($cpfrep == "") or ($rgrep == "") or ($dtnascrep == "") or ($enderecorep == "") or ($emailrep == "") or ($telefonerep == "") or ($sexorep == "") or ($idinstituto == "")) {
            echo "<script>";
            echo "alert('Todos os campos são de preenchimento obrigatório!');";
            echo "window.location.href='../VIEW/InicioRepresentante.php';";
            echo "</script>";
        } else {
            $RepresentanteDTO = New RepresentanteDTO;
            $RepresentanteDTO->setNomerep($nomerep);
            $RepresentanteDTO->setCpfrep($cpfrep);
            $RepresentanteDTO->setRgrep($rgrep);
            $RepresentanteDTO->setDtnascrep($dtnascrep);
            $RepresentanteDTO->setEnderecorep($enderecorep);
            $RepresentanteDTO->setEmailrep($emailrep);
            $RepresentanteDTO->setTelefonerep($telefonerep);
            $RepresentanteDTO->setSexo($sexorep);
            $RepresentanteDTO->setIdusuario($idusuario);
            $RepresentanteDTO->setIdinstituto($idinstituto);

            $RepresentanteDAO = new RepresentanteDAO;
            $resultado = $RepresentanteDAO->Gravar($RepresentanteDTO);

            if ($resultado) {
                echo "<script>";
                echo "alert('O Representante foi cadastrado com sucesso, efetue o login para entrar no sistema!');";
                echo "window.location.href='../VIEW/Login.php';";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Houve erro na gravação!');";
                echo "window.location.href='../VIEW/CadastroRepresentante.php';";
                echo "</script>";
            }
        }
        ?>
    </body>
</html>