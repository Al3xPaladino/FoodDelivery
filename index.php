<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body id="bodi" style="overflow: hidden;">

	<?php include 'include/menu.php'; ?>

	<div class="main-wrapper">
	  <div class="main-content">
	    <h4>Ristorante</h4>

	       <section class="grid">
			  <div class="grid__container">
			    <div class="grid__item" onclick="aprire('img1')">
			      <div class="grid__img">
			        <img id="img1" src="img/patatine.jpg" alt="Patatine Fritte" title="">
			      </div>
			    </div>
			    <div class="grid__item" onclick="aprire('img2')">
			      <div class="grid__img">
			        <img id="img2" src="img/gnocchi.jpg" alt="Gnocchi di patate" title="">
			      </div>
			    </div>
			    <div class="grid__item" onclick="aprire('img3')">
			      <div class="grid__img">
			        <img id="img3" src="img/trenette.jpg" alt="Trenette al ragù di triglie" title="">
			      </div>
			    </div>
			    <div class="grid__item" onclick="aprire('img4')">
			      <div class="grid__img">
			        <img id="img4" src="img/manzo.jpg" alt="Filetto di manzo" title="">
			      </div>
			    </div>
			    <div class="grid__item" onclick="aprire('img5')">
			      <div class="grid__img">
			        <img id="img5" src="img/patate.jpg" alt="Patate al forno con cipolla e pomodoro" title="">
			      </div>
			    </div>
			    <div class="grid__item" onclick="aprire('img6')">
			      <div class="grid__img">
			        <img id="img6" src="img/baccala.jpg" alt="Trancio di baccalà al vapore" title="">
			      </div>
			    </div>
			    <div class="grid__item" onclick="aprire('img7')">
			      <div class="grid__img">
			        <img id="img7" src="img/cassata.jpg" alt="Cassata Siciliana" title="">
			      </div>
			    </div>
			    <div class="grid__item" onclick="aprire('img8')">
			      <div class="grid__img">
			        <img id="img8" src="img/cannolo.jpg" alt="Cannolo al Pistacchio" title="">
			      </div>
			    </div>
			  </div>
			</section>

	  </div> 
	</div>

	<div id="myModal" class="modal">
	  <span class="chiudi">&times;</span>
	  <img class="modal-content" id="img">
	  <div id="caption"></div>
	</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script>

var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
function aprire(id){
	document.getElementById('bodi').style.overflow = "hidden";
	var img = document.getElementById(id);
	var modalImg = document.getElementById("img");
	var captionText = document.getElementById("caption");
  	modal.style.display = "block";
  	modalImg.src = img.src;
  	captionText.innerHTML = img.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("chiudi")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>
</html>