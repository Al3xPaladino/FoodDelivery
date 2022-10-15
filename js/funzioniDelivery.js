		function posi(){
			document.getElementById('posi').style.display="block";
			document.getElementById('del1').style.display="none";
			document.getElementById('del2').style.display="none";
			document.getElementById('del3').style.display="none";
			document.getElementById('del4').style.display="none";
			document.getElementById('esito').style.display="none";
		}
		function data(){
			if(document.getElementById('Tposi').innerHTML!="<i class=\"fas fa-map-marker-alt\"></i>"){
				document.getElementById('posi').style.display="none";
				document.getElementById('del1').style.display="block";
				document.getElementById('del2').style.display="none";
				document.getElementById('del3').style.display="none";
				document.getElementById('del4').style.display="none";
				document.getElementById('esito').style.display="none";
			}
		}
		function orar(){
			if(document.getElementById('Tposi').innerHTML!="<i class=\"fas fa-map-marker-alt\"></i>"){
				if(document.getElementById('Tdata').innerHTML!="<i class=\"fas fa-calendar-alt fa-lg\"></i>"){
					lista();
					Ndata();
					Ntempo();
					document.getElementById('posi').style.display="none";
					document.getElementById('del1').style.display="none";
					document.getElementById('del2').style.display="block";
					document.getElementById('del3').style.display="none";
					document.getElementById('del4').style.display="none";
					document.getElementById('esito').style.display="none";
				}
			}
		}
		function piatti(){
			if(document.getElementById('Tposi').innerHTML!="<i class=\"fas fa-map-marker-alt\"></i>"){
				if(document.getElementById('Tdata').innerHTML!="<i class=\"fas fa-calendar-alt fa-lg\"></i>"){
					if(document.getElementById('Tora').innerHTML!="<i class=\"fas fa-clock fa-lg\"></i>"){
						Ndata();
						Ntempo();
						document.getElementById('posi').style.display="none";
						document.getElementById('del1').style.display="none";
						document.getElementById('del2').style.display="none";
						document.getElementById('del3').style.display="block";
						document.getElementById('del4').style.display="none";
						document.getElementById('esito').style.display="none";
					}
				}
			}
		}
		function getLocation() {
		    if (navigator.geolocation) {
		        navigator.geolocation.getCurrentPosition(showPosition);
		    } else {
		        alert("Geolocation is not supported by this browser.");
		    }
		}
		function showPosition(position) {
		    var lat = position.coords.latitude;
		    var long= position.coords.longitude;
		    document.getElementById('Nlat').value = lat;
		    document.getElementById('Nlong').value = long;
		    document.getElementById('Tposi').innerHTML = "<i class=\"fas fa-check-circle\"></i>";
		    //alert("lat:"+lat+"\nlong:"+long);
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
			if(n==0){
				document.getElementById('posi').style.display="block";
				document.getElementById('del1').style.display="none";
				document.getElementById('del2').style.display="none";
				document.getElementById('del3').style.display="none";
				document.getElementById('del4').style.display="none";
			}else if(n==1){
				document.getElementById('posi').style.display="none";
				document.getElementById('del1').style.display="block";
				document.getElementById('del2').style.display="none";
				document.getElementById('del3').style.display="none";
				document.getElementById('del4').style.display="none";
			}else if(n==2){
				lista();
				document.getElementById('posi').style.display="none";
				document.getElementById('del1').style.display="none";
				document.getElementById('del2').style.display="block";
				document.getElementById('del3').style.display="none";
				document.getElementById('del4').style.display="none";
			}else if(n==3){
				document.getElementById('posi').style.display="none";
				document.getElementById('del1').style.display="none";
				document.getElementById('del2').style.display="none";
				document.getElementById('del3').style.display="block";
				document.getElementById('del4').style.display="none";
			}

		}
		function next(a){
			if(document.getElementById('Tposi').innerHTML!="<i class=\"fas fa-map-marker-alt\"></i>"&&a==0){
				lista();
				Ndata();
				Ntempo();
				document.getElementById('posi').style.display="none";
				document.getElementById('del1').style.display="block";
				document.getElementById('del2').style.display="none";
				document.getElementById('del3').style.display="none";
				document.getElementById('del4').style.display="none";
			}else if(document.getElementById('Tposi').innerHTML!="<i class=\"fas fa-map-marker-alt\"></i>"&&a==1){
				if(document.getElementById('Tdata').innerHTML!="<i class=\"fas fa-calendar-alt fa-lg\"></i>"){
					lista();
					Ndata();
					Ntempo();
					document.getElementById('posi').style.display="none";
					document.getElementById('del1').style.display="none";
					document.getElementById('del2').style.display="block";
					document.getElementById('del3').style.display="none";
					document.getElementById('del4').style.display="none";
				}
			}else if(document.getElementById('Tposi').innerHTML!="<i class=\"fas fa-map-marker-alt\"></i>"&&a==2){
				if(document.getElementById('Tdata').innerHTML!="<i class=\"fas fa-calendar-alt fa-lg\"></i>"){
					if(document.getElementById('Tora').innerHTML!="<i class=\"fas fa-clock fa-lg\"></i>"){
						Ndata();
						Ntempo();
						document.getElementById('posi').style.display="none";
						document.getElementById('del1').style.display="none";
						document.getElementById('del2').style.display="none";
						document.getElementById('del3').style.display="block";
						document.getElementById('del4').style.display="none";
					}
				}
			}else if(document.getElementById('Tposi').innerHTML!="<i class=\"fas fa-map-marker-alt\"></i>"&&a==3){
				if(document.getElementById('Tdata').innerHTML!="<i class=\"fas fa-calendar-alt fa-lg\"></i>"){
					if(document.getElementById('Tora').innerHTML!="<i class=\"fas fa-clock fa-lg\"></i>"){
						if(document.getElementById('Tcar').innerHTML!="<i class=\"fas fa-shopping-cart\"></i>&nbsp; <span id=\"num\">0</span>"){
							Ndata();
							Ntempo();
							document.getElementById('posi').style.display="none";
							document.getElementById('del1').style.display="none";
							document.getElementById('del2').style.display="none";
							document.getElementById('del3').style.display="none";
							document.getElementById('del4').style.display="block";
						}
					}
				}
			}
		}
		function indietro(){
			window.location.replace('index.php');
		}
		var map;
		var marker;
function inizializza(){
	document.getElementById('maps').style.display = "block";
	var ix='41.90270276320515';
	var iy='12.496240239169166';
	var coordinate=new google.maps.LatLng(ix,iy);
	var opzioni = {
		zoom: 6,
		center:coordinate,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	}
	marker=new google.maps.Marker({
		map:map,
		title:"Cosegna",
		position:coordinate
	});
	map=new google.maps.Map(document.getElementById('maps'),opzioni);
	marker.setMap(map);

	google.maps.event.addListener(map,'click',function(event){
		marker.setMap(null);
		ix=event.latLng.lat();
		iy=event.latLng.lng();
		coordinate=new google.maps.LatLng(ix,iy);
		opzioni = {
			zoom: 17,
			center:coordinate,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		}
		marker=new google.maps.Marker({
			map:map,
			title:"Cosegna",
			position:coordinate
		});
		marker.setMap(map);
		document.getElementById('Nlat').value=ix;
		document.getElementById('Nlong').value=iy;
		document.getElementById('Tposi').innerHTML = "<i class=\"fas fa-check-circle\"></i>";
	});
}