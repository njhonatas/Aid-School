<header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">



            <a href="InicioAdm.php" class="logo">AID.<span>SCHOOL</span></a>

            <nav class="nav">

                <a href="InicioAdm.php" target="_self">Menu</a>

                <a href="#" class="perfil">
                    <span class="perfil-link">Perfil</span>
                    <div class="dropbar">
                        <?php
                        //session_start();
                        //include 'validaLogin.php';
                        if (isset($_SESSION["login"])) {
                            echo "User: ", $_SESSION["login"];
                            echo "<br>";
                            echo "Perfil: ", $_SESSION["descricao"];
                            echo "<br>";
                        }
                        ?>
                    </div>
                </a>

                <a href="../CONTROLLER/LogoffController.php" target="_self">Sair</a>

            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>
</header>

<!-- navbar link  java -->
<script src="../JS/script.js"></script>
<script src="../JS/script2.js"></script>