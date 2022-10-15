<div class="wrapper animate__animated animate__backInDown" id="del1" style="display: none">
	<div class="pi">Scegli il giorno di consegna</div>
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
	<a onclick="prev(0)" id="indietro">Indietro</a> <input type="submit" class="submit" value="Conferma" onclick="next(1)">
</div>