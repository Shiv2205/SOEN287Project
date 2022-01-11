/* important variables */
let distanceFromRestaurant = 1; //distance from restaurant in km
let count = 0; //to count how many times the user will enter an address
let userMarker; //marker of entered user address
let pathLine; //line between user location and restaurant
let possible_delivery = 0; //true if we can deliver, false otherwise
let delivery_fee = 0; //if delivery is possible, 8$ fee will get charged or no ?
let addr = "User's location"; //delivery location

//Map stuff 
/*
 *Important note about the restaurant's location: a random location near 
 *Concordia University was selected where the restaurant is supposed to 
 *be located. Location chosen: 1425 René-lévesque Blvd W, Montreal, Quebec H3G 1T7
 */
//restaurant's information
var restoLat = 45.494868;
var restoLong = -73.574168;
var restoLatLong = L.latLng(restoLat, restoLong);
var deliveryRadius = 3500;

var map = L.map("map").setView([restoLat, restoLong], 11.5);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	maxZoom: 18,
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
	'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
	'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	id: 'mapbox/streets-v11',
	tileSize: 512,
	zoomOffset: -1
	}).addTo(map);
//the resto location marker
var restoMarker = L.marker([restoLat,restoLong]).addTo(map);
//the delivery area radius
var deliveryArea = L.layerGroup().addTo(map);
deliveryArea.addLayer(L.circle([restoLat,restoLong], {color: "rgb(200, 232, 228)", fillColor: "blue", opacity: 0.55, radius: deliveryRadius}));

//search function
function search()
{	
	//storing user's input
	addr = document.getElementById("userAddress").value.toString();

	//In case user doesn't enter any input
	if (addr == "") 
	{
		document.getElementById("message").innerHTML = "Please enter an address!";
	}
	else
	{
		try
		{
			//remove all previously added layers if any
			if(count >= 1)
			{
				map.removeLayer(userMarker);
				map.removeLayer(pathLine);
			}
			count++; 

			var xmlhttp = new XMLHttpRequest();
			var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + addr;
			xmlhttp.onreadystatechange = function()
			{
				try
				{
					if (this.readyState == 4 && this.status == 200)
					{

					    var myArr = JSON.parse(this.responseText);			   		    
					    //myArr is an array of the matching addresses 
					    //You can extract the lat long attributes
					    //myArr[0].lat and myArr[0].lon;

					    //Information of entered address by user
					    var userLat = myArr[0].lat;
					    var userLong = myArr[0].lon;
					    var userLatLong = L.latLng(userLat, userLong);

					    //adding to the map
					    userMarker = L.marker([userLat,userLong]).addTo(map);
					    var line = [restoLatLong, userLatLong];
					    pathLine = L.polyline(line, {color: "red"}).addTo(map);
					   
					    //changing map's view
					    map.panTo(new L.LatLng(userLat, userLong));

					    //Compute Distance 
					    var dist = ((restoLatLong.distanceTo(userLatLong)).toFixed(0))/1000;
					    let distanceFromRestaurant = dist;

					    //Important variables to be sent to PHP
						document.cookie="distanceFromRestaurant=" + distanceFromRestaurant;
	

					    //displaying information in HTML
					    document.getElementById("message").style.color = "black";
						document.getElementById("message").innerHTML = "The calculated distance is: " + dist + " km";

						//check delivery fees
						checkDeliveryFees(distanceFromRestaurant);
					}
				}
				catch(err)
				{
					document.getElementById("message").innerHTML = "Can't find entered address!, please try again"; 
				}
				
			};
			xmlhttp.open("GET", url, true);
			xmlhttp.send();
		}
		catch(err)
		{
			document.getElementById("message").innerHTML = "Can't find entered address!, please try again"; 
		}
	}

	//Important variables to be sent to PHP
	document.cookie="addr=" + addr;
}

//check delivery fees
function checkDeliveryFees(d)
{
	if(d <= 3.5)
	{
		delivery_fee = 0;
		possible_delivery = 1;
		document.getElementById("message2").innerHTML = "Location is within delivery radius, no fees will be applied";
		//Important variables to be sent to PHP
		document.cookie="possible_delivery=" + possible_delivery;
		document.cookie="delivery_fee=" + delivery_fee;
	}
	else if(d >= 10)
	{
		delivery_fee = 0;
		possible_delivery = 0;
		document.getElementById("message2").innerHTML = "Oh, it seems that we won't be able to delivert to your address. However, you are still welcome to pick-up at our location!";
		//Important variables to be sent to PHP
		document.cookie="possible_delivery=" + possible_delivery;
		document.cookie="delivery_fee=" + delivery_fee;
	}
	else
	{
		delivery_fee = 1;
		possible_delivery = 1;
		document.getElementById("message2").innerHTML = "Since your address is located " + ((distanceFromRestaurant)-3.5) + " km away from our delivery area, a 8$ delivery fee will also get applied";
		//Important variables to be sent to PHP
		document.cookie="possible_delivery=" + possible_delivery;
		document.cookie="delivery_fee=" + delivery_fee;
	}
	document.getElementById("button3").style.display = "block";

	
}


//Find out now button
function displayMoreInfo()
{	
	document.getElementById("visiblePart").style.display = "none";		
	document.getElementById("hiddenPart").style.display = "block";
}















