<?php header ('Content-type: text/html; charset=utf-8');
include("connect.php");
//$_POST[orderid]='184860';
// Create connection
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

 $voucherDB ="vc_".$_POST[vc];
 //echo $voucherDB;

$sql = "SELECT * FROM $voucherDB WHERE state  = 6  ORDER BY $voucherDB.id ASC"; //ASC or DESC
$rows = array();
$result = $conn2->query($sql);

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