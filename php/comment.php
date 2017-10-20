<?php header ('Content-type: text/html; charset=utf-8');
include("connect.php");
// Create connection
if ($_POST[sv] == 'th') {
    $conn2 = new mysqli($servername, $username, $password, $dbname);
    $conn = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    $conn2 = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
    $conn = new mysqli($servername, $username, $password, $dbname_chat);
}
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$voucher = $_POST[voucher];
$driving = $_POST[driving];
$clean = $_POST[clean];
$comment = $_POST[comment];



$sql = "INSERT INTO web_comment(voucher, driver, clean,ctime,orderid,comment_date,comment,impressive,complacency) VALUES ('".$voucher."', '".$driving."', '".$clean."','".$_POST[times]."','".$_POST[orderid]."','".time()."','".$_POST[comment]."','".$_POST[impress]."','".$_POST[complac]."')";
$rows = array();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    $sql2 = ("UPDATE web_order SET comment = 1 WHERE invoice = '".$_POST[voucher]."'");
        
       
        $result2 = $conn2->query($sql2);
    print json_encode($rows);
} else {
    echo "0 results";
}
$conn->close();
?>