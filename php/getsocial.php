<?php
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
$idagent = $_POST[id];
 

$sql = "SELECT web_book_agent_social.*, tb_social_type.type_icon,tb_social_type.fun_name FROM web_book_agent_social 
LEFT JOIN web_social_type as tb_social_type ON web_book_agent_social.social_type_id = tb_social_type.id
WHERE bookagent_id	= '".$_POST[id]."' ORDER BY web_guest_social ASC";
$rows = array();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    print json_encode($rows);
} else {
    print json_encode($rows);
}
$conn->close();
?>