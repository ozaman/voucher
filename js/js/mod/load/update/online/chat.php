  <script>
 ///alert('มีข้อความใหม่');
  
  



  </script>
<?
///// to place
$driver_chat_load = new DOMDocument(); 
 @$driver_chat_load->load( '../data/xml/driver/chat/'.$_GET[driver].'.xml' ); 
//echo $xml_load_driver;
$driver_chat_xml = $driver_chat_load->getElementsByTagName( "newmsg" ); 
foreach( $driver_chat_xml as $load) 
{ 
 $newchat=$load->getElementsByTagName('status')->item(0)->nodeValue;
  $newchat_message=$load->getElementsByTagName('message')->item(0)->nodeValue;
   $newchat_time=$load->getElementsByTagName('time')->item(0)->nodeValue;
 } 
 
  if($newchat==1){ ?>
  
  <script>

 $("#box_popup_alert_message").show(); 
 
 setTimeout(function () {
  $("#box_popup_alert_message").hide(); 

}, 10000);  


 setTimeout(function () {
 var url_chat<?=time()?> = "go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
  $('#load-direct-chat').load(url_chat<?=time()?>); 
}, 5000);  
 
 

 
  
  
  
    $("#box_alert_new_msg").show(); 
	  $("#box_alert_new_msg_comment").html('<?=$newchat_message?>'); 
	    $("#box_alert_new_msg_time").html('<?=$newchat_time?>'); 
		 $("#box_alert_new_msg_icon").html('<i class="fa fa-commenting  "  style=" font-size:36px; color:#FFFFFF "></i>'); 
		
		
/// $("#topmenu_icon_alert_new_msg").show(); 
		
		
 $("#play_alert_msg_new").click(); 
 ////alert('มีข้อความใหม่');
 
   </script>
   
  <? 
  
  $folder_xml="../data/xml";

$product = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<newmsg>\n";
$product .= "<status>0</status>\n";
$product .= "</newmsg>";

@unlink("$folder_xml/driver/chat/".$_GET[driver].".xml");
@$fd = @fopen("$folder_xml/driver/chat/".$_GET[driver].".xml", "a+");
@fputs($fd, $product . "");
@fclose($fd);

  }
  
  
  
?>


