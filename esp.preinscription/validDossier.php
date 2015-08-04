<?php 

include "../ManageurDB.php";

$man = new ManageurDB();

if(isset($_GET['cle'])){
	$dossier = intval($_GET['cle']);
	$can = $_GET['can'];

	$etat = "valide";

	//Ajout de l'utilisateur

	$ds = $man->majDossierStatut($dossier, $etat);
	session_start();
	$_SESSION['active'] = "active";

	header('Location:connectre.php');
}
?>