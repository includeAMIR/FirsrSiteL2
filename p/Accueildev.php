<?php 
session_start();
$iddev = $_SESSION['Auth']['id_dev'];
?>
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
        <a class="navbar-brand"><img src="../image/logo.png" height="80" width="80"></a>
        <span class="navbar-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <ul class="navbar-nav">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
                <a class="nav-link" href="Accueildev.php">Accueil</a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <li class="nav-item">
                <a class="nav-link" href="index.php">Contact</a>
            </li>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
            <a href = "contratdev.php" class="nav-link">Mes_contrat</a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <li class="nav-item">
              <a class = "nav-link" href = "logout.php">Deconnexion</a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          

        </ul>
    </nav>
    </div>

    <div id="cible2" class="container-fluid">
        <img src="../image/accueillog.png " class="center">
        <form class="form" method="POST" action="Accueildev.php" id="id-form"  target="_blank" autocomplete="on">

            <div class="form-group">
                <label for="profil">Profil</label> <input id="faculte" name="faculte" placeholder="entrez votre nouveau profil "
                    type="text" class="form-control" input-xs> <br>
            </div>

            <div class="form-group">
                <label for="experience">experience</label> <input id="experience" name="experience" placeholder="mettez à jour votre experience"
                    type="text" class="form-control" input-xs> <br>
            </div>

             <div class="form-group">
                <input type="number" class="form-control" name="tarif" placeholder="Tarif en $" max="2000">
            </div>
            
            <br>
            <button type="recherche" class="btn btn-success btn-xs "id="chercher">modifier</button>

            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>
        </form>
        </div>

     </div>


</body>

</html>
<?php
    $faculte = $_POST['faculte'];
    $experience = $_POST['experience'];
    $tarif = $_POST['tarif'];
    $link = new PDO('mysql:host=localhost;dbname=Webproject','root','root');
    echo $faculte;


    if(!empty($faculte)){

        $sqlfac = " UPDATE Devloppeur SET faculte='$faculte' WHERE id_dev='$iddev' ";
        $resultfac = $link->query($sqlfac);

    }
    if(!empty($experience)){

        $sqlfac = " UPDATE Devloppeur SET experience='$experience' WHERE id_dev='$iddev' ";
        $resultfac = $link->query($sqlfac);

    }
    if(!empty($tarif)){

        $sqlfac = " UPDATE Devloppeur SET tarif='$tarif' WHERE id_dev='$iddev' ";
        $resultfac = $link->query($sqlfac);

    }

?>