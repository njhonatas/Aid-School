<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../CSS/AlterarDoacao.css">

        <!-- css link  navbar -->
        <link rel="stylesheet" href="../CSS/NavbarperfilDoador.css">

        <!-- favicon link  -->
        <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!-- fonte link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-5n4Eoz0Z+fu2XneIeYB+vc43tyrgCrtoleqXoAumhx5aiT6a8O/7S46gcJSkqdOk+oyPSSbTZPweT8XfEz1KOw==" crossorigin="anonymous" />


        <title>Alterar Doação</title>

    </head>
    <body>
        <?php
        require_once '../DAO/DoacaoDAO.php';
        $iddoacao = $_GET["id"];
        $doacaoDAO = new DoacaoDAO();
        $doacao = $doacaoDAO->PesquisarUmRegistro($iddoacao);
        ?>

        <!-- Incluir a página -->
        <?php
        include '../VIEW/NavbarperfilDoador.php';
        ?>

        <div class="form-container">
            <h2 class="form-title">Altere as informações de Doação</h2>

            <!--formulario -->
            <form name="CadastroDoador" action="../CONTROLLER/AlterarDoacaoDoador.php" method="post">

                <input type="hidden" name="iddoacao" value="<?php echo $doacao["iddoacao"] ?>">
                <input type="hidden" name="idpedido" value="<?php echo $doacao["idpedido"] ?>">


                <div class="form-group">
                    <label for="nomedoacao">Tipo: <?php echo $doacao["nomedoacao"] ?></label>
                </div>

                <div class="form-group">
                    <label for="descricaodoacao">Descrição: <?php echo $doacao["descricaodoacao"] ?></label>
                </div>


                <div class="form-group">
                    <label  for="quantidadedoacao">Quantidade:</label>
                    <input type="number" name="quantidadedoacao" required placeholder="Digite a Quantidade" min="1" value="<?php echo $doacao["quantidadedoacao"] ?>">
                </div>


                <button type="button" class="left-button" onclick="window.history.back()">
                    <i class="fas fa-arrow-left"></i> Voltar
                </button>

                <input type="submit" class="right-button" value="Finalizar">


            </form>
        </div>
    </body>
</html>

