<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
require_once '../DAO/DoadorDAO.php';
require_once '../DTO/DoadorDTO.php';
session_start();
$DoadorDAO = new DoadorDAO;
$resultado = $DoadorDAO->Pesquisar();
//print_r($resultado);
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



    <title>Listar Doadores</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
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
        <h1 class="heading">Lista de Doadores </h1>
        <table id='dataTable'>
            <thead>
                <tr>
                    <td>Nome de Usuário</td>
                    <td>CPF</td>
                    <td>RG</td>
                    <td>Nome</td>
                    <td>Telefone</td>
                    <td>Email</td>
                    <td>Endereço</td>
                    <td>Data de nascimento</td>
                    <td>idUsuario</td>
                    <td>Alterar</td>
                    <td>Apagar</td>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($resultado as $r) {
                    echo "<tr>";
                    echo "<td>{$r["login"]}</td>";
                    echo "<td>{$r["cpfdoador"]}</td>";
                    echo "<td>{$r["rgdoador"]}</td>";
                    echo "<td>{$r["nomedoador"]}</td>";
                    echo "<td>{$r["telefonedoador"]}</td>";
                    echo "<td>{$r["emaildoador"]}</td>";
                    echo "<td>{$r["enderecodoador"]}</td>";
                    echo "<td>{$r["dataformatada"]}</td>";
                    echo "<td>{$r["idusuario"]}</td>";
                    echo "<td><a href='../VIEW/formAlterarDoador.php?id={$r["cpfdoador"]}'><i class='fas fa-edit'></i> Alterar</a></td>";
                    echo "<td><a href='../CONTROLLER/ApagarDoador.php?id={$r["cpfdoador"]}' onclick='return confirmarApagar(event, {$r["cpfdoador"]})'><i class='fas fa-trash'></i> Apagar</a></td>";
                    echo "</tr>";
                }
                ?>
                <script>
                    function confirmarApagar(event, cpfdoador) {
                        var resposta = confirm('Tem certeza que deseja apagar o Doador?');
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