<!DOCTYPE html>
<?php include 'secure/session.php'; ?>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/prenotazioni.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body id="bodi" style="overflow: hidden;">

	<?php include 'include/menu.php'; ?>

	<div class="main-wrapper">
	  <div class="main-content">
	    <h4>PRENOTAZIONI</h4>
	    <br><br><br>
	    
	    	<center><div id="pre1" class="animate__animated animate__fadeInDown" style="display: block">
	    		<table border="0">
	    		<tr>
	    			<td>
	    				<div class="line"><button class="bottoU" onclick="meno()">-</button></div>
	    				<div class="line"><input type="text" class="campo" value="1 Persona" id="Nper" readonly></div>
	    				<div class="line"><button class="bottoD" onclick="piu()">+</button></div>
	    				<form action="prenota.php" method="post"><input type="number" id="num" name="num" value="1" min="1" max="12" style="display: none;opacity: 0">
	    			</td>
	    			<td><input type="date" id="date" class="line campo" name="data" onchange="lista()"></td>
	    			<td>
	    				<div class="line">
	    					<input type="time" class="campo" name="ora" list="orario" id="ora">
	    					<datalist id="orario">
							
							</datalist>
						</div>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td colspan="3">
	    				<div class="input-container">
					      <i class="fas fa-user-alt"></i>
					      <input class="input-field" type="text" placeholder="Nome" name="nome" <?php echo "value=\"".$_SESSION['nome']."\""; ?>>
					    </div>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td colspan="3">
	    				<div class="input-container">
					      <i class="fas fa-user-alt"></i>
					      <input class="input-field" type="text" placeholder="Cognome" name="cogn" <?php echo "value=\"".$_SESSION['cognome']."\""; ?>>
					    </div>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td colspan="3">
	    				<div class="input-container">
					      <i class="fas fa-phone"></i>
					      <input class="input-field" type="text" placeholder="Cellulare" name="cell">
					    </div>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td colspan="3">
	    				<div class="input-container">
					      <i class="fas fa-at"></i>
					      <input class="input-field" type="email" placeholder="Email" name="email">
					    </div>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td colspan="3">
	    				<button type="submit" class="cen">PRENOTA</button></form>
	    			</td>
	    		</tr>
	    		</table>
	   		</div></center>

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
	<script type="text/javascript" src="js/prenotazioni.js"></script>
<?php if (isset($_SESSION['esito'])&&$_SESSION['esito']!=""): ?>
	<script type="text/javascript">
		document.getElementById('pre1').style.display = "none";
		document.getElementById('esito').style.display = "block";
	</script>
<?php endif;unset($_SESSION['esito']); ?>
</html>