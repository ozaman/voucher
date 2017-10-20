<?
 
 ////// driver
if($_POST[state]==1){
$state_name='after_time';
$_POST[comment]='ผู้ใช้บริการต้องการใช้รถหลังเวลา';	
$_POST[to]='driver';
}

if($_POST[state]==2){
$state_name='chat_customer_to_driver';
$_POST[to]='driver';
}

if($_POST[state]==3){
$state_name='customer_to_point';
$_POST[comment]='ผู้ใช้บริการกำลังรอคุณอยู่';	
$_POST[to]='driver';
}

if($_POST[state]==4){
$state_name='before_time';
$_POST[comment]='ผู้ใช้บริการต้องการใช้รถก่อนเวลา';	
$_POST[to]='driver';
}
 
 if($_POST[state]==10){
$state_name='phone_customer_to_driver';
$_POST[comment]='ผู้ใช้บริการโทรถึงคนขับรถ';	
$_POST[to]='driver';
}

if($_POST[state]==12){
$state_name='chat_customer_to_driver_store';
$_POST[to]='driver';
}

  if($_POST[state]==14){
$state_name='customer_share_location';
$_POST[comment]='ผู้ใช้บริการแชร์ตำแหน่ง';	
$_POST[to]='driver';
}

if($_POST[state]==16){
$state_name='customer_flight_delay ';
$_POST[comment]='ผู้ใช้บริการแชร์ตำแหน่ง';	
$_POST[to]='driver';
}


 if($_POST[state]==17){
$state_name='customer_change_flight';
$_POST[comment]='ผู้ใช้บริการเปลี่ยนแปลงเที่ยวบิน';	
$_POST[to]='driver'; 
}

if($_POST[state]==18){
$state_name='customer_flight_landing';
$_POST[comment]='ผู้ใช้บริการแจ้งว่าเที่ยวบินลงจอดแล้ว';	
$_POST[to]='driver';
}

if($_POST[state]==19){
$state_name='customer_on_car';
$_POST[comment]='ผู้ใช้บริการอยู่บนรถ';	
$_POST[to]='driver';
}

if($_POST[state]==20){
$state_name='customer_lost';
$_POST[comment]='ผู้ใช้บริการอยู่บนรถ';	
$_POST[to]='driver';
}

 
if($_POST[state]==21){
$state_name='customer_food_shop';
$_POST[comment]='ผู้ใช้บริการกำลังรับประทานอาหาร';	
$_POST[to]='driver';
}
if($_POST[state]==22){
$state_name='customer_travel_place';
$_POST[comment]='ผู้ใช้บริการกำลังรับประทานอาหาร';	
$_POST[to]='driver';
}




 




 
 
  
 
  ////// op
  if($_POST[state]==5){
$state_name='chat_customer_to_call';
$_POST[to]='callcenter';
}
  
if($_POST[state]==6){
$state_name='over_time';
$_POST[to]='callcenter';
}
  
  if($_POST[state]==7){
$state_name='before_time';
$_POST[comment]='ผู้ใช้บริการต้องการใช้รถก่อนเวลา';	
$_POST[to]='callcenter';
}

if($_POST[state]==8){
$state_name='after_time';
$_POST[comment]='ผู้ใช้บริการต้องการใช้รถหลังเวลา';	
$_POST[to]='callcenter';
}
  
  if($_POST[state]==9){
$state_name='customer_to_point';
$_POST[comment]='ฉันกำลังรอคุณอยู่';	
$_POST[to]='callcenter';
}

if($_POST[state]==11){
$state_name='phone_customer_to_driver';
$_POST[comment]='ผู้ใช้บริการโทรถึงคอลเซ็นเตอร์';	
$_POST[to]='callcenter';
}

if($_POST[state]==13){
$state_name='chat_customer_to_callcenter_store';
$_POST[to]='callcenter';
}
  


  
   if($_POST[state]==15){
$state_name='customer_share_location';
$_POST[comment]='ผู้ใช้บริการแชร์ตำแหน่ง';	
$_POST[to]='callcenter';
}



///////


if($_POST[state]==23){
$state_name='customer_flight_delay ';
$_POST[comment]='ผู้ใช้บริการแชร์ตำแหน่ง';	
$_POST[to]='callcenter';
}


 if($_POST[state]==24){
$state_name='customer_change_flight';
$_POST[comment]='ผู้ใช้บริการเปลี่ยนแปลงเที่ยวบิน';	
$_POST[to]='callcenter';
}

if($_POST[state]==25){
$state_name='customer_flight_landing';
$_POST[comment]='ผู้ใช้บริการแจ้งว่าเที่ยวบินลงจอดแล้ว';	
$_POST[to]='callcenter';
}

if($_POST[state]==26){
$state_name='customer_on_car';
$_POST[comment]='ผู้ใช้บริการอยู่บนรถ';	
$_POST[to]='callcenter';
}

if($_POST[state]==27){
$state_name='customer_lost';
$_POST[comment]='ผู้ใช้บริการอยู่บนรถ';	
$_POST[to]='callcenter';
}


if($_POST[state]==28){
$state_name='customer_food_shop';
$_POST[comment]='ผู้ใช้บริการกำลังรับประทานอาหาร';	
$_POST[to]='callcenter';
}



if($_POST[state]==29){
$state_name='customer_travel_place';
$_POST[comment]='ผู้ใช้บริการกำลังรับประทานอาหาร';	
$_POST[to]='callcenter';
}
 
 
 if($_POST[fdelay]<>""){	
 
$time=$_POST[fdelay];
$time_h=substr($time, 0, 2);
$time_m=substr($time, 3, 2);
 	
	}
	
////////////
 
 	$db->connectdb(DB_NAME_CHAT,DB_USERNAME,DB_PASSWORD);	
	$numdriver = $db->num_rows('all_message',"id","comment_to='driver' and  voucher = '".$_POST[voucher]."' ");
	$numdriver=$numdriver+1;
	
	 	$db->connectdb(DB_NAME_CHAT,DB_USERNAME,DB_PASSWORD);	
	$numcallcenter = $db->num_rows('all_message',"id","comment_to='callcenter' and  voucher = '".$_POST[voucher]."' ");
	$numcallcenter=$numcallcenter+1;
	
//////////////////////////////
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$res[driver] = $db->select_query("SELECT drivername  FROM web_order  WHERE invoice='".$_POST[voucher]."'  "); 
$arr[driver] = $db->fetch($res[driver]);
  
 ///////  ถ้ามีคนขับรถ
if($arr[driver][drivername]>0 and $state='chat_guest_to_driver'){
$folder_xml="../../data/xml";
$newmsg = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<newmsg>\n";

$newmsg .= "<message><![CDATA[".$_POST[comment]."]]></message>\n";
$newmsg .= "<status>1</status>\n";
$newmsg .= "<time>".date("H:i:s")."</time>\n";
$newmsg .= "</newmsg>";

@unlink("$folder_xml/guest/chat/".$_POST[voucher].".xml");
@$fd = @fopen("$folder_xml/guest/chat/".$_POST[voucher].".xml", "a+");
@fputs($fd, $newmsg . "");
@fclose($fd);
}

 //////////// อัพเดทข้อความ
 
 $folder_xml="../../data/xml";
$vcmsg = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<newmsg>\n";

$vcmsg .= "<message><![CDATA[".$_POST[comment]."]]></message>\n";
$vcmsg .= "<status>1</status>\n";
$vcmsg .= "<type>".$_POST[state]."</type>\n";
$vcmsg .= "<statetype>".$_POST[typestate]."</statetype>\n";
$vcmsg .= "<time>".date("H:i:s")."</time>\n";
$vcmsg .= "</newmsg>";

@unlink("$folder_xml/driver/chat/".$arr[driver][drivername].".xml");
@$fd = @fopen("$folder_xml/driver/chat/".$arr[driver][drivername].".xml", "a+");
@fputs($fd, $vcmsg. "");
@fclose($fd);
 
?>