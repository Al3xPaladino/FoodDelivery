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
	document.getElementById("date").value = today;
	var after;
	y++;
	after = y+'-'+m+'-'+d;
	document.getElementById("date").setAttribute("max", after);

/*---------------------------------ROARIO------------------------------*/
	
	function lista() {
		document.getElementById('orario').innerHTML = "";
		var h=12;
		var mi=0;
		var ctrlDate = document.getElementById('date').value;//2020-06-06
		var today = new Date();
		var d = today.getDate();
		var m = today.getMonth()+1;
		var y = today.getFullYear();
		if(d<10){
			d='0'+d;
		}
		if(m<10){
			m='0'+m;
		}
		today = y+"-"+m+"-"+d;
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
	lista();
/*---------------------------------INPUT PERSONA-----------------------------------------*/

	function meno() {
		var txt = document.getElementById('Nper').value;
		var spl = txt.split(' ');

		var num = spl[0]*1;
		if(num>1)
			num--;
		var p = spl[1];
		if(num>1)
			p = "Persone";
		else
			p = "Persona";
		document.getElementById('num').value = num;
		document.getElementById('Nper').value = num+" "+p;
	}
	function piu() {
		var txt = document.getElementById('Nper').value;
		var spl = txt.split(' ');

		var num = spl[0]*1;
		if(num<12)
			num++;
		var p = spl[1];
		if(num>1)
			p = "Persone";
		else
			p = "Persona";
		document.getElementById('num').value = num;
		document.getElementById('Nper').value = num+" "+p;
	}
	function indietro(){
		window.location.replace('index.php');
	}