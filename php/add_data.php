<?php header ('Content-type: text/html; charset=utf-8');

  include("connect.php");
  // include("createDB.php");
  include("xml/state_name.php");
  
if ($_POST[sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
    echo "in case server thai\n".$_POST[state];
}
else{
    //$conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
    echo "in case server cn\n".$_POST[state];
}  
//header('Access-Control-Allow-Origin: *');

 
 $conn2 = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME_CHAT);
 $voucherDB = "vc_".$_POST[voucher];
//$_POST[from]='guest';
 $day_comment = date('Y-m-d');


// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
// Check connection


if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}
else{

	if ($_POST[state] == 1 || $_POST[state] == 2 || $_POST[state] == 3 || $_POST[state] == 4 || $_POST[state] == 10 || $_POST[state] == 12 || $_POST[state] == 14 || $_POST[state] == 18 || $_POST[state] == 19 || $_POST[state] == 20 || $_POST[state] == 21 || $_POST[state] == 22 || $_POST[state] == 16) {

/*
1 เลื่อนการใช้
2 chat to driver
3 guest to point
4 ใช่รถล่วงหน้า
5 chat to call center

*/

 	
	$s_count = ("SELECT msg_guest_to_driver FROM all_chat WHERE  voucher = '".$_POST[voucher]."'");
	 
	$result = $conn2->query($s_count);
	$row = $result->fetch_assoc();
	echo $row[msg_guest_to_driver]."countDriver";
	$num = $row[msg_guest_to_driver]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
	// if ($row>0) {
	

	/////
	//echo 'ssssssssss'.$arr[driver][drivername]. $_POST[voucher];
	
	$voucherDB = "vc_".$_POST[voucher];
	$sql = "INSERT INTO ".$voucherDB." (voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,state_name, yourself_post_date,  orderid,comment_from,comment_to, drivername, comment, latitude, longitude,id_comment,msg_type,admin_company,type_state,day_comment) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."', '".time()."', '".time()."', '".$_POST[nameim]."', '".$_POST[state]."', '".$state_name."', '".$_POST[nameim2]."', '".$_POST[orderid]."', '".$_POST[from]."', '".$_POST[to]."', '".$arr[driver][drivername]."', '".$_POST[comment]."', '".$_POST[lag]."','".$_POST[long]."','".$_POST[id_comment]."','".$_POST[msgType]."','".$_POST[adminCompany]."','".$_POST[typestate]."','".$day_comment."')";    
	// $sql = "INSERT INTO ".$_POST[voucher]." (, img_post_date,state,state_name, yourself_post_date, orderid, comment_from, comment_to, drivername, comment, latitude, longitude) VALUES ()";
		$sql2 = ("UPDATE all_chat SET msg_guest_to_driver = '".$numdriver."' WHERE voucher = '".$_POST[voucher]."'");
		$rows = array();
		$result = $conn2->query($sql);
		$result2 = $conn2->query($sql2);
		echo $result2."re2";
		echo $result."re".$_POST[voucher];
	if ($result) {
	    echo "1 results";

	    
	} else {
	    //echo $timestamp;
	    echo "0 results";
 	}
 

}

////// to op
else if ($_POST[state] == 5 || $_POST[state] == 7 || $_POST[state] == 8 || $_POST[state] == 9 || $_POST[state] == 11 || $_POST[state] == 13 || $_POST[state] == 15 || $_POST[state] == 23 || $_POST[state] == 25 || $_POST[state] == 26 || $_POST[state] == 27 || $_POST[state] == 28 || $_POST[state] == 29) {
	$s_count = ("SELECT msg_guest_to_callcenter FROM all_chat WHERE  voucher = '".$_POST[voucher]."'");
	 
	 $result = $conn2->query($s_count);
	 $row = $result->fetch_assoc();
	echo $row[msg_guest_to_callcenter];
	$num = $row[msg_guest_to_callcenter]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
 
 
	
	// if ($row>0) {

	    
	$sql = "INSERT INTO ".$voucherDB." (voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,state_name,yourself_post_date,orderid,comment_from,comment_to,drivername,comment,latitude,longitude,id_comment,msg_type,admin_company,type_state,day_comment) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$state_name."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[to]."','".$arr[driver][drivername]."','".$_POST[comment]."','".$_POST[lag]."','".$_POST[long]."','".$_POST[id_comment]."','".$_POST[msgType]."','".$_POST[adminCompany]."','".$_POST[typestate]."','".$day_comment."')";
		$sql2 = ("UPDATE all_chat SET msg_guest_to_callcenter = '".$numcallcenter."' WHERE voucher = '".$_POST[voucher]."'");
		$rows = array();
		$result = $conn2->query($sql);
		$result2 = $conn->query($sql2);
		echo $_POST[orderid];

	if ($result) {
	    echo "1 results";

	    
	} else {
	    //echo $timestamp;
	    echo "0 results";
 	}
	    
}
  if ($_POST[state] == 6) {
	$s_count = ("SELECT msg_guest_to_callcenter FROM all_chat WHERE  voucher = '".$_POST[voucher]."'");
	 
	 $result = $conn2->query($s_count);
	 $row = $result->fetch_assoc();
	echo $row[msg_guest_to_callcenter];
	$num = $row[msg_guest_to_callcenter]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
	// if ($row>0) {
//$_POST[to]='driver';
	    
	$sql = "INSERT INTO ".$voucherDB." (voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,state_name,yourself_post_date,orderid,comment_from,comment_to,drivername,comment,latitude,longitude,cost_service,type_state,day_comment,admin_company,company) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$state_name."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[to]."','".$arr[driver][drivername]."','".$_POST[comment]."','".$_POST[lag]."','".$_POST[long]."','".$_POST[costss]."','".$_POST[typestate]."','".$day_comment."','".$_POST[admin_company]."','".$_POST[company]."')";
		$sql2 = ("UPDATE all_chat SET msg_guest_to_callcenter = '".$num."' WHERE voucher = '".$_POST[voucher]."'");
		$rows = array();
		$result4 = $conn2->query($sql);
		$result2 = $conn2->query($sql2);
		//echo $_POST[orderid].$_POST[costss];

	if ($result4) {
	    //echo "1 results".$_POST[state];

	    
	} else {
	    //echo $timestamp;
	    echo "0 results";
 	}
	    
}
else if ($_POST[state] == 17 ) {
	$s_count = ("SELECT msg_guest_to_driver FROM all_chat WHERE  voucher = '".$_POST[voucher]."'");
	 
	 $result = $conn2->query($s_count);
	 $row = $result->fetch_assoc();
	echo $row[msg_guest_to_driver];
	$num = $row[msg_guest_to_driver]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
 
 
	
	// if ($row>0) {
	    
	$sql = "INSERT INTO ".$voucherDB." (voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,state_name,yourself_post_date,orderid,comment_from,comment_to,drivername,comment,latitude,longitude,new_flight,	ondate_new_flight,admin_company,type_state,day_comment,old_flight,ondate_old_flight,time_old_flight) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$state_name."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[to]."','".$arr[driver][drivername]."','".$_POST[comment]."','".$_POST[lag]."','".$_POST[long]."','".$_POST[flight]."','".$_POST[newdate]."','".$_POST[adminCompany]."','".$_POST[typestate]."','".$day_comment."','".$_POST[oldflight]."','".$_POST[ondateoldflight]."','".$_POST[time_old_flight]."')";
		$sql2 = ("UPDATE all_chat SET msg_guest_to_driver = '".$numcallcenter."' WHERE voucher = '".$_POST[voucher]."'");
		$rows = array();
		$result = $conn2->query($sql);
		$result2 = $conn2->query($sql2);
		echo $_POST[orderid];
		

	if ($result) {
	    echo "1 results";

	    
	} else {
	    //echo $timestamp;
	    echo "0 results";
 	}
	    
}
else if ($_POST[state] == 24 ) {
	$s_count = ("SELECT msg_guest_to_callcenter FROM all_chat WHERE  voucher = '".$_POST[voucher]."'");
	 
	 $result = $conn2->query($s_count);
	 $row = $result->fetch_assoc();
	echo $row[msg_guest_to_callcenter];
	$num = $row[msg_guest_to_callcenter]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
 
 
	
	// if ($row>0) {
	 
	$sql = "INSERT INTO ".$voucherDB." (voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,state_name,yourself_post_date,orderid,comment_from,comment_to,drivername,comment,latitude,longitude,new_flight,ondate_new_flight,admin_company,type_state,day_comment) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$state_name."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[to]."','".$arr[driver][drivername]."','".$_POST[comment]."','".$_POST[lag]."','".$_POST[long]."','".$_POST[flight]."','".$_POST[newdate]."','".$_POST[adminCompany]."','".$_POST[typestate]."','".$day_comment."')";
		$sql2 = ("UPDATE all_chat SET msg_guest_to_callcenter = '".$numcallcenter."' WHERE voucher = '".$_POST[voucher]."'");
		$rows = array();
		$result = $conn2->query($sql);
		$result2 = $conn2->query($sql2);
		echo $_POST[orderid];

	if ($result) {
	    echo "1 results";

	    
	} else {
	    //echo $timestamp;
	    echo "0 results";
 	}
 	
	
 	// $sql = "INSERT INTO ".$voucherDB." (voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,state_name,yourself_post_date,orderid,comment_from,comment_to,drivername,comment,latitude,longitude,id_comment,msg_type,admin_company,type_state,day_comment) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$state_name."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[to]."','".$arr[driver][drivername]."','".$_POST[comment]."','".$_POST[lag]."','".$_POST[long]."','".$_POST[id_comment]."','".$_POST[msgType]."','".$_POST[adminCompany]."','".$_POST[typestate]."','".$day_comment."')";
	    
}
	$s_insertall = ("SELECT id FROM all_chat WHERE  voucher = '".$_POST[voucher]."'");
 	 $result = $conn2->query($s_insertall);
	 $row = $result->fetch_assoc();
	echo $row[id]."ssssssssssssss";
	if ($row == null) {
		//echo "aaaaaa";
		$sql = "INSERT INTO all_chat(voucher,flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,state_name,yourself_post_date,orderid,comment_from,comment_to,drivername,comment,latitude,longitude,id_comment,msg_type,type_state,day_comment,admin_company,company,cost_service,product) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$state_name."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[to]."','".$arr[driver][drivername]."','".$_POST[comment]."','".$_POST[lag]."','".$_POST[long]."','".$_POST[id_comment]."','".$_POST[msgType]."','".$_POST[typestate]."','".$day_comment."','".$_POST[admin_company]."','".$_POST[company]."','".$_POST[costss]."','".$_POST[product]."')";
		$results = $conn2->query($sql);
		if ($results) {
		    echo "1 results";

		    
		} else {
		    //echo $timestamp;
		    echo "0 results";
	 	}
	}
	else{
		$sql = "UPDATE all_chat SET voucher = '".$_POST[voucher]."',flight_delay = '".$_POST[fdelay]."', flight_delay_date = '".time()."',guest_topoint_date = '".time()."',img_post_date = '".$_POST[nameim]."',state = '".$_POST[state]."',state_name = '".$state_name."',yourself_post_date = '".$_POST[nameim2]."',orderid = '".$_POST[orderid]."',comment_from = '".$_POST[from]."',comment_to = '".$_POST[to]."',drivername = '".$arr[driver][drivername]."',comment = '".$_POST[comment]."',latitude = '".$_POST[lag]."',longitude = '".$_POST[long]."',id_comment = '".$_POST[id_comment]."',msg_type = '".$_POST[msgType]."',type_state = '".$_POST[typestate]."',day_comment = '".$day_comment."',admin_company = '".$_POST[admin_company]."',company = '".$_POST[company]."',cost_service = '".$_POST[costss]."',product = '".$_POST[product]."' WHERE voucher = '".$_POST[voucher]."'";
		$rows = array();
		$resultss = $conn2->query($sql);
		if ($resultss) {
		    echo "1 results";

		    
		} else {
		    //echo $timestamp;
		    echo "0 results";
	 	}
	}
	$conn->close();

} 


 
$db->connectdb(DB_NAME_CHAT, DB_USERNAME, DB_PASSWORD);  
 $res[chatlast] = $db->select_query("SELECT id FROM zvc_".$_POST[voucher]." ORDER BY id desc limit 1"); 
 $arr[chatlast] = $db->fetch($res[chatlast]);
////// last id
$folder_xml="../../data/xml";
$newmsg = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<newmsg>\n";
 
$newmsg .= "<id>".$arr[chatlast][id]."</id>\n";
$newmsg .= "<time>".date("H:i:s")."</time>\n";
$newmsg .= "<user>customer</user>\n";
$newmsg .= "</newmsg>";
 

@unlink("$folder_xml/chat_check/".$_POST[voucher].".xml");
@$fd = @fopen("$folder_xml/chat_check/".$_POST[voucher].".xml", "a+");
@fputs($fd, $newmsg . "");
@fclose($fd);



?>