<div id="popup_chat_share_map"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999; background-color:#FFFFFF; position:absolute;  display:none; margin-top:0px;">
   <div class="back-full-popup">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_gps_popup_back"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </div></i></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup">แชร์ตำแหน่งปัจจุบัน</div></td>
    <td width="50" align="right"   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon"><i class='fa  fa-map-marker'></i></div></td>
  </tr>
</table>
</div>
 
 <div   id="load_chat_share_map"   style="margin-top: 45px;"  >  
		 <? include('google/check_system.php')?>
 
</div> 
 
 
                <div   style="margin-top: 10px;">
<center>
					 <button type="button" class="btn btn-modal-no" data-dismiss="modal"  data-backdrop="static" id="btn_close_gps_popup" >ปิด</button>
					 <button type="button" class="btn btn-modal-ok"     data-backdrop="static" id="btn_send_gps_point" >ส่งตำแหน่ง</button>
 </center>
  
                </div>
				                </div>
 
 
 
 
 
 
   <script>
 
	$("#btn_close_gps_popup").click(function(){   
   $( "#popup_chat_share_map" ).toggle("slide");
     $( "#show_chat_tool" ).slideToggle( "slow" );
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });
  
  	$("#btn_close_gps_popup_back").click(function(){   
   $( "#popup_chat_share_map" ).toggle("slide");
     $( "#show_chat_tool" ).slideToggle( "slow" );
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });
  
  
  
  
  
  $("#btn_send_gps_point").click(function(){  
  alert(0);

document.getElementById('statetype').value='share_location';

   var url="go.php?name=chat&file=savedata&type=new&vc=<?=$_GET[vc]?>&state=14";
	url=url+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
	 url=url+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 	url=url+"&state_type="+document.getElementById('statetype').value;
 
   $.post(url,$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });
 
  var url_chat = "go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
  $('#load-direct-chat').load(url_chat); 
   document.getElementById('message').value="";
   $( "#popup_chat_share_map" ).toggle("slide");
$( "#chat_button_tool" ).click();
 
 });
  
  
 
  
  
    	$("#chat_alert").click(function(){   
   $( "#chat_alert" ).toggle("slide");
 
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });
 
	
	</script>
 
 
 
  