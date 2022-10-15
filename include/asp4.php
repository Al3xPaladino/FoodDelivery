<div class="wrapper" id="asp4" style="display: none">
	<div class="pi">Carrello Spesa</div>

	<div class="contat content-section">
    	
        <div class="cart-row">
        	<span class="cart-item cart-header cart-column">PIATTO</span>
            <span class="cart-price cart-header cart-column">PREZZO</span>
            <span class="cart-quantity cart-header cart-column">QUANTITA'</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
        	<strong class="cart-total-title">Totale </strong>
            <span class="cart-total-price">0€</span>
        </div>
        <br><br>
        <input type="submit" class="cen btno btn-primary" value="Indietro" onclick="prev(3)">
        <form id="acquista" action="buyA.php" method="post" style="display: inline-block;">
            <input type="text" id="Ndata" name="Data" style="display: none; opacity: 0;" readonly>
            <input type="text" id="Ntempo" name="Ora" style="display: none; opacity: 0;" readonly>
            <input type="text" id="Npiatti" name="Quantita" style="display: none; opacity: 0;" readonly>
            <input type="text" id="Ncosto" name="Costo" style="display: none; opacity: 0;" readonly>
            <input type="submit" id="confermare" class="cen btno btn-primary" value="Acquista" disabled="true">
        </form>
    </div>
	
</div>