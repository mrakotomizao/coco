<?php
				$serveurBD = "localhost:8888";
			    $nomUtilisateur = "root";
			    $motDePasse = "root";
			    $baseDeDonnees = "casino";
			   
			    $idConnexion = mysql_connect($serveurBD,
			                                 $nomUtilisateur,
			                                 $motDePasse);
			                                 			
			    $connexionBase = mysql_select_db($baseDeDonnees);
				

?>