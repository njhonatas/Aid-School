<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
require_once '../DAO/InstitutoDAO.php';
require_once '../DTO/InstitutoDTO.php';

$InstitutoDAO = new InstitutoDAO;
$resultado = $InstitutoDAO->Pesquisar();
session_start();
//var_dump($resultado);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">


    <!-- css da Pagina -->
    <link rel="stylesheet" href="../CSS/Lista.css">
    <link rel="stylesheet" href="../CSS/NavbarperfilAdm.css">

    <!-- favicon link  -->
    <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

    <!-- icones link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <!--Script de pesquisa-->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>

    <title>Listar Instituto</title>
</head>

<body>
    <script>
        /*Pesquisa na tabela*/
        $(document).ready(function () {
            $('#dataTable').DataTable({
                language: {
                    search: "Pesquisar&nbsp;:",
                    lengthMenu: "Exibir _MENU_ registros",
                    info: "Registros de _START_ &agrave; _END_ de _TOTAL_ registros",
                    paginate: {
                        first: "Primeiro",
                        previous: "Anterior",
                        next: "Pr&oacute;ximo",
                        last: "Ultimo"
                    }
                }
            });
        });
    </script>

    <!-- Incluir a página -->
    <?php
    include '../VIEW/NavbarperfilAdm.php';
    ?>

    <div class="containerlistar">
        <h1 class="heading">Lista de Institutos </h1>
        <table id='dataTable'>
            <thead>
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Telefone</td>
                    <td>Endereço</td>
                    <td>Alterar</td>
                    <td>Apagar</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultado as $r) {
                    echo "<tr>";
                    echo "<td>{$r["idinstituto"]}</td>";
                    echo "<td>{$r["nomeinstituto"]}</td>";
                    echo "<td>{$r["emailinstituto"]}</td>";
                    echo "<td>{$r["telefoneinstituto"]}</td>";
                    echo "<td>{$r["enderecoinstituto"]}</td>";
                    echo "<td><a href='../VIEW/formAlterarInstituto.php?id={$r["idinstituto"]}'><i class='fas fa-pen'></i></a></td>";
                    echo "<td><a href='../CONTROLLER/ApagarInstituto.php?id={$r["idinstituto"]}' onclick='return confirmarApagar(event, {$r["idinstituto"]})'><i class='fas fa-eraser'></i></a></td>";
                    echo "</tr>";
                }
                ?>
                <script>
                    function confirmarApagar(event, idinstituto) {
                        var resposta = confirm('Tem certeza que deseja apagar o Instituto?');
                        if (!resposta) {
                            // O usuário escolheu "Não", cancelar o evento padrão do clique no link
                            event.preventDefault();
                            return false;
                        }
                        // O usuário escolheu "Sim", prosseguir com a exclusão
                        return true;
                    }
                </script>
            </tbody>
        </table>
        <a href="InicioAdm.php" class="left-button">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>
    </div>
    <?php
    // put your code here
    ?>
</body>

</html>