<?php @header ('Content-type: text/html; charset=utf-8');
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

$sql = "SELECT TB_order.back_place,TB_order.to_place,TB_order.program,TB_order.product,
TB_transferplace.topic as TB_transferplace_topic,TB_transferplace_to.topic as TB_transferplace_to_topic,TB_transferplace.update_map
FROM web_order as TB_order
LEFT JOIN web_product_point_place as TB_product_point_place ON TB_order.product = TB_product_point_place.pro_id
LEFT JOIN web_transferplace_new as TB_transferplace ON TB_product_point_place.place = TB_transferplace.id
LEFT JOIN web_transferplace_new as TB_transferplace_to ON TB_order.to_place = TB_transferplace_to.id




 WHERE TB_order.invoice  = '".$_POST[id]."' ORDER BY TB_order.outdate ASC limit 1" ;
$rows = array();
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
 