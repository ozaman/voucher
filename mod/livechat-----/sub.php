 
 <style>
 .img-chat-pic {
 
 border:0px solid #FFFFFF; background-color:#FFFFFF ;
 -moz-border-radius:10px;
  -webkit-border-radius:10px;

 border-radius:10px; 
 padding:0px; margin:0px; position: relative ; width:100px;
    
}

.messages{
    border: 0px solid #ccc;
    width: 100%;
 
    padding: 0px;
    overflow-y:scroll;

}
.message{
    color: slategrey;

}
 
 </style>
 
 
 
 
  
 
 <div id="chat_content"   class="messages" style="height:100vh; overflow:auto;padding-bottom:120px; margin-top: 0px; margin-bottom:-0px;  left:0px;  top:0px;  " >
 
 <br>

  <?
 
 $db->connectdb(DB_NAME_CHAT,DB_USERNAME,DB_PASSWORD);
$limit = 1 ;
 
 
 $res[chatlast] = $db->select_query("SELECT * FROM zvc_".$_GET[vc]." ORDER BY id desc limit 1"); 
 $arr[chatlast] = $db->fetch($res[chatlast]);
 
 
 

$res[chat] = $db->select_query("SELECT * FROM zvc_".$_GET[vc]." ORDER BY id asc");
$count=0;
while($arr[chat] = $db->fetch($res[chat])){




 /// comment_from
?>
  <? if($arr[chat][id_comment]>0){
			  $res[storechat] = $db->select_query("SELECT topic_en,topic_th,topic_cn from message_data_store  where id='".$arr[chat][id_comment]."' ");
$arr[storechat] = $db->fetch($res[storechat]);
			  
			  $arr[chat][comment]=$arr[storechat][topic_th];
			  
			  
			  }
			   ?>

			  <? if($arr[chat][comment_from]=="driver"){?>
			  
			  
			
			  
			  
 
			             <!-- เราเอง -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
				     <span class="direct-chat-name pull-right"><?=$data_driver_nickname?></span>
                    <span class="direct-chat-timestamp pull-left"> <?=$date = date('Y-m-d ',  $arr[chat][flight_delay_date]);?>&nbsp;<font color="#000000"><?=$date = date('h:i:s',  $arr[chat][flight_delay_date]);?></font></span>
                  </div>

 
  
  <!-- /.direct-chat-info -->
<img class="direct-chat-img" src="../../admin/file/driver/pic/small/<?=$arr[web_driver][post_date];?>.jpg" alt="Message User Image"><!-- /.direct-chat-img -->

<? if($arr[chat][type_state]=="share_photo"){?>
<div class="direct-chat-texts" style="text-align:right; padding-left:20px; "> 
  <? } ?>
  <? if($arr[chat][type_state]<>"share_photo"){?>
<div class="direct-chat-text">
  <? } ?>
  
  
			<?=$arr[chat][comment]?>  
			
			
			<? if($arr[chat][type_state]=="share_photo"){?>
 
			&nbsp;<img src="../data/fileupload/photo/<?=$arr[chat][voucher];?>_<?=$arr[chat][flight_delay_date]?>_small.jpg"   align="absmiddle" style="padding: 5px display:nonex" class="img-chat-pic" id="button_photo_<?=$arr[chat][id]?>">&nbsp;<?=$arr[chat][flight_delay]?>
			
			<script>
			 $('#button_photo_<?=$arr[chat][id]?>').click(function(){  
    $( "#popup_chat_preview_photo" ).toggle("slide");
 $("#preview_image_album").attr("src", "../data/fileupload/photo/<?=$arr[chat][voucher];?>_<?=$arr[chat][flight_delay_date]?>_big.jpg");

 
 });
			
			</script>
			
		    <? } ?>
			</div>
				 
                </div>
				
                <!-- /.direct-chat-msg -->
			  <? } ?>
			  
			  
			  
			  
			<? if($arr[chat][comment_from]<>"driver"){?>  
			
			
			
			  
			
			
                <!-- เริ่มคนอื่น -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left">ผู้ใช้บริการ</span>
                    <span class="direct-chat-timestamp pull-right"> <?=$date = date('Y-m-d ',  $arr[chat][flight_delay_date]);?>&nbsp;<font color="#000000"><?=$date = date('h:i:s',  $arr[chat][flight_delay_date]);?></font></span>
                  </div>
                  <!-- ข้อความคนอื่น -->
				  
				  
				  
				  
				  
				  
                  <img class="direct-chat-img" src="images/icon/user/<?=$arr[chat][comment_from]?>.png?v=<?=$cache;?>" alt="Message User Image"><!-- /.direct-chat-img --> 

                  <div class="direct-chat-text"  >
				  
				<script>
$("#translate_normal_<?=$arr[chat][id]?>").click(function(){   
   $( "#chat_alert" ).slideToggle();
 /// $('#load_chat_share_map').load('google/check_system.php');
  });
				
				
				</script>
    

				  
  		   <div id="translate_normal_<?=$arr[chat][id]?>" style="margin-top:0px; padding-top:5px;">
<?=$arr[chat][comment]?>
		   </div> 
				  
  <? if($arr[chat][id_comment]>0){ ?>
  
  <div id="translate_en_<?=$arr[chat][id]?> " style="margin-top:5px; padding-top:5px;   border-top:1px solid #C1C1C1; color:#999999;  display:nones">
		<?=$arr[storechat][topic_en]?>
 </div>
 
 <div id="translate_cn_<?=$arr[chat][id]?> " style="margin-top:5px; padding-top:5px;   border-top:1px solid #C1C1C1; color:#999999;  display:nones">
		<?=$arr[storechat][topic_cn]?>
 </div>
 
  <? } ?>
				  
				  
         
		   
		    <!-- แปล -->

		   
		 <div id="translate_<?=$arr[chat][id]?> " style="margin-top:5px; padding-top:5px;   border-top:1px solid #999999; display:nones">
			 <a  data-target="#popup_chat_show_map" data-toggle="modal" data-backdrop="static" data-keyboard="false" id="btn_show_gps_<?=$arr[chat][id]?>">  <i  id="main_gps_status" style=" font-size:16px; color: #006699 " class="fa fa-map-marker " ></i> แสดงตำแหน่ง  </a>
		   </div> 
		   
		   
		   
		   
		   <? if($arr[chat][state_name]=="flight_delay"){?>&nbsp;<img src="images/usercar_after.png?v=<?=$cache;?>" width="25"  align="absmiddle" style="padding: 0px 0;">&nbsp;<?=$arr[chat][flight_delay]?>
 		   
		    <? } ?>
			
			
			
					   <? if($arr[chat][state_name]=="driver_to_point"){?><br>

 <img src="../data/fileupload/map/<?=$arr[chat][voucher]?>_<?=$arr[chat][flight_delay_date]?>.png?v=<?=$cache;?>"    align="absmiddle" style="padding: 0px; width:180px;">
 		   
		    <? } ?>
			
			  <? if($arr[chat][state_name]=="customer_to_point"){?><br>
<table width="100%"  border="0" cellspacing="2" cellpadding="2" >
  <tr>
 
	<td align="right" style="background-color:#FFFFFF ">	
	
	<script>
	///popup_chat_show_map
 
	
  $("#btn_show_gps_<?=$arr[chat][id]?>").click(function(){
 $('#load_map_gps').load('google/index.php');
  
  });
	
	
 $('#btn_show_en_<?=$arr[chat][id]?>').click(function(){  
 $("#full_pic_chat_en").attr("src", "../data/fileupload/vc/<?=$arr[chat][img_post_date]?>.jpg?v=<?=$cache;?>");
 
 });
 
  $('#btn_show_guest_<?=$arr[chat][id]?>').click(function(){  
 $("#full_pic_chat_en").attr("src", "../data/fileupload/vc/<?=$arr[chat][yourself_post_date]?>.jpg?v=<?=$cache;?>");
 
 });
 </script>
	
	
	
	 <a  data-target="#popup_chat_show_pic" data-toggle="modal" data-backdrop="static" data-keyboard="false" id="btn_show_en_<?=$arr[chat][id]?>"><img src="../data/fileupload/vc/<?=$arr[chat][img_post_date]?>.jpg?v=<?=$cache;?>"    align="absmiddle" style="padding: 0px; width:100px;" class="img-chat-pic"></a><br>
	 
	 
	  <a  data-target="#popup_chat_show_pic" data-toggle="modal" data-backdrop="static" data-keyboard="false" id="btn_show_guest_<?=$arr[chat][id]?>">
<img src="../data/fileupload/vc/<?=$arr[chat][yourself_post_date]?>.jpg?v=<?=$cache;?>"    align="absmiddle" style="padding:0px; width:100px" class="img-chat-pic"></a></td>
  </tr>
</table>


 		   
		    <? } ?>
			
                  </div>
                  <!-- /จบข้อความคนอื่น -->
				  

                </div>
                <!-- จบ -->
				<? } ?> 
				
				  
				
				

				
				
				
				
				
				
				

				
				 
				<? } ?>
				
				<div id="chat-load-new-<?=$arr[chatlast][id]?>"  style="display:none; margin-top:10px;" >
				<?=$arr[chatlast][id]?>
				 <div> <br>
<br>
<br>
<br>
<br>
<br>
<br>

 
<script>
  
   document.getElementById('vc_chat_last_id').value=<?=$arr[chatlast][id]?>;
document.getElementById('message').value="";
 
  //  setInterval(function() {

 
$(".messages").animate({ scrollTop: 99999 }, 3000);
 
// }, 3000); // 60000 milliseconds = one minute
  </script>  