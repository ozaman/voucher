 
 
 
 
  <?
 
 $db->connectdb(DB_NAME_CHAT,DB_USERNAME,DB_PASSWORD);
$limit = 1 ;
 
  $res[chatlast] = $db->select_query("SELECT * FROM zvc_".$_GET[vc]." ORDER BY id desc limit 1"); 
 $arr[chatlast] = $db->fetch($res[chatlast]);

$res[chat] = $db->select_query("SELECT * FROM zvc_".$_GET[vc]." where id > '".$_GET[lastid]." ' ORDER BY id asc limit 1");
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
			
			
			 <?  include ("mod/livechat/message/list.php");?>
				
				 
				<? } ?>
				
<div id="chat-load-new-<?=$arr[chatlast][id]?>"  style="display:nones; margin-top:10px;" >
<? $arr[chatlast][id]?> 
 <div> 
 
 
<script>


$(".messages").animate({ scrollTop: 99999 }, 500);
 
 
  </script> 
 