		function data(){
			document.getElementById('asp1').style.display="block";
			document.getElementById('asp2').style.display="none";
			document.getElementById('asp3').style.display="none";
			document.getElementById('asp4').style.display="none";
			document.getElementById('esito').style.display="none";
		}
		function orar(){
			if(document.getElementById('Tdata').innerHTML!="<i class=\"fas fa-calendar-alt fa-lg\"></i>"){
				lista();
				Ndata();
				Ntempo();
				document.getElementById('asp1').style.display="none";
				document.getElementById('asp2').style.display="block";
				document.getElementById('asp3').style.display="none";
				document.getElementById('asp4').style.display="none";
			}
		}
		function piatti(){
			if(document.getElementById('Tdata').innerHTML!="<i class=\"fas fa-calendar-alt fa-lg\"></i>"){
				if(document.getElementById('Tora').innerHTML!="<i class=\"fas fa-clock fa-lg\"></i>"){
					Ndata();
					Ntempo();
					document.getElementById('asp1').style.display="none";
					document.getElementById('asp2').style.display="none";
					document.getElementById('asp3').style.display="block";
					document.getElementById('asp4').style.display="none";
				}
			}
		}
		function oggi(){
			var data = new Date();
			var ora = data.getHours();
			var minu = data.getMinutes();
			if(ora>=23&&minu>=45){
				var gg = data.getDate()+1;
			}else{
				var gg = data.getDate();
			}
			var mm = data.getMonth()+1;
			if(gg<10){
				gg ='0'+gg;
			}
			if(mm<10){
				mm ='0'+mm;
			}
			data = gg + "/" + mm;
			//alert("data: "+data);
			/*document.getElementById('data').value = data;
			<input type="data" name="data" id="data" readonly style="display: none">*/
			document.getElementById('Tdata').innerHTML = data;
			document.getElementById('date').style.display="none";
		}
		function Ndata(){
			document.getElementById('Ndata').value = document.getElementById('Tdata').innerHTML;
		}
		function Ntempo(){
			document.getElementById('Ntempo').value = document.getElementById('Tora').innerHTML;
		}
		function altre(){
			if (document.getElementById('date').style.display=="none") {
				document.getElementById('date').style.display="block";
			}
		}
		function scegli(){
			var data = new Date(document.getElementById('date').value);
			var gg;
			var mm;
			if(data.getDate()<10){
				gg = "0"+data.getDate();
			}else {
				gg = data.getDate();
			}
			if((data.getMonth()+1)<10){
				mm = "0"+(data.getMonth()+1);
			}else {
				mm = (data.getMonth()+1);
			}
			if ((gg>0&&gg<32)&&(mm>0&&mm<13)){
				//alert("gg: "+gg+" mm: "+mm);
				//document.getElementById('data').value = gg+"/"+mm;//<input type="data" name="data" id="data" readonly style="display: none">
				var anno = new Date();
				anno = anno.getFullYear();
				if(data.getFullYear()>anno)
					document.getElementById('Tdata').innerHTML = gg+"/"+mm+"/"+data.getFullYear();
				else
					document.getElementById('Tdata').innerHTML = gg+"/"+mm;
			}
		}
		function decidi(){
			document.getElementById('Tora').innerHTML = document.getElementById('ora').value;
		}
		function prev(n){
			if(n==1){
				document.getElementById('asp1').style.display="block";
				document.getElementById('asp2').style.display="none";
				document.getElementById('asp3').style.display="none";
				document.getElementById('asp4').style.display="none";
			}else if(n==2){
				lista();
				document.getElementById('asp1').style.display="none";
				document.getElementById('asp2').style.display="block";
				document.getElementById('asp3').style.display="none";
				document.getElementById('asp4').style.display="none";
			}else if(n==3){
				document.getElementById('asp1').style.display="none";
				document.getElementById('asp2').style.display="none";
				document.getElementById('asp3').style.display="block";
				document.getElementById('asp4').style.display="none";
			}

		}
		function next(a){
			if(document.getElementById('Tdata').innerHTML!="<i class=\"fas fa-calendar-alt fa-lg\"></i>"&&a==1){
				lista();
				Ndata();
				Ntempo();
				document.getElementById('asp1').style.display="none";
				document.getElementById('asp2').style.display="block";
				document.getElementById('asp3').style.display="none";
				document.getElementById('asp4').style.display="none";
			}else if(document.getElementById('Tdata').innerHTML!="<i class=\"fas fa-calendar-alt fa-lg\"></i>"&&a==2){
				if(document.getElementById('Tora').innerHTML!="<i class=\"fas fa-clock fa-lg\"></i>"){
					Ndata();
					Ntempo();
					document.getElementById('asp1').style.display="none";
					document.getElementById('asp2').style.display="none";
					document.getElementById('asp3').style.display="block";
					document.getElementById('asp4').style.display="none";
				}
			}else if(document.getElementById('Tdata').innerHTML!="<i class=\"fas fa-calendar-alt fa-lg\"></i>"&&a==3){
				if(document.getElementById('Tora').innerHTML!="<i class=\"fas fa-clock fa-lg\"></i>"){
					if(document.getElementById('Tcar').innerHTML!="<i class=\"fas fa-shopping-cart\"></i>&nbsp; <span id=\"num\">0</span>"){
						Ndata();
						Ntempo();
						document.getElementById('asp1').style.display="none";
						document.getElementById('asp2').style.display="none";
						document.getElementById('asp3').style.display="none";
						document.getElementById('asp4').style.display="block";
					}
				}
			}
		}
		function indietro(){
			window.location.replace('index.php');
		}