<?php 

include "../ManageurDB.php";

$man = new ManageurDB();

if(isset($_POST['cle'])){
	$dossier = $_POST['cle'];

	$etat = "valide";

	$ds = $man->majDossierStatut($dossier, $etat);

	echo "<p>alert('Votre dossier a été validé avec succès)</p>";
}
?>