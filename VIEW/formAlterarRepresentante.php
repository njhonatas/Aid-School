<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../CSS/AlterarRepresentante.css">

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
             
        <title>Alterar Representante</title>

    </head>
    <body>
        <?php
        require_once '../DAO/RepresentanteDAO.php';
        $idrepresentante = $_GET["id"];
        //echo ($idrepresentante);
        //die();
        $representanteDAO = new RepresentanteDAO();
        $representante = $representanteDAO->PesquisarUmRegistro($idrepresentante);
        //echo "" . $representante["idrepresentante"];
       // exit();
        
        ?>
        
        <!-- Incluir a página -->
        <?php
        include '../VIEW/NavbarperfilAdm.php';
        ?>


        <div class="form-container">
            <h2 class="form-title">Alterar Representante</h2>

            <!--formulario -->
            <form action="../CONTROLLER/AlterarRepresentante.php" method="post">
                
                <input type="hidden" name="idrepresentante" value="<?php echo $representante["idrepresentante"];?>">
                
                <div class="form-group">
                    <label for="nomerep">Nome:</label>
                    <input type="text" name="nomerep" required placeholder="Digite seu Nome Completo" value="<?php echo $representante["nomerep"] ?>">
                </div>

                <div class="form-group">
                    <label for="rgrep">RG:</label>
                    <input type="text" name="rgrep" maxlength="9" required placeholder="Digite o seu RG " OnKeyPress="formatar('#.###.###', this)" value="<?php echo $representante["rgrep"] ?>" >
                </div>

                <div class="form-group">
                    <label for="enderecorep">Endereço:</label>
                    <input type="text" name="enderecorep" required placeholder="Digite seu Endereço " value="<?php echo $representante["enderecorep"] ?>">
                </div>

                <div class="form-group">
                    <label for="emailrep">E-mail:</label>
                   
                    <input type="email" name="emailrep" required placeholder="Digite seu Endereço de Email " onblur="validacaoEmail(f1.email)"  maxlength="52" size='52' value="<?php echo $representante["emailrep"] ?>">
                    <div id="msgemail"></div>
                </div>
                
                <!-- email link  java -->
                <script src="../JS/Email.js"></script>

                <div class="form-group">
                    <label for="telefonerep">Celular:</label>
                    <input type="tel" name="telefonerep" maxlength="13" required placeholder="Digite seu Número de Celular ex: 61-00000-0000" OnKeyPress="formatar('##-#####-####', this)" value="<?php echo $representante["telefonerep"] ?>">
                </div>

                
                <div class="form-group">
                    <label for="sexorep">Sexo:</label>
                    <select class="select-form" name="sexorep">
                        <option value="">Selecione</option>
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                        <option value="3">Outro</option>
                    </select>
                </div>
                <button type="button" class="left-button" onclick="window.history.back()">
                <i class="fas fa-arrow-left"></i> Voltar
                </button>
              
                <input type="submit" class="right-button" value="Finalizar">

            </form>
        </div>
    </body>
</html>

