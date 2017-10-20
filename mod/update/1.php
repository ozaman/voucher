   <script>
 
 setInterval(function() {
 ////// อัพเดทตำแหน่ง customer 
 var url_check_data_time_chat = "<?=$chat_part?>load_blank.php?name=update&file=update_status&order=<?=$_GET[order]?>";
url_check_data_time_chat =url_check_data_time_chat+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
 url_check_data_time_chat =url_check_data_time_chat+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 $('#load_update_chat_online_status').load(url_check_data_time_chat);
}, 3000);  
	</script>
	
	<div id="load_update_chat_online_status" style="display:none"></div>
 