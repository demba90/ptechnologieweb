<?php
try
{
	 $bdd = new PDO('mysql:host=localhost;dbname=preinscript_demat', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>