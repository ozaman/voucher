<?
//echo $_GET[lat];
 
/*
$order_id=$_GET[order];
$folder_xml="../data/xml";

@unlink("$folder_xml/customer/order/".$order_id.".xml");

$online = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$online .="<ip>".$_SERVER['REMOTE_ADDR']."</ip>\n";
$online .="<id>".$order_id."</id>\n";


$online .="<lat>".$_GET[lat]."</lat>\n";
$online .="<lng>".$_GET[lng]."</lng>\n";
$online .="<time>".time()."</time>";
$online .= "\n</online>";

@$fd = @fopen("$folder_xml/customer/online/order/".$order_id.".xml", "a+");
@chmod("$folder_xml/customer/order/".$order_id.".xml", 0777);
@fputs($fd, $online . "");
@fclose($fd);

 
*/

 


    $folder_xml="../data/xml";
	$order_id=$_GET[order];
	
	
@unlink("$folder_xml/customer/online/".$order_id.".xml");
	
	
	

$product = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$product .= "<status>1</status>\n";
$product .="<lat>".$_GET[lat]."</lat>\n";
$product .="<lng>".$_GET[lng]."</lng>\n";
$product .="<time>".time()."</time>";
$product .= "</online>";

@$fd = @fopen("$folder_xml/customer/online/".$order_id.".xml", "a+");
 
@fputs($fd, $product . "");
@fclose($fd);



 


?>

 
 
 
 
 
 

 
 
 
 
 