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
if ($_POST[type] == 'transfer') {
    $sql = "SELECT tb_transferproduct_timeline.* ,tb_transferplace.type as tb_transferplace_type,tb_transferplace.amphur as tb_transferplace_amphur,tb_transferplace.province as tb_transferplace_province,tb_transferplace.topic as TB_transferplace_topic,tb_transferplace.update_map
            FROM web_transferproduct_timeline  as tb_transferproduct_timeline 
            LEFT JOIN web_transferplace_new as tb_transferplace ON tb_transferproduct_timeline.place =      tb_transferplace.id
            -- LEFT JOIN web_transferplace_type as tb_transferplace_type ON tb_transferplace_type.id = tb_transferplace.transferplace_type
            WHERE product  ='".$_POST[id]."'";
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
           
 }
 else{
    $sql = "SELECT tb_product_point_place.* ,tb_transferplace.type as tb_transferplace_type,tb_transferplace.amphur as tb_transferplace_amphur,tb_transferplace.province as tb_transferplace_province,tb_transferplace_type.topic_en as type_topic_en,tb_transferplace_type.topic_th as type_topic_th,tb_transferplace_type.topic_cn as type_topic_cn,tb_transferplace.topic as TB_transferplace_topic,tb_transferplace.update_map
            FROM web_product_point_place  as tb_product_point_place 
            LEFT JOIN web_transferplace_new as tb_transferplace ON tb_product_point_place.place =      tb_transferplace.id
            -- LEFT JOIN web_transferplace_type as tb_transferplace_type ON tb_transferplace_type.id = tb_transferplace.transferplace_type
            WHERE pro_id  ='".$_POST[id]."'";
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
 }
 $conn->close();

?>