<?php  
	include "../ManageurDB.php";

	$man = new ManageurDB();

	if(isset($_POST['type'] )&& isset($_POST['id'])){

		$type = $_POST['type'];
		$id = $_POST['id'];

		switch($type){

			case 'details':

				break;
			case 'modifier':

				break;
			case 'rejeter':
				break;
		}
	}
?>