<?php
require_once '../DTO/InstitutoDTO.php';
require_once '../DAO/InstitutoDAO.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Instituição</title>
    </head>
    <body>
        <?php
        $nomeinstituto = $_POST["nomeinstituto"];
        $emailinstituto = $_POST["emailinstituto"];
        $telefoneinstituto = $_POST["telefoneinstituto"];
        $enderecoinstituto = $_POST["enderecoinstituto"];

        if (($nomeinstituto == "") or ($emailinstituto == "") or ($telefoneinstituto == "") or ($enderecoinstituto == "")) {
            echo "<script>";
            echo "alert('Todos os campos são de preenchimento obrigatório!');";
            echo "window.location.href='../VIEW/CadastroInstituto.php';";
            echo "</script>";
        } else {
            $InstitutoDTO = New InstitutoDTO;
            $InstitutoDTO->setNomeinstituto($nomeinstituto);
            $InstitutoDTO->setEmailinstituto($emailinstituto);
            $InstitutoDTO->setTelefoneinstituto($telefoneinstituto);
            $InstitutoDTO->setEnderecoinstituto($enderecoinstituto);

            $InstitutoDAO = new InstitutoDAO;
            $resultado = $InstitutoDAO->Gravar($InstitutoDTO);

            if ($resultado) {
                echo "<script>";
                echo "alert('Instituto cadastrado com sucesso!');";
                echo "window.location.href='../VIEW/ListarInstituto.php';";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Houve erro na gravação!');";
                echo "window.location.href='../VIEW/CadastrarInstituto.php';";
                echo "</script>";
            }
        }
        ?>
    </body>
</html>