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
	
	
	
		$sql = "UPDATE web_transferplace_new SET update_map = 1 WHERE id = '".$_POST[placeID]."'";
		$rows = array();
		$result = $conn->query($sql);
		//echo "work";
		if ($result) {
			
	    	$rows = array();
	    	
	    
		} else {
		    //echo $timestamp;
		    echo "0 resultsstap1";
	 	}
		
		$conn->close();
	}
	
	
	
	

	
	






?>