<?php
session_start();
session_destroy();

echo "<script>";
echo "window.location.href = '../VIEW/Inicio.php';";
echo "</script> ";
?>
