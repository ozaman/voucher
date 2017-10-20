

 <? if($_GET[name]<>'livechat'){ ?>
 
 
 
 <div  class="bottom_popup" > 
 
 <table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr align="center">
    <td width="25%"><span data-toggle="tooltip" title="3 ข้อความใหม่" class="badge"   style="position:absolute; margin-left:20px; border-radius: 20px; height:20px; width:20px; background-color:#FF0000;   "><?=$allwork?></span>
	
 
	
	<i class="fa fa-clock-o bottom-popup-icon bottom-popup-icon-active " ></i><br><font color="#333333">งานวันนี้</td>
    <td width="25%"> <a href="?name=livechat">
	<div><span data-toggle="tooltip" title="3 ข้อความใหม่" class="badge"   style="position:absolute; margin-left:20px; border-radius: 20px; height:20px; width:20px; background-color:#FF0000; " id="number_bottom_chat">3</span> </div>
 

	<i class="fa fa-commenting bottom-popup-icon "  ></i><br ><font color="#333333">สนทนา</a></td>
    <td width="25%"><i class="fa fa-bell bottom-popup-icon" ></i><br><font color="#333333">แจ้งเตือน</td>
    <td width="25%"><i class="fa fa-volume-up bottom-popup-icon" style="font-size:28px "></i><br><font color="#333333">เสียงเตือน</td>
  </tr>
</table>
 </div>
 
 
 
 
</a>
 <style>
.bottom_popup
{ 
font-size:22px;   padding:5px;  color:#666666;  width:100%; background-color:#F6F6F6;      
 border-bottom: 0px solid #e5e5e5; margin-bottom: 0px; padding-bottom:5px;
 
position: fixed;
  bottom:  0;
 
 box-shadow: 1px 1px 10px #999999;
  left: 0; z-index:99990;
 
}
.bottom-popup-icon {
font-size:24px; color:#B4B4B4; margin-bottom:1px;

}

.bottom-popup-icon-active {
font-size:24px; color:#3C8DBC;  

}

 </style><? } ?>
 
 <style>
.back_popup_alert
{ 
font-size:22px;   padding:2px;  color:#FFFFF;  width:100%;  background-color: #464646;
 border-bottom: 0px solid #ffffff; margin-bottom: 0px; margin-top:55px;
 
    position: fixed;
  top:  0;  
 
 box-shadow: 1px 1px 10px #999999;
  left: 0; z-index:999;
 
}
 </style>
 
 
 <div class="back_popup_alert" style="display:none; margin-bottom: 5px; " id="box_popup_alert_message"><center> 
 
 

 <table width="80%"  border="0" align="center" cellpadding="2" cellspacing="2"    id="box_alert_new_msg"  style="background-color: #464646"  >

  <tr>
    <td width="50" rowspan="2" style="padding:5px; " id="box_alert_new_msg_icon"></td>
    <td style="padding:2px; "> <strong class="font_16" style="color:#FFFFFF ">ข้อความใหม่</strong></td>
    <td width="80"><div id="box_alert_new_msg_time"  style="color: #FFFFCC "></div></td>
  </tr>
  <tr>
    <td colspan="2" style="padding:2px; "><div id="box_alert_new_msg_comment"  style="color:#FFFFFF ">คนขับรถอยู่ที่ไหน</div></td>
   </tr>
</table>
</div>
<? 
$lang='Thai Female';
///$lang='Chinese Female';
 

$newmsg='ผู้ใช้บริการต้องการใช้รถก่อนเวลา 1 ชั่วโมง 30 นาที  ค่ะ';

//$newmsg='用户需要使用汽车1小时30分钟';



?>

 
	 <a id="auto_play_welcome_new"  onclick="responsiveVoice.speak('<?=$newmsg?>', '<?=$lang?>', {rate: 0.8});" >Test Sound</a> 

<script>
$( document ).ready(function() {


setTimeout(function () {

// $("#auto_play_welcome_new").click();
 
  $("#box_alert_new_msg_comment").html('<?=$newmsg?>');
 

}, 1000);  
});

   </script>