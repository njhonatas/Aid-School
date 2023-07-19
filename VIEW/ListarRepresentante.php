<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
require_once '../DAO/RepresentanteDAO.php';
require_once '../DTO/RepresentanteDTO.php';
session_start();
$RepresentanteDAO = new RepresentanteDAO;
$Pesquisa = $RepresentanteDAO->Pesquisar2();
//print_r($Pesquisa);
//die();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- favicon link  -->
    <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

    <!-- favicon link  -->
    <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

    <!-- icones link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- home css link  -->
    <link rel="stylesheet" href="../CSS/lista.css">

    <!-- navbar link  -->
    <link rel="stylesheet" href="../CSS/NavbarperfilAdm.css">

    <!--Script de pesquisa-->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>


    <title>Listar Representante</title>
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


    </header>

    <div class="containerlistar">
        <h1 class="heading">Lista de Representantes </h1>
        <table id='dataTable'>
            <thead>
                <tr>
                    <!--  <td>idRepresentante</td> -->

                    <td>Nome</td>
                    <td>Nome de Usuário</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Data de Nascimento</td>
                    <td>Endereço</td>
                    <td>E-mail</td>
                    <td>Telefone</td>
                    <td>Sexo</td>
                    <td>Instituto</td>
                    <td>Código Usuario</td>
                    <td>Alterar</td>
                    <td>Apagar</td>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($Pesquisa as $P) {
                    echo "<tr>";
                    /*echo"<td>{$P["idrepresentante"]}</td>";*/

                    echo "<td>{$P["nomerep"]}</td>";
                    echo "<td>{$P["login"]}</td>";
                    echo "<td>{$P["cpfrep"]}</td>";
                    echo "<td>{$P["rgrep"]}</td>";
                    echo "<td>{$P["dataformatada"]}</td>";
                    echo "<td>{$P["enderecorep"]}</td>";
                    echo "<td>{$P["emailrep"]}</td>";
                    echo "<td>{$P["telefonerep"]}</td>";
                    echo "<td>{$P["SEXOCORRIGIDO"]}</td>";
                    echo "<td>{$P["nomeinstituto"]}</td>";
                    echo "<td>{$P["idusuario"]}</td>";
                    echo "<td><a href='../VIEW/formAlterarRepresentante.php?id={$P["idrepresentante"]}'><i class='fas fa-edit'></i> Alterar</a></td>";
                    echo "<td><a href='../CONTROLLER/ApagarRepresentante.php?id={$P["idrepresentante"]}'  onclick='return confirmarApagar(event)'><i class='fas fa-trash'></i> Apagar</a></td>";
                    echo "</tr>";
                }
                ?>
                <script>
                    function confirmarApagar(event) {
                        var resposta = confirm('Tem certeza que deseja apagar o representante?');
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
</body>

</html>