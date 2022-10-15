<div class="main-menu">
	 <div class="main-menu-form">
	   <div class="main-menu-btn"><i class="fa fa-bars"></i></div>
	 </div>  
	 <div class="main-menu-content">
	   <!-- main logo -->
	   <div class="main-menu-logo">
	     <h2>Menu</h2>
	   </div>
	   <!-- navigation -->
	   <ul class="main-menu-nav">
	     <li><a href="index.php" class="orange"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a></li>
	     
	     <?php if(isset($_SESSION['username'])&&$_SESSION['username']!=""): ?>
		    <li><a href="delivery.php" class="yellow"><i class="fas fa-bicycle"></i>&nbsp; Delivery</a></li>
		    <li><a href="asporto.php" class="green"><i class="fa fa-utensils"></i>&nbsp; Asporto</a></li>
		    <li><a href="prenotazioni.php" class="purple"><i class="far fa-calendar-alt"></i>&nbsp; Prenotazioni</a></li>
		    <li><a href="account.php" class="red"><i class="fas fa-user-circle"></i>&nbsp; <?php echo $_SESSION['username']?></a></li>
		    <li><a href="logout.php" class="blue"><i class="fas fa-sign-out-alt"></i>&nbsp; Logout</a></li>
	     <?php endif ?>

	     <?php if(!isset($_SESSION['username'])): ?>
	     	<li><a href="login.php" class="yellow"><i class="fa fa-users fa-fw"></i>&nbsp; Login/Registrazione</a></li>
	 	<?php endif ?>

	   </ul>

	   <a href="#" class="main-menu-close"><i class="fa fa-close"></i>&nbsp; Close menu</a>
	 </div>
</div>