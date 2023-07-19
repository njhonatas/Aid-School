<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro Usuario</title>

        <!-- outros elementos head... -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <!-- favicon link  -->
        <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!-- css link  navbar -->
        <link rel="stylesheet" href="../CSS/navbar.css">

        <!-- link css login -->
        <link rel="stylesheet" href="../CSS/CadastroUsuario.css">

        <!-- java script icones -->
        <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>

        
    </head>
    <body>

        <div>
            <!-- navbar link  java -->
            <script src="../JS/script.js"></script>

            <div class="container3">
                <div class="buttonsForm">
                    <div class="btnColor"></div>
                </div>

                <form action="../CONTROLLER/CadastroUsuarioController.php" name="CadastroUsuario" method="post">

                    <input name="login" type="text" placeholder="Crie um login" required maxlength="10" />
                    <i class="fa fa-user icon"></i>


                    <input name="senha" type="password" placeholder="Crie sua senha" id="password" required>
                    <i class="fas fa-lock iPassword"></i>
                    
                    
                    <input name="senha" type="password" placeholder="Confirmar senha" id="confirm_password" required>
                    <i class="fas fa-lock iPassword2"></i>

                    <!-- senha link  java -->
                    <script src="../JS/senha.js"></script>


                    <div class="select-form">
                        <select name="idPerfil">
                            <option value="0" selected hidden>Tipo de perfil</option>
                            <option value="2">Representante</option>
                            <option value="3">Doador</option>

                            <!-- <option value="1" selected hidden>Administrador</option>... -->
                        </select>

                    </div>

                    <div class="botoes">
                        <button type="submit">Avançar</button>
                    </div>

                    <p>Se você já é cadastrado <a href="Login.php">clique aqui</a> e faça login.</p>

                </form>

                <img class="icone" src="../IMAGES/icone_login.png" alt="imagem de login">
            </div>
    </body>
</html>