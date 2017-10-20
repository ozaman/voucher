 <? echo date("H:i:s");  ?>
 
 <?
 
///// to place
$driver_chat_load = new DOMDocument(); 
 @$driver_chat_load->load( '../data/xml/guest/online/order/'.$_GET[order].'.xml' ); 
//echo $xml_load_driver;
$driver_chat_xml = $driver_chat_load->getElementsByTagName( "online" ); 
foreach( $driver_chat_xml as $load) 
{ 

 $lat=$load->getElementsByTagName('lat')->item(0)->nodeValue;
  $lng=$load->getElementsByTagName('lng')->item(0)->nodeValue;
  $time=$load->getElementsByTagName('time')->item(0)->nodeValue;
 
	  
	  }
 ?>
 
  <? $online_time=time()-$time;  ?>
  
  <? if($online_time<5){ ?>
  
<script>
$( "#chat_icon_user_status" ).addClass("user-status-online");
$( "#chat_icon_user_status_text" ).html('&nbsp;<font color="#EE0707"><b>Online');

</script>
 <?  }
  ?> 
  
<? if($online_time>4){ ?>

<script>
$( "#chat_icon_user_status" ).removeClass("user-status-online");
$( "#chat_icon_user_status_text" ).html('&nbsp;<font color="#333333"><b>Offline');
</script>
 <?  }
  ?> 
  
  
  <?
 //echo $_GET[lat];
 
$driver_id=$_GET[driver];
$folder_xml="google/realtime/";

$online = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<markers>\n";
$online .="<marker status=\"busy\" lat=\"$_GET[lat]\" lng=\"$_GET[lng]\"/>\n";
$online .="<marker status=\"free\" lat=\"$lat\" lng=\"$lng\"/>\n";
 
$online .= "\n</markers>";
 @unlink("$folder_xml/datanew.xml");
 @$fd = @fopen("$folder_xml/datanew.xml", "a+");
 @fputs($fd, $online . "");
 @fclose($fd);
 
?>
  