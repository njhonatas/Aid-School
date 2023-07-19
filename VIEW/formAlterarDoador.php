<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../CSS/AlterarDoador.css">

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
    
        <title>Alterar Doador</title>

    </head>
    <body>
        <?php
        require_once '../DAO/DoadorDAO.php';
        $cpfdoador = $_GET["id"];
        $doadorDAO = new DoadorDAO();
        $doador= $doadorDAO->PesquisarUmRegistro($cpfdoador);
        ?>
        <!-- navbar  -->

        <!-- Incluir a página -->
        <?php
        include '../VIEW/NavbarperfilAdm.php';
        ?>


        <div class="form-container">
            <h2 class="form-title">Alterar Doador</h2>

            <!--formulario -->
            <form name="CadastroDoador"  action="../CONTROLLER/AlterarDoador.php" method="post">
                
                <input type="hidden" name="cpfdoador" value="<?php echo $doador["cpfdoador"] ?>">
                
                <div class="form-group">
                    <label for="nomedoador">Nome:</label>
                    <input type="text" name="nomedoador" required placeholder="Digite seu Nome Completo" value="<?php echo $doador["nomedoador"] ?>">
                </div>

                <div class="form-group">
                    <label for="rgdoador">RG:</label>
                     <input type="text" name="rgdoador" maxlength="9" required placeholder="Digite o seu RG " OnKeyPress="formatar('#.###.###', this)" value="<?php echo $doador["rgdoador"] ?>" >
                </div>         

                <div class="form-group">
                    <label for="telefonedoador">Celular:</label>
                    <input type="tel" name="telefonedoador" maxlength="13" required placeholder="Digite seu Número de Celular ex: 61-00000-0000" OnKeyPress="formatar('##-#####-####', this)" value="<?php echo $doador["telefonedoador"] ?>">
                </div>

                <div class="form-group">
                    <label for="emaildoador">E-mail:</label>
                    <input type="email" name="emaildoador" required placeholder="Digite seu Endereço de Email " onblur="validacaoEmail(f1.email)"  maxlength="52" size='52' value="<?php echo $doador["emaildoador"] ?>">
                    <div id="msgemail"></div>
                </div>
                
                <!-- email link  java -->
                <script src="../JS/Email.js"></script>
                
                <div class="form-group">
                    <label for="enderecodoador">Endereço:</label>
                    <input type="text" name="enderecodoador" required placeholder="Digite seu Endereço " value="<?php echo $doador["enderecodoador"] ?>">
                </div>

                <button type="button" class="left-button" onclick="window.history.back()">
                <i class="fas fa-arrow-left"></i> Voltar
                </button>
              
                <input type="submit" class="right-button" value="Finalizar">
            </form>
        </div>
    </body>
</html>

