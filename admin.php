<!DOCTYPE html>
<?php include 'secure/session.php'; ?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/prenotazioni.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body id="bodi" style="overflow: hidden;">

	<?php include 'include/menu.php'; ?>

	<div class="main-wrapper">
	  <div class="main-content">
	    <h4>Gestione Menu</h4>
	    <br><br><br>
	    
	    	<center>
	    		<div class="gestione">
	    			<input type="text" name="name" placeholder="Nome piatto">
	    			<textarea name="desc" placeholder="Descrizione piatto"></textarea>
	    			<input type="number" name="cost" placeholder="1€"><br><br>
	    			<button type="submit" class="cen">Aggiungi</button>
	    		</div>
	    	</center>

	   		
	    </div>
	  </div> 
	</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/prenotazioni.js"></script>
</html>