 <div id="chat_down">ss</div>
			  <?
 
 
 $db->connectdb(DB_NAME_CHAT,DB_USERNAME,DB_PASSWORD);
$limit = 1 ;
$SUMPAGE = $db->num_rows('all_message',"id","");
 

$res[chat] = $db->select_query("SELECT * FROM all_message  ORDER BY id asc");
$count=0;
while($arr[chat] = $db->fetch($res[chat])){
 /// comment_from
?>
			  <? if($arr[chat][comment_from]=="guest"){?>
 
			             <!-- เราเอง -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
				     <span class="direct-chat-name pull-right"><?=$data_driver_nickname?>You</span>
                    <span class="direct-chat-timestamp pull-left"> <?=$date = date('Y-m-d ',  $arr[chat][guest_topoint_date]);?>&nbsp;<font color="#000000"><?=$date = date('h:i:s',  $arr[chat][guest_topoint_date]);?></font></span>
                  </div>




  
  <!-- /.direct-chat-info -->
<img class="direct-chat-img" src="images/me.png?v=<?=$cache;?>" alt="Message User Image"><!-- /.direct-chat-img -->
<div class="direct-chat-text">
			<?=$arr[chat][comment]?> <? if($arr[chat][state]=="flight_delay"){?>&nbsp;<img src="images/usercar_after.png?v=<?=$cache;?>" width="25"  align="absmiddle" style="padding: 5px 0; display:none">&nbsp;<?=$arr[chat][flight_delay]?>
		    <? } ?>
			</div>
				 
                </div>
				
                <!-- /.direct-chat-msg -->
			  <? } ?>
			  
			  
			  
			  
			<? if($arr[chat][comment_from]<>"guest"){?>  
                <!-- เริ่มคนอื่น -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left"><?=$guest_name?>Driver</span>
                    <span class="direct-chat-timestamp pull-right"> <?=$date = date('Y-m-d ',  $arr[chat][guest_topoint_date]);?>&nbsp;<font color="#000000"><?=$date = date('h:i:s',  $arr[chat][guest_topoint_date]);?></font></span>
                  </div>
                  <!-- ข้อความคนอื่น -->
                  <img class="direct-chat-img" src="images/driverchat.png?v=<?=$cache;?>" alt="Message User Image"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
           <?=$arr[chat][comment]?>  
		   
		   <? if($arr[chat][state]=="flight_delay"){?>&nbsp;<img src="images/usercar_after.png?v=<?=$cache;?>" width="25"  align="absmiddle" style="padding: 5px 0;">&nbsp;<?=$arr[chat][flight_delay]?>
 		   
		    <? } ?>
			
					   <? if($arr[chat][state]=="driver_to_point"){?><br>

 <img src="../data/fileupload/map/<?=$arr[chat][voucher]?>_<?=$arr[chat][flight_delay_date]?>.png?v=<?=$cache;?>"    align="absmiddle" style="padding: 5px; width:180px;">
 		   
		    <? } ?>
			
                  </div>
                  <!-- /จบข้อความคนอื่น -->
                </div>
                <!-- จบ -->
				<? } ?>
				
				  
				
				
				
				
				
				
				
				
				
				
				
				
				 
				<? } ?>
				
				
				
				<script>
				
    var $t = $('#load-direct-chat');
 
    $t.animate({"scrollTop": $('#load-direct-chat')[0].scrollHeight}, "slow");
				</script>
 