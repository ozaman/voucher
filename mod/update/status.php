<?
//echo $_GET[lat];

$order_id=$_GET[order];
$folder_xml="../data/xml";

$online = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$online .="<ip>".$_SERVER['REMOTE_ADDR']."</ip>\n";
$online .="<lat>".$_GET[lat]."</lat>\n";
$online .="<lng>".$_GET[lng]."</lng>\n";
$online .="<time>".time()."</time>";
$online .= "\n</online>";
@unlink("$folder_xml/guest/customer/order/".$order_id.".xml");
@$fd = @fopen("$folder_xml/customer/online/order/".$order_id.".xml", "a+");
@fputs($fd, $online . "");
@fclose($fd);

?>

 
 
 
 
 
 

 
 
 
 
 