<?php> include 'inclure.php'?>




<div id="cibleCompte" class="container-fluid">
        <img src="../image/join.png " class="center">
        <form class="form" method="POST" action="traitement.php" id="id-form" name="Contact" target="_blank" autocomplete="on">

            <div class="form-group">
                <label for="Nom"></label> <input  name="Nom" placeholder="entrez votre Nom" type="text"
                    class="form-control" input-xs> <br>
            </div>
            <div class="form-group">
                <label for="Prenom"></label> <input  name="Prenom" placeholder="entrez votre Prenom"
                    type="text" class="form-control" input-xs> <br>
            </div>
            <div class="form-group">
                    <label for="age"></label> <input  name="age" placeholder="entrez votre Age"
                        type="number" class="form-control" input-xs min="19"> <br>
            </div>
            <div class="form-group">
                    <label for="email"></label> <input  name="email" placeholder="entrez votre email" type="email"
                        class="form-control" input-xs> <br>
            </div>
            <div class="form-group">
                    <label for="password"></label> <input  name="passeword" placeholder="entrez votre mot de passe"
                        type="password" class="form-control" input-xs> <br>
             </div>
             <div class="form-group" >
            Facultées :<br>
            <label for="Facultée"></label><textarea name="Facultée" class="form-control"></textarea><br />
        </div>   

            <button type="Creer" class="btn btn-success btn-xs " id="Creer">Créer</button>
                  <br><br><br><br><br><br><br><br>
                  <br><br><br><br><br><br><br><br>
                  <br><br><br><br><br><br><br><br>
                  <br><br><br><br><br><br><br><br>
    </div>



</body>

</html>