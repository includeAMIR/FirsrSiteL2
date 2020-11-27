<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width = device-width, initial-scale = 1" charset="utf-8">
    <title>ionienne</title>
    <link rel="icon" type="image/png" href="../image/logo.png" />

    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-success">
       
        <span class="navbar-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <ul class="navbar-nav">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <a class="nav-link" href="Accueil.php">Accueil</a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <li class="nav-item">
                <a class="nav-link" href="Devloppeur.php">Devlopper</a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <li class="nav-item">
                <a class="nav-link" href="index.php">Contact</a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Plus
                        <span class="glyphicon glyphicon-list"> </span> </button>
                    <ul class="dropdown-menu">
                            <li class="nav-item"><a href="connexion.php">connexion</a></li>
                            <li class="nav-item"><a href="Compte.php">Devenez freelance</a></li>
                            <li class="nav-item"><a href="Compte-cli.php">Devenez Client</a></li>
                    </ul>
                </div>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        </ul>
    </nav>
<div class="fixed-center">
<?php
$link = new PDO('mysql:host=localhost;dbname=Webproject','root','root');
$sql = "SELECT nom, prenom, tarif, faculte, login FROM Devloppeur ORDER BY nom";
$result = $link->query($sql);
?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
      <title>ionienne</title>
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
            <th>Prenom</th>
            <th>Tarif</th>
            <th>Faculte</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>

            <?php
while ($donnee = $result->fetch()) {
    $affnom = $donnee['nom'];
    $affprenom = $donnee['prenom'];
    $afftarif = $donnee['tarif'];
    $afffaculte = $donnee['faculte'];
    $affemail =  $donnee['login'];
    echo "<tr>";
    echo "<td>" . "$affnom" . "</td>";
    echo "<td>" . "$affprenom" . "</td>";
    echo "<td>" . "$afftarif" . "</td>";
    echo "<td>" . "$afffaculte" . "</td>";
    echo "<td>" . "<a href='connexion.php'>" ."$affemail" ."</a>" . "</td>";
    echo "</tr>";
}
?>

        </tbody>
      </table>
    </div>
    </div>

    </body>
    </html>


