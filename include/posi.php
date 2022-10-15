<div class="wrapper animate__animated animate__backInDown" id="posi" style="display: block">
	<div class="pi">Scegli il punto di consegna</div>
	<div class="buttons">
		<div class="container">
			<a class="btnd effect01" target="_blank" onclick="getLocation()">
				<span id="oggi">Posizione attuale</span>
			</a>
		</div>
	</div>
	<a onclick="inizializza()" id="altre">Scegli posizione</a>
	<br><br>
	<div id="maps"></div>
	<br><br><br>
	<input type="submit" class="cen" value="Conferma" onclick="next(0)">
</div>