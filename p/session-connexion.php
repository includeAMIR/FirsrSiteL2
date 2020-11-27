<?php
	session_start();
	if(isset($_POST) && !empty($_POST['emailcon']) && !empty($_POST['passewordcon'])){
			$email = $_POST['emailcon'];
			$mdp = $_POST['passewordcon'];
			$choice = $_POST['choice'];
			$link = new PDO('mysql:host=localhost;dbname=Webproject','root','root');
		


		if($choice == 'Client'){ 
			$sqllog = "SELECT login, passeword, id_cli FROM Client WHERE (login ='$email' AND passeword = '$mdp') ";
			$result = $link->query($sqllog);
			$donnee = $result->fetch();
			$id_cli = $donnee['id_cli'];
			
			
			if ($result -> rowCount() > 0){ 
				$_SESSION['Auth'] = array('emailcon' => $email, 'passewordcon' => $mdp, 'id_cli' =>$id_cli);
				/*********************************************** */
				echo "<script type='text/javascript'>";
				echo "document.addEventListener('DOMContentLoaded', function(event) { 
				window.location.assign('privatecli.php')
				});";
				echo "</script>";
				/*********************************************** */
				
			}

			else { echo "Mauvais identifiants";  }
			
		}
		elseif ($choice == 'Admin') {
			$sqllog = "SELECT root_login, root_passeword FROM Admin WHERE root_login ='$email' AND root_passeword = '$mdp' ";
			$result = $link->query($sqllog);

			if ($result -> rowCount() > 0){ 
				$_SESSION['Auth'] = array('emailcon' => $email, 'passewordcon' => $mdp);
				echo "<script type='text/javascript'>";
				echo "document.addEventListener('DOMContentLoaded', function(event) { 
				window.location.assign('privateadmin.php')
				});";
				echo "</script>";
			}
			else { echo "Mauvais identifiants";  }
		}
		else{ 
			$sqllog = "SELECT login, passeword,id_dev FROM Devloppeur WHERE login ='$email' AND passeword = '$mdp' ";
			$result = $link->query($sqllog);
			$donnee = $result->fetch();
			$id_dev = $donnee['id_dev'];
			if ($result -> rowCount() > 0){ 
				$_SESSION['Auth'] = array('emailcon' => $email, 'passewordcon' => $mdp, 'id_dev' => $id_dev);
				echo "<script type='text/javascript'>";
				echo "document.addEventListener('DOMContentLoaded', function(event) { 
				window.location.assign('privatedev.php')
				});";
				echo "</script>";
			}
			else { echo "Mauvais identifiants";  }
		}
	}
	else { echo "\n un des champs est vide \n";}
	





?>