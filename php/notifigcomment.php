<?php @header ('Content-type: text/html; charset=utf-8');
if (!$_POST[orderid]) {
    exit();
    # code...
}
include("connect.php");
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($_POST[sv] == 'th' || $_POST[sv] == 'cn'){
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    $conn = new mysqli($servername, $username, $password, $dbname);

    //$conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT voucher,msg_driver_to_guest,msg_callcenter_to_guest,msg_agent_to_guest
FROM all_chat WHERE voucher  = '".$_POST[orderid]."'";
$rows = array();
$result = $conn2->query($sql);

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
 