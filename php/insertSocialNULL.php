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



	$sqlcol = "INSERT INTO web_book_agent_social(bookagent_id, social_type_id,name_social,web_guest_social) VALUES ('".$_POST[agentid]."', '".$_POST[typeid]."', '".$_POST[namesocial]."','".$_POST[social]."')";


	 $result = $conn->query($sqlcol);


 //$rows = array();

if ($result) {
    echo "1 results";

    
} else {
    //echo $timestamp;
    echo "0 results";
}
$conn->close();
?>
