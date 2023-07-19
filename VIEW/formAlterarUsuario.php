<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar Usuario</title>

        <!-- outros elementos head... -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <!-- favicon link  -->
        <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!-- css link  navbar -->
        <link rel="stylesheet" href="../CSS/NavbarperfilAdm.css">

        <!-- link css login -->
        <link rel="stylesheet" href="../CSS/AlterarUsuario.css">

        <!-- java script icones -->
        <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <?php
        require_once '../DAO/UsuarioDAO.php';
        $idusuario = $_GET["id"];
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->PesquisarUmRegistro($idusuario);
        ?>

        <!-- Incluir a página -->
        <?php
        include '../VIEW/NavbarperfilAdm.php';
        ?>

        <div>
            <!-- navbar link  java -->
            <script src="../JS/script.js"></script>

            <div class="container3">
                <div class="buttonsForm">
                    <div class="btnColor"></div>
                </div>

                <form action="../CONTROLLER/AlterarUsuario.php" name="AlterarUsuario" method="post">

                    <input type="hidden" name="idusuario" value="<?php echo $usuario["idusuario"] ?>">
                    <input type="hidden" name="idperfil" value="<?php echo $usuario["idperfil"] ?>">
                    <input name="login" type="text" placeholder="Altere o Login" required
                           value="<?php echo $usuario["login"] ?>" />
                    <i class="fa fa-user icon"></i>

                    <input name="senha" type="password" placeholder="Altere a senha" id="password" required>
                    <i class="fas fa-lock iPassword"></i>


                    <input name="senha" type="password" placeholder="Confirmar senha" id="confirm_password" required>
                    <i class="fas fa-lock iPassword2"></i>

                    <!-- senha link  java -->
                    <script src="../JS/senha.js"></script>



                    <!--<div class="select-form">
                        <select name="idperfil">
                            <option value="0" selected hidden>Alterar o seu Perfil</option>
                            <option value="2">Representante</option>
                            <option value="3">Doador</option>
    
                            <option value="1" selected hidden>Administrador</option>... 
                        </select>
                    </div>-->



                    <div class="botoes">
                        <button type="submit">Avançar</button>
                    </div>

                    <button type="button" class="left-button" onclick="window.history.back()">
                        Voltar
                    </button>
                </form>

                <img class="icone" src="../IMAGES/favicon_1.png" alt="imagem de login">
            </div>
    </body>

</html>