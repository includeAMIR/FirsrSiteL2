<?php
    session_start();
    require('Auth.php');
    if(Auth::est_connecter()){
        echo  "Admin connecter ";
        echo " " . $_SESSION['Auth']['emailcon'];
    }
    else{
        echo "non connecter";
        header('Location : connexion.php');
    }
?>