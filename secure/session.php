<?php
session_start();
if(!isset($_SESSION['time'])){
	$_SESSION['erro'] = "Non hai ancora fatto l'accesso!";
	header("Location: login.php");
	die;
} else{
	$now = time();
	$time = $now - $_SESSION['time'];
	if($time > 3600){
		include 'logout.php';
		die;
	}
}
?>