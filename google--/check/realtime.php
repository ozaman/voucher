 <input type="hidden" name="status_gps" id="status_gps" value="0" />
<div id="demo" style="display:none "> </div>

<script>
 $("#icon_gps_status").attr("src", "images/logo/gps/gps_off.png");
getLocation();
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
 document.getElementById('status_gps').value=1 ;
	///swal.close();
/*
    x.innerHTML = "Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
 */
 
 //$("#icon_gps_status").attr("src", "images/logo/gps/gps_on.gif");
   $("#icon_gps_status").attr("src", "images/logo/gps/gps_on.png");
 
 
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
		
		  x.innerHTML = "No"
		   $("#icon_gps_status").attr("src", "images/logo/gps/gps_off.png");
		//    window.location.href = "alert_location.php"; //will redirect to your blog page (an ex: blog.html)
  
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
$("#icon_gps_status").attr("src", "images/logo/gps/gps_off.png");
</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcTSB6t3VJpbMLKjJGIT4M0aTer2VEHb8&sensor=true&callback=initMap">
    </script>
	 