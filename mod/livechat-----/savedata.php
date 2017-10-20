<?


$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[vc] = $db->select_query("SELECT * FROM ".TB_order." where invoice='".$_GET[vc]."' ");
$arr[vc] = $db->fetch($res[vc]);

$numdriver = $arr[vc][count_driver] +1;

		 
 $db->update_db(TB_order,array(
	 
		"count_driver"=>$numdriver 
		)," invoice='".$_GET[vc]."' ");
	 
	


////// $_GET[vc]
//$_POST[state]=$_GET[state];


/*
31  /// พิมพ์ข้อความ
$state_name='chat_driver_to_customer';
32  ///คำที่ใช้บ่อย
$state_name='chat_driver_to_customer_store';
33 //// แชร์ตำแหน่ง
$state_name='driver_share_location';


*/



if($_POST[state]==31){
$state_name='chat_driver_to_customer';
$state_type='chat_text';


$_POST[to]='customer';
}

if($_POST[state]==32){
$state_name='chat_driver_to_customer_store';
$_POST[to]='customer';
$state_type='chat_store';
}


if($_GET[state_type]=='share_location'){
$state_name='driver_share_location';
$_POST[to]='customer';
$state_type='share_location';
}

if($_GET[state_type]=='chat_store'){
$state_name='chat_driver_to_customer_store';
$_POST[to]='customer';
$state_type='chat_store';
}




if($_GET[state_type]=='share_photo'){
$state_name='driver_share_photo';
$_POST[to]='customer';
$state_type='share_photo';


copy ("../data/fileupload/store/chat/".$_GET['time']."_small.jpg", "../data/fileupload/photo/".$_GET[vc]."_".time()."_small.jpg" ); 
copy ("../data/fileupload/store/chat/".$_GET['time']."_big.jpg", "../data/fileupload/photo/".$_GET[vc]."_".time()."_big.jpg" ); 

unlink ("../data/fileupload/store/chat/".$_GET['time']."_small.jpg" ); 
unlink ("../data/fileupload/store/chat/".$_GET['time']."_big.jpg" ); 
//////////////////  




}

 
 
 
 
 
 
 
 
 $res[chatlast] = $db->select_query("SELECT * FROM zvc_".$_GET[vc]." ORDER BY id desc limit 1"); 
 $arr[chatlast] = $db->fetch($res[chatlast]);
	
	$db->connectdb(DB_NAME_CHAT, DB_USERNAME, DB_PASSWORD);  
		$db->add_db('zvc_'.$_GET[vc].'',array( 		  

		  "flight_delay"=>"$_POST[fdelay]",		 
		  "flight_delay_date"=>"".TIMESTAMP."",		  
		  "drivername" => $arr[vc][drivername] ,
		   "voucher" => "$_GET[vc]",
		   
		   "latitude" => "$_GET[lat]",
		   "longitude" => "$_GET[lng]",

			"state" => "$_GET[state]",
		   "state_name" => $state_name,
		     "type_state" => $state_type,
			 
			 "id_comment" => "$_POST[message_store]",
 
		   "comment" => "$_POST[message]",
		    "comment_from" => "driver",		   
			 "comment_to" => "customer",		   
		     "time_h" => $time_h,
			 "time_m" => $time_m
 
		));
		
	
	
	
		//// 
    $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);	
	$numdriver = $db->num_rows('all_message',"id","comment_to='driver' and  voucher = '".$_POST[voucher]."' ");
	$numdriver=$numdriver+1;
		
		/*
		
		$db->update_db(TB_order,array( 
		 "count_driver"=>$allcomment 			
		)," invoice='".$_GET[vc]."'");
		
		*/
		/*
		
  	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);	
	$numdriver = $db->num_rows('all_message',"id","comment_to='driver' and  voucher = '".$_POST[voucher]."' ");
	$numdriver=$numdriver+1;
		*/
///////////////

 
 
$folder_xml="../data/xml";
$newmsg = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<newmsg>\n";
 
$newmsg .= "<message><![CDATA[".$_POST[message]."]]></message>\n";
$newmsg .= "<status>1</status>\n";
$newmsg .= "<order>".$arr[vc][orderid]."</order>\n";
$newmsg .= "<vc>".$_GET[vc]."</vc>\n";
$newmsg .= "<driver>".$driver_id."</driver>\n";
$newmsg .= "<time>".date("H:i:s")."</time>\n";
$newmsg .= "</newmsg>";




@unlink("$folder_xml/guest/chat/from/driver_".$_GET[vc].".xml");
@$fd = @fopen("$folder_xml/guest/chat/from/driver_".$_GET[vc].".xml", "a+");
@fputs($fd, $newmsg . "");
@fclose($fd);
 
?>