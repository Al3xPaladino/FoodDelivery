<!DOCTYPE html>
<?php session_start(); ?>
<?php include 'secure/loggato.php'; ?>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body>

	<?php include 'include/menu.php'; ?>

	<div class="main-wrapper">
	  <div class="main-content">
	    <h4>Account</h4>

	    <section class="forms-section">
		  <div class="forms">
		    <div class="form-wrapper is-active">
		      <button type="button" class="switcher switcher-login">
		        Login
		        <span class="underline"></span>
		      </button>
		      <form class="form form-login" action="form.php?L=&" method="Post">
		        <fieldset>
		          <div class="input-block">
		            <label for="login-user">Username</label>
		            <input id="login-user" name="username" type="text" required>
		          </div>
		          <div class="input-block">
		            <label for="login-password">Password</label>
		            <input id="login-password" name="password" type="password" required>
		          </div>
		        </fieldset>
		        <button type="submit" class="btn-login">Login</button>
		      </form>
		    </div>
		    <div class="form-wrapper">
		      <button type="button" class="switcher switcher-signup">
		        Registrazione
		        <span class="underline"></span>
		      </button>
		      <form class="form form-signup" action="form.php?R=&" method="Post">
		        <fieldset>
		          <div class="input-block">
		            <label for="signup-user">Nome</label>
		            <input id="signup-user" name="name" type="text" required>
		            <label for="signup-user">Cognome</label>
		            <input id="signup-user" name="surname" type="text" required>
		          </div>
		          <div class="input-block">
		            <label for="signup-user">Username</label>
		            <input id="signup-user" name="username" type="text" required>
		          </div>
		          <div class="input-block">
		            <label for="signup-password">Password</label>
		            <input id="signup-password" name="pasw1" type="password" required>
		            <label for="signup-password-confirm">Conferma password</label>
		            <input id="signup-password-confirm" name="pasw2" type="password" required>
		          </div>
		        </fieldset>
		        <button type="submit" class="btn-signup">Registrati</button>
		      </form>
		    </div>
		  </div>
		</section>

	  </div> 
	</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript">
const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})

</script>
<script type="text/javascript">
	<?php 
		if(isset($_SESSION['erro'])){
			echo "alert('".$_SESSION['erro']."')";
			unset($_SESSION['erro']);
		}
	?>
</script>
</html>