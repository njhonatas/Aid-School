<header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">

            <img class="logo12" src="../IMAGES/logo sem fundo e texto.png" alt="logo do AID-SCHOOL">

            <a href="InicioDoador.php" class="logo">AID.<span>SCHOOL</span></a>

            <nav class="nav">

                <a href="InicioDoador.php" target="_self">Início</a>

                <a href="ListarPedidoDoador.php" target="_self">Doar</a>

                <a href="HistoricoDoador.php" target="_self">Histórico de Doações</a>

                <a href="AjudaDoador.php" target="_self">Ajuda</a>

                <a href="SobrenosDoador.php" target="_self">Sobre Nós</a>
                
                <a href="AjudaDoador.php" target="_self">Saiba mais</a>

            </nav>

            <div class="navbardrop">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-user"></i>
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><?php
                        session_start();
                        include 'validaLogin.php';
                        if (isset($_SESSION["login"])) {
                            echo "User: ", $_SESSION["login"];
                            echo "<br>";
                            echo "Perfil: ", $_SESSION["descricao"];
                            echo "<br>";
                        }
                        ?></a>
                    
                    <a class="dropdown-item" onclick="confirmLogout()">Sair</a>
                </div>

                <a onclick="confirmLogout()" target="_self">
                    <i class="fas fa-sign-out-alt" style="margin-left: 20px;"></i>
                </a>

                <script>
                    function confirmLogout() {
                        if (confirm("Tem certeza que deseja sair?")) {
                            window.location.href = "../controller/logoffController.php";
                        }
                    }
                </script>
            </div>


            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>

</header>
<script src="../JS/script.js"></script>
<script src="../JS/script2.js"></script>