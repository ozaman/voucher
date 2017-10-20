 <?
$chat_from=$_GET[chat_from];
$chat_to=$_GET[chat_to];
$chat_from=$_GET[chat_from];
if($chat_from=='customer'){
$chat_part='../car/';
$maincolor="#3B5998";
$chat_padding="padding:10px;";

} else {

$chat_part='';

$maincolor="#3C8DBC";

}


$bg_chat_head="#FFFFFF";
$bg_chat_bottom="#FFFFFF";
$bg_chat_soft="#FFFFFF";
$bg_chat_soft_border="#E7E8E8";


$bg_chat="#F5F5F5";


 ?>
 
 
 
  
 
 <div id="chat_content"   class="messages" style="height:100vh; overflow:auto;padding-bottom:120px; margin-top: 0px; margin-bottom:-0px;  left:0px;  top:0px; padding:5px;   " >
 
 

  <?
 
 $db->connectdb('admin_chat',DB_USERNAME,DB_PASSWORD);
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
  }
			   ?>
			   
			
			
 <!-- เริ่มข้อความเราเอง --> 
 <? if($arr[chat][day_start]==1){ ?>
 <div style="padding-top:20px; "><center> <div class="chat-day"> <center><?=$date = date('d-m-Y ',  $arr[chat][flight_delay_date]);?></center></div></div>
 <? } ?>
 
 <?  include ("mod/livechat/message/list.php");?>

 
 <!--  จบ ข้อความเราเอง -->  
			  
  <!-- เริ่มข้อความคนอื่น --> 
<? //if($arr[chat][comment_from]<>$chat_from){?>  
 <? //include ("mod/livechat/message/me.php");?>  
<? // } ?> 
<!--  จบ ข้อความคนอื่น--> 

				
				 <!-- จบ loop --> 
				<? } ?>
				
				
				
				<div id="chat-load-new-<?=$arr[chatlast][id]?>"  style="display:nones; margin-top:10px;" >
				<? ///=$arr[chatlast][id]?>
				 <div>   
				 
<br>
<br>
<br>
 
   <script>
 ///alert(document.getElementById('load-direct-chat').offsetHeight);
 
	var height =  $(".messages:visible").height();
 
</script>
<script>
  
   document.getElementById('vc_chat_last_id').value=<?=$arr[chatlast][id]?>;
document.getElementById('message').value="";
 
  //  setInterval(function() {

 
 $(".messages").animate({ scrollTop: 99999 }, 10000);
 
 

// }, 3000); // 60000 milliseconds = one minute
  </script>   

  <?  include ("mod/livechat/config.php");?> <br>
<br>
<br>
<br>
<br><a name="gotop"></a>
 