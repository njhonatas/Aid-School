
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AID-SCHOOL</title>

        <!-- favicon link  -->
        <link rel="shortcut icon" href="../IMAGES/favicon_1.png" type="image/x-icon">

   
        <!-- icones link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        
         
        <!-- bootstrap link  -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- home css link  -->
        <link rel="stylesheet" href="../CSS/style-doador.css">
        <link rel="stylesheet" href="../CSS/footer-doador.css">
        <link rel="stylesheet" href="../CSS/NavbarperfilDoador.css">

        <!----======== CSS help======== -->
        <link rel="stylesheet" href="../CSS/stylehelp.css">

        <!-- =====Fontawesome CDN Link===== -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        
        <!-- Contatos Css Link -->

        <link rel="stylesheet" href="../CSS/contatos.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>

        <!-- Incluir a página -->
        <?php
        include '../VIEW/NavbarperfilDoador.php';
        ?>

        <!-- home section starts  -->

        <section class="home" id="home">

            <div class="container">

                <div class="title-container">
                    <div class="content">
                        <h3>Transforme o futuro do Distrito Federal</h3>
                        <h3 class="title2">Faça uma Doação!</h3>

                        <a href="ListarPedidoDoador.php" class="link-btn3"> Faça Sua Doação Agora!</a>
                    </div>
                </div>

            </div>

        </section>

        <!-- home section ends -->

        <!-- process section starts  -->

        <section class="process">

            <h1 class="heading" id="como-doar">Como Doar para instituições de ensino</h1>

            <div class="box-container container">

                <div class="box">
                    <img src="../IMAGES/33.png" alt="icone novo cadastro.png">
                    <h3>Faça seu cadastro</h3>
                    <p>Registre-se em nosso sistema agora e seja um cidadão ativo em nossa sociedade, ajude as instituições do DF!</p>
                    <a href="ListarPedidoDoador.php" class="link-btn2" target="_self">Seja um doador</a>
                </div>


                <div class="box">
                    <img src="../IMAGES/34.png" alt="icone realizar pedido.png">
                    <h3>Selecione um pedido</h3>
                    <p>Escolha os itens que deseja doar de acordo com as necessidades das instituições e torne-se um colaborador!</p>
                    <a href="ListarPedidoDoador.php" class="link-btn2" target="_self">Lista de Pedidos</a>
                </div>

                <div class="box">
                    <img src="../IMAGES/35.png" alt="doador icone.png">
                    <h3>Realizar Doação</h3>
                    <p>Preecha as informações e faça uma doação para uma instituição pública e ajude a comunidade do DF! </p>
                    <a href="ListarPedidoDoador.php" class="link-btn2" target="_self">Verificar doações</a>
                </div>   

            </div>

        </section>

        <!-- process section ends -->

        <!-- services section starts  -->

        <section class="services" id="services">

            <h1 class="heading">Como o AID-SCHOOL funciona?</h1>

            <div class="box-container container">

                <div class="box">
                    <img src="../IMAGES/24.png" alt="icone doação .png">
                    <h3>Realização de doações</h3>
                    <p>Nosso sistema busca gerenciar doações para instituições de educação pública e gratuita do Distrito Federal.</p>
                </div>
                <div class="box">
                    <img src="../IMAGES/icone doador2.png" alt="icone doador.png">
                    <h3>Recebimento de doações</h3>
                    <p>Nosso sistema permite que as instituições cadastradas recebam doações de forma simples e segura.</p>
                </div>
                <div class="box">
                    <img src="../IMAGES/29.png" alt="icone comunidade.png">
                    <h3>Interação entre comunidade e instituições de ensino</h3>
                    <p>Nosso sistema promove uma maior interação entre a comunidade e as escolas.</p>
                </div>
                <div class="box">
                    <img src="../IMAGES/36.png" alt="icone alerta.png">
                    <h3>Atenção</h3>
                    <p>Nosso sistema não realiza a entrega nem recebe as doações. O doador deve entrar em contato com o representante para combinar o método de entrega.</p>
                </div>
                <div class="box">
                    <img src="../IMAGES/23.png" alt="icone relatorio.png">
                    <h3>Pedidos de doações específicas</h3>
                    <p>Nosso sistema permite que as instituições realizem pedidos de doações específicas, visando suprir a falta de recursos necessários para a educação de qualidade.</p>
                </div>
                <div class="box">
                    <img src="../IMAGES/26.png" alt="icone educação de qualidade.png">
                    <h3>Melhoria na educação do DF</h3>
                    <p>Com sua ajuda, nosso sistema pode contribuir para a melhoria da qualidade da educação das escolas públicas do Distrito Federal.</p>
                </div>    

            </div>

        </section>

        <!-- services section ends -->

        <!-- about section starts  -->

        <section class="about" id="about">

            <div class="container">

                <div class="row align-items-center">

                    <div class="box-img">
                        <img src="../IMAGES/imagem_professora_ensinando.jpg" class="i1" alt="imagem professora ensinando">
                    </div>

                    <div class="col-md-6 content">
                        <span>Quem somos? </span>

                        <h3>Somos um grupo de estudantes comprometidos em fazer a diferença nas escolas do DF.</h3>

                        <p>Entendemos que o acesso à educação de qualidade é um direito de todos, porém, muitas escolas enfrentam desafios financeiros que afetam diretamente a aprendizagem dos alunos. Por isso, criamos este site para facilitar a doação de recursos educacionais e contribuir para a formação de uma sociedade mais justa e igualitária. Acreditamos que cada doação é uma oportunidade de transformar a vida de muitos jovens e estamos empenhados em fazer a diferença. Junte-se a nós nesta causa nobre e juntos, podemos construir um futuro melhor para as próximas gerações.</p>
                        <a href="SobrenosDoador.php" class="link-btn">Saiba mais</a>
                    </div>

                </div>

            </div>

        </section>

        <section class="contact" id="contact">
            <h1 class="heading">Perguntas Frequentes </h1>

            <section class="help">

                <img src="../IMAGES/conceito-de-ilustracao-plana-de-atendimento-ao-cliente-em-fundo-branco_701961-2134.png" style="height: 320px; margin-left: 30px;">


                <div class="accordion">
                    <div class="accordion-content">
                        <header>
                            <span class="title">Posso escolher a instituição pública para a qual minha doação será destinada?</span>
                            <i class="fa-solid fa-plus"></i>
                        </header>


                        <p class="description">
                            Sim, durante o processo de doação, você poderá selecionar a escola pública de sua preferência.
                        </p>
                    </div>

                    <div class="accordion-content">
                        <header>
                            <span class="title">Posso doar qualquer equipamento tecnológico?</span>
                            <i class="fa-solid fa-plus"></i>
                        </header>

                        <p class="description">Não. As instituições terão o poder de escolher quais equipamentos desejam receber.
                        </p>
                    </div>

                    <div class="accordion-content">
                        <header>
                            <span class="title">Posso apagar minha doação?</span>
                            <i class="fa-solid fa-plus"></i>
                        </header>

                        <p class="description">
                            Sim, é possível cancelar sua doação. Verifique essa opção na página de histórico de doações. </p>
                    </div>

                    <div class="accordion-content">
                        <header>
                            <span class="title">Como faço para combinar a entrega da doação?</span>
                            <i class="fa-solid fa-plus"></i>
                        </header>

                        <p class="description">
                            Após confirmar sua doação, você receberá os contatos do representante da instituição. </p>
                    </div>

                    <div class="accordion-content">
                        <header>
                            <span class="title">Como posso alterar minha senha?</span>
                            <i class="fa-solid fa-plus"></i>
                        </header>

                        <p class="description">
                            Entre em contato com o suporte por meio do email: aidschoolcontatos@gmail.com.
                    </div>

                    <div class="accordion-content" style="background-color: #dfe0e1">
                        <header>
                            <span class="title">Posso especificar como minha doação será usada?</span>
                            <i class="fa-solid fa-plus"></i>
                        </header>

                        <p class="description">
                            Não, você pode verificar se a instituição se adequa aos requisitos e se ela está de acordo com a doação.
                    </div>

                </div>
            </section>

            <script src="../JS/scripthelp.js"></script>

        </section>

        <section class="contact" id="contact">
            <h1 class="heading">Contatos e Redes Sociais </h1>
        <div class="contatos">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Endereço</div>
                        <div class="text-one">O Aid.school não possui endereço físico.</div>

                    </div>
                    <div class="phone details">
                        <i class="fab fa-twitter"></i>
                        <div class="topic">Redes Sociais </div>
                        <div class="text-one"><a href="https://twitter.com/AidschoolC81889" target="_blank">Twitter</a></div>
                        <div class="text-two"><a href="https://www.instagram.com/aid_schooldf/" target="_blank">Instagram</a></div>

                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">aidschoolcontatos@gmail.com</div>

                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text"></div>
                    <p></p>
                    <img src="../IMAGES/ilustracao-de-design-plano-de-suporte-ao-cliente_23-2148889374-removebg-preview.png" style=" height: 600px; margin-right: 100px;">
                </div>
            </div>
        </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <div class="footer-col">
                        <h4>ajuda</h4>
                        <ul>
                            <li><a href="SobrenosDoador.php">Sobre nós</a></li>
                            <li><a href="AjudaDoador.php">Como doar</a></li>
                            <li><a href="AjudaDoador.php">Ajuda</a></li>
                            <li><a href="ListarPedidoDoador.php">Doar</a></li>

                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Outros</h4>
                        <ul>
                            <li><a href="ListarPedidoDoador.php">Realizar Doação</a></li>
                            <li><a href="ListarPedidoDoador.php">Histórico de Doações</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Criadores</h4>
                        <ul>
                            <li><a href="mailto:brenosilvagoncalves12@gmail.com" target="external">@Breno</a></li>
                            <li><a href="mailto:sonferreira624@gmail.com" target="external">@Emerson</a></li>
                            <li><a href="mailto:erickcosta6@gmail.com" target="external">@Erick</a></li>
                            <li><a href="mailto:y.danilost2020@gmail.com" target="external">@Danilo</a></li>
                            <li><a href="mailto:jhonatas1327@gmail.com" target="external">@Jhonatas</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4>Redes Sociais</h4>

                        <div class="social-links">
                            <a href="https://twitter.com/AidschoolC81889" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/aid_schooldf/" target="_blank" ><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>        
                </div>
            </div>
        </footer>

        <!-- footer section ends -->

        <!-- java link  -->
        <script src="js/script.js"></script>

    </body>
</html>