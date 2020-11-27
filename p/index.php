<?php include 'inclure.php'; ?>
    <div id="cible1" >
        <img src="../image/contlog.png " class="img-circle img-responsive">
    <form class="form" method="POST" action="mail.php" id="id-form" name="Contact" target="_blank" autocomplete="on">

        <div class="form-group">
            <label for="email"></label> <input id="email" name="email" placeholder="entrez votre email" type="email"
                class="form-control" input-xs> <br>
        </div>
        <div class="form-group">
            <label for="name"></label> <input id="Nom" name="Nom" placeholder="Nom" type="text" class="form-control"
                input-xs> <br>
        </div>
        <div class="form-group">
            <label for="forename"></label> <input id="prenom" name="prenom" placeholder="prenom" type="text"
                class="form-control" input-xs> <br>
        </div>
        <div class="form-group">
            <label for="forename"></label> <input id="objet" name="objet" placeholder="objet" type="text"
                class="form-control" input-xs> <br>
        </div>

        <div class="form-group" class="has-success">
            Votre question :<br>
            <label for="question"></label><textarea name="message" class="form-control"></textarea><br />
        </div>
        <select name="qui"  class=form-control>
            <option value="Devlopper">Devlopper</option>
            <option value="Client">Client</option>
            <option value="Futur-client">Futur-client</option>
            <option value="Fdev">Futur-dev</option>
        </select>
        <br><br>
        <button type="submit" class="btn btn-success btn-xs " id="envoyer" >Envoyer</button>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        

        </div>



</body>

</html>