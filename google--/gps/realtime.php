﻿<script>
document.getElementById('check_data_status_gps_lat').value=document.getElementById('check_data_status_gps_lat_old').value;
document.getElementById('check_data_status_gps_lng').value=document.getElementById('check_data_status_gps_lng_old').value;

</script>


 <input type="hiddens" name="check_data_status_gps" id="check_data_status_gps" value="1"  style="width:20px " /> 
 
 

 
 
 
  <input type="hiddens" name="check_data_status_gps_lat" id="check_data_status_gps_lat" value="0"  style="width:100px " /> 
  <input type="hiddens" name="check_data_status_gps_lng" id="check_data_status_gps_lng" value="0"  style="width:100px " /> 
  
 
<div id="load_map_main" style="display:none "> </div>

<script>

getLocation();
var x = document.getElementById("load_map_main");



function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
 
document.getElementById('check_data_status_gps_lat').value=position.coords.latitude;
document.getElementById('check_data_status_gps_lng').value=position.coords.longitude;

document.getElementById('check_data_status_gps_lat_old').value=position.coords.latitude;
document.getElementById('check_data_status_gps_lng_old').value=position.coords.longitude;

$( "#main_gps_status" ).addClass( "gps-status-icon");
	///swal.close();
 
    x.innerHTML = "Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
 
 //$("#icon_gps_status").attr("src", "images/logo/gps/gps_on.gif");
  //// $("#icon_gps_status").attr("src", "images/logo/gps/gps_on.png");
 
 
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
		 document.getElementById('check_data_status_gps').value=0 ;
		 
		  x.innerHTML = "No"
 
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
 
</script>
 


 

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdLLvV1JvtBlCGtygPVN0cZZeIbQYnFFY&sensor=true&callback=initMap">
</script>
	 