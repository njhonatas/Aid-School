<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../CSS/CadastroInstituicao.css">

        <!-- css link  navbar -->
         <link rel="stylesheet" href="../CSS/NavbarperfilAdm.css">

        <!-- favicon link  -->
        <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">


        <!-- fonte link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

            <script>
            function formatar(mascara, documento){
              var i = documento.value.length;
              var saida = mascara.substring(0,1);
              var texto = mascara.substring(i)

              if (texto.substring(0,1) != saida){
                        documento.value += texto.substring(0,1);
              }

            }
            </script>
    
        <title>Cadastro de Instituto</title>

    </head>
    <body>
        <?php
        require_once '../DAO/InstitutoDAO.php';
        $idinstituto = $_GET["id"];
        $institutoDAO = new InstitutoDAO();
        $instituto = $institutoDAO->PesquisarUmRegistro($idinstituto);
        ?>
        
        <!-- Incluir a página -->
        <?php
        include '../VIEW/NavbarperfilAdm.php';
        ?>


        <div class="form-container">
            <h2 class="form-title">Alterar Instituição</h2>

            <!--formulario -->
            <form action="../CONTROLLER/AlterarInstituto.php" method="post">
                
                <input type="hidden" name="idinstituto" value="<?php echo $instituto["idinstituto"] ;?>">
                
                <div class="form-group">
                    <label for="nomeinstituicao">Nome:</label>
                    <input type="text" name="nomeinstituto" required placeholder="Digite o nome da Instituição "
                           value="<?php echo $instituto["nomeinstituto"] ?>">
                </div>

                <div class="form-group">
                    <label for="emailinstituicao">E-mail:</label>
                    <input type="email" name="emailinstituto" required placeholder="Digite o E-mail da Instituição" value="<?php echo $instituto["emailinstituto"] ?>" onblur="validacaoEmail(f1.email)"  maxlength="52" size='52'>
                    <div id="msgemail"></div>
                </div>
                
                <!-- email link  java -->
                <script src="../JS/Email.js"></script>

                <div class="form-group">
                    <label for="telefoneinstituicao">Telefone da Instituição:</label>
                    <input type="tel" name="telefoneinstituto" maxlength="12" OnKeyPress="formatar('##-####-####', this)" required placeholder="Digite o Telefone da Instituição" value="<?php echo $instituto["telefoneinstituto"] ?>">
                </div>

                <div class="form-group">
                    <label for="enderecoinstituicao">Endereço:</label>
                    <input type="text" name="enderecoinstituto" required placeholder="Digite o Endereço da Instituição" value="<?php echo $instituto["enderecoinstituto"] ?>">
                </div>  

                <button type="button" class="left-button" onclick="window.history.back()">
                <i class="fas fa-arrow-left"></i> Voltar
                </button>
              
                <input type="submit" class="right-button" value="Finalizar">
            </form>
        </div>
    </body>
</html>

