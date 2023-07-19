<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="../imagens/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <title>Home</title>
    </head>
    <body>
        <?php
        session_start();
        include 'validaLogin.php';
        if (isset($_SESSION["login"])) {
            echo "Usuário logado: ", $_SESSION["login"];
            echo "<br>";
            echo "Perfil: ", $_SESSION["descricao"];
        }
        ?> 
        <table width="100%" border="1">
            <tr>
                <td>
                    <?php
                    switch ($_SESSION["descricao"]) {
                        case "Administrador":
                            ?>
                            <a href="../VIEW/InicioAdm.php" target="centro">Início Administrador</a> |
                            <?php
                            break;
                        case "Representante":
                            ?>
                            <a href = "../VIEW/InicioRepresentante.php" target="centro">Início Representante</a> |
                            <?php
                            break;
                        case "Doador":
                            ?>
                            <a href="../VIEW/InicioDoador.php" target="centro">Doador</a> |
                            <?php
                            break;
                    }
                    ?>
                    <a href="../controller/logoffController.php" >Sair</a>
                </td>
            </tr>
        </table>
        <table id="tablehome" border="1"  width="100%" height="900">
            <tr>         
                <td valign="top">
                    <iframe name="centro" src="" width="100%" height="900" frameborder="0"></iframe>
                </td>
            </tr>                
        </table>
        <?php include 'footer.php'; ?>
    </body>
</html>
