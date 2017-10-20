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
$datavc = $_POST[id];

 

$sql = "SELECT tb_transferplace.topic as topic,tb_transferplace_to.topic as topic_to,tb_order.pickup_place, tb_order.to_place  FROM web_order as tb_order 
LEFT JOIN web_transferplace_new as tb_transferplace ON tb_order.pickup_place = tb_transferplace.id  
LEFT JOIN web_transferplace_new as tb_transferplace_to ON tb_order.to_place = tb_transferplace_to.id WHERE tb_order.invoice ='".$datavc."'";


$rows = array();
$rows2 = array();
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    print json_encode($rows);
} else {
    echo "0 results";
}

$conn->close();
?>