 <div id="load_wait_upload"> </div> 
 <?
$chat_from=$_GET[chat_from];
$chat_to=$_GET[chat_to];
 ?>
 
  <?  include ("includes/lang/chat.php");?> 
     <?  include ("mod/livechat/sub/popup/alert_map.php");?> 
 <div style="display:none"> <?  include ("google/gps/popup.php");?> </div>
 <?  include ("mod/livechat/config.php");?> 
 
 <?  include ("mod/livechat/update/check.php");?> 
 
 
 
<?  include ("mod/livechat/sub/popup/share_map.php");?> 
<?  include ("mod/livechat/sub/popup/share_map_realtime.php");?>   
<?  include ("mod/livechat/sub/popup/share_album.php");?> 
  
<?  include ("mod/livechat/sub/popup/preview_photo.php");?> 
<?  include ("mod/livechat/sub/popup/preview_map.php");?> 
  

	
	    <?  include ("mod/livechat/sub/popup/alert_online.php");?> 

 
 <div style="position: relative">
 
 <script>
 
$('#close_popup_chat').click(function(){  
  
  $( "#load_data_manage_work" ).toggle();
 
     	});
 
					
					</script> 

 
 
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
   $("#head_full_popup" ).html("<font style='text-transform:capitalize'>Live Chat &nbsp; VC.<?=$_GET[vc]?>");
   
     $("#head_full_popup_icon" ).html("<i class='fa  fa-gear'></i>");
  
  </script>

  
   <!-- Direct Chat --> 
 
          <!-- DIRECT CHAT PRIMARY style="position:fixed" --> 
          <div class="box box-primary direct-chat direct-chat-primary" style=" overflow:auto;padding-bottom:0px; margin-top: -40px; margin-bottom:-30px ;border-top:none"  id="main_message_chat">
		 
            <div class="box-header with-border" style="height:35px; background-color:<?=$bg_chat_head?>; border-top:none ">  
       
 
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
 
 
 
 
 <button type="button" class="btn btn-box-tool"   title="Contacts" data-widget="chat-pane-toggle"  style="color:#333333;font-size:16px; margin-top:-5px; text-transform:capitalize">
 <? 
 if($chat_to=='customer'){
 echo  chat_user_customer; 
 }
  if($chat_to=='driver'){
 echo  chat_user_driver; 
 }
   if($chat_to=='callcenter'){
 echo  chat_user_driver; 
 }
    if($chat_to=='agent'){
 echo  chat_user_agent; 
 }
 
 ?>
 
 
 <i class="fa fa-user" style="font-size:20px"  id="chat_icon_user_status"></i>
 <span  style="font-size:16px " id="chat_icon_user_status_text"><b>&nbsp;<?=chat_offline?></b></span></button> 
 
 <button type="button" class="btn btn-box-tool"   title="Contacts" data-widget="chat-pane-toggle" id="chat_icon_refresh" style="margin-top:-5px; ">
  <i class="fa fa-refresh" style="font-size:20px "></i></button> </div>  
			         </div>   
 
            <!-- /.box-header -->
            <div class="box-body"  style="height:100vh; overflow:hidden;padding:0px;"> 

              <!-- เริมการแชท -->  
       <div class="direct-chat-messages" style="height:100%; overflow:auto ; padding-bottom:0px; padding-left:5px; margin-bottom:10px; background-color:<?=$bg_chat?>; " id="load-direct-chat"> 
 
 
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
   var url_chat = "<?=$chat_part?>go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>&chat_from=<?=$chat_from?>&chat_to=<?=$chat_to?>&lang=<?=$_GET[lang]?>";
   $('#load-direct-chat').load(url_chat); 
 ////
  
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
 
 var url="<?=$chat_part?>go.php?name=livechat&file=savedata&type=new&vc=<?=$_GET[vc]?>&chat_from=<?=$chat_from?>&chat_to=<?=$chat_to?>&lang=<?=$_GET[lang]?>";
	url=url+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
	url=url+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 	url=url+"&state="+document.getElementById('state').value;
	 	url=url+"&state_type="+document.getElementById('statetype').value;
  
   $.post(url,$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });
 
 
 ///alert(last_id);
   var url_chat = "<?=$chat_part?>go.php?name=livechat&file=sub_new&vc=<?=$_GET[vc]?>&chat_from=<?=$chat_from?>&chat_to=<?=$chat_to?>&lang=<?=$_GET[lang]?>&lastid="+last_id;
  $('#chat-load-new-'+last_id).load(url_chat); 
  
   $('#chat-load-new-'+last_id).fadeIn(2000);
///$(".messages").animate({ scrollTop: 99999 }, 3000);

  $('#chat_button_tool').show();
  $('#chat_button_submit').hide();
   var url_chat = "<?=$chat_part?>go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>&chat_from=<?=$chat_from?>&chat_to=<?=$chat_to?>&lang=<?=$_GET[lang]?>";
 ///  $('#load-direct-chat').load(url_chat); 
 
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
 
 var url="<?=$chat_part?>go.php?name=livechat&file=savedata&type=new&vc=<?=$_GET[vc]?>&chat_from=<?=$chat_from?>&chat_to=<?=$chat_to?>&lang=<?=$_GET[lang]?>";
	url=url+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
	url=url+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 	url=url+"&state="+document.getElementById('state').value;
	 	url=url+"&state_type="+document.getElementById('statetype').value;
  
   $.post(url,$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });
 
   var url_chat = "<?=$chat_part?>go.php?name=livechat&file=sub_new&vc=<?=$_GET[vc]?>&chat_from=<?=$chat_from?>&chat_to=<?=$chat_to?>&lang=<?=$_GET[lang]?>&lastid="+last_id;
  $('#chat-load-new-'+last_id).load(url_chat); 
  
   $('#chat-load-new-'+last_id).fadeIn(2000);
///$(".messages").animate({ scrollTop: 99999 }, 3000);

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
 
   $.post('<?=$chat_part?>go.php?name=livechat&file=savedata&type=new&chat_from=<?=$chat_from?>&chat_to=<?=$chat_to?>&lang=<?=$_GET[lang]?>',$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });
 
  var url_chat = "<?=$chat_part?>go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
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



<?
$gps_icon_color="#FFED22";
?>
 
   <!------ class="modal fade"----> 
 
 <!------ end---->
 <style type="text/css">
.mainpic_qr {
 
   padding:10px; color:#000000;    
 
   border:3px solid #3C8DBC; background-color:#FFFFFF; 
   box-shadow: 2px 1px 10px #333333; margin-right:5px; margin-bottom:5PX;max-width:400px;
    
}
 #mainheadmenu {
 position:fixed ;   z-index:9999; width:100%;box-shadow: 0px  2px 2px #999999;background-color:3C8DBC; margin-top:-5px; padding:0px;
   border-bottom:3px solid #FFFFFF;
  }
 
  #mainheadmenu a:hover {
 background-color:#4BA7DC;padding:0px;
 
 }
 
   #mainheadmenu a:hover {
 padding:0px; color:#FFFFCC; background:none;
 
 }
    #mainheadmenu  a:active {
color:#FFFFCC;padding:0px;
 
 }
 
@-webkit-keyframes gps-color {
    0%   { color: <?=$gps_icon_color?> }
    25%  { color: white; font-size:30px; }
	50%   { color: <?=$gps_icon_color?> }
	75%  { color: white; font-size:30px; }
    100% { color: <?=$gps_icon_color?> }
 
}

 @-moz-keyframes gps-color {
 
 
	
}




.gps-status-icon {
     
 font-size:30px;
 
	  
	  
	 	  -webkit-transition: all 2s;
	   -moz-animation: gps-color 2s infinite;
	  
      -webkit-transition: all 2s;
    -webkit-animation: gps-color 2s infinite;
}
 
-->
 </style> 