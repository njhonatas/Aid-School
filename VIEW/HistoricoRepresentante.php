<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
require_once '../DAO/RepresentanteDAO.php';
require_once '../DAO/PedidoDAO.php';
require_once '../DTO/PedidoDTO.php';

//Esse comando inicia a sessão
session_start();
include 'validaLogin.php';
if (isset($_SESSION["login"])) {
//  echo "User: ", $_SESSION["login"];
//  echo "<br>";
//  echo "Perfil: ", $_SESSION["descricao"];
//  echo "Usuario: ", $_SESSION["idusuario"];
//  echo "<br>";
}
?>
<!DOCTYPE html>
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


        <!-- home css link  -->
        <link rel="stylesheet" href="../CSS/lista2.css">
        <link rel="stylesheet" href="../CSS/NavbarperfilRepre.css">



        <!--Script de pesquisa-->
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>

        <title>Histórico de Pedidos</title>
    </head>
    <body>

        <!-- Incluir a página -->

        <header class="header fixed-top">

            <div class="container">

                <div class="row align-items-center justify-content-between">

                    <img class="logo12" src="../IMAGES/logo sem fundo e texto.png" alt="logo do AID-SCHOOL">

                    <a href="InicioRepresentante.php" class="logo">AID.<span>SCHOOL</span></a>

                    <nav class="nav">

                        <a href="InicioRepresentante.php" target="_self">Início</a>

                        <a href="CadastroPedido.php" target="_self">Realizar Pedido</a>

                        <a href="HistoricoRepresentante.php" target="_self">Histórico</a>

                        <a href="DoacoesRecebidas.php" target="_self">Doações Recebidas</a>

                        <a href="AjudaRepresentante.php" target="_self">Ajuda</a>

                        <a href="SobrenosRepresentante.php" target="_self">Sobre Nós</a>


                    </nav>

                    <div class="navbardrop">
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><?php
                                //session_start();
                                //include 'validaLogin.php';
                                if (isset($_SESSION["login"])) {
                                    echo "User: ", $_SESSION["login"];
                                    echo "<br>";
                                    echo "Perfil: ", $_SESSION["descricao"];
                                    echo "<br>";
                                }
                                ?></a>

                            <a class="dropdown-item" onclick="confirmLogout()">Sair</a>
                        </div>

                        <a onclick="confirmLogout()" target="_self">
                            <i class="fas fa-sign-out-alt" style="margin-left: 20px;"></i>
                        </a>

                        <script>
                            function confirmLogout() {
                                if (confirm("Tem certeza que deseja sair?")) {
                                    window.location.href = "../controller/logoffController.php";
                                }
                            }
                        </script>
                    </div>


                    <div id="menu-btn" class="fas fa-bars"></div>
                </div>
            </div>

        </header>
        <script src="../JS/script.js"></script>
        <script src="../JS/script2.js"></script>

    </header>
    <?php
    $RepresentanteDAO = new RepresentanteDAO();
    $usuario = $_SESSION["idusuario"];
    $pesquisa = $RepresentanteDAO->selecionaID($usuario);
    $id = $pesquisa["idrepresentante"];
//        print_r($pesquisa);
//        die();
    $PedidoDAO = new PedidoDAO();
    $resultado = $PedidoDAO->PesquisarPorRepresentante($id);
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
                    $idpedido = $r["idpedido"];
                    $idrepresentante = $r["idrepresentante"];

                    echo"<tr>";
                    echo"<td>{$r["idpedido"]}</td>";
                    echo"<td>{$r["nomepedido"]}</td>";
                    echo"<td>{$r["descricaopedido"]}</td>";
                    echo"<td>{$r["STATUSPEDIDO"]}</td>";
                    echo"<td>{$r["condicao"]}</td>";
                    echo"<td>{$r["DATAFORMATADA"]}</td>";
                    echo"<td>{$r["quantidadepedido"]}</td>";
                    echo"<td>{$r["REPRESENTANTE"]}</td>";
                    echo"<td>{$r["INSTITUTO"]}</td>";
                    echo "<td><a href='../VIEW/formAlterarPedidoRep.php?id=$idpedido'><i class='fas fa-pencil-alt'></i> Alterar</a></td>";
                    echo "<td><a href='../CONTROLLER/ApagarPedidoRep.php?id=$idpedido' onclick='return confirmarApagar(event, {$r["idpedido"]})'><i class='fas fa-trash-alt'></i> Apagar</a></td>";
                    echo"</tr>";
                }
                ?>
            <script>
                function confirmarApagar(event, idpedido) {
                    var resposta = confirm('Tem certeza que deseja apagar o Pedido?');
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
        <a style="color: black" href="../VIEW/InicioRepresentante.php">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>
    </div>
</body>
</html>
