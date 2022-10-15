<?php
	session_start();
	if(isset($_POST['num'])&&isset($_POST['data'])&&isset($_POST['ora'])&&isset($_POST['nome'])&&isset($_POST['cogn'])&&isset($_POST['cell'])&&isset($_POST['email'])){

		$num = $_POST['num'];
		$nome = $_POST['nome'];
		$cogn = $_POST['cogn'];
		$cell = $_POST['cell'];
		$email = $_POST['email'];
		$data = $_POST['data'];
		$ora = $_POST['ora'];
		//'2020-06-12 03:11:00' DataTime
		if (strlen($num) != 0 && strlen($nome) != 0 && strlen($cogn) != 0 && strlen($cell) != 0 && strlen($email) != 0 && strlen($data) != 0 && strlen($ora) != 0){

			if ($num<1||$num>12) {
				echo "Errore conteggio persone!";
				$_SESSION['esito'] = "Errore conteggio persone!";
				header("Location: prenotazioni.php");
			}

			$s="00";
			$date = "".$data." ".$ora.":".$s."";

			$today=date("Y");
				$anno=substr($data,0,4);
				if($today==$anno){
					$mm=substr($data,5,2);
					$gg=substr($data,8,2);
					$data = $gg."/".$mm;
				}else{
					$yyyy=substr($data,0,4);
					$mm=substr($data,5,2);
					$gg=substr($data,8,2);
					$data = $gg."/".$mm."/".$yyyy;
				}

			$connection = new mysqli ("localhost", "root", "", "ristorante");
			$query = "INSERT INTO prenotazioni (id, Persone, DataTempo, Cell, Email, CodUser)
								  VALUES (Null, '$num', '$date', '$cell', '$email', '$_SESSION[CodUser]')";
			if($connection->query($query)){
				echo "Prenotazione eseguita con successo!";
				$_SESSION['esito'] = "[".$_SESSION['nome']."] La sua prenotazione è stata eseguita con successo.<br>L'aspettiamo il ".$data." alle ".$ora.".<br>La contatteremo per le regole da seguire per il COVID-19.<br>Buona Giornata!";
				header("Location: prenotazioni.php");
			}
			else{
				echo "Errore eseguimento prenotazione!";
				$_SESSION['esito'] = "Errore eseguimento prenotazione!";
				header("Location: prenotazioni.php");
			}
			
		}
		else{
			echo "Errore nella prenotazione!";
			$_SESSION['esito'] = "Errore nella prenotazione!";
			header("Location: prenotazioni.php");
		}

	}
	else{
		echo "Error 404! [Page not found]";
		//$_SESSION['erro'] = "Campi registrazione errati!";
		header("Location: index.php");
	}