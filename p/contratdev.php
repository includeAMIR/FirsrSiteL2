<?php 
session_start();
$iddev = $_SESSION['Auth']['id_dev'];

?>
<?php 
$link = new PDO('mysql:host=localhost;dbname=Webproject','root','root');
$sql = "SELECT dev.nom AS nom , cli.entreprise AS entreprise , cont.montant AS montant , cont.date_debut AS date_debut 
FROM Contrat cont,Client cli, Devloppeur dev 
WHERE cont.id_dev = '$iddev' AND cli.id_cli= cont.id_cli AND dev.id_dev = '$iddev'";
$result = $link->query($sql);
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
    <br>
    <div class="container" id = "tableres">

      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Entreprise</th>
            <th>Montantnt</th>
            <th>Date debut</th>
            <th>Contrat</th>
          </tr>
        </thead>
        <tbody>

            <?php
    while($donnee = $result->fetch()) {
    $affnom = $donnee['nom'];
    $affentreprise = $donnee['entreprise'];
    $affmontant = $donnee['montant'];
    $affdate = $donnee['date_debut'];
    $affcontrat =  "<a href='../contrat/contrat.pdf'>" . "Contrat" . " </a>" ;
 
    echo "<tr>";
    echo "<td>" . "$affnom" . "</td>";
    echo "<td>" . "$affentreprise" . "</td>";
    echo "<td>" . "$affmontant" . "</td>";
    echo "<td>" . "$affdate" . "</td>";
    echo "<td>" . "$affcontrat" . "</td>" ;
    echo "</tr>";
}
?>

        </tbody>
      </table>
    </div>
    </div>

    </body>
    </html>


