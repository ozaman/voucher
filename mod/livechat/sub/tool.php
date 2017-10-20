<style>
.bottom_popup_chat
{ 
font-size:22px;   padding:0px;  color:#666666;  width:100%; background-color:<?=$bg_chat_bottom?>;      
  padding-bottom:0px;  
 
position: fixed;
  bottom:  0;
  
 
}
 
 </style>
 
<div class="bottom_popup_chat" style="margin:0;  ">  
 
				  <form id="chat_form" name="chat_form"  action="<?=$chat_part?>go.php?name=livechat&file=upload_pic&time=<?=time()?>"  method="post" enctype="multipart/form-data"  target="uploadtarget">  
<iframe id="uploadtarget" name="uploadtarget" src="" style="width:200px;height:0px;border:0"></iframe>

<input id="btnupload" type="submit"  class="btn btn-primary"   data-backdrop="false" value="อัพโหลด" style="display:none">

 <div class="box-footer" style="position:fixeds; padding-bottom:5px; margin-top:-20px; margin-left:0px; margin-right:0px; background-color:<?=$bg_chat_bottom?>; border-top: 2px solid #E7E8E8; ">
 			
  <div class="input-group" style="margin-top:-5px; " >
 
 <input type="hidden" name="<?=$chat_to?>_online" id="<?=$chat_to?>_online" value="0"  style="width:50px " />
 <input type="hidden" name="time" id="time" value="<?=time()?>"  style="width:50px " />
 <input type="hidden" name="statetype" id="statetype" value="chat_text"  style="width:50px " /> 
   <input type="hidden" name="vc_chat" id="vc_chat" value="<?=$_GET[vc]?>"  style="width:20px " /> 
 <input type="hidden" name="vc_chat_last_id" id="vc_chat_last_id" value="0"  style="width:50px " /> 
  <input type="hidden" name="chat_from" id="chat_from" value="<?=$chat_from?>"  style="width:20px " /> 
  <input type="hidden" name="chat_to" id="chat_to" value="<?=$chat_from?>"  style="width:20px " />
	<input type="hidden" name="chat_lang" id="chat_lang" value="<?=$_GET[lang]?>"  style="width:20px " /> 
 
  
				<div style="display:none">
 
				
				 <input type="file" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:125px" name="load_chat_camera" id="load_chat_camera"  accept="image/*"  capture="camera">

 
				  <input type="hiddens" name="state" id="state" value="31"  style="width:20px " /> 
 
				 </div>
 
     </div>

				 
				 
				  
				
             
					  
					   
					<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" > <input name="message" type="text"  id="message"   style="height:38px; width:100%; margin-right:5px; font-size:14px; " value="" placeholder="เขียนข้อความ ..." onFocus="checktext();"></td>
    <td style="width:25px; padding-left:5px;   "><button type="button" class="btn btn-default" style="margin-right:5px;   margin-left:0px; padding:5px; width:100%; height:38px " id="chat_button_talk"> <center><i class="fa fa-microphone" style="font-size:26px; color: #333333  "></i> </center> </button></td>
    <td   style="width:60px;padding-left:5px  ">      <button type="button" class="btn btn-default"  data-toggle="dropdown" style="margin-right:0px;  margin-left:0px; padding:2px; width:60px;margin-right:0px; height:38px  " id="chat_button_tool"> <i class="fa fa-plus-square-o" style="font-size:30px; color: #333333 "></i>  </button>
	
	 <button type="button" class="btn btn-primary btn-flat" style="display:none; width:60px; height:38px; background-color:<?=$maincolor?>"  id="chat_button_submit"><div style="margin-left:0px; "><?=chat_send?></div></button></td>
  </tr>
</table>


 <!-- /.box-body --> 
 

<!-- /.box-body -->  




 
 
  

  
 
	
	
 

 
 
	  
	  
  
  
                </div>
				<?  include ("mod/livechat/sub/tool_chat.php");?> 
<?  include ("mod/livechat/sub/tool_text.php");?> 
				  </form>
<script>
 $( document ).ready(function() {

$( "#chat_button_tool" ).click(function() {

 
///// tool status
 var text_status = $( "#show_text_tool" ).is(":hidden");
 if(text_status==false){   $( "#show_text_tool" ).slideToggle( "slow" );   }
 ///// ---- end  -----
 
/////
 $( "#show_chat_tool" ).slideToggle( "slow" );
 
    $('#load_text_store').html(''); 

  
});

$( "#chat_button_talk" ).click(function() {
  $( "#show_chat_talk" ).slideToggle( "slow" );
});
});

</script>

 <div style="padding:10px; display:none" id="show_chat_talk">
 <center>
<img src="images/talk/close.png" width="150"  align="absmiddle" id="icon_mic_status" style="margin-top:10px; "  onclick="startDictation()"></center>
<script>
  function startDictation() {
    if (window.hasOwnProperty('webkitSpeechRecognition')) {
      var recognition = new webkitSpeechRecognition();
	  	  document.getElementById('message').value="";
      recognition.continuous = false;
      recognition.interimResults = false; 
	   ////  recognition.lang = "zh-CN"; 
      recognition.lang = "th-TH";
	     $("#icon_mic_status").attr("src", "images/talk/open.gif");
      recognition.start(); 
      recognition.onresult = function(e) {
      document.getElementById('message').value= e.results[0][0].transcript;
	 recognition.stop();
	 
	 
	 
	  if(document.getElementById('message').value!=""){
 
 $('#chat_button_submit').show();
  $('#chat_button_tool').hide();
 } else {
 
  $('#chat_button_tool').show();
  $('#chat_button_submit').hide();
 
 }
 
   $( "#show_chat_talk" ).slideToggle( "slow" );
		/// $('#chat_button_submit').click();
 
      };
     recognition.onerror = function(e) {
        recognition.stop();
      }
 
    }
  }
 
</script>
 </div>




 
						 
 
	 
  




 
   
   
   
   <script>


  $("#chat_icon_gps").click(function(){   
  
  $( "#alert_show_map" ).slideToggle();
 
 //  $( "#popup_chat_share_map" ).slideToggle();
 /// $('#load_chat_share_map').load('google/check_system.php');
  });
  
   /////// popup map 1
 
 $("#button_alert_show_map_now").click(function(){   
 
 
   $( "#popup_chat_share_map" ).slideToggle();
  $( "#alert_show_map" ).slideToggle(); 

 $('#load_chat_share_map').load('google/check_system.php');
  });




     /////// popup map 2
  $("#button_alert_show_map_realtime").click(function(){     
    $( "#popup_chat_share_map_realtime" ).slideToggle();  
  $( "#alert_show_map" ).slideToggle(); 
 ///$('#load_chat_share_map_realtime').load('load_blank.php?name=livechat/realtime');
 
 $('#load_chat_share_map_realtime').html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0" src="load_blank.php?name=livechat/realtime" allowfullscreen></iframe>');
  });
 
  
 
/////// // ส่งตำแหน่ง จุด
 $("#btn_send_gps_point").click(function(){  

document.getElementById('statetype').value='share_location';

   var url="<?=$chat_part?>go.php?name=livechat&file=savedata&type=new&vc=<?=$_GET[vc]?>&chat_from=<?=$chat_from?>&chat_to=<?=$chat_to?>";
	url=url+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
	 url=url+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 	url=url+"&state_type="+document.getElementById('statetype').value;
 
   $.post(url,$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });
 
  var url_chat = "<?=$chat_part?>go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>&chat_from=<?=$chat_from?>&chat_to=<?=$chat_to?>";
  $('#load-direct-chat').load(url_chat); 
   document.getElementById('message').value="";

$( "#popup_chat_share_map" ).hide() ;

$( "#chat_button_tool" ).click();


 });
	
	
  
  
    $("#chat_icon_camera").click(function(){ 
 
  $("#load_chat_camera").click();
  
  });
  
  $("#chat_icon_album").click(function(){  
  
  $("#load_chat_album").click();
  
  
  
  });
  
   
  ///////////
  /*
  document.getElementById("load_chat_album").onchange = function () {
     $("#btnupload").click();
    var reader = new FileReader();
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image_album").src = e.target.result;
		   $( "#popup_chat_share_album" ).slideToggle();
		   
 
		   
///$.post('<?=$chat_part?>go.php?name=livechat&file=upload_pic',$('#chat_form').serialize(),function(response){
// $('#send_chat_data').html(response);  });
 
 
  
 

	
	 
		   
    };
	
	
	

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
  
  */
  ///////////////// 
  
  $("#chat_icon_refresh").click(function(){  
 
    var url_chat = "<?=$chat_part?>go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>&chat_from=<?=$chat_from?>&chat_to=<?=$chat_to?>&lang=<?=$_GET[lang]?>";
  $('#load-direct-chat').load(url_chat); 
   document.getElementById('message').value="";
 
    });

  

  var url_button = "<?=$chat_part?>go.php?name=livechat/sub/load&file=send_button&type=tool";
  ///$('#chat_button_load').load(url_button); 
 // alert(0);



</script>



<div id="send_chat_data" > </div>								
<div style="display:none "><?    include ("mod/livechat/sub/album.php");?> </div>


<style>
	 
.back-full-popup
{ 
font-size:22px;   padding:10px;  color:#FFFFF;  width:100%; background-color:<?=$maincolor?>;      
 border-bottom: 0px solid #ffffff; margin-bottom: 0px; height:45px; 
  top:  0; position:fixed;
    z-index: 1; 
 
}
 
</style>
 
 