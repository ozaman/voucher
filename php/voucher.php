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


$datavc = $_POST[id];
 

$sql = "SELECT tb_web_order.orderid, tb_web_order.program, tb_web_order.agent, tb_web_order.pickup_place, tb_web_order.to_place, tb_web_order.type, tb_web_order.adult, tb_web_order.child, tb_web_order.baby,tb_web_order.total,tb_web_order.numcar,tb_web_order.ondate,tb_web_order.outdate,tb_web_order.air,tb_web_order.airin_h,tb_web_order.airin_m,tb_web_order.airout_h,tb_web_order.airout_m,tb_web_order.remark as remark,tb_web_order.posted,tb_web_order.post_date,tb_web_order.status,tb_web_order.country_id,tb_web_order.driver_pickup,tb_web_order.sub_confirm,tb_web_order.sub_reject,tb_web_order.code,tb_web_order.id,tb_web_order.invoice,tb_web_order.airin_time,tb_web_order.pickup_time,tb_web_order.room_number,tb_web_order.back_place,tb_web_order.date_confirm,tb_web_order.transfer,tb_web_order.airout_time,tb_web_order.driver_topoint,tb_web_order.driver_complete,tb_web_order.driver_topoint_date,tb_web_order.driver_pickup_date,tb_web_order.driver_complete_date,tb_web_order.driver_topoint_lat,tb_web_order.driver_topoint_lng,tb_web_order.driver_complete_lat,tb_web_order.driver_complete_lng,tb_web_order.driver_pickup_lat,tb_web_order.driver_pickup_lng,tb_web_order.driver_checkcar,tb_web_order.driver_checkcar_date,tb_web_order.driver_checkcar_lat,tb_web_order.driver_checkcar_lng,tb_web_order.terminal_in,tb_web_order.visa_in,
    tb_web_country.name_en as web_country_name_en,	tb_web_admin.company as tb_web_admin_company,tb_web_admin.company_cn as tb_web_admin_company_th ,tb_web_admin.company_th as tb_web_admin_company_cn,tb_web_admin.name as tb_web_admin_name,tb_web_admin.phone as tb_web_admin_phone,tb_web_admin.country,tb_web_admin.email as tb_web_admin_email,
	tb_web_book_agent.guest,tb_web_book_agent.agent_ref,tb_web_book_agent.name as web_book_agent_name,tb_web_book_agent.s_qq,tb_web_book_agent.s_wechat,tb_web_book_agent.s_line,tb_web_book_agent.s_skype,tb_web_book_agent.s_ww,tb_web_book_agent.s_what,tb_web_book_agent.s_fb,tb_web_book_agent.guest as web_book_agent_guest,tb_web_book_agent.phone as web_book_agent_phone,tb_web_book_agent.phone2 as web_book_agent_phone2, tb_web_book_agent.local_phone,tb_web_book_agent.id as tb_web_book_agent_id,tb_web_book_agent.guestemail as tb_web_book_agent_email,tb_web_book_agent.guestemail2 as tb_web_book_agent_email2,
	tb_transferplace.topic as transferplace_topic,tb_transferplace.map as map,tb_transferplace_to.map as map_to, tb_transferplace_to.topic as transferplace_topic_to,
	tb_web_driver.name_en as web_driver_name_en,tb_web_driver.name as web_driver_name,tb_web_carall.car_num as web_driver_car_num,tb_web_driver.contact as web_driver_contact,tb_web_driver.phone as web_driver_phone,
    tb_web_driver.post_date as web_driver_post_date,tb_web_driver.wechat_id as web_driver_wechat_id,
    tb_web_driver.line_id as web_driver_line_id,tb_web_driver.skype_id as web_driver_skype_id,tb_web_driver.whatsapp_id as web_driver_whatsapp_id,
    tb_web_carall.plate_num as web_carall_plate_num,tb_web_carall.province as web_carall_province,tb_web_carall.plate_color as web_carall_plate_color,tb_web_carall.car_color as web_carall_car_color,

    tb_web_admin_post.name as tb_web_admin_user_name,tb_web_admin_post.username as tb_web_admin_user_username,tb_web_admin_post.email as tb_web_admin_user_email,tb_web_admin_post.phone as tb_web_admin_user_phone,

    tb_web_support_social_post.posted as tb_web_support_social_post_posted,
    tb_web_support_social_post.wechat_id as tb_web_web_support_social_post_wecaht_id,
    tb_web_support_social_post.wechat_name as tb_web_support_social_post_wechat_name,
    tb_web_support_social_post.wechat_url as tb_web_support_social_post_wechat_url,
    tb_web_support_social_post.wechat_pic as tb_web_support_social_post_wechat_pic,
    tb_web_support_social_post.line_id as tb_web_support_social_post_line_id,
    tb_web_support_social_post.line_name as tb_web_support_social_post_line_name,
    tb_web_support_social_post.line_url as tb_web_support_social_post_line_url,
    tb_web_support_social_post.line_pic as tb_web_support_social_post_line_pic,
    tb_web_support_social_post.skype_id as tb_web_support_social_post_skype_id,
    tb_web_support_social_post.skype_name as tb_web_support_social_post_skype_name,
    tb_web_support_social_post.skype_url as tb_web_support_social_post_skype_url,
    tb_web_support_social_post.skype_pic as tb_web_support_social_post_skype_pic,
    tb_web_support_social_post.whatapp_id as tb_web_support_social_post_whatapp_id,
    tb_web_support_social_post.whatapp_name as tb_web_support_social_post_whatapp_name,
    tb_web_support_social_post.whatapp_url as tb_web_support_social_post_whatapp_url,
    tb_web_support_social_post.whatapp_pic as tb_web_support_social_post_whatapp_pic,
    tb_web_support_social_post.zello_id as tb_web_support_social_post_zello_id,
    tb_web_support_social_post.zello_name as tb_web_support_social_post_zello_name,
    tb_web_support_social_post.zello_url as tb_web_support_social_post_zello_url,
    tb_web_support_social_post.zello_pice as tb_web_support_social_post_zello_pice,

    tb_web_support_social_confirm.posted as tb_web_social_support_confirm_posted,
    tb_web_support_social_confirm.wechat_id as tb_web_web_support_social_confirm_wecaht_id,
    tb_web_support_social_confirm.wechat_name as tb_web_support_social_confirm_wechat_name,
    tb_web_support_social_confirm.wechat_url as tb_web_support_social_confirm_wechat_url,
    tb_web_support_social_confirm.wechat_pic as tb_web_support_social_confirm_wechat_pic,
    tb_web_support_social_confirm.line_id as tb_web_support_social_confirm_line_id,
    tb_web_support_social_confirm.line_name as tb_web_support_social_confirm_line_name,
    tb_web_support_social_confirm.line_url as tb_web_support_social_confirm_line_url,
    tb_web_support_social_confirm.line_pic as tb_web_support_social_confirm_line_pic,
    tb_web_support_social_confirm.skype_id as tb_web_support_social_confirm_skype_id,
    tb_web_support_social_confirm.skype_name as tb_web_support_social_confirm_skype_name,
    tb_web_support_social_confirm.skype_url as tb_web_support_social_confirm_skype_url,
    tb_web_support_social_confirm.skype_pic as tb_web_support_social_confirm_skype_pic,
    tb_web_support_social_confirm.whatapp_id as tb_web_support_social_confirm_whatapp_id,
    tb_web_support_social_confirm.whatapp_name as tb_web_support_social_confirm_whatapp_name,
    tb_web_support_social_confirm.whatapp_url as tb_web_support_social_confirm_whatapp_url,
    tb_web_support_social_confirm.whatapp_pic as tb_web_support_social_confirm_whatapp_pic,
    tb_web_support_social_confirm.zello_id as tb_web_support_social_confirm_zello_id,
    tb_web_support_social_confirm.zello_name as tb_web_support_social_confirm_zello_name,
    tb_web_support_social_confirm.zello_url as tb_web_support_social_confirm_zello_url,
    tb_web_support_social_confirm.zello_pice as tb_web_support_social_confirm_zello_pice,
    tb_web_web_gallery_place.post_date as tb_web_web_gallery_post_date,
    web_province.name as web_province_name_en,web_province.name_th as web_province_name_th,web_province.name_cn as web_province_name_cn,web_typearea.title,
    tb_transferplace_tour_back.topic as tour_place_back,tb_transferplace_tour_to.topic as tour_place_to,
    TB_admin.company as TB_admin_company,TB_admin.company_cn as TB_admin_company_cn,TB_admin.company_th as TB_admin_company_th,TB_admin.name as TB_admin_nameissue,web_product.round_open,web_product.round_en,web_product.round_cn,web_product.round_th
	FROM web_order as  tb_web_order
LEFT JOIN web_country as tb_web_country ON tb_web_order.country_id = tb_web_country.id
LEFT JOIN web_admin as tb_web_admin ON tb_web_order.agent = tb_web_admin.id
LEFT JOIN web_book_agent as tb_web_book_agent ON tb_web_order.orderid = tb_web_book_agent.id
LEFT JOIN web_transferplace_new as tb_transferplace ON tb_web_order.pickup_place = tb_transferplace.id  
LEFT JOIN web_transferplace_new as tb_transferplace_to ON tb_web_order.to_place = tb_transferplace_to.id
LEFT JOIN web_driver as tb_web_driver ON tb_web_order.drivername = tb_web_driver.id
LEFT JOIN web_carall as tb_web_carall ON tb_web_driver.car_num = tb_web_carall.id
LEFT JOIN web_admin as tb_web_admin_post ON tb_web_order.posted = tb_web_admin_post.username
LEFT JOIN web_admin as tb_web_admin_confirm ON tb_web_order.user_confirm = tb_web_admin_confirm.username
LEFT JOIN web_admin as TB_admin ON tb_web_order.company = TB_admin.id
LEFT JOIN web_support_social as tb_web_support_social_post ON tb_web_admin_post.id = tb_web_support_social_post.admin_id 
LEFT JOIN web_support_social as tb_web_support_social_confirm ON tb_web_admin_confirm.id = tb_web_support_social_confirm.admin_id
LEFT JOIN web_gallery_place as tb_web_web_gallery_place ON tb_web_web_gallery_place.place_id = tb_transferplace.id AND tb_web_web_gallery_place.type = 1
LEFT JOIN web_product as web_product ON web_product.id = tb_web_order.program
LEFT JOIN web_province as web_province ON web_province.id = web_product.province
LEFT JOIN web_typearea as web_typearea ON web_typearea.id = tb_web_order.cartype
-- LEFT JOIN web_product_point_place  as tb_product_point_place ON tb_product_point_place.pro_id =      tb_web_order.program
LEFT JOIN web_transferplace_new as tb_transferplace_tour_back ON tb_transferplace_tour_back.id = tb_web_order.back_place
LEFT JOIN web_transferplace_new as tb_transferplace_tour_to ON tb_transferplace_tour_to.id = tb_web_order.to_place

WHERE tb_web_order.invoice ='".$datavc."'";
$rows = array();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;

            // $src = 'https://maps.googleapis.com/maps/api/staticmap?center='. $row->driver_topoint_lat .','. $row->driver_topoint_lng .'&markers=color:red%7Clabel:C%7C40.718217,-73.998284&zoom=12&size=600x400';
            //         $time = $row->invoice;
            //         $desFolder = 'image/';
            //         $imageName = 'topoint_'.$time.'.PNG';
            //         $imagePath = $desFolder.$imageName;
            //         file_put_contents($imagePath,file_get_contents($src));
                
    }
    print json_encode($rows);
} else {
    echo "0";
}
$conn->close();
?>


 
