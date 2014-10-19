<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="gogigs.css"/>

	
<!-- Flickr API w/ jQuery -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
		function showpics(){

		var pic= $("#box").val();
		$.getJSON('http://api.flickr.com/services/feeds/photos_public.gne?tags='
		  +pic+"&tagmode=any&format=json&jsoncallback=?",
		  function(data){ $("#images").hide().html(data).fadeIn('fast');

		$.each(data.items, function(i,item) {
		  $("<img/>").attr("src", item.media.m).appendTo("#images");
			});
			})
		};
	</script>
	




	<!--IMPLIMENTING TABS-->
	<script type="text/javascript">

	var tabLinks = new Array();
	var contentDivs = new Array();

	function init() {

	 // Grab the tab links and content divs from the page
	 var tabListItems = document.getElementById('tabs').childNodes;
	 for ( var i = 0; i < tabListItems.length; i++ ) {
	 	if ( tabListItems[i].nodeName == "LI" ) {
	 		var tabLink = getFirstChildWithTagName( tabListItems[i], 'A' );
	 		var id = getHash( tabLink.getAttribute('href') );
	 		tabLinks[id] = tabLink;
	 		contentDivs[id] = document.getElementById( id );
	 	}
	 }

	 // Assign onclick events to the tab links, and highlight the first tab
	 var i = 0;

	 for ( var id in tabLinks ) {
	 	tabLinks[id].onclick = showTab;
	 	tabLinks[id].onfocus = function() { this.blur() };
	 	if ( i == 0 ) tabLinks[id].className = 'selected';
	 	i++;
	 }

	 // Hide all content divs except the first
	 var i = 0;

	 for ( var id in contentDivs ) {
	 	if ( i != 0 ) contentDivs[id].className = 'tabContent hide';
	 	i++;
	 }
	}

	function showTab() {
		var selectedId = getHash( this.getAttribute('href') );

	  // Highlight the selected tab, and dim all others.
	  // Also show the selected content div, and hide all others.
	  for ( var id in contentDivs ) {
	  	if ( id == selectedId ) {
	  		tabLinks[id].className = 'selected';
	  		contentDivs[id].className = 'tabContent';
	  	} 
	  	else {
	  		tabLinks[id].className = '';
	  		contentDivs[id].className = 'tabContent hide';
	  	}
	  }

    // Stop the browser following the link
    return false;
}

function getFirstChildWithTagName( element, tagName ) {
	for ( var i = 0; i < element.childNodes.length; i++ ) {
		if ( element.childNodes[i].nodeName == tagName ) return element.childNodes[i];
	}
}

function getHash( url ) {
	var hashPos = url.lastIndexOf ( '#' );
	return url.substring( hashPos + 1 );
}
</script>



<!---IMPLIMENTING MAP API-->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
function initialize() {
	var mapcanvas = document.getElementById('mapcanvas');
	
	
	
	var AcademyDublin = new google.maps.LatLng(53.348094, -6.262000);
	var DoylesInTown = new google.maps.LatLng(53.345753, -6.257298);
	var PlayNight = new google.maps.LatLng(53.346466, -6.257596);
	var Alchemy = new google.maps.LatLng(53.345788, -6.259902);
	var ButtonFactory = new google.maps.LatLng(53.344865, -6.264599);
	var CUNT = new google.maps.LatLng(53.342190, -6.262535);
	var Oreillys = new google.maps.LatLng(53.346865, -6.255177);
	var Palace = new google.maps.LatLng(53.335940, -6.265624);
	var Poison = new google.maps.LatLng(53.345173, -6.265711);
	var Buskers = new google.maps.LatLng(53.345789, -6.260033);	
	var Wrights = new google.maps.LatLng(53.447050, -6.221079);
	var War = new google.maps.LatLng(53.343463, -6.262483);
	var Bucks = new google.maps.LatLng(53.333836, -6.254384);
	
	var OdeonPV = new google.maps.LatLng(53.348933, -6.227936);
	var Cineworld = new google.maps.LatLng(53.350487, -6.267735);
	var IFIPV = new google.maps.LatLng(53.344624, -6.264976);
	var Lighthouse = new google.maps.LatLng(53.348664, -6.278879);
	var MASwords = new google.maps.LatLng(53.455156, -6.218470);
	var MADundrum = new google.maps.LatLng(53.288362, -6.242149);
	var Savoy = new google.maps.LatLng(53.351298, -6.260196);
	var OdeonB = new google.maps.LatLng(53.455156, -6.218470);
	var OdeonC = new google.maps.LatLng(53.391270, -6.193073);
	var OdeonS = new google.maps.LatLng(53.288195, -6.198395);
	var OmniplexS = new google.maps.LatLng(53.393382, -6.250456);
	var OmniplexT = new google.maps.LatLng(53.286553, -6.371537);
	var VUE = new google.maps.LatLng(53.352363, -6.391916);

	
	var map_options = {
		center: new google.maps.LatLng(53.345354, -6.259035),
		zoom: 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	
	var map = new google.maps.Map(mapcanvas, map_options)
	
	
		var academyMarker = new google.maps.Marker(
			{position: AcademyDublin,
			map: map,
			title: 'The Academy'});
		
		
		var doylesMarker = new google.maps.Marker(
			{position: DoylesInTown,
			map: map,
			title: 'Doyles In Town'});

		var playMarker = new google.maps.Marker(
			{position: PlayNight,
			map: map,
			title: 'Play'});

		var alchemyMarker = new google.maps.Marker(
			{position: Alchemy,
			map: map,
			title: 'Alchemy'});	

		var buttonfactoryMarker = new google.maps.Marker(
			{position: ButtonFactory,
			map: map,
			title: 'The Button Factory'});	

		var cuntMarker = new google.maps.Marker(
			{position: CUNT,
			map: map,
			title: 'C.U.Next.Tuesday'});	

		var OreillysMarker = new google.maps.Marker(
			{position: Oreillys,
			map: map,
			title: 'O Reillys'});	

		var palaceMarker = new google.maps.Marker(
			{position: Palace,
			map: map,
			title: 'The Palace'});	

		var poisonMarker = new google.maps.Marker(
			{position: Poison,
			map: map,
			title: 'Poison'});	

		var buskersMarker = new google.maps.Marker(
			{position: Buskers,
			map: map,
			title: 'Buskers Bar'});	

		var wrightsMarker = new google.maps.Marker(
			{position: Wrights,
			map: map,
			title: 'Wrights Cafe and Bar'});

		var warMarker = new google.maps.Marker(
			{position: War,
			map: map,
			title: 'WAR'});	

		var bucksMarker = new google.maps.Marker(
			{position: Bucks,
			map: map,
			title: 'Rendezvous at Bucks'});	
			
			
			
				var OdeonPVMarker = new google.maps.Marker(
			{position: OdeonPV,
			map: map,
			title: 'Odeon Point Village'});	

		var CineworldMarker = new google.maps.Marker(
			{position: Cineworld,
			map: map,
			title: 'Cineworld'});

		var IFIMarker = new google.maps.Marker(
			{position: IFI,
			map: map,
			title: 'Irish Film Institute'});

		var LighthouseMarker = new google.maps.Marker(
			{position: Lighthouse,
			map: map,
			title: 'Lighthouse Cinema'});

		var MASwordsMarker = new google.maps.Marker(
			{position: MASwords,
			map: map,
			title: 'Movies At Swords'});

		var MADundrumMarker = new google.maps.Marker(
			{position: MADundrum,
			map: map,
			title: 'Movies At Dundrum'});

		var SavoyMarker = new google.maps.Marker(
			{position: Savoy,
			map: map,
			title: 'Savoy Cinema'});	

		var OdeonBMarker = new google.maps.Marker(
			{position: OdeonB,
			map: map,
			title: 'Odeon Blanchardstown'});	

		var OdeonCMarker = new google.maps.Marker(
			{position: OdeonC,
			map: map,
			title: 'Odeon Coolock'});	

		var OdeonSMarker = new google.maps.Marker(
			{position: OdeonS,
			map: map,
			title: 'Odeon Stillorgan'});	

		var OmniplexSMarker = new google.maps.Marker(
			{position: OmniplexS,
			map: map,
			title: 'Omniplex Santry'});	

		var OmniplexTMarker = new google.maps.Marker(
			{position: OmniplexT,
			map: map,
			title: 'Omniplex Tallaght'});	

		var VueMarker = new google.maps.Marker(
			{position: Vue,
			map: map,
			title: 'VUE Cinema Liffey Valley'});	



			
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>


<title>
	Find Local Events!
</title>
<style type="text/css"></style>
</head>


<body onload="init()">

	<div id="header">
		<p id="title">
			GoGigs!
		</p>
	</div>

	<div id="topbox"> 
		<center>
			<font face="Trebuchet MS">
				<h3>Welcome to GoGigs.</h3>
				<p>To get started, enter a date and time below.</p>


					<form>
						<select>
							<option value="month">Month</option>
						</select>
					</form>	
					<form>
						<select>
						  <option value="day">Day</option>
					  </select>
					</form>	
					<form>
						<select>
							<option value="time">Time</option>
						</select>
					</form>	
					

					<p>On the right, you can select what type of event you want! Gig's, cinema or a nightclub!</p>
					<p>Below, you can see where all the events take place! Enjoy!</p>
				</font>
			</center>
		</div>

		<!--MAP LOCATION-->
		<div id="mapcanvas">
		</div>

		<!--LISTINGS BOX-->
		<div id="listings" style="position: relative">
			
		<ul id="tabs">
			<li><a href="#one" class="selected">Gigs</a></li>
			<li><a href="#two">Cinema</a></li>
			<li><a href="#three">Nights</a></li>
			<li><a href="#four">Venues</a></li>
			<li><a href="#five">Twitter</a></li>
		</ul>

		<div class="tabContent" id="one">
			<h2>Gigs</h2>
			<div>
				<!-- INSERT CONCERT INFORMATION HERE -->
				<p>Gig stuff.</p>
				  
				  
				  
				
			</div>
		</div>

		<div class="tabContent hide" id="two">
			
			<h2>Cinema</h2>
			<div style="border: 5px solid black; background-color: grey; width: 490px; height 15px; color: white; text-align: center;" >

				<!--INSERT CINEMA INFORMATION HERE-->
					
			<h3>	
				<strong> Cinema Listings </strong>
			</h3>
			
			
			<label for= "film_title" style="position:relative;vertical-align: middle;width:50px;height:12px;font-family:Arial;font-size:12px; display: inline-block;"    >Film: </label>
			<select id= "film" name="film_title">
			<option> Any </option>
			<option value ="20"> 12 Years A Slave</option>
			<option value ="21"> 2 States</option>
			<option value ="22"> An Episode in the Life of an Iron Picker </option>
			<option value ="23"> Archive at Lunchtime </option>
			<option value ="24"> Being John- Malkovich </option>
			<option value ="25"> Blue Rain </option>
			<option value ="26"> Calvary </option>
			<option value ="27"> Captain America: The Winter Soilder </option>
			<option value ="28"> Captain America: The Winter Soldier 3D
			<option value ="29"> Divergent </option>
			<option value ="30"> Doubt </option>
			<option value ="31"> East of Eden </option>
			<option value ="32"> Exhibition </option>
			<option value ="33">Giant </option>
			<option value ="34"> Khumba </option>
			<option value ="35"> Living in a Coded Land </option>
			<option value ="36"> Locke </option>
			<option value ="37"> Muppets Most Wanted </option>
			<option value ="38"> Noah </option>
			<option value ="39"> Nt Live: King Lear </option>
			<option value ="40"> Plastic </option>
			<option value ="41"> Pompeii </option>
			<option value ="42"> Pompeii 3D </option>
			<option value ="43"> Rebel Without a Cause </option>
			<option value ="44"> Rio 2 </option>
			<option value ="45"> Rio 2 3D </option>
			<option value ="46"> Starred Up </option>
			<option value ="47"> The Amazing Spider-Man 2 </option>
			<option value ="48">The Amazing Spider-Man 2 3D </option>
			<option value ="49">The Amazing Spider-Man 2 3D IMAX </option>
			<option value ="50">	The Amazing Spider-Man 3 ISENSE </option>
			<option value ="51"> The Double </option>
			<option value ="52"> The Grand Budapest Hotel </option> 
			<option value ="53"> The Lego Movie </option>
			<option value ="54"> The Love Punch </option>
			<option value ="55"> The Lunchbox </option>
			<option value ="56"> The Monuments Men </option>
			<option value ="57"> The Other Woman </option>
			<option value ="58"> The Quiet Ones </option>
			<option value ="59"> The Raid 2  </option>
			<option value ="60"> The Railway Man </option>
			<option value ="61"> The Sea </option>
			<option value ="62"> Tracks </option>
			<option value ="63"> Tracks: Parents and Baby </option>
			<option value ="64"> Transcendence </option>
			<option value ="65"> Under the Skin </option>
			<option value ="66"> We Are The Best </option>
			<option value ="67"> Yves Saint Laurent </option>
		</select>
<br />
		<label for= "cinema"  style="position:relative;vertical-align: middle;width:50px;height:12px;font-family:Arial;font-size:12px;display: inline-block;" >Cinema: </label>
		<select id= "cinema" name= "vid" >
		<option> All Cinemas </option>
		<option value ="1"> Odeon Blanchardstown </option>
		<option value ="2"> Odeon Coolock </option>
		<option value ="3"> Odeon Point Village </option>
		<option value ="4"> Odeon Stillorgan </option>
		<option value ="5"> Omniplex Balbriggan </option>
		<option value ="6"> Omniplex Rathmines, Swan SC </option>
		<option value ="7"> Cineworld Dublin </option>
		<option value ="8"> IFI Irish Film Institute </option>
		<option value ="9"> IMC Dun Laoghaire </option>
		<option value ="10"> IMC Santry  </option>
		<option value ="11"> IMC Tallaght </option>
		<option value ="12"> Light Hosue Cinema, Dublin </option>
		<option value ="13"> Movies at Dundrum </option>
		<option value ="14"> Movies at Swords </option>
		<option value ="15"> Savoy Cinema </option>
		<option value ="16"> Screen Cinema </option>
		<option value ="17"> Vue Liffey Valley </option>
		
		
		
	</select>
	
	<br />

	<input type="submit" name="submit" value="Search">
	
	<br />
	
	
	
	
	
	
		</div>
		</div>

		<div class="tabContent hide" id="three">
	
			<div  style="overflow-y:auto; border: 5px solid black; background-color: grey; width: 560px; color: white; text-align: center;">
				<p>

					<h2><u>Monday</u></h2>

					<p>

					Midnight at Play Night Club <br>
					21 D'Olier Street, Dublin<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

					Monday Night Gargle at Alchemy<br>
					Fleet Street, Dublin<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

					<h2><u>Tuesday</u></h2>

					Dimensions at The Button Factory<br>
					Curved Street, Temple Bar, Dublin, Ireland 2<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

					C.U.Next.Tuesday<br>
					South William Street, Dublin, Ireland<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

					Student Mondays at O Reilly's Bar<br>
					Tara St, Dublin 2, Ireland<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>


					<h2><u>Wednesday</u></h2>

					The Palace<br>
					87 Camden Street Lower, Dublin, Ireland Dublin 2<br>
					<!-- put coordinants of the map here -->


					<h2><u>Thursday</u></h2>

					The Palace<br>
					87 Camden Street Lower, Dublin, Ireland Dublin 2<br>
					<!-- put coordinants of the map here --> 

					</p>
					<p>

					Club Poison<br>
					The Mezz, Temple Bar<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

					Electric Playground at Play Night Club<br>
					21 D'Olier Street, Dublin<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

					Thirsty Thursdays at Buskers Bar<br>
					13-17 Fleet Street, Temple Bar, Dublin 2. Ireland.<br> 
					<!-- put coordinants of the map here -->

					</p>
					<p>

					The Wrights Venue<br>
					South Quarter, Airside Retail Park Swords, Co. Dublin, Ireland<br>
					<!-- put coordinants of the map here -->



					<h2><u>Friday</u></h2>

					Lose Yourself at Play Nightclub<br>
					21 D'Olier Street, Dublin<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

					WAR<br>
					Andrew's Lane Theatre, Dublin, Ireland<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

					Rendezvous at Bucks<br>
					67 Lower Leeson Street, Dublin, Ireland<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

					Dance Decades at Alchemy<br>
					Fleet Street, Dublin<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>


					<h2><u>Saturday</u></h2>

					212 at Play Nightclub<br>
					21 D'Olier Street, Dublin<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

					<h2><u>Saturday</u></h2>

					Dublin Salsa at Alchemy<br>
					Fleet Street, Dublin<br>
					<!-- put coordinants of the map here -->

					</p>
					<p>

				 </p>			
			</div>
		</div>
			
			
			
			
			
			
			
		<div class="tabContent hide" id="four">
		<center>
			<h2>View Venue Images</h2>
			<div>
				<p>Select what venue you want! </p>
				<select id="box">
					<option value="the academy dublin">The Academy</option>
					<option value="olympia theatre dublin">The Olympia Theatre</option>
					<option value="rds">The RDS</option>
					<option value="o2 dublin">The o2</option>
					<option value="whelans dublin">Whelans</option>
					<option value=" button factory dublin">The Button Factory</option>
					
					<option value="vicar street">Vicar Street</option>
					<option value="croke park dublin">Croke Park</option>
					<option value="ambassador theatre">Ambassador Theatre </option>
					<option value="temple bar dublin">Temple Bar</option>
				</select>
				
				
				<input id="Button" title="Search Flickr!" onclick="showpics()" type="button" value="Search Flickr!">
				<div id="images">
			</div>			
			</div>
		</center>
		</div>
		
		
		
		
		
		
		
		
		
		<div class="tabContent hide" id="five">
			<h2>Twitter</h2>
			<div>
				<!-- INSERT TWITTER API HERE -->
				<p>Twitter API here. </p>
				
				
			</div>
		</div>
		
		
		
		</div>	


	</body>
	</html>