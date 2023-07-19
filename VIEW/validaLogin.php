<?php
if (!isset($_SESSION["login"])) {
    echo "<script>";
    echo "window.location.href = 'http://localhost/AidSchool/VIEW/Inicio.php';";
    echo "</script> ";
}
?>
