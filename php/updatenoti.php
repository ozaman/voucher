<?php header ('Content-type: text/html; charset=utf-8');
include("connect.php");

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($_POST[sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
    //echo $dbname_chat;
}
else{
    $conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
    
}
if ($conn->connect_error || $conn2->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	echo $_POST[state];
	$voucherDB = "vc_".$_POST[voucher];
	if ($_POST[state] == 'driver') {
		$sql = "UPDATE all_chat SET count_driver = 0 WHERE voucher = '".$_POST[voucher]."'";
		$rows = array();
		$result = $conn2->query($sql);
		//echo "work";
		if ($result) {
			$sql2 = "UPDATE ".$voucherDB." SET read_msg = 1 WHERE comment_from = 'driver'";
			echo $sql2;
	    	$rows2 = array();
	    	echo $result2 = $conn2->query($sql2);
	    	
	    	if ($result2) {
			   
			    $rows2 = $result2->fetch_assoc();
			    	
			    
			} else {
				    //echo $timestamp;

				    echo "0 resultsstap2".$voucherDB;
			}
	    
		} else {
		    //echo $timestamp;
		    echo "0 resultsstap1";
	 	}
		
		// $rows = array();
		// $result = $conn->query($sql);
		// $result2 = $conn2->query($sql2);
		
		// $rows = $result->fetch_assoc();
		
		//echo $_POST[voucher];
		
	}
	if($_POST[state] == 'op'){
		$sql = "UPDATE web_order SET count_driver = 0 WHERE invoice = '".$_POST[voucher]."'";
		$rows = array();
		$result = $conn->query($sql);
		//echo "work";
		if ($result) {
			$sql2 = "UPDATE ".$voucherDB." SET read_msg = 1 WHERE comment_from = 'driver'";
			echo $sql2;
	    	$rows2 = array();
	    	echo $result2 = $conn2->query($sql2);
	    	
	    	if ($result2) {
			   
			    $rows2 = $result2->fetch_assoc();
			    	
			    
			} else {
				    //echo $timestamp;

				    echo "0 resultsstap2".$voucherDB;
			}
	    
		} else {
		    //echo $timestamp;
		    echo "0 resultsstap1";
	 	}

	}
	if($_POST[state] == 'service'){
		$sql = "UPDATE web_order SET count_driver = 0 WHERE invoice = '".$_POST[voucher]."'";
		$rows = array();
		$result = $conn->query($sql);
		//echo "work";
		if ($result) {
			$sql2 = "UPDATE ".$voucherDB." SET read_msg = 1 WHERE comment_from = 'driver'";
			echo $sql2;
	    	$rows2 = array();
	    	echo $result2 = $conn2->query($sql2);
	    	
	    	if ($result2) {
			   
			    $rows2 = $result2->fetch_assoc();
			    	
			    
			} else {
				    //echo $timestamp;

				    echo "0 resultsstap2".$voucherDB;
			}
	    
		} else {
		    //echo $timestamp;
		    echo "0 resultsstap1";
	 	}

	}
	
	

	
	$conn->close();
}





?>