<?php @header ('Content-type: text/html; charset=utf-8');
include("connect.php");
// Create connection
if ($_POST[sv] == 'th') {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}
else{
    //$conn = new mysqli($servernameCN, $usernameCN, $passwordCN, $dbnameCN);
  $conn = new mysqli($servername, $username, $password, $dbname);
    $conn2 = new mysqli($servername, $username, $password, $dbname_chat);
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT have_db FROM web_order 
 WHERE web_order.invoice  = '".$_POST[voucher]."'";
$rows = array();
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    echo $row[have_db];
    $table = $row[have_db];

if (0==0) {
 $voucherDB = "vc_".$_POST[voucher];
$sql2 = "CREATE TABLE  `".$voucherDB."` (
  `id` int(20) NOT NULL auto_increment,
  `flight_delay` varchar(50) collate utf8_unicode_ci NOT NULL,
  `flight_delay_date` varchar(50) collate utf8_unicode_ci NOT NULL,
  `voucher` int(100) NOT NULL,
  `guest_topoint` int(5) NOT NULL default '0',
  `guest_topoint_date` varchar(50) collate utf8_unicode_ci NOT NULL,
  `driver_confirm_guest_topoint_date` varchar(50) collate utf8_unicode_ci NOT NULL,
  `img_post_date` varchar(100) collate utf8_unicode_ci NOT NULL,
  `yourself_post_date` varchar(50) collate utf8_unicode_ci NOT NULL,
  `state` varchar(50) collate utf8_unicode_ci NOT NULL,
  `state_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `driver_confirm_date` varchar(50) collate utf8_unicode_ci NOT NULL,
  `driver_complete_date` varchar(50) collate utf8_unicode_ci NOT NULL,
  `driver_pickup_date` varchar(50) collate utf8_unicode_ci NOT NULL,
  `latitude` varchar(50) collate utf8_unicode_ci NOT NULL,
  `longitude` varchar(50) collate utf8_unicode_ci NOT NULL,
  `orderid` int(50) NOT NULL,
  `comment` text collate utf8_unicode_ci NOT NULL,
  `comment_from` varchar(100) collate utf8_unicode_ci NOT NULL,
  `comment_to` varchar(50) collate utf8_unicode_ci NOT NULL,
  `drivername` int(10) NOT NULL,
  `count_driver` int(10) NOT NULL,
  `count_service` int(10) NOT NULL,
  `count_op` int(10) NOT NULL,
  `time_h` varchar(5) collate utf8_unicode_ci NOT NULL,
  `time_m` varchar(5) collate utf8_unicode_ci NOT NULL,
  `add_service` varchar(50) collate utf8_unicode_ci NOT NULL,
  `cost_service` int(10) NOT NULL,
  `translate` int(1) NOT NULL default '0',
  `list` tinyint(2) NOT NULL default '0',
  `status_confirm` int(10) NOT NULL default '0',
   `read_msg` int(1) NOT NULL default '0',
   `new_flight` varchar(20) NOT NULL default '',
   `ondate_new_flight` varchar(20) NOT NULL default '',
   `product` int(10) NOT NULL default '0',
   `type` varchar(20) NOT NULL default '0', 
   `id_comment` int(10) NOT NULL,   
   `msg_type` varchar(20) NOT NULL default '0',
   `type_state` varchar(50) collate utf8_unicode_ci NOT NULL,
   `day_start` int(1) NOT NULL default '0',
  `day_comment` varchar(12) collate utf8_unicode_ci NOT NULL,
  `admin_company` int(10) NOT NULL,  
  `company` int(10) NOT NULL,
  `count_driver_to` int(10) NOT NULL DEFAULT '0',  
  `count_service_to` int(10) NOT NULL DEFAULT '0',  
  `count_op_to` int(10) NOT NULL DEFAULT '0', 
   `count_guest` int(10) NOT NULL DEFAULT '0', 
   `old_flight` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',  
  `ondate_old_flight` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '', 
  `time_old_flight` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `reply_status` int(10) NOT NULL,
  `reply_to` int(10) NOT NULL,
  `reply_count` int(10) NOT NULL, 
 
PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `voucher` (`voucher`),
  KEY `comment_from` (`comment_from`),
  KEY `comment_to` (`comment_to`),
  KEY `drivername` (`drivername`),
  KEY `type_state` (`type_state`),
  KEY `msg_type` (`msg_type`),
  KEY `status_confirm` (`status_confirm`),
  KEY `flight_delay_date` (`flight_delay_date`),
  KEY `latitude` (`latitude`),
  KEY `longitude` (`longitude`),
  KEY `state` (`state`,`state_name`,`count_guest`,`count_driver`,`count_service`,`count_op`,`status_confirm`,`id_comment`,`type_state`)
  
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;";
    //print json_encode($rows);
    $result = $conn2->query($sql2);
    if(!$result )
    {
      die('Could not create table: ' . mysql_error());
    }
    else{
        $sql3 = ("UPDATE web_order SET have_db = 1 WHERE invoice = '".$_POST[voucher]."'");

        $rows = array();
        
        $result2 = $conn->query($sql3);
        echo "Table created successfully\n";
    }

//mysql_close($conn2 );

} else {
    echo "have_db";
}
$conn->close();
 
?> 
 