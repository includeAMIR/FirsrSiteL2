<?php
   class Auth{
       static function est_connecter(){
           if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['emailcon']) && isset($_SESSION['Auth']['passewordcon']) && (isset($_SESSION['Auth']['id_cli']) || isset($_SESSION['Auth']['id_dev']))){
            
               return true;
           }
           else return false;
       }
   } 
?>
