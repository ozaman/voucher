 
 <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
 
 <div     id="popup_chat_share_map" role="dialog"   aria-labelledby="myModalLabel"    style="width:100%; height:100%; padding:0px; margin-left:0px;   z-index:100; background-color:#FFFFFF; position:absolute;  display:none">
 <? //  include ("load/page/back_popup.php");?>
 <div class="modal-dialog"    style="width:95%; padding:0px; ">

            <!-- Modal  class="modal fade" content-->
            <div class="modal-content" style="width:100%; padding-top:20px; margin-left:0px " > 
 
                    <h4 class="modal-title" style="font-size:20px; height:15px;     font-family:Arial, Helvetica, sans-serif; text-transform:uppercase">
					
					
					<center><b> แชร์ตำแหน่งเรียลไทม์</b></center></h4>
 
                <div class="modal-body"  id="load_chat_share_map" style="width:100%;    padding:0px; margin-left:0px; margin-top:10px; ">  
		 
		  
</div> 

 
                <div class="modal-footer" style="margin-top:-10px;">
				       <center>
					 <button type="button" class="btn btn-modal-no" data-dismiss="modal"  data-backdrop="static" id="btn_close_gps_popup" >ปิด</button>
					 <button type="button" class="btn btn-modal-ok"     data-backdrop="static" id="btn_send_gps_popup" >ส่งตำแหน่ง</button>
 
    <script>
$( document ).ready(function() {
	  $('#load-direct-chat').load('load/loading/chat.php'); 
   var url_chat = "go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
 $('#load-direct-chat').load(url_chat); 
 
  });


	  $("#btn_close_gps_popup").click(function(){   
   $( "#popup_chat_share_map" ).toggle("slide");
 

	 });
	</script>
                </div>
            </div>
  </div>
 
</div>	
 


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

<input name="chat_driver_id" type="hiddens" id="chat_driver_id" value="<?=$arr[vc][drivername]?>" />  <br />
<input name="chat_vc_id" type="hiddens" id="chat_vc_id" value="<?=$_GET[vc]?>" />  <br />
  
  
  <script>
   $("#head_full_popup" ).html("ห้องสนทนาสด <?=$_GET[vc]?>");
   
     $("#head_full_popup_icon" ).html("<i class='fa  fa-comment'></i>");
  
  </script>
   <!-- Direct Chat --> 
 
          <!-- DIRECT CHAT PRIMARY style="position:fixed" -->
          <div class="box box-primary direct-chat direct-chat-primary" style=" overflow:auto;padding-bottom:0px; margin-top:-50px; margin-bottom:-30px "  id="main_message_chat">
            <div class="box-header with-border" style="height:40px; ">  
       

              <div class="box-tools pull-right" >
                <span data-toggle="tooltip" title="3 ข้อความใหม่" class="badge bg-light-blue">3</span>
 
                <button type="button" class="btn btn-box-tool" data-widget="collapse"> 
                </button>
                <button type="button" class="btn btn-box-tool"   title="Contacts" data-widget="chat-pane-toggle" id="chat_icon_refresh">
                  <i class="fa fa-refresh" style="font-size:20px "></i></button>
            
              </div>  
			         </div>   
			
			
 
            <!-- /.box-header -->
            <div class="box-body"  style="height:100vh; overflow:hidden"> 

              <!-- เริมการแชท --> 
       <div class="direct-chat-messages" style="height:100%; overflow:auto ; padding-left:5px; margin-bottom:100px; background-color:" id="load-direct-chat"> 
 sssssssssssss<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<? echo $_GET[vc];?>
 
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
		
 
		 <style>
.bottom_popup_chat
{ 
font-size:22px;   padding:0px;  color:#666666;  width:100%; background-color:#F6F6F6;      
 border-bottom: 0px solid #e5e5e5; margin-bottom:  0px; padding-bottom:5px; margin-left:-10px;
 
position: fixed;
  bottom:  0;
 
 
 
}
 
 </style>
 


 
				<div class="bottom_popup_chat">
				 
				 
				  <form id="chat_form" name="chat_form"  action="?name=chat&file=savedata&type=guest"  target="uploadframe2" method="post">  
   <iframe id="uploadframe2" name="uploadframe2" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
				<div class="box-footer" style="position:fixeds; padding-bottom:5px; margin-top:-20px; margin-left:5px; margin-right:5px; background-color:#FFFFFF">
 			
                <div class="input-group">
				
				
				<div id="load_input_message" style="padding:0px; ">				 
				<div style="display:none ">
				 <input type="file" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:125px" id="load_chat_camera"  accept="image/*"  capture="camera">
			<input type="file" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:125px" id="load_chat_video"  accept="video/*"  capture="camera">
			
				  <input type="hiddens" name="state" id="state" value="31"  style="width:20px " /> 
				  
				  
				    <input type="hiddens" name="vc_chat" id="vc_chat" value="<?=$_GET[vc]?>"  style="width:20px " /> 
				 
				 </div>
				
				
                  <input type="text" name="message"  id="message" placeholder="เขียนข้อความ ..." class="form-control">    
    
     </div>
   </form>
				 
				 
				  
				
                      <span class="input-group-btn" style="width:auto ">
					  
					 
					  
<button type="button" class="btn btn-default" style="margin-right:5px;  margin-left:5px; padding:5px; width:30px; "> <i class="fa fa-microphone" style="font-size:22px; color: #333333 " onclick="startDictation()"></i>  </button>
						      <!-- /.box-body -->                    
<button type="button" class="btn btn-default" style="margin-left:0px; padding:5px; width:30px; "  > <i class="fa fa fa-smile-o" style="font-size:22px; color: #333333 " ></i>  </button>  

<!-- /.box-body -->  




 
 
  
  <button type="button" class="btn btn-default"  data-toggle="dropdown" style="margin-right:0px;  margin-left:5px; padding:5px; width:30px;margin-right:5px;  " id="chat_button_tool"> <i class="fa fa-plus-square-o" style="font-size:22px; color: #333333 "></i>  </button>
  
 

	
	
	
 

 
 
	  
	  
 
 
						<!-- /.box-body --> 
						
						
 
												 
<button type="button" class="btn btn-primary btn-flat" style="display:nones; width:30px"  id="chat_submit"><div style="margin-left:-5px; ">ส่ง</div></button>
                      </span>
					  
					  
					  
					  
					  
					  
                </div>
				
<script>
 
$( "#chat_button_tool" ).click(function() {
  $( "#show_chat_tool" ).slideToggle( "slow" );
});
</script>
 
 <div style="padding:10px; display:nones" id="show_chat_tool">
       
 <table width="100%"  border="0" cellspacing="1" cellpadding="1" >
  <tr>
    <td width="25%">  <center><button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="btn_type"> <i class="fa fa-comments-o" style="font-size:40px; color: #999999 "></i>  </button>
<br><div style="margin-top:5px; font-size:12px "> คำที่ใช้บ่อย</div>
</td>
    <td width="25%"> <center><button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="chat_icon_camera"> <i class="fa fa-camera" style="font-size:40px; color: #999999 "></i>  </button>
<br><div style="margin-top:5px; font-size:12px "> ถ่ายภาพ</div></td>
    <td width="25%"><center><button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="chat_icon_video"> <i class="fa fa-video-camera" style="font-size:40px; color: #999999 "></i>  </button>
<br><div style="margin-top:5px; font-size:12px  ">  วิดีโอ</div></td>
    <td width="25%"> 
<center><button type="button" class="btn btn-default"  style="margin-right:0px;  margin-left:0px; padding:10px; width:60px;margin-right:0px;border-radius: 15px;  " id="chat_icon_gps"  > 




<i class="fa fa-map-marker" style="font-size:40px; color: #999999 "></i>  </button>
<br><div style="margin-top:5px; font-size:12px "> แชร์ตำแหน่ง</div></td>
  </tr>
 
 
</table>
</div>
 
						 
 
	 
  <script>
  
  	$(document.body).animate({
    'scrollTop':   $('#main_message_chat').offset().top
}, 1000);
  
  
  
    $('#show_chat_tool').hide();
  
     $('#chat_submit').addClass('disabled');
  $('#message').on('keyup', function() {
 
 if(document.getElementById('message').value!=''){
 
  $('#chat_submit').removeClass('disabled');
 
 
 }
 
  if(document.getElementById('message').value==''){
 
$('#chat_submit').addClass('disabled');
 
 
 }
 
 
  
  	});
  
  /////
  $('#btn_type').click(function() {
 
 
 
 
  
  $('#type_message').show();
 
  
  	});
	
	  $('#type_message').change(function() {
 
 	document.getElementById('message').value=document.getElementById('type_message').value;
  
  	});
	

	
	
 
 ////
  $('#load-direct-chat').load('load/loading/chat.php'); 
   var url_chat = "go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
 


 $('#load-direct-chat').load(url_chat); 
 ////
 
$('#chat_submit').click(function() {
 
  

  
    var url="go.php?name=livechat&file=savedata&type=new&vc=<?=$_GET[vc]?>";
	//url=url+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
	//url=url+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 	url=url+"&state="+document.getElementById('state').value;
  
 
   $.post(url,$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });

   alert(0);

  var url_chat = "go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
  $('#load-direct-chat').load(url_chat); 
   document.getElementById('message').value="";
   

 


 
 
 
 

 
    return false;
	});


$('#message').on('keyup', function(e) {
 
 
	
 

 
 
    if (e.keyCode === 13) {
  
   $.post('go.php?name=livechat&file=savedata&type=new',$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });


  var url_chat = "go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
  $('#load-direct-chat').load(url_chat); 
 
		
		
		document.getElementById('message').value="";
		// $('#message').unbind('keyup keydown keypress');
		 
		///document.getElementById('btn_emo').focus() ;
		
		//document.getElementById('message_blank').focus() ;
		
		///  alert(0);
		// $('#load_input_message').html("<input type='text' name='message'  id='message' placeholder='เขียนข้อความ' class='form-control' >");
    }
});

    
				  </script>
 <script>
  function startDictation() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();
	  document.getElementById('message').value="";

      recognition.continuous = false;
      recognition.interimResults = false;
 
	   ////  recognition.lang = "zh-CN";
 
      recognition.lang = "th-TH";
      recognition.start();
 
      recognition.onresult = function(e) {
        document.getElementById('message').value
                                 = e.results[0][0].transcript;
								
        recognition.stop();
		
 
		 $('#chat_submit').click();
		
		 
 
     //    document.getElementById('labnol').submit();
      };
 
      recognition.onerror = function(e) {
        recognition.stop();
      }
 
    }
  }
  
  
 
				
</script>





   <div id="send_chat_data"> </div>								
 
   
   
   
   <div    class="modal fade" id="popup_chat_show_pic" role="dialog"   aria-labelledby="myModalLabel"   style=" padding:0px; "  >
 <? //  include ("load/page/back_popup.php");?> 
 <div class="modal-dialog"   style=" padding:0px;" >

            <!-- Modal  class="modal fade" content-->
            <div class="modal-content"  style=" padding:0px;"  > 
 
 
                <div class="modal-body"  style=" padding:0px;    ">
				<button type="button" class="close" data-dismiss="modal" style="font-size:50px; ">&times;</button>
				<img src=""    align="absmiddle" style="padding: 0px; width:100%;  "  id="full_pic_chat_en"  class="img-chat-pics"  data-dismiss="modal" data-backdrop="static" >
				
				</div> 

 
              
            </div>
  </div>
 
</div>	

 
</div>







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

<style>
  .modal-backdrop {
   background-color:#FFFFFF; opacity: 0.5;
  padding:0px;   
}

.modal.fade:not(.in) .modal-dialog {
box-shadow:none;  top:0;
    background-color:#000000
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);   padding:0px;   
 
}

.modal {
box-shadow:none;
    background-color:#FFFFFF; z-index:99999; opacity: 0.5;
 
 
}
.modal {
box-shadow:none;
  padding:0px;   
	
	
 
}

.modal-dialog {  
 
padding:0px;   
}
.modal-content {
 box-shadow:none;  border:none; padding:0px;   

}
body.modal-open { 
  padding-right: 0 !important; 
 
}
body.modal-open {
    overflow: visible;
    position: absolute;
    width: 100%;
    height:100%;    padding:0px;   
}  
body. { position:fixed;

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

 
 
 
 <style>
 
/* Make backdrop visible for demonstration */
.dropdown-backdrop {
    background: rgba(55,55,55,.2);
}
/* This will work, hiding only the first backdrop */
#firstDropdown .dropdown-backdrop {
    display:none;
}

.btn-dropdown-add {
    background: #DDD;
    margin: 10px 10px 0;
    padding: 5px 10px;
    z-index: 5000;
}
 
 </style> 


 

<script>


  $("#chat_icon_gps").click(function(){   
   $( "#popup_chat_share_map" ).slideToggle();
  $('#load_chat_share_map').load('google/check_system.php');
  });
  
 
	
 
 $("#btn_send_gps_popup").click(function(){  
 
 
  document.getElementById('state').value=33;
   $.post('go.php?name=livechat&file=savedata&type=new',$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });


  var url_chat = "go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
  $('#load-direct-chat').load(url_chat); 
 
 
 
    });
 
	
	
  
  
    $("#chat_icon_camera").click(function(){ 
 
  $("#load_chat_camera").click();
  
  });
  
        $("#chat_icon_video").click(function(){  
  $("#load_chat_video").click();
  
  });
  
  
          $("#chat_icon_refresh").click(function(){  
    var url_chat = "go.php?name=livechat&file=sub&vc="+document.getElementById('vc_chat').value;
  $('#load-direct-chat').load(url_chat); 
   document.getElementById('message').value="";
    });
  
 


</script>



 
 
 <div class="chat-loader"> </div> 
 
 
 
 
 
 
 
 
 
 
 <div id="check_chat_update" style="display:none"> 55</div> 
		<div id="check_chat_gps" style="display:none">22</div> 
		<div id="check_chat_time" style="display:none">333</div>
	
</div>




 <div style="display:nones">
 <?  include ("google/gps/popup.php");?>
 <? include "sound/index.php";?></div>
 
 
 <script>
 setInterval(function() {
 var url_check_chat_update = "go.php?name=chat/online&file=driver&vc=<?=$_GET[vc]?>";
 $('#check_chat_update').load(url_check_chat_update);
 
 
 
 /*
  var url_check_chat_gps = "go.php?name=chat/online&file=update_time&vc=<?=$_GET[vc]?>&order=<?=$_GET[order]?>";
 $('#check_chat_gps').load(url_check_chat_gps);
 
 */
 
 
  var url_check_data_time = "go.php?name=chat/online&file=update_time&vc=<?=$_GET[vc]?>&order=<?=$_GET[order]?>";
url_check_data_time =url_check_data_time+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
 url_check_data_time =url_check_data_time+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
  
 $('#check_chat_time').load(url_check_data_time);
 
  
}, 3000); // 60000 milliseconds = one minute
 
	</script>

 
 
 
 

 
 
