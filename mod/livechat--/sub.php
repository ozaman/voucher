 <style>
 .img-chat-pic {
 
    border:3px solid #FFFFFF; background-color:#FFFFFF ;
 
	 box-shadow: 0 1PX 1px 2px #D7D6D6;
	   -moz-border-radius:5px;

 -webkit-border-radius:5px;

 border-radius:5px; 
 padding:5px; margin:5px; position: relative ;
    
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
 
 
 
 
 
 <script>
 /*
function showHeight( element, height ) {
  $( "div" ).text( "The height for the " + element + " is " + height + "px." );
}
 
$( "#chat_content" ).click(function() {
var dd = $( window ).height()  ;
 alert(dd);
 
});
*/
</script>
 
 
 <div id="chat_content"   class="messages" style="height:100vh; overflow:auto;padding-bottom:120px; margin-top: 0px; margin-bottom:-0px;  " >
 
 <br>

  <?
 
 $db->connectdb(DB_NAME_CHAT,DB_USERNAME,DB_PASSWORD);
$limit = 1 ;
 
 

$res[chat] = $db->select_query("SELECT * FROM zvc_".$_GET[vc]." ORDER BY id asc");
$count=0;
while($arr[chat] = $db->fetch($res[chat])){




 /// comment_from
?>
			  <? if($arr[chat][comment_from]=="customer"){?>
			  
			  
			
			  
			  
 
			             <!-- เราเอง -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
				     <span class="direct-chat-name pull-right"><?=$arr[chat][comment_from]?></span>
                    <span class="direct-chat-timestamp pull-left"> <?=$date = date('Y-m-d ',  $arr[chat][flight_delay_date]);?>&nbsp;<font color="#000000"><?=$date = date('h:i:s',  $arr[chat][flight_delay_date]);?></font></span>
                  </div>

 
  
  <!-- /.direct-chat-info -->
<img class="direct-chat-img" src="images/icon/user/<?=$arr[chat][comment_from]?>.png?v=<?=$cache;?>" alt="Message User Image"><!-- /.direct-chat-img -->
<div class="direct-chat-text">
			<?=$arr[chat][comment]?> <? if($arr[chat][state_name]=="flight_delay"){?>&nbsp;<img src="images/usercar_after.png?v=<?=$cache;?>" width="25"  align="absmiddle" style="padding: 5px 0; display:none">&nbsp;<?=$arr[chat][flight_delay]?>
		    <? } ?>
			</div>
				 
                </div>
				
                <!-- /.direct-chat-msg -->
			  <? } ?>
			  
			  
			  
			  
			<? if($arr[chat][comment_from]<>"customer"){?>  
			
			
			  <? if($arr[chat][id_comment]>0){
			  $res[storechat] = $db->select_query("SELECT topic_en,topic_th,topic_cn from message_data_store  where id='".$arr[chat][id_comment]."' ");
$arr[storechat] = $db->fetch($res[storechat]);
			  
			  $arr[chat][comment]=$arr[storechat][topic_th];
			  
			  
			  }
			   ?>
			  
			
			
                <!-- เริ่มคนอื่น -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left"><?=$arr[chat][comment_from]?></span>
                    <span class="direct-chat-timestamp pull-right"> <?=$date = date('Y-m-d ',  $arr[chat][flight_delay_date]);?>&nbsp;<font color="#000000"><?=$date = date('h:i:s',  $arr[chat][flight_delay_date]);?></font></span>
                  </div>
                  <!-- ข้อความคนอื่น -->
                  <img class="direct-chat-img" src="images/icon/user/<?=$arr[chat][comment_from]?>.png?v=<?=$cache;?>" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text"  >
				  
  		   <div id="translate_th_<?=$arr[chat][id]?> " style="margin-top:0px; padding-top:5px;">
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
 
<script>
$(".messages").animate({ scrollTop: 99999 }, 500);
 
 
  </script>
 