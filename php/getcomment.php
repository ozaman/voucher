<?php header ('Content-type: text/html; charset=utf-8');
include("connect.php");

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($_POST[sv] == 'th') {
    $conn2 = new mysqli($servername, $username, $password, $dbname);
    $conn = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    $conn2 = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn = new mysqli($servername, $username, $password, $dbname_chat);
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 

$sql = "SELECT *  FROM web_comment  WHERE orderid  ='".$_POST[order]."'";
$rows = array();
$result = $conn->query($sql);

if ($result->num_rows >= 0) {
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