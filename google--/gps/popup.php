    <div  style="display:none ">  <input type="hiddens" name="check_data_status_gps_lat_old" id="check_data_status_gps_lat_old" value="0"  style="width:100px " /> 
  <input type="hiddens" name="check_data_status_gps_lng_old" id="check_data_status_gps_lng_old" value="0"  style="width:100px " /> </div>
  
  
  <div id="load_check_gps" style="display:none "> </div>
<script>

 $('#load_check_gps').load('google/gps/realtime.php');
setInterval(function() {
		

  $('#load_check_gps').load('google/gps/realtime.php');
		 
}, 30000); // 60000 milliseconds = one minute
	</script>
	
	<? // include("google/check/location/share.php"); ?> 
	
 