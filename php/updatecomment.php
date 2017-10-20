<?php header ('Content-type: text/html; charset=utf-8');
include("connect.php");

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
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
	$sql = "UPDATE web_comment SET driver = '".$_POST[driving]."', clean = '".$_POST[clean]."',comment = '".$_POST[comment]."',ctime = '".$_POST[times]."',comment_date = '".$_POST[comment_date]."' WHERE voucher = '".$_POST[voucher]."'";
	$rows = array();
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $rows[] = $row;
	    }
	    print json_encode($rows);
	} else {
	    //echo $timestamp;
	    echo "0 results".$timestamp;
	}
	$conn->close();
}





?>