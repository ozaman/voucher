<?php header ('Content-type: text/html; charset=utf-8');

  include("connect.php");




// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
// Check connection

if ($_POST[sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    $conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
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

 
	$s_count = ("SELECT count_driver_to FROM web_order WHERE  invoice = '".$_POST[voucher]."'");
	 
	$result = $conn->query($s_count);
	$row = $result->fetch_assoc();
	echo $row[count_driver];
	$num = $row[count_driver]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
	// if ($row>0) {
	    
	$sql = "INSERT INTO all_message(voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,yourself_post_date,orderid,comment_from,comment,latitude,longitude) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[comment]."','".$_POST[lag]."','".$_POST[long]."')";
		$sql2 = ("UPDATE web_order SET count_driver_to = '".$num."' WHERE invoice = '".$_POST[voucher]."'");
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
	$s_count = ("SELECT count_op_to FROM web_order WHERE  invoice = '".$_POST[voucher]."'");
	 
	 $result = $conn->query($s_count);
	 $row = $result->fetch_assoc();
	echo $row[count_op];
	$num = $row[count_op]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
	// if ($row>0) {
	    
	$sql = "INSERT INTO all_message(voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,yourself_post_date,orderid,comment_from,comment,latitude,longitude) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[comment]."','".$_POST[lag]."','".$_POST[long]."')";
		$sql2 = ("UPDATE web_order SET count_op_to = '".$num."' WHERE invoice = '".$_POST[voucher]."'");
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
	$s_count = ("SELECT count_service_to FROM web_order WHERE  invoice = '".$_POST[voucher]."'");
	 
	 $result = $conn->query($s_count);
	 $row = $result->fetch_assoc();
	echo $row[count_driver];
	$num = $row[count_service]+1;
	//echo $result->num_rows();
	//echo $_POST[state]."sasasasasasa";
	//echo $row[count]."aaaaaaaaaaaaaaaaaaaaaaaaaa";
	// if ($row>0) {
	    
	$sql = "INSERT INTO all_message(voucher, flight_delay, flight_delay_date,guest_topoint_date,img_post_date,state,yourself_post_date,orderid,comment_from,comment,cost_service) VALUES ('".$_POST[voucher]."','".$_POST[fdelay]."','".time()."','".time()."','".$_POST[nameim]."','".$_POST[state]."','".$_POST[nameim2]."','".$_POST[orderid]."','".$_POST[from]."','".$_POST[comment]."','".$_POST[cost]."')";
		$sql2 = ("UPDATE web_order SET count_service_to = '".$num."' WHERE invoice = '".$_POST[voucher]."'");
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