<?php include 'inclure.php'; ?>
    </div>
    <div id="cible2" class="container-fluid">
        <img src="../image/accueillog.png " class="center">
        <form class="form" method="POST" action="recherche.php" id="id-form"  target="_blank" autocomplete="on">

            <div class="form-group">
                 <input id="profil" name="profil" placeholder="entrez le profil souhaité"
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