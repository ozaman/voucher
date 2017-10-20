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
$program = $_POST[id];
 

$sql = "SELECT tb_web_transferproduct.*,tb_web_car.car_model as web_car_car_model,
tb_web_car.topic_en as web_car_topic_en,tb_web_car.pax as web_car_pax,tb_web_car.topic_th as web_car_topic_th,tb_web_car.topic_cn as web_car_topic_cn,tb_web_car.pax_cn as web_car_pax_cn,tb_web_car.pax_th as web_car_pax_th,
tb_web_extra_way.topic_en as web_extra_way_topic_en,tb_web_extra_way.topic_th as web_extra_way_topic_th,tb_web_extra_way.topic_cn as web_extra_way_topic_cn,
tb_web_province.name as web_province_name,tb_web_province.name_cn as web_province_name_cn,tb_web_province.name_th as web_province_name_th,
tb_web_province_to.name as web_province_to_name,tb_web_province_to.name_cn as web_province_to_name_cn,tb_web_province_to.name_th as web_province_to_name_th
FROM web_transferproduct as tb_web_transferproduct  
LEFT JOIN web_car as tb_web_car ON tb_web_transferproduct.cartype = tb_web_car.id 
LEFT JOIN web_extra_way as tb_web_extra_way ON tb_web_transferproduct.extra_way = tb_web_extra_way.id
LEFT JOIN web_province as tb_web_province ON tb_web_transferproduct.stay = tb_web_province.id
LEFT JOIN web_province as tb_web_province_to ON tb_web_transferproduct.stay_to = tb_web_province_to.id 

WHERE tb_web_transferproduct.id ='".$program."'";
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