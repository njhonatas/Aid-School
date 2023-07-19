<!DOCTYPE html>
<?php
require_once '../DAO/InstitutoDAO.php';
$InstitutoDAO = new InstitutoDAO();
$pesquisarinstituto = $InstitutoDAO->Pesquisar();
$ultimoID = $_GET["ultimoID"];
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../CSS/CadastroRepresentante.css">

        <!-- css link  navbar -->
        <link rel="stylesheet" href="../CSS/NavbarperfilRepre.css">

        <!-- favicon link  -->
        <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!-- fonte link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">


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

        <title>Cadastro Representante</title>

    </head>
    <body>
        <!-- navbar  -->

        <header class="header fixed-top">

            <div class="container">

                <div class="row align-items-center justify-content-between">

                    <img class="logo12" src="../IMAGES/logo_sem_fundo_e_texto.png" alt="logo do AID-SCHOOL">

                    <a href="Inicio.php" class="logo">AID.<span>SCHOOL</span></a>

                    <nav class="nav"> 
                        <a href="Login.php" target="_self">Login</a>
                    </nav>
                    <div id="menu-btn" class="fas fa-bars"></div>
                </div>
            </div>

        </header>

        <!-- navbar link  java -->
        <script src="../JS/script.js"></script> 


        <div class="form-container">
            <h2 class="form-title">Cadastro Representante</h2>

            <!--formulario -->
            <form action="../CONTROLLER/CadastroRepresentanteController.php" method="post">
                <input type="hidden" name="idusuario" value="<?php echo $ultimoID; ?>">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nomerep" required placeholder="Digite seu Nome Completo">
                </div>

                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpfrep" required placeholder="Digite o seu CPF" maxlength="14" oninput="formatarCPF(this)">
                </div>

                <script>
            function formatarCPF(input) {
                // Remove todos os caracteres não numéricos
                var cpf = input.value.replace(/\D/g, '');

                // Aplica a formatação do CPF
                cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
                cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
                cpf = cpf.replace(/(\d{3})(\d{2})$/, '$1-$2');

                // Atualiza o valor do campo de entrada
                input.value = cpf;
            }
                </script>

                <div class="form-group">
                    <label for="rgrep">RG:</label>
                    <input type="text" name="rgrep" maxlength="9" required placeholder="Digite o seu RG" oninput="formatarRG(this)">
                </div>

                <script>
                    function formatarRG(input) {
                        // Remove todos os caracteres não numéricos
                        var rg = input.value.replace(/\D/g, '');

                        // Aplica a formatação do RG
                        rg = rg.replace(/(\d{1})(\d{3})(\d{3})/, '$1.$2.$3');

                        // Atualiza o valor do campo de entrada
                        input.value = rg;
                    }
                </script>


                <div class="form-group">
                    <label for="dtnascrep">Data de Nascimento:</label>
                    <input type="date" name="dtnascrep" required>
                </div>

                <div class="form-group">
                    <label for="enderecorep">Endereço:</label>
                    <input type="text" name="enderecorep" required placeholder="Digite seu Endereço ">
                </div>

                <div class="form-group">
                    <label for="emailrep">E-mail:</label>

                    <input type="email" name="emailrep" required placeholder="Digite seu Endereço de Email " onblur="validacaoEmail(f1.email)"  maxlength="52" size='52'>
                    <div id="msgemail"></div>
                </div>

                <!-- email link  java -->
                <script src="../JS/Email.js"></script>

                <div class="form-group">
                    <label for="telefonerep">Celular:</label>
                    <input type="tel" name="telefonerep" maxlength="13" required placeholder="Digite seu Número de Celular ex: 61-00000-0000" oninput="formatarTelefone(this)">
                </div>

                <script>
                                        function formatarTelefone(input) {
                                            // Remove todos os caracteres não numéricos
                                            var telefone = input.value.replace(/\D/g, '');

                                            // Aplica a formatação do telefone
                                            telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '$1-$2-$3');

                                            // Atualiza o valor do campo de entrada
                                            input.value = telefone;
                                        }
                </script>



                <div class="form-group">
                    <label for="sexorep">Sexo:</label>
                    <select class="select-form" name="sexorep">
                        <option value="">Selecione</option>
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                        <option value="3">Outro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sexorep">Instituto</label>
                    <select class="select-form" name="idinstituto">
                        <option selected="">Selecione</option>
                        <?php
                        foreach ($pesquisarinstituto as $instituto) {
                            $idinstituto = $instituto["idinstituto"];
                            $nomeinstituto = $instituto["nomeinstituto"];
                            ?>
                            <option value="<?= $idinstituto ?>"><?= $nomeinstituto ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <input type="submit" class="right-button" value="Finalizar">

            </form>
        </div>
    </body>
</html>

