<?php header ('Content-type: text/html; charset=utf-8');

  include("connect.php");
if ($_POST[sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    $conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}

//header('Access-Control-Allow-Origin: *');

 
if($_POST[state]==1){
$state='after_time';
}
if($_POST[state]==2){
$state='chat_guest_to_driver';
}
if($_POST[state]==3){
$state='guest_to_point';
}
if($_POST[state]==4){
$state='before_time';
}
if($_POST[state]==5){
$state='chat_guest_to_call';
}
 if($_POST[state]==6){
$state='over_time';
}
 
	
	if($_POST[fdelay]<>""){	
	$state='flight_delay';	
$_POST[comment]='Flight Delay';	
	
$time=$_POST[fdelay];
  
$time_h=substr($time, 0, 2);
$time_m=substr($time, 3, 2);
 
	
	}
	
//$_POST[from]='guest';


 ////////////
 
 
 
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
$vcmsg .= "<time>".date("H:i:s")."</time>\n";
$vcmsg .= "</newmsg>";

@unlink("$folder_xml/driver/chat/".$arr[driver][drivername].".xml");
@$fd = @fopen("$folder_xml/driver/chat/".$arr[driver][drivername].".xml", "a+");
@fputs($fd, $vcmsg. "");
@fclose($fd);
 
 



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn2 = new mysqli($servername, $username, $password, $dbname_chat);
// Check connection


if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}
else{

	if ($_POST[state] == 1 || $_POST[state] == 2 || $_POST[state] == 3 || $_POST[state] == 4 || $_POST[state] == 10 || $_POST[state] == 12 || $_POST[state] == 14) {

/*
1 เลื่อนการใช้
2 chat to driver
3 guest to point
4 ใช่รถล่วงหน้า
5 chat to call center

*/

 
	$s_count = ("SELECT count_driver FROM web_order WHERE  invoice = '".$_POST[voucher]."'");
	 
	$result = $conn->query($s_count);
	$row = $result->fetch_assoc();
	echo $row[count_driver];
	$num = $row[count_driver]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
	// if ($row>0) {
	    
	$sql = "INSERT INTO all_message(voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,yourself_post_date,orderid,comment_from,comment,latitude,longitude) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[comment]."','".$_POST[lag]."','".$_POST[long]."')";
		$sql2 = ("UPDATE web_order SET count_driver = '".$num."' WHERE invoice = '".$_POST[voucher]."'");
		$rows = array();
		$result = $conn2->query($sql);
		$result2 = $conn->query($sql2);
		echo $result2."re2";
		echo $result."re";
	if ($result) {
	    echo "1 results";

	    
	} else {
	    //echo $timestamp;
	    echo "0 results";
 	}



}
else if ($_POST[state] == 5 || $_POST[state] == 7 || $_POST[state] == 8 || $_POST[state] == 9 || $_POST[state] == 11 || $_POST[state] == 13 || $_POST[state] == 15) {
	$s_count = ("SELECT count_op FROM web_order WHERE  invoice = '".$_POST[voucher]."'");
	 
	 $result = $conn->query($s_count);
	 $row = $result->fetch_assoc();
	echo $row[count_op];
	$num = $row[count_op]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
	// if ($row>0) {
	    
	$sql = "INSERT INTO all_message(voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,yourself_post_date,orderid,comment_from,comment,latitude,longitude) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[comment]."','".$_POST[lag]."','".$_POST[long]."')";
		$sql2 = ("UPDATE web_order SET count_op = '".$num."' WHERE invoice = '".$_POST[voucher]."'");
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
else if ($_POST[state] == '6') {
	$s_count = ("SELECT count_service FROM web_order WHERE  invoice = '".$_POST[voucher]."'");
	 
	 $result = $conn->query($s_count);
	 $row = $result->fetch_assoc();
	echo $row[count_driver];
	$num = $row[count_service]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
	// if ($row>0) {
	    
	$sql = "INSERT INTO all_message(voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,yourself_post_date,orderid,comment_from,comment,cost_service) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[comment]."','".$_POST[cost]."')";
		$sql2 = ("UPDATE web_order SET count_service = '".$num."' WHERE invoice = '".$_POST[voucher]."'");
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
$conn->close();

} 

?>