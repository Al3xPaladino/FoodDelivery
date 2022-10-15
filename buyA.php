<?php
	session_start();
	if(isset($_POST['Data'])&&isset($_POST['Ora'])&&isset($_POST['Quantita'])&&isset($_POST['Costo'])){

		$data = $_POST['Data'];
		$ora = $_POST['Ora'];
		$cont = $_POST['Quantita'];
		$euro = $_POST['Costo'];
		//'2020-06-12 03:11:00' DataTime
		if (strlen($data) != 0 && strlen($cont) != 0 && strlen($ora) != 0 && strlen($euro) != 0){
			if(strlen($data)==5){
				$yyyy=date("Y");
				$mm=substr($data,3);
				$gg=substr($data,0,2);
			}else{
				$yyyy=substr($data,6);
				$mm=substr($data,3,2);
				$gg=substr($data,0,2);
			}
			$h=substr($ora,0,2);
			$m=substr($ora,3,2);
			$s="00";

			$date = "".$yyyy."-".$mm."-".$gg." ".$h.":".$m.":".$s."";

			$connection = new mysqli ("localhost", "root", "", "ristorante");
			$query = "INSERT INTO ordini_asporto (id, Quantita, Costo, DataTempo, CodUser)
								  VALUES (Null, '$cont', '$euro', '$date', '$_SESSION[CodUser]')";
			if($connection->query($query)){
				echo "Ordine eseguito con successo!";
				$_SESSION['esito'] = "[".$_SESSION['nome']."] il suo ordine è stato eseguito con successo<br>Può venirlo a ritirate il ".$data." alle ".$ora."<br>Con pagamento al ritiro di ".$euro."€<br>Buona Giornata!";
				header("Location: asporto.php");
			}
			else{
				echo "Errore eseguimento ordine!";
				$_SESSION['esito'] = "Errore eseguimento ordine!";
				header("Location: asporto.php");
			}
			
		}
		else{
			echo "Errore nell'ordine!";
			$_SESSION['esito'] = "Errore nell'ordine!";
			header("Location: asporto.php");
		}

	}
	else{
		echo "Error 404! [Page not found]";
		//$_SESSION['erro'] = "Campi registrazione errati!";
		header("Location: asporto.php");
	}