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
	// $data = json_decode(file_get_contents('php://input'), true);
	// print_r($data);
	// //echo $data["id"];
	// echo "aaaaaa";


	// $sql = "UPDATE web_social SET s_qq = '".$_POST[s_qq]."', s_wechat = '".$_POST[s_wechat]."',s_line = '".$_POST[s_line]."',s_skype = '".$_POST[s_skype]."', s_ww = '".$_POST[s_wang]."', s_what = '".$_POST[s_whatapp]."', s_fb = '".$_POST[s_facebook]."',phone = '".$_POST[phone]."',local_phone = '".$_POST[localphone]."' WHERE idbook_agent = '".$_POST[orderid]."'";
	// $rows = array();
	$sql = "UPDATE web_book_agent SET phone = '".$_POST[phone]."',local_phone = '".$_POST[localphone]."', guestemail = '".$_POST[email]."', guestemail2 = '".$_POST[email2]."',phone2 = '".$_POST[phone2]."' WHERE id = '".$_POST[orderid]."'";
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
	//

}

?>