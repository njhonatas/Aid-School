<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <!-- favicon link  -->
        <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

        <!-- fonte link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!-- css link  navbar -->
        <link rel="stylesheet" href="../CSS/navbar.css">

        <!-- link css login -->
        <link rel="stylesheet" href="../CSS/login.css">

        <!-- java script icones -->
        <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>

    </head>
    <body>
        

        <div class="container3">
            <div class="buttonsForm">
                <div class="btnColor"></div>
            </div>

            <img class="icone" src="../IMAGES/icone_login.png" alt="imagem de login">

            <form action="../CONTROLLER/LoginController.php" method="post">
                <input name="login" type="text" placeholder=" Digite seu Login" required />
                <i class="fa fa-user icon"></i>
                <input name="senha" type="password" placeholder=" Digite sua Senha" required />
                <i class="fas fa-lock iPassword"></i>
                <div class="botoes">
                    <button type="submit">Avançar </button>
                </div>
                <p>Se você não for cadastrado <a type="_self" href="CadastroUsuario.php">clique aqui</a> e faça seu cadastro.</p>

         
            </form>
        </div>
        
    </body>
</html>