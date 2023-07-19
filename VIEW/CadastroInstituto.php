<?php
include_once '../BOOTSTRAP/ConfiguracaoWeb.html';
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <!-- css da Pagina -->
        <link rel="stylesheet" href="../CSS/CadastroInstituicao.css">
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



        <script>
            function formatar(mascara, documento) {
                var i = documento.value.length;
                var saida = mascara.substring(0, 1);
                var texto = mascara.substring(i)

                if (texto.substring(0, 1) != saida) {
                    documento.value += texto.substring(0, 1);
                }

            }
        </script>

        <title>Cadastro de Instituto</title>

    </head>
    <body>
        <!-- Incluir a página -->
        <?php
        include '../VIEW/NavbarperfilAdm.php';
        ?>

        <!-- navbar link  java -->
        <script src="../JS/script.js"></script>
        <script src="../JS/script2.js"></script>


        <div class="form-container">
            <h2 class="form-title">Cadastro de Instituição</h2>

            <!--formulario -->
            <form action="../CONTROLLER/CadastroInstitutoController.php" method="post">

                <div class="form-group">
                    <label for="nomeinstituicao">Nome:</label>
                    <input type="text" name="nomeinstituto" required placeholder="Digite o nome da Instituição ">
                </div>

                <div class="form-group">
                    <label for="emailinstituicao">E-mail:</label>
                    <input type="email" name="emailinstituto" required placeholder="Digite o E-mail da Instituição" onblur="validacaoEmail(f1.email)"  maxlength="52" size='52'>
                    <div id="msgemail"></div>
                </div>

                <!-- email link  java -->
                <script src="../JS/Email.js"></script>

                <div class="form-group">
                    <label for="telefoneinstituicao">Telefone da Instituição:</label>
                    <input type="tel" name="telefoneinstituto" maxlength="11" required placeholder="Digite o Telefone ex: 61-0000-0000" oninput="formatarTelefone(this)">
                </div>

                <script>
            function formatarTelefone(input) {
                // Remove todos os caracteres não numéricos
                var telefone = input.value.replace(/\D/g, '');

                // Aplica a formatação do telefone
                telefone = telefone.replace(/(\d{2})(\d{4})(\d{4})/, '$1-$2-$3');

                // Atualiza o valor do campo de entrada
                input.value = telefone;
            }
                </script>




                <div class="form-group">
                    <label for="enderecoinstituicao">Endereço:</label>
                    <input type="text" name="enderecoinstituto" required placeholder="Digite o Endereço da Instituição">
                </div>  

                <a href="InicioAdm.php" class="left-button">
                    <i class="fas fa-arrow-left"></i> Voltar
                </a>

                <input type="submit" class="right-button" value="Finalizar">
            </form>
        </div>
    </body>
</html>

