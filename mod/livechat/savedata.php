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

if($_GET[state_type]=='chat_store'){
$state_name='chat_'.$_GET[chat_from].'_to_'.$_GET[chat_TO].'';
$state_type='chat_text';
 }

if($_GET[state_type]=='chat_store'){
$state_name='chat_'.$_GET[chat_from].'_to_'.$_GET[chat_to].'_store';
$state_type='chat_store';
}
 

if($_GET[state_type]=='share_location'){
$state_name=''.$_GET[chat_from].'_share_location';
$state_type='share_location';

/////// สร้างรูป
// $url='http://maps.googleapis.com/maps/api/staticmap?center='.$_GET[lat].','.$_GET[lng].'&size=400x200&zoom=16&maptype=roadmap&markers=color:red|'.$_GET[lat].','.$_GET[lng].'&sensor=false&libraries=places&language=th';
 
///$url=' http://maps.googleapis.com/maps/api/staticmap?zoom=14&size=250x150&language=th&maptype=roadmap&markers=icon:https://goldenbeachgroup.com/app/demo/google/realtime/images/1.png|'.$_GET[lat].','.$_GET[lng].'';

 
  file_put_contents("../data/fileupload/map/".$_GET[vc]."_".time().".png",file_get_contents('http://maps.googleapis.com/maps/api/staticmap?zoom=14&size=250x100&maptype=roadmap&markers=icon:https://goldenbeachgroup.com/app/demo/google/realtime/images/2.png|'.$_GET[lat].','.$_GET[lng].''));
 
//// https://www.mapquestapi.com/staticmap/v4/getmap?key=KEY&size=600,600&type=map&imagetype=png&zoom=10&scalebar=false&traffic=false&center=7.8484298,98.38006229999999&xis=https://s.aolcdn.com/os/mapquest/yogi/icons/poi-active.png,1,c,40.015831,-105.27927&ellipse=fill:0x70ff0000|color:0xff0000|width:2|40.00,-105.25,40.04,-105.30
/////////
///// https://maps.googleapis.com/maps/api/geocode/json?latlng=7.8484298,98.38006229999999

/// https://maps.googleapis.com/maps/api/geocode/json?latlng=.8484298,98.38006229999999&key=YOUR_API_KEY




}

if($_GET[state_type]=='share_location_realtime'){
$state_name=''.$_GET[chat_from].'_share_location_realtime';
$state_type='share_location_realtime';
}
 
if($_GET[state_type]=='share_photo'){
$state_name=''.$_GET[chat_from].'_share_photo';
$state_type='share_photo';
 
copy ("../data/fileupload/store/chat/".$_GET['time']."_small.jpg", "../data/fileupload/photo/".$_GET[vc]."_".time()."_small.jpg" ); 
copy ("../data/fileupload/store/chat/".$_GET['time']."_big.jpg", "../data/fileupload/photo/".$_GET[vc]."_".time()."_big.jpg" ); 

unlink ("../data/fileupload/store/chat/".$_GET['time']."_small.jpg" ); 
unlink ("../data/fileupload/store/chat/".$_GET['time']."_big.jpg" ); 
 
}

 
 
 
 
 
 //////
 
 //$chat_from=$_GET[chat_from];
///$chat_to=$_GET[chat_to];
 
 
 ///////
	$db->connectdb(DB_NAME_CHAT, DB_USERNAME, DB_PASSWORD);  
	$numday = $db->num_rows('zvc_'.$_GET[vc].'',"id","day_comment='".date('Y-m-d')."' ");
	
	if($numday==0){
	 $daystart=1;
	}
		if($numday>0){
	 $daystart=0;
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
		    "comment_from" => "$_GET[chat_from]",		   
			 "comment_to" => "$_GET[chat_to]",		   
			 
			  "day_start" =>$daystart,		   
			   "day_comment" => date('Y-m-d'),		   
			 
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