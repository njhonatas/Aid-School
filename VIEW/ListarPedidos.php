<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
require_once '../DAO/PedidoDAO.php';
require_once '../DTO/PedidoDTO.php';
$PedidoDAO = new PedidoDAO;
$resultado = $PedidoDAO->Pesquisar();
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <!-- css da Pagina -->
    <link rel="stylesheet" href="../CSS/lista.css">
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

    <title>Listar Pedidos</title>
</head>

<body>

    <!-- Incluir a página -->
    <?php
    include '../VIEW/NavbarperfilAdm.php';
    ?>

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
    </header>

    <div class="containerlistar">
        <h1 class="heading">Histórico de Pedidos </h1>
        <table id='dataTable'>
            <thead>
                <tr>
                    <td>Código do Pedido</td>
                    <td>Nome</td>
                    <td>Descrição</td>
                    <td>Status</td>
                    <td>Condição</td>
                    <td>Data do Pedido</td>
                    <td>Quantidade</td>
                    <td>Representante</td>
                    <td>Instituto</td>
                    <td>Alterar</td>
                    <td>Apagar</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultado as $r) {
                    echo "<tr>";
                    echo "<td>{$r["idpedido"]}</td>";
                    echo "<td>{$r["nomepedido"]}</td>";
                    echo "<td>{$r["descricaopedido"]}</td>";
                    echo "<td>{$r["STATUSPEDIDO"]}</td>";
                    echo "<td>{$r["condicao"]}</td>";
                    echo "<td>{$r["DATAFORMATADA"]}</td>";
                    echo "<td>{$r["quantidadepedido"]}</td>";
                    echo "<td>{$r["REPRESENTANTE"]}</td>";
                    echo "<td>{$r["INSTITUTO"]}</td>";
                    echo "<td><a href='../VIEW/formAlterarPedido.php?id={$r["idpedido"]}'><i class='fas fa-pencil-alt'></i> Alterar</a></td>";
                    echo "<td><a href='../CONTROLLER/ApagarPedido.php?id={$r["idpedido"]}' onclick='return confirmarApagar(event, {$r["idpedido"]})'><i class='fas fa-trash-alt'></i> Apagar</a></td>";
                    echo "</tr>";
                }
                ?>

                <script>
                    function confirmarApagar(event, idPedido) {
                        var resposta = confirm('Tem certeza que deseja apagar o pedido?');
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