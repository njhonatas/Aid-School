<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
require_once '../DAO/DoacaoDAO.php';
require_once '../DTO/DoadorDTO.php';

$DoacaoDAO = new DoacaoDAO;
$resultado = $DoacaoDAO->Pesquisar();
session_start();
$_SESSION["idusuario"];
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

        <!-- home css link  -->
        <link rel="stylesheet" href="../CSS/Lista.css">
        <link rel="stylesheet" href="../CSS/NavbarperfilAdm.css">


        <!--Script de pesquisa-->
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>

        <title>Listar Doação</title>
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

        <?php // print_r($_SESSION);?>
        <div class="containerlistar">
            <h1 class="heading">Lista de Doações </h1>
            <table id='dataTable'>
                <thead>
                    <tr>
                        <td>Código da Doação</td>
                        <td>Nome</td>
                        <td>Descrição</td>
                        <td>Quantidade</td>
                        <td>Data</td>
                        <td>Representante da Instituição</td>
                        <td>Código do Pedido</td>
                        <td>Doador</td>
                        <td>Alterar</td>
                        <td>Apagar</td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($resultado as $r) {
                        $quantidade = $r["quantidadedoacao"];
                        $iddoacao = $r["iddoacao"];
                        $idpedido = $r["idpedido"];
                        echo "<tr>";
                        echo "<td>{$r["iddoacao"]}</td>";
                        echo "<td>{$r["nomedoacao"]}</td>";
                        echo "<td>{$r["descricaodoacao"]}</td>";
                        echo "<td>{$r["quantidadedoacao"]}</td>";
                        echo "<td>{$r["datadoacao"]}</td>";
                        echo "<td>{$r["nomerep"]}</td>";
                        echo "<td>{$r["idpedido"]}</td>";
                        echo "<td>{$r["nomedoador"]}</td>";
                        echo "<td><a href='../VIEW/formAlterarDoacao.php?id=$iddoacao'><i class='fas fa-pen'></i></a></td>";
                        echo "<td><a href='../CONTROLLER/ApagarDoacao.php?id=$iddoacao&quantidade=$quantidade&idpedido=$idpedido'onclick='return confirmarApagar(event, {$r["iddoacao"]})'><i class='fas fa-eraser'></i></a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <a href="InicioAdm.php" class="left-button">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </div>
        <?php
        // put your code here
        ?>
        <script>
            function confirmarApagar(event, iddoacao) {
                var resposta = confirm('Tem certeza que deseja apagar a Doação?');
                if (!resposta) {
                    // O usuário escolheu "Não", cancelar o evento padrão do clique no link
                    event.preventDefault();
                    return false;
                }
                // O usuário escolheu "Sim", prosseguir com a exclusão
                return true;
            }
        </script>
    </body>

</html>