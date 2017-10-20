   <div id="load_wait_upload"> </div> 
 <?
$chat_from='driver';
$chat_to='customer';
  
 ?>
 
 
  <?  include ("mod/livechat/sub/popup/share_map.php");?> 
    <?  include ("mod/livechat/sub/popup/share_map_realtime.php");?> 
  
  
  <?  include ("mod/livechat/sub/popup/share_album.php");?> 
  <?  include ("mod/livechat/sub/popup/preview_photo.php");?> 
  
    <?  include ("mod/livechat/sub/popup/alert_map.php");?> 

 
 <div style="position: relative">
 
 <script>
 
$('#close_popup_chat').click(function(){  
  
  $( "#load_data_manage_work" ).toggle();
 
     	});
 
					
					</script> 

<script src="bootstrap/js/bootstrap.min.js"></script> 
 
<? if($_GET[vc]<>""){ ?>
 
  <?
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);  
$res[vc] = $db->select_query("SELECT drivername  FROM web_order  WHERE invoice='".$_GET[vc]."'  "); 
$arr[vc] = $db->fetch($res[vc]);
$arr[vc][drivername];
    
  ?>

<input name="chat_driver_id" type="hidden" id="chat_driver_id" value="<?=$arr[vc][drivername]?>" />  <br />
<input name="chat_vc_id" type="hidden" id="chat_vc_id" value="<?=$_GET[vc]?>" />  <br />
  
  
  <script>
   $("#head_full_popup" ).html("ห้องสนทนาสด <?=$_GET[vc]?>");
   
     $("#head_full_popup_icon" ).html("<i class='fa  fa-comment'></i>");
  
  </script>
  
  <script>
 
  
 
 setInterval(function() {
 var url_check_data_time_chat = "load_blank.php?name=livechat/update&file=time&driver=<?=$driver_id?>&order=<?=$_GET[order]?>&type=check_guest";
url_check_data_time_chat =url_check_data_time_chat+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
 url_check_data_time_chat =url_check_data_time_chat+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 $('#load_data_chat_online').load(url_check_data_time_chat);
 
}, 1000); // 60000 milliseconds = one minute
 
	</script>
  
   <!-- Direct Chat --> 
 
          <!-- DIRECT CHAT PRIMARY style="position:fixed" --> 
          <div class="box box-primary direct-chat direct-chat-primary" style=" overflow:auto;padding-bottom:0px; margin-top: -10px; margin-bottom:-30px "  id="main_message_chat">
		 
            <div class="box-header with-border" style="height:40px; ">  
       

              <div class="box-tools pull-right" >
			  
 <span   style="font-size:16px " id="load_data_chat_online">  </span>

 
                <button type="button" class="btn btn-box-tool" data-widget="collapse"> 
                </button>
				
				<style>
				@-webkit-keyframes online-color {
    0%   { color: <?=$gps_icon_color?> }
 
	50%   { color: #FF0000 }
 
 
}

 @-moz-keyframes online-color {
 
 
	
}




.user-status-online {
     
 
 
	  
	  
	 	  -webkit-transition: all 2s;
	   -moz-animation: online-color 2s infinite;
	  
      -webkit-transition: all 1s;
    -webkit-animation: online-color 1s infinite;
}
 
				
				</style>
 
 
 
 <button type="button" class="btn btn-box-tool"   title="Contacts" data-widget="chat-pane-toggle"  style="color:#333333;font-size:16px; margin-top:-5px;"> ผู้ใช้บริการ </b>
 <i class="fa fa-user" style="font-size:20px"  id="chat_icon_user_status"></i>
 <span  style="font-size:16px " id="chat_icon_user_status_text"><b>&nbsp;Online</b></span></button> 
 
 <button type="button" class="btn btn-box-tool"   title="Contacts" data-widget="chat-pane-toggle" id="chat_icon_refresh" style="margin-top:-5px; ">
  <i class="fa fa-refresh" style="font-size:20px "></i></button> </div>  
			         </div>   
 
            <!-- /.box-header -->
            <div class="box-body"  style="height:100vh; overflow:hidden"> 

              <!-- เริมการแชท --> 
       <div class="direct-chat-messages" style="height:100%; overflow:auto ; padding-bottom:50px; padding-left:5px; margin-bottom:100px; background-color:" id="load-direct-chat"> 
 
 
 </div>   
              <!--/.direct-chat-messages-->
			  
			  
			   
			  
			  
			  
			  
			  

           
              <!-- /.direct-chat-pane -->
 
            </div>
            <!-- /.box-body --> 

            
            <!-- /.box-footer-->
          </div>
		
          <!--/.direct-chat -->
        </div>
        <!-- /.col -->
		
 
		







<?
$ok_button_color="#0ACB68";
$no_button_color="#F50202";

?>

<style>
.btnstatus{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 5px;padding:5px; height:40px; font-size:14px; width:100px; margin-right:15px; background-color:#367FA9;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF;

}
.btnstatus:hover{

background-color:#999999;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF; border:0px solid #FFFFFF; 
}


.btn-modal-ok{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 5px;padding:5px; font-size:20px; width:120px; background-color:<?=$ok_button_color?>;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF

}
.btn-modal-ok:hover{

background-color:#999999;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}

.btn-modal-no{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 5px;padding:5px; font-size:20px;  width:120px; background-color:<?=$no_button_color?>;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}

.btn-modal-no:hover{
background-color:#999999;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}
 
</style> 
 

  <div    class="modal fade" id="popup_chat_show_map" role="dialog"   aria-labelledby="myModalLabel"   style=" padding:0px;"    >
 <? //  include ("load/page/back_popup.php");?> 
 <div class="modal-dialog"   style=" padding:0px;"  >

            <!-- Modal  class="modal fade" content-->
            <div class="modal-content"  style=" padding:0px;"   > 
 
 
                <div class="modal-body"   style=" padding:0px;" >
				<button type="button" class="close" data-dismiss="modal" style="font-size:50px; ">&times;</button>
				 <div id="load_map_gpss"  style=" padding:0px;" > 
 
				 </div>
				
				</div> 

 
              
            </div>
  </div>
 
</div>	



 
</div>


<? } ?>

 
  


 



 
 
 <div class="chat-loader"> </div> 
 
 
 
 <script>
 
  //// load ทันที
  $('#load-direct-chat').load('load/loading/chat.php'); 
   var url_chat = "go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
   $('#load-direct-chat').load(url_chat); 
 ////
 
 
 
 
  	$(document.body).animate({
    'scrollTop':   $('#main_message_chat').offset().top
}, 1000);
   
  
////// ส่งข้อความปกติ
$('#chat_button_submit').click(function() {

///// tool status
 var tool_status = $( "#show_chat_tool" ).is(":hidden");
 if(tool_status==false){   $( "#show_chat_tool" ).slideToggle( "slow" );   }
 
  var text_status = $( "#show_text_tool" ).is(":hidden");
 if(text_status==false){   $( "#show_text_tool" ).slideToggle( "slow" );   }
 ///// ---- end  -----

 
  var last_id=document.getElementById('vc_chat_last_id').value;
 document.getElementById('statetype').value='chat_text';
 
 var url="go.php?name=livechat&file=savedata&type=new&vc=<?=$_GET[vc]?>";
	url=url+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
	url=url+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 	url=url+"&state="+document.getElementById('state').value;
	 	url=url+"&state_type="+document.getElementById('statetype').value;
  
   $.post(url,$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });
 
   var url_chat = "go.php?name=livechat&file=sub_new&vc=<?=$_GET[vc]?>&lastid="+last_id;
  $('#chat-load-new-'+last_id).load(url_chat); 
  
   $('#chat-load-new-'+last_id).fadeIn(2000);
$(".messages").animate({ scrollTop: 99999 }, 3000);

  $('#chat_button_tool').show();
  $('#chat_button_submit').hide();

 
	});









////// ส่งข้อความ จากที่เลือก
$('#chat_button_submit_store').click(function() {
 
///// tool status
 var tool_status = $( "#show_chat_tool" ).is(":hidden");
 if(tool_status==false){   $( "#show_chat_tool" ).slideToggle( "slow" );   }
 
  var text_status = $( "#show_text_tool" ).is(":hidden");
 if(text_status==false){   $( "#show_text_tool" ).slideToggle( "slow" );   }
 ///// ---- end  -----

 
  var last_id=document.getElementById('vc_chat_last_id').value;
 document.getElementById('statetype').value='chat_store';
 
 var url="go.php?name=livechat&file=savedata&type=new&vc=<?=$_GET[vc]?>";
	url=url+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
	url=url+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 	url=url+"&state="+document.getElementById('state').value;
	 	url=url+"&state_type="+document.getElementById('statetype').value;
  
   $.post(url,$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });
 
   var url_chat = "go.php?name=livechat&file=sub_new&vc=<?=$_GET[vc]?>&lastid="+last_id;
  $('#chat-load-new-'+last_id).load(url_chat); 
  
   $('#chat-load-new-'+last_id).fadeIn(2000);
$(".messages").animate({ scrollTop: 99999 }, 3000);

  $('#chat_button_tool').show();
  $('#chat_button_submit').hide();

 
	});








////////////// keyup
$('#message').on('keyup', function(e) { 
 if(document.getElementById('message').value!=""){ 
 $('#chat_button_submit').show();
  $('#chat_button_tool').hide();
 } else {
 
  $('#chat_button_tool').show();
  $('#chat_button_submit').hide();
 
 }
 
 ///
    if (e.keyCode === 13) {
 
   $.post('go.php?name=livechat&file=savedata&type=new',$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });
 
  var url_chat = "go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
  $('#load-direct-chat').load(url_chat);  
 document.getElementById('message').value="";
		 
    }
});


/////// ตรวจสอบ ปุ่มส่ง

function checktext() {
 if(document.getElementById('message').value!=""){
 
 $('#chat_button_submit').show();
  $('#chat_button_tool').hide();
 } else {
 
  $('#chat_button_tool').show();
  $('#chat_button_submit').hide();
 
 }
}


    
   </script>
				  
   <?  include ("mod/livechat/sub/tool.php");?> 
<script type="text/javascript">
	$("#main-page-loader-sub").fadeOut(1000);
</script>