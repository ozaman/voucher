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

$sql = "SELECT web_product.topic, web_product.detail_en, web_product.detail_cn,web_product.detail_th, web_product.cost_a_agent_all,web_product.cost_b_agent_all, web_product.type, web_product.topic_en as topic_en,web_product.topic_cn as topic_cn,web_product.topic_th as topic_th, web_product.onsale_front, web_product.onsale_enable, web_product.onsale_promotion, web_product.onsale_top,web_product.id,web_product.round_en,web_product.province,web_product.open_Sun,web_product.open_Mon, web_product.open_Tue,web_product.open_Wed,web_product.open_Thu,web_product.open_Fri,web_product.open_Sat,web_admin.company,web_extra_tour.topic_en as extra_way_topic_en,web_extra_tour.topic_th as extra_way_topic_th,web_extra_tour.topic_cn as extra_way_topic_cn  FROM web_product 
LEFT JOIN web_admin ON web_product.company = web_admin.id 
LEFT JOIN web_extra_tour as web_extra_tour ON web_product.extra_tour = web_extra_tour.id  
WHERE web_product.id = '".$_POST[id]."'";
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