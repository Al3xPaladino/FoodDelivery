<?php
if(isset($_GET['L'])){

	if(isset($_POST['username'])&&isset($_POST['password'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		session_start();
		session_unset();
		session_destroy();
		
		session_start();

		if(strlen($username)!=0&&strlen($password)!=0){
			$connection = new mysqli("localhost", "root", "", "ristorante");
			$query = "SELECT * FROM utenti WHERE Username = '$username' LIMIT 1";
			$result = $connection->query($query);
			if(@$result->num_rows != 0){
				$row = $result->fetch_array();
				if($row['Password']==md5($password)){
					echo "Accesso eseguito con successo!";

					$_SESSION['CodUser']  = $row['id'];
					$_SESSION['nome']     = $row['Nome'];
					$_SESSION['cognome']     = $row['Cognome'];
					$_SESSION['username'] = $username;
					$_SESSION['time'] = time();

					header("Location: index.php");
				} else{
					echo "Password Errata!";
					$_SESSION['erro'] = "Password Errata!";
					header("Location: login.php");
				}
			} else{
				echo "Username Errato!";
				$_SESSION['erro'] = "Username Errato!";
				header("Location: login.php");
			}
			$result->free();
			$connection->close();
		} else{
			echo "Username/Password vuoti!";
			$_SESSION['erro'] = "Username/Password vuoti!";
			header("Location: login.php");
		}

	} else{
			session_start();
			session_unset();
			session_destroy();

			session_start();
			echo "Username/Password errati!";
			$_SESSION['erro'] = "Username/Password errati!";
			header("Location: login.php");
		}


}
else if(isset($_GET['R'])){
	
	if(isset($_POST['name'])&&isset($_POST['surname'])&&isset($_POST['username'])&&isset($_POST['pasw1'])&&isset($_POST['pasw2'])){

		$name = $_POST['name'];
		$surn = $_POST['surname'];
		$username = $_POST['username'];
		$password = $_POST['pasw1'];
		$Rpassword = $_POST['pasw2'];
		session_start();
		session_unset();
		session_destroy();

		session_start();

		if (strlen($username) != 0 && strlen($password) != 0){
			if($password!=$Rpassword){
				echo "Password non uguale!";
				$_SESSION['erro'] = "Password non uguale!";
				header("Location: login.php");
			} else{
				$connection = new mysqli ("localhost", "root", "", "ristorante");
				$query = "SELECT * FROM utenti WHERE Username = '$username'";
				$result = $connection->query($query);
				if ($result->num_rows != 0){
					echo "Utente $username già presente nel database.";
					$_SESSION['erro'] = "Utente già presente nel database";
					header("Location: login.php");
				} else{
					$password=md5($password);
					$query = "INSERT INTO utenti (id, Nome, Cognome, Username, Password)
										  VALUES (Null, '$name', '$surn', '$username', '$password')";
					if($connection->query($query)){
						echo "Utente inserito correttamente!";
						$_SESSION['erro'] = "Registrazione effettuata!                                                                   Esegui il Login per accedere!";
						header("Location: login.php");
					}
					else{
						echo "Errore inserimento utente!";
						$_SESSION['erro'] = "Errore inserimento utente!";
						header("Location: login.php");
					}
				}
			}
			$result->free();
			$connection->close();
		} else{
			echo "Username/Password vuoti!";
			$_SESSION['erro'] = "Username/Password vuoti!";
			header("Location: login.php");
		}

	} else{
			session_start();
			session_unset();
			session_destroy();

			session_start();
			echo "Campi registrazione errati!";
			$_SESSION['erro'] = "Campi registrazione errati!";
			header("Location: login.php");
		}


}
else{

	session_start();
	session_unset();
	session_destroy();

	session_start();
	$_SESSION['erro'] = "Error 404! [Page not found]";
	header("Location: index.php");

}