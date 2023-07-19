<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
require_once '../DAO/DoacaoDAO.php';
require_once '../DTO/DoacaoDTO.php';
require_once '../DAO/DoadorDAO.php';
require_once '../DAO/PedidoDAO.php';
require_once '../DAO/RepresentanteDAO.php';

//Esse comando inicia a sessão
session_start();
include 'validaLogin.php';
if (isset($_SESSION["login"])) {
    //echo "User: ", $_SESSION["login"];
    //echo "<br>";
    //echo "Perfil: ", $_SESSION["descricao"];
    //echo "Usuario: ", $_SESSION["idusuario"];
    //echo "<br>";
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
        <link rel="stylesheet" href="../CSS/Lista.css">
        <link rel="stylesheet" href="../CSS/footer-doador.css">
        <link rel="stylesheet" href="../CSS/NavbarperfilDoador.css">


        <!--Script de pesquisa-->
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>

       
        
        

        <title>Histórico de Doação</title>
    </head>

    <body>


        <header class="header fixed-top">

            <div class="container">

                <div class="row align-items-center justify-content-between">

                    <img class="logo12" src="../IMAGES/logo sem fundo e texto.png" alt="logo do AID-SCHOOL">

                    <a href="InicioDoador.php" class="logo">AID.<span>SCHOOL</span></a>

                    <nav class="nav">

                        <a href="InicioDoador.php" target="_self">Início</a>

                        <a href="ListarPedidoDoador.php" target="_self">Doar</a>

                        <a href="HistoricoDoador.php" target="_self">Histórico de Doações</a>

                        <a href="AjudaDoador.php" target="_self">Ajuda</a>

                        <a href="SobrenosDoador.php" target="_self">Sobre Nós</a>

                        <a href="AjudaDoador.php" target="_self">Saiba mais</a>

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

        <!-- Incluir a página -->
        <?php
        $DoadorDAO = new DoadorDAO();
        $usuario = $_SESSION["idusuario"];
        $pesquisa = $DoadorDAO->PesquisaporID($usuario);
        //        echo $usuario;
        //        die();
        $cpf = $pesquisa["cpfdoador"];
        //      echo "Teste:$cpf";
        //        exit();
        $DoacaoDAO = new DoacaoDAO();
        $resultado = $DoacaoDAO->PesquisarUmDoador($cpf);
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
            <h1 class="heading">Histórico de Doações </h1>
            <table id='dataTable'>
                <thead>
                    <tr>
                        <td>Código da Doação</td>
                        <td>Nome</td>
                        <td>Descrição</td>
                        <td>Quantidade</td>
                        <td>Data da Doação</td>
                        <td>Nome do Representante</td>
                        <td>Código do Pedido</td>
                        <td>Telefone do Representante</td>
                        <td>Condição</td>
                        <td>Alterar Doação</td>
                        <td>Cancelar Doação</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultado as $r) {

                        $iddoacao = $r["iddoacao"];
                        $idpedido = $r["idpedido"];

                        $DoacaoDAO = new DoacaoDAO();
//                        $idrepresentante = $r["idrepresentante"];
//                        $rep = $DoacaoDAO->trazerinfoRep($idrepresentante);
//                        var_dump($resultado);
//                        die();

                        echo "<tr>";
                        echo "<td>{$r["iddoacao"]}</td>";
                        echo "<td>{$r["nomedoacao"]}</td>";
                        echo "<td>{$r["descricaodoacao"]}</td>";
                        echo "<td>{$r["quantidadedoacao"]}</td>";
                        echo "<td>{$r["dataFormatada"]}</td>";
                        echo "<td>{$r["nomerep"]}</td>";
                        echo "<td>{$r["idpedido"]}</td>";
                        echo "<td>{$r["telefonerep"]}</td>";
                        echo "<td>{$r["condicao"]}</td>";
                        echo "<td><a href='../VIEW/formAlterarDoacaoDoador.php?id=$iddoacao'><i class='fas fa-pen'></i></a></td>";
                        echo "<td><a href='../CONTROLLER/ApagarDoacaoDoador.php?id={$r["iddoacao"]}&idpedido={$r["idpedido"]}&quantidadepedido={$r["quantidadedoacao"]}' onclick='return confirmarApagar(event, {$r["idpedido"]})'<i class='fas fa-trash'></i></a></td>";
                        echo "</tr>";
                    }
                    ?>
                <script>
                    function confirmarApagar(event, iddoacao) {
                        var resposta = confirm('Tem certeza que deseja apagar a doação?');
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

            <a href="InicioDoador.php" class="left-button">
                <i class="fas fa-arrow-left"></i> Voltar
            </a>
        </div>
    </body>

</html>