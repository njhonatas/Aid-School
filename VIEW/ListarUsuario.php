<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
require_once '../DAO/UsuarioDAO.php';
require_once '../DTO/UsuarioDTO.php';
require_once '../DAO/PerfilDAO.php';
require_once '../DTO/PerfilDTO.php';
session_start();
$UsuarioDAO = new UsuarioDAO;
$resultado = $UsuarioDAO->Pesquisar2();

//var_dump($resultado);
//die();
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

    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- home css link  -->
    <link rel="stylesheet" href="../CSS/Lista.css">

    <!-- navbar link  -->
    <link rel="stylesheet" href="../CSS/NavbarperfilAdm.css">

    <!--Script de pesquisa-->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>

    <title>Listar Usuário</title>
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
        <h1 class="heading">Lista de Usuarios </h1>
        <table id='dataTable'>
            <thead>
                <tr>
                    <td>Código do Usuario</td>
                    <td>Login</td>
                    <td>Senha</td>
                    <td>Perfil</td>
                    <td>Alterar</td>
                    <td>Apagar</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultado as $r) {
                    echo "<tr>";
                    echo "<td>{$r["idusuario"]}</td>";
                    echo "<td>{$r["login"]}</td>";
                    echo "<td>{$r["senha"]}</td>";
                    echo "<td>{$r["descricao"]}</td>";
                    echo "<td><a href='../VIEW/FormAlterarUsuario.php?id={$r["idusuario"]}'><i class='fas fa-pen'></i></a></td>";
                    echo "<td><a href='../CONTROLLER/ApagarUsuario.php?id={$r["idusuario"]}' onclick='return confirmarApagar(event, {$r["idusuario"]})'><i class='fas fa-eraser'></i></a></td>";
                    echo "</tr>";
                }
                ?>

                <script>
                    function confirmarApagar(event, idusuario) {
                        var resposta = confirm('Tem certeza que deseja apagar o Usuario?');
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