<?php  
session_start();
include "../ManageurDB.php";

$man = new ManageurDB();



if(isset($_POST['quitus']) && isset($_SESSION['cone'])){

	$num = $_POST['quitus'];

	$as = $man->verifQuitus($num);

	if(!$as){

	}
	else{
		
	}
}
else
header('Location:index.php');
?>