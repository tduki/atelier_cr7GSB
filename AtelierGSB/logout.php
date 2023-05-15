<?php
    session_start();
    unset($_SESSION['ok'], $_SESSION['login'], $_SESSION['leRole']);
    session_destroy();
    header('Location: connexion.php');
?>