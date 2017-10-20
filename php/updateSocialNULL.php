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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




	$sqlcol = "UPDATE web_book_agent_social SET web_guest_social = '".$_POST[social]."' WHERE bookagent_id = '".$_POST[agentid]."' AND social_type_id = '".$_POST[typeid]."'" ;

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
?>