<!-- <input type="hidden" id="check_order_id"  name="check_order_id"  value="{{data}}"  ng-model="data"/>
 				
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
    
}, 10000); // 60000 milliseconds = one minute
 
	</script>
 
 
<script>
$( document ).ready(function() {


 ///$("#play_alert_msg_new").click();


});


 //var url_check_data_update = "go.php?name=load/update&file=data";
 //$('#check_data_update').load(url_check_data_update);

 setInterval(function() {
 //var url_check_data_update = "go.php?name=load/update&file=data";
 //$('#check_data_update').load(url_check_data_update);


}, 60000); // 60000 milliseconds = one minute

	</script>
	
	
	
	<style>
.back_popup_alert
{ 
font-size:22px;   padding:2px;  color:#FFFFF;  width:100%;  background-color: #464646;
 border-bottom: 0px solid #ffffff; margin-bottom: 0px; margin-top:60px;
 
    position: fixed;
  top:  0;  
 
 box-shadow: 1px 1px 10px #999999;
  left: 0; z-index:9999;
 
}
.mainpic_index {

   padding:2px;   
   
           -moz-border-radius:50%;
        -webkit-border-radius:50%;
        border-radius:50%;

   border:1px solid #FFFFFF; background-color:#FFFFFF; 
   box-shadow: 2px 1px 5px #333333; width:70px; height:70px; position:fixed; margin-top:-35px; margin-left: -30px;    
    
}

 </style>
 
 
 <div class="back_popup_alert" style="display:none; margin-bottom: 5px; " id="box_popup_alert_message"><center> 
 
 

 <table width="100%"  border="0" align="center" cellpadding="2" cellspacing="2"    id="box_alert_new_msg"  style="background-color: #464646; "  >

  <tr>
    <td width="100" rowspan="2" id="box_alert_new_msg_icon" style="padding:5px; ">
	
	<div class="mainpic_indexs"><table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td style="padding-bottom: "><center><img src="dv.jpg"    class="mainpic_index"><i class="fa fa-map-marker"  style=" font-size:60px; color:#3B5998; margin-top:-5px; display:none "></i></center></td>
  </tr>
</table>

	
	</div>
	
	
	</td>
    <td style="padding:2px; "> <strong  style="color:#FFFFFF; font-size:18px; ">新消息</strong></td>
    <td width="80"><div id="box_alert_new_msg_time"  style="color: #FFFFCC;font-size:12px;  "><?=date("H:i:s")?></div></td>
  </tr>
  <tr>
    <td colspan="2" style="padding:2px; "><div id="box_alert_new_msg_comment"  style="color:#FFFFFF; font-size:14px; padding-bottom:10px; ">你在哪里</div></td>
   </tr>
</table>
</div>

  <script>

 $("#box_popup_alert_message").show(); 
 
 setTimeout(function () {
  $("#box_popup_alert_message").fadeOut( "slow" );

}, 50000);  
  </script> -->