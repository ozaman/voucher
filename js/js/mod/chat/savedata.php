<?
////// 
$db->connectdb(DB_NAME_CHAT, DB_USERNAME, DB_PASSWORD);  
		$db->add_db('all_message',array( 		 
		 
		  "flight_delay"=>"$_POST[fdelay]",		 
		  "flight_delay_date"=>"".TIMESTAMP."",		  
		  "drivername" => $arr[driver][drivername] ,
		   "voucher" => "$_POST[voucher]",
		   "state" => 'chat_guest_to_driver',
          "orderid" => "$_POST[car_number]",
		   "comment" => "$_POST[message]",
		    "comment_from" => "guest",		   
		     "time_h" => $time_h,
			 "time_m" => $time_m
 
		));

?>