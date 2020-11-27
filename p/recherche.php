<?php 
   $profil = htmlspecialchars($_POST['profil']);
   $montant_min = htmlspecialchars($_POST['montantmin']);
   $montant_max = htmlspecialchars($_POST['montantmax']);

   $link = new PDO('mysql:host=localhost;dbname=Webproject','root','root');
    if(empty($montant_min)){$montant_min = 150;}
    if(empty($montant_max)){$montant_max = 2800;}
    if(empty($profil)){
        $sql = "SELECT nom, prenom, tarif FROM Devloppeur WHERE (tarif BETWEEN '$montant_min' AND '$montant_max')";
        $result = $link -> query($sql);
    }else{ 
   $sql = "SELECT nom, prenom, tarif FROM Devloppeur WHERE (tarif BETWEEN '$montant_min' AND '$montant_max') AND faculte = '$profil' ";
   $result = $link -> query($sql);
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>ionienne</title>
  <link rel="icon" type="image/png" href="../image/logo.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" id = "tableres">
        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Tarif</th>
      </tr>
    </thead>
    <tbody>

        <?php 
            while($donnee = $result->fetch()){ 
            $affnom  = $donnee['nom'];
            $affprenom = $donnee['prenom'];
            $afftarif = $donnee['tarif'];
            echo "<tr>";
            echo "<td>" . "$affnom" . "</td>" ;
            echo "<td>" . "$affprenom" . "</td>" ;
            echo "<td>" . "$afftarif" . "</td>" ;
            echo "</tr>";
            }
        ?>

    </tbody>
  </table>
</div>

</body>
</html>

