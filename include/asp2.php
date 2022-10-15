<div class="wrapper animate__animated animate__backInRight" id="asp2" style="display: none">
	<div class="pi">Scegli l'orario di ritiro</div>
	<input type="time" list="orario" id="ora" onchange="decidi()">
	  <datalist id="orario">

	  </datalist>
	<br><br><br><br><br><br>
	<a onclick="prev(1)" id="indietro">Indietro</a> <input type="submit" class="submit" value="Conferma" onclick="next(2)">
</div>