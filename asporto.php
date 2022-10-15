<!DOCTYPE html>
<?php include 'secure/session.php';$_SESSION['page']="asporto" ?>
<html>
<head>
	<title>Asporto</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/asporto.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<script type="text/javascript" src="js/funzioni.js"></script>
</head>
<body>

	<?php include 'include/menu.php'; ?>

	<div class="main-wrapper">
	  <div class="main-content">
	    <h4>Asporto</h4>
	    <br>
	    <center>
	    	<?php include 'include/iconMenu.php'; ?>
	    </center>
	    <br><br>
	    <div class="posts">

		    <center>
		     <?php include 'include/asp1.php'; ?>
			</center>

			<center>
		     <?php include 'include/asp2.php'; ?>
			</center>

			<center>
		     <?php include 'include/asp3.php'; ?>
			</center>

			<center>
		     <?php include 'include/asp4.php'; ?>
			</center>

			<?php if (isset($_SESSION['esito'])&&$_SESSION['esito']!=""): ?>
				<center>
					<div class="wrapper animate__animated animate__backInDown" id="esito" style="display: none">
						<br>
						<div class="pi"><?php echo $_SESSION['esito']; ?></div>
						
						<br><br><br>
						<input type="submit" class="cen" value="Indietro" onclick="indietro()">
					</div>
				</center>
			<?php endif ?>

	    </div>
	  </div> 
	</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/asporto.js"></script>
<script type="text/javascript" src="js/load.js"></script>
<?php if (isset($_SESSION['esito'])&&$_SESSION['esito']!=""): ?>
	<script type="text/javascript">
		document.getElementById('asp1').style.display = "none";
		document.getElementById('esito').style.display = "block";
	</script>
<?php endif;unset($_SESSION['esito']); ?>
</html>