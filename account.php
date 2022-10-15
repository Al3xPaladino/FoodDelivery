<!DOCTYPE html>
<?php include 'secure/session.php'; ?>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/account.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body id="bodi">

	<?php include 'include/menu.php'; ?>

	<div class="main-wrapper">
	  <div class="main-content">
	    <h4>Account - [<?php echo $_SESSION['username']; ?>]</h4>
<br><br><br>
	    <center><h2>Ordini Delivery</h2>
	    <table class="ordini" id="ordini_delivery" border="1">
	    	<tr>
	    		<th>Id</th>
	    		<th>Coordinate Consegna</th>
	    		<th>Num. Piatti scelti</th>
	    		<th>Costo totale</th>
	    		<th>Data Consegna</th>
	    		<th></th>
	    	</tr>
	    	<?php
	    	  $connection = new mysqli("localhost", "root", "", "ristorante");
			  $query = "SELECT * FROM ordini_delivery WHERE CodUser = '$_SESSION[CodUser]'";
			  $result = $connection->query($query);
		      if($result->num_rows != 0){
		      	$cont=1;
		        while($row = $result->fetch_array()){
		          echo "<tr>
		          		  <td>$cont</td>
		          		  <td>$row[Latitudine] <b>/</b> $row[Longitudine]</td>
		          		  <td>$row[Quantita] piatti</td>
		          		  <td>$row[Costo]€</td>
		          		  <td>$row[DataTempo]</td>
		          		  <td class=\"td\">
		          		  	<form action=\"eliminaD.php\">
		          		  	  <button class=\"elimina\" name=\"row\" value=\"".$row['id']."\">
		          		  	    Elimina
		          		  	  </button>
		          		  	</form>
		          		  </td>
		          		</tr>";
		          $cont++;
		        }
		      }
	    	?>
	    </table>
<br><br>
	    <h2>Ordini Asporto</h2>
	    <table class="ordini" id="ordini_asporto" border="1">
	    	<tr>
	    		<th>Id</th>
	    		<th>Num. Piatti scelti</th>
	    		<th>Costo totale</th>
	    		<th>Data Ritiro</th>
	    		<th></th>
	    	</tr>
	    	<?php
	    	  $connection = new mysqli("localhost", "root", "", "ristorante");
			  $query = "SELECT * FROM ordini_asporto WHERE CodUser = '$_SESSION[CodUser]'";
			  $result = $connection->query($query);
		      if($result->num_rows != 0){
		      	$cont=1;
		        while($row = $result->fetch_array()){
		          echo "<tr>
		          		  <td>$cont</td>
		          		  <td>$row[Quantita] piatti</td>
		          		  <td>$row[Costo]€</td>
		          		  <td>$row[DataTempo]</td>
		          		  <td class=\"td\">
		          		  	<form action=\"eliminaA.php\">
		          		  	  <button class=\"elimina\" name=\"row\" value=\"".$row['id']."\">
		          		  	    Elimina
		          		  	  </button>
		          		  	</form>
		          		  </td>
		          		</tr>";
		          $cont++;
		        }
		      }
	    	?>
	    </table>
<br><br>
	    <h2>Prenotazioni</h2>
	    <table class="ordini" id="prenotazioni" border="1">
	    	<tr>
	    		<th>Id</th>
	    		<th>Persone</th>
	    		<th>Data prenotazione</th>
	    		<th>Cellulare</th>
	    		<th>Email</th>
	    		<th></th>
	    	</tr>
	    	<?php
	    	  $connection = new mysqli("localhost", "root", "", "ristorante");
			  $query = "SELECT * FROM prenotazioni WHERE CodUser = '$_SESSION[CodUser]'";
			  $result = $connection->query($query);
		      if($result->num_rows != 0){
		      	$cont=1;
		        while($row = $result->fetch_array()){
		          echo "<tr>
		          		  <td>$cont</td>
		          		  <td>$row[Persone] Persone</td>
		          		  <td>$row[DataTempo]</td>
		          		  <td>$row[Cell]</td>
		          		  <td>$row[Email]</td>
		          		  <td class=\"td\">
		          		  	<form action=\"eliminaP.php\">
		          		  	  <button class=\"elimina\" name=\"row\" value=\"".$row['id']."\">
		          		  	    Elimina
		          		  	  </button>
		          		  	</form>
		          		  </td>
		          		</tr>";
		          $cont++;
		        }
		      }
	    	?>
	    </table></center>
	  </div> 
	</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</html>