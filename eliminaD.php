<?php require 'secure/session.php'; 
	if(isset($_GET['row'])){
		$id=$_GET['row'];
		$connection = new mysqli("localhost", "root", "", "ristorante");
		if ($connection->connect_error) {
	  		die("Connessione fallita: " . $connection->connect_error);
		}

		$sql = "DELETE FROM ordini_delivery WHERE id = $id" ;
		if ($connection->query($sql) === TRUE) {
	  		echo "Eliminazione effettuta";
		} else {
	  		echo "Errore nell'eliminazione: " . $connection->error;
		}

		$connection->close();
		header("Location: account.php");
	}else{
		echo "Errore";
		header("Location: account.php");
	}