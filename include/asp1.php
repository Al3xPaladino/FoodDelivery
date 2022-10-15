<div class="wrapper animate__animated animate__backInDown" id="asp1" style="display: block">
	<div class="pi">Scegli il giorno di ritiro</div>
	<div class="buttons">
		<div class="container">
			<a class="btn effect01" target="_blank" onclick="oggi()">
				<span id="oggi">Oggi</span>
			</a>
		</div>
	</div>
	<a onclick="altre()" id="altre">Altre date</a>
	<br><br>
	<input type="date" id="date" style="display: none" onchange="scegli()">
	<br><br><br>
	<input type="submit" class="cen" value="Conferma" onclick="next(1)">
</div>