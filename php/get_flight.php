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
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// $conn2 = new mysqli($servername, $username, $password, $dbname_chat);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$voucher = $_POST[voucher];
 

$sql = "SELECT all_chat.* , tb_web_book_agent.guest FROM all_chat  
LEFT JOIN ".$dbname.".web_book_agent as tb_web_book_agent ON all_chat.orderid = ".$dbname.".tb_web_book_agent.id
WHERE voucher  ='".$voucher."' ORDER BY all_chat.id DESC ";
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