<input type="hidden" id="check_order_id"  name="check_order_id"  value="{{data}}"  ng-model="data"/>
 				
<div id="check_data_update"></div>
<div id="load_data_time"></div><br>
<div id="check_chat_update" style="display:nones"></div>

<script>
 setInterval(function() {
 var url_check_chat_update = "go.php?name=load/update/online&file=chat";
 url_check_chat_update =url_check_chat_update+"&order="+document.getElementById('check_order_id').value;

 $('#check_chat_update').load(url_check_chat_update);
 
  
}, 1000); // 60000 milliseconds = one minute
 
	</script>

 
  <script src="js/google/jquery-1.10.2.min.js"></script>
  <div style="display:none ">
<? include "sound/index.php";?>  
 </div>
<script>
 setInterval(function() {
 var url_check_data_time = "go.php?name=load/update&file=time";
 url_check_data_time =url_check_data_time+"&order="+document.getElementById('check_order_id').value;
  url_check_data_time =url_check_data_time+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
   url_check_data_time =url_check_data_time+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
  $('#load_data_time').load(url_check_data_time);
    
}, 1000); // 60000 milliseconds = one minute
 
	</script>
 
 
<script>
$( document ).ready(function() {


////$("#play_alert_msg_new").click();


});


 //var url_check_data_update = "go.php?name=load/update&file=data";
 //$('#check_data_update').load(url_check_data_update);

 setInterval(function() {
 //var url_check_data_update = "go.php?name=load/update&file=data";
 //$('#check_data_update').load(url_check_data_update);


}, 60000); // 60000 milliseconds = one minute

	</script>