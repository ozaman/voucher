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
else{
    $sql = "SELECT TB_transferproduct.* ,TB_order.invoice as TB_order_order,TB_order.orderid,TB_order.agent as TB_order_agent,TB_order.status as TB_order_status,TB_order.type as TB_order_type,TB_order.program as TB_order_program,TB_order.outdate as TB_order_outdate,TB_order.airout_h,TB_order.airout_m,TB_order.id as TB_order_id,TB_order.code as TB_order_code, TB_order.agent as TB_order_agent,TB_order.post_date,TB_order.airin_time as TB_order_air_time,TB_order.air as TB_order_air,TB_order.ondate as TB_order_ondate,TB_order.transfer_in,TB_order.room_number,TB_order.transfer_in,TB_order.sub_reject,TB_order.sub_confirm,TB_order.company,TB_order.admin_company,TB_order.drivername,TB_order.sub_remark as remark,TB_order.transfer,TB_order.driver_topoint_lat,TB_order.driver_topoint_lng,TB_order.driver_complete_lat,TB_order.driver_complete_lng,TB_order.driver_pickup_lat,TB_order.driver_pickup_lng,

    TB_order.driver_topoint as TB_order_driver_topoint,TB_order.driver_pickup as TB_order_driver_pickup,TB_order.driver_complete as TB_order_driver_complete,TB_order.driver_topoint_date as TB_order_driver_topoint_date,TB_order.driver_pickup_date as TB_order_driver_pickup_date,TB_order.transfer_in, TB_order.driver_complete_date as TB_order_driver_complete_date,
    TB_car.topic_en as TB_car_topic_en,TB_car.pax as TB_car_pax,TB_car.topic_th as TB_car_topic_th,TB_car.topic_cn as TB_car_topic_cn,TB_car.pax_cn as TB_car_pax_cn,TB_car.pax_th as TB_car_pax_th,TB_province.name as TB_province_name,TB_province.name_cn as TB_province_name_cn,TB_province.name_th as TB_province_name_th,TB_province_to.name as TB_province_to_name,TB_province_to.name_cn as TB_province_to_name_cn,TB_province_to.name_th as TB_province_to_name_th,
    TB_admin.company as TB_admin_company,TB_admin.company_cn,TB_admin.company_th,TB_admin.name as TB_admin_name,
    TB_book_agent.agent_ref as TB_book_agent_agent_ref,TB_book_agent.id as TB_book_agent_id,
    TB_carall.car_type as TB_carall_car_type,TB_driver.phone as TB_driver_phone,
    TB_product.topic_en as T_topic_en,TB_product.topic_th as T_topic_th,TB_product.topic_cn as T_topic_cn,
    TB_transferplace.topic as TB_transferplace_topic,TB_transferplace.area as TB_transferplace_area,
    TB_transferplace_to.topic as TB_transferplace_to_topic,TB_transferplace_to.area as TB_transferplace_to_area,TB_transferplace.update_map,TB_order.to_place,web_typearea.title/*,
    TB_transferplace_navi.topic as TB_transferplace_navi_topic,TB_transferplace_naviback.topic as TB_transferplace_naviback_topic*/
FROM web_order as TB_order
LEFT JOIN web_transferproduct as TB_transferproduct ON TB_order.program = TB_transferproduct.id
LEFT JOIN web_car as TB_car ON TB_transferproduct.cartype = TB_car.id
LEFT JOIN web_driver as TB_driver ON TB_order.drivername = TB_driver.id
LEFT JOIN web_carall as TB_carall ON TB_driver.car_num = TB_carall.id
LEFT JOIN web_province as TB_province ON TB_transferproduct.stay = TB_province.id
LEFT JOIN web_province as TB_province_to ON TB_transferproduct.stay_to = TB_province_to.id
LEFT JOIN web_admin as TB_admin ON TB_order.agent = TB_admin.id
LEFT JOIN web_book_agent as TB_book_agent ON TB_order.orderid = TB_book_agent.id
LEFT JOIN web_product as TB_product ON TB_order.program = TB_product.id
LEFT JOIN web_transferplace_new as TB_transferplace ON TB_order.to_place = TB_transferplace.id
LEFT JOIN web_transferplace_new as TB_transferplace_to ON TB_order.to_place = TB_transferplace_to.id
LEFT JOIN web_typearea as web_typearea ON web_typearea.id = TB_order.cartype
/*LEFT JOIN web_product_point_place as TB_product_point_place ON TB_order.program = TB_product_point_place.pro_id
LEFT JOIN web_transferplace_new as TB_transferplace_navi ON TB_product_point_place.place = TB_transferplace_navi.id
LEFT JOIN web_transferplace_new as TB_transferplace_naviback ON TB_product.place = TB_transferplace_naviback.id*/




 WHERE TB_order.orderid  = '".$_POST[id]."' ORDER BY TB_order.ondate ASC";
$rows = array();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
        $file_nameQR = $row[TB_order_order]."_".$row[TB_order_code]; 
        $remote_file_url = 'http://t-booking.com/data/qr/vc/'.$file_nameQR.'.png';
        //$remote_file_url = 'http://t-booking.com/data/qr/vc/7050498_7849160235.png';
         

         $local_file = '../data/qr/vc/'.$file_nameQR.'.png';
        //$local_file = '../data/qr/vc/7050498_7849160235.png';
        
        copy( $remote_file_url, $local_file );
    }
    print json_encode($rows);
} else {
    $data[page] = 0;
            
    print json_encode($rows);
}
$conn->close();
} 



 

?> 
 