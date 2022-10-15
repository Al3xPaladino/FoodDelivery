<table border="0">
   	<tr>
   		<?php if(isset($_SESSION['page'])&&$_SESSION['page']=="delivery")echo "<th id=\"Tposi\" onclick=\"posi()\"><i class=\"fas fa-map-marker-alt\"></i></th>"; ?>
   		<th id="Tdata" onclick="data()"><i class="fas fa-calendar-alt fa-lg"></i></th>
   		<th id="Tora" onclick="orar()"><i class="fas fa-clock fa-lg"></i></th>
   		<th id="Tcar" onclick="piatti()"><i class="fas fa-shopping-cart"></i>&nbsp; <span id="num">0</span></th>
  	</tr>
</table>