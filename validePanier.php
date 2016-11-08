<?php
session_start();
//connexion BDD
include 'includes/connexion.php';

// requete
$rq = "UPDATE panier
	   SET validePanier = 1
	   WHERE idClient = ?
	   AND validePanier = 0";
// préparation
$stmt = $bdd->prepare($rq);
// execution (le client est dans la session)
$stmt->execute(array($_SESSION['idClient']));
//remerciements
echo '<script>
	 	alert("Merci pour votre commande.");
	 	window.location.replace("index.php");
	  </script>';
?>