<?php 
session_start();
$_SESSION = array();
session_destroy();
if(!isset($_SESSION['login']))
	header('Location:index.php');
?>