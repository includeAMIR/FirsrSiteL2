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
                <a class="nav-link" href="Accueilcli.php">Accueil</a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <li class="nav-item">
                <a class="nav-link" href="index.php">Contact</a>
            </li>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item">
            <a href = "contratcli.php" class="nav-link">Contrat</a>
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
        <form class="form" method="POST" action="recherchecli.php" id="id-form"  target="_blank" autocomplete="on">

            <div class="form-group">
                <label for="profil">Profil</label> <input id="profil" name="profil" placeholder="entrez le profil souhaité"
                    type="text" class="form-control" input-xs> <br>
            </div>
            <div class="form-row">
                <div class="col">
                    <input type="number" class="form-control" neme="montantmin" placeholder="Montant Min $" min="150">
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="montantmax" placeholder="Montant Max $" max="2000">
                </div>
            </div>
            <br>
            <button type="recherche" class="btn btn-success btn-xs "id="chercher">Chercher</button>
            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>

        </div>


</body>

</html>