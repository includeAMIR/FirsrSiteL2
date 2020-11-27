<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width = device-width, initial-scale = 1" charset="utf-8">
    <title>Rejoignez-nous</title>
</head>
<body>
<p>
<?php

	$db = "Webproject";

	$prenom = htmlspecialchars($_POST['Prenomcli']);
	$email = htmlspecialchars($_POST['emailcli']);
	$mdp = htmlspecialchars($_POST['passewordcli']);
    $entreprise = htmlspecialchars($_POST['entreprise']);
	
	$id_s = rand(911,916);

	$link = new mysqli("localhost","root","root");
	if ($link->connect_errno){
  		die("Couldn't connect to MySQL ".$link->connect_error);
	}
	$link -> select_db($db) or die ("Select Error :" .$link->error);

	$getidcli = "SELECT id_dev FROM Devloppeur ORDER BY id_dev DESC";
	$res = $link ->query($getidcli);
	$idcli = $res->fetch_assoc();
	$incremente = $idcli['id_dcli'] + 1 ;


	$result=$link->query("INSERT INTO Client (id_cli, id_s ,prenom, login,passeword,entreprise)VALUES 
	('$incremente','$id_s','$prenom','$email','$mdp','$entreprise')")or die ("Insert Error: ". $link->error);
	$link->close();
	

/* a faire pour demain recuperer id dev le plus grand avec un order by et ajouter 1 a cette valeur pour la nouvelle insertion */
?>
<?php

	
	echo 
	"<html>".

		"<body style='padding: 0%; margin: 0; font-family: Helvetica, Arial , sans-serif'>".
			"<div style='background: #f7f7f7; padding: 5% 5% 5% 5%'>".
				"<div style='background: #0c2461; padding: 1%; border-radius: 10px 10px 0 0'>".
					"<a href='connexion.php' style='color: white; text-decoration: none; font-weight: 100; font-size: 22px'>Babourlouh</a>".
				"</div>".
				"<div style='background: white; padding: 2%'>".
					"<p style='text-align: center; font-size: 18px'><b>BIENVENU !</b></p><br/>".
			        "<p style='text-align: justify;'>Merci d'avoir rejoint <b> babourlouh </b></p>".
			        "<p style='text-align: justify;'>Maintenant tu peux enfin profiter pleinement de notre site ! :)</p><br/>".
			        
			        "<span style='text-align: center; display: block; margin: auto'>".
						"<a href='' target='_blank'>".
				        	"<input type='button' value='Connectes-toi !' style='border: none; border: 2px solid #3A539B; background: transparent; color: #3A539B; font-size: 16px; height: 60px; cursor: pointer; outline: none;'/>".
				    	"</a>".
			        "</span>".
	
		        "</div>".
				"<div style='background: white; color: #666; padding: 1%; border-radius: 0 0 10px 10px; padding-top: 20px'>".
				"</div>".
	        "</div>".
	    "</body>".
	"</html>";
?>
</p>
</body>
</html>