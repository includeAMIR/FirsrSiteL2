<?php 
    session_start();

    unset($_SESSION);
    session_regenerate_id(true);
    session_destroy();
    header('LOCATION: connexion.php');
?>