<?php
    include 'inclure.php';
?>


    <div class ="cible3" class="container-fluid">
    <br><br><br><br>
        <form class="form" method="POST" action="session-connexion.php" id="id-form" name="Connexion"  autocomplete="on" >
        <div class="form-group">
                    <label for="emailcon"></label> <input  name="emailcon" placeholder="entrez votre email" type="email"
                        class="form-control" input-xs> <br>
            </div>
            <div class="form-group">
                    <label for="passwordcon"></label> <input  name="passewordcon" placeholder="entrez votre mot de passe"
                        type="password" class="form-control" input-xs> <br>
             </div> 
            <br>
            <div>
            <select name="choice"  class=form-control>
            <option value="Devlopper">Devlopper</option>
            <option value="Client">Client</option>
            <option value="Admin">Admin</option>
            </select>
            </div>
            <br>
            <button type="Connexion" class="btn btn-success btn-xs "id="chercher">Connexion</button>
            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>

        </div>
</body>
</html>
