<?
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[datadriver] = $db->select_query("SELECT alert_new_work,alert_change_work,alert_lab_call,nickname FROM web_driver  WHERE username='".$_SESSION['admin_user_dv']."'    "); 
$arr[datadriver] = $db->fetch($res[datadriver]);   
 
?>
 


<script>
 $("#play_new").click();
setTimeout(function () {
 $("#play_checkin").click();
}, 3000);  
   </script>



	 
