var today = new Date();
	var ora = today.getHours();
	var minu = today.getMinutes();
	if(ora>=23&&minu>=45){
		var d = today.getDate()+1;
	}else{
		var d = today.getDate();
	}
	var m = today.getMonth()+1; //January is 0!
	var y = today.getFullYear();
	if(d<10){
		d='0'+d;
	}
	if(m<10){
		m='0'+m;
	}

	today = y+'-'+m+'-'+d;
	document.getElementById("date").setAttribute("min", today);
	var after;
	y++;
	after = y+'-'+m+'-'+d;
	document.getElementById("date").setAttribute("max", after);
	
	function lista(){
		document.getElementById('orario').innerHTML = "";
		var h=12;
		var mi=0;
		var ctrlDate = document.getElementById('Tdata').innerHTML;
		var today = new Date();
		var d = today.getDate();
		var m = today.getMonth()+1;
		if(d<10){
			d='0'+d;
		}
		if(m<10){
			m='0'+m;
		}
		today = d+"/"+m;
		for(h=12; h<=14; h++){
			for(mi=0; mi<=45; mi+=15){
				if(today==ctrlDate){
					var clock = new Date();
					var ora = clock.getHours();
					var minu = clock.getMinutes();
					minu = minu+(ora*60);
					clock = mi+(h*60);
					if(clock<=minu){
						if(mi==0)
							document.getElementById('orario').innerHTML += "<option value=\""+h+":00\" disabled=\"true\">";
						else
							document.getElementById('orario').innerHTML += "<option value=\""+h+":"+mi+"\" disabled=\"true\">";
					}else{
						if(mi==0)
							document.getElementById('orario').innerHTML += "<option value=\""+h+":00\">";
						else
							document.getElementById('orario').innerHTML += "<option value=\""+h+":"+mi+"\">";
					}
				}else{
					if(mi==0)
						document.getElementById('orario').innerHTML += "<option value=\""+h+":00\">";
					else
						document.getElementById('orario').innerHTML += "<option value=\""+h+":"+mi+"\">";
				}
			}	
		}
		for(h=19; h<=23; h++){
			for(mi=0; mi<=45; mi+=15){
				if(today==ctrlDate){
					var clock = new Date();
					var ora = clock.getHours();
					var minu = clock.getMinutes();
					minu = minu+(ora*60);
					clock = mi+(h*60);
					if(clock<=minu){
						if(mi==0)
							document.getElementById('orario').innerHTML += "<option value=\""+h+":00\" disabled=\"true\">";
						else
							document.getElementById('orario').innerHTML += "<option value=\""+h+":"+mi+"\" disabled=\"true\">";
					}else{
						if(mi==0)
							document.getElementById('orario').innerHTML += "<option value=\""+h+":00\">";
						else
							document.getElementById('orario').innerHTML += "<option value=\""+h+":"+mi+"\">";
					}
				}else{
					if(mi==0)
						document.getElementById('orario').innerHTML += "<option value=\""+h+":00\">";
					else
						document.getElementById('orario').innerHTML += "<option value=\""+h+":"+mi+"\">";
				}
			}
		
		}
	}
	document.getElementById('Tcar').innerHTML = "<i class=\"fas fa-shopping-cart\"></i>&nbsp; <span id=\"num\">0</span>";
    document.getElementById('Tdata').innerHTML = "<i class=\"fas fa-calendar-alt fa-lg\"></i>";
    document.getElementById('Tora').innerHTML = "<i class=\"fas fa-clock fa-lg\"></i>";
	document.getElementById('date').removeAttribute('value');
	document.getElementById('ora').removeAttribute('value');
/*------------------------------asp4---------------------------------------------*/
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {
    alert('Grazie per aver acquistato')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
    document.getElementById('Tcar').innerHTML = "<i class=\"fas fa-shopping-cart\"></i>&nbsp; <span id=\"num\">0</span>";
    document.getElementById('Tdata').innerHTML = "<i class=\"fas fa-calendar-alt fa-lg\"></i>";
    document.getElementById('Tora').innerHTML = "<i class=\"fas fa-clock fa-lg\"></i>";
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
    var num = document.getElementById('num').innerHTML;
	num --;
	document.getElementById('num').innerHTML = num;
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    addItemToCart(title, price)
    updateCartTotal()
}

function addItemToCart(title, price) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            //alert('Questo elemento è stato già aggiunto al carrello!')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btno btn-danger" type="button">ELIMINA</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
    var num = document.getElementById('num').innerHTML;
	num ++;
	document.getElementById('num').innerHTML = num;
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    document.getElementById('Npiatti').value = 0;
    document.getElementById('Ncosto').value = 0;
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('€', ''))
        var quantity = quantityElement.value
		document.getElementById('Npiatti').value = (document.getElementById('Npiatti').value*1)+(quantity*1);
        total = total + (price * quantity)
    }
    
    total = Math.round(total * 100) / 100
    if((total*1)>0){
		document.getElementById('confermare').removeAttribute('disabled');
		document.getElementById('confermare').value = "Acquista";
	}else{
		document.getElementById('confermare').disabled = "true";
		document.getElementById('confermare').value = "Carrello vuoto";
	}
    document.getElementById('Ncosto').value = (total*1);
    document.getElementsByClassName('cart-total-price')[0].innerText = total + '€'
}