 <?
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[datadriver] = $db->select_query("SELECT alert_new_work,alert_change_work,alert_lab_call,alert_lab_call_terminal,nickname FROM web_driver  WHERE username='".$_SESSION['admin_user_dv']."'    "); 
$arr[datadriver] = $db->fetch($res[datadriver]);   

?>
 
 
   <? if($arr[datadriver][alert_new_work]==1) {

// echo "<embed src=music/player.swf width=0 height=0  param=param name=wmode allowscriptaccess=always flashvars=file=music/new.mp3&type=mp3&stretch=none&autostart=true&displayclick=none&repeat=1></embed>";
   
   /*
   $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db(TB_driver, array(
                "alert_new_work" =>0
        ), " id=".$driver_id."");
        $db->closedb();
		
		*/
    
   ?>
   <div class="alert alert-danger alert-dismissible" style="color:#FF0000; font-size:20px; margin-bottom:-5px; padding:5px; margin-left:1px; margin-bottom:10px;"><li class="fa fa-warning"></li>&nbsp;&nbsp;มีงานใหม่เข้ามา</font></div>
   
 
   
   <script>
         if(document.getElementById('check_status_new_work').value=='0'){

var url="load_auto.php?name=load/update&file=control&sound_alert=newwork&terminal=<?=$arr[project][id];?>";
  $("#load_sound_new_work").load(url);
  $("#alert_auto_new_work").click();
  document.getElementById('check_status_new_work').value ='1';
	}
 
   </script>
   <? } ?>
 
      
    
   
   
   
 
     <? if($arr[datadriver][alert_lab_call]==1) {	 
///  echo "<embed src=music/player.swf width=0 height=0  param=param name=wmode allowscriptaccess=always flashvars=file=music/car-horn.mp3&type=mp3&stretch=none&autostart=true&displayclick=none&repeat=1></embed>";
    ?>
      <div class="alert alert-danger alert-dismissible" style="color:#FF0000; font-size:20px; margin-bottom:-5px; padding:5px; margin-left:1px; margin-bottom:10px;"><li class="fa fa-warning"></li>&nbsp;&nbsp;เตรียมพร้อมรับแขกที่จุดนัดพบ</font></div>
   <script>
 
   if(document.getElementById('check_status_auto_checkin').value=='0'){
 
var url="load_auto.php?name=load/update&file=control&sound_alert=checkin&terminal=<?=$arr[datadriver][alert_lab_call_terminal];?>";
   $("#load_sound_lab_checkin").load(url);
   
var url_lab="load_auto.php?name=load/update&file=terminal&terminal=<?=$arr[datadriver][alert_lab_call_terminal];?>";
$("#terminal_lab").load(url_lab); 
   
    $("#alert_auto_checkin").click();   
      document.getElementById('check_status_auto_checkin').value ='1';
	}
 
   </script>
   <? } ?>
   
   
   
      <? if($arr[datadriver][alert_lab_call]==2) {
	  
 
	  /*
   $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db(TB_driver, array(
                "alert_lab_call" =>0
        ), " id=".$driver_id."");
        $db->closedb();
		
		*/
    
   ?>
      <div class="alert alert-danger alert-dismissible" style="color:#FF0000; font-size:20px; margin-bottom:-5px; padding:5px; margin-left:1px; margin-bottom:10px;"><li class="fa fa-warning"></li>&nbsp;&nbsp;แขกมาถึงจุดนัดพบแล้ว</font></div>
   <script>
      if(document.getElementById('check_status_auto_checkguest').value=='0'){


var url="load_auto.php?name=load/update&file=control&sound_alert=checkguest&terminal=<?=$arr[datadriver][alert_lab_call_terminal];?>";
  $("#load_sound_lab_checkguest").load(url);
  var url_lab="load_auto.php?name=load/update&file=terminal&terminal=<?=$arr[datadriver][alert_lab_call_terminal];?>";
$("#terminal_guest").load(url_lab); 

  $("#alert_auto_checkguest").click();
      document.getElementById('check_status_auto_checkguest').value ='1';
	}
   
      setTimeout(function () {


// $("#auto_lab_call_check").click();
}, 5000); //w
   </script>
   <? } ?>


   
   
   
 